<template>
  <b-container>
    <v-layout>
      <v-flex>
        <!-- SUBTITULO, FECHA Y BOTONES DE CALENDARIO -->
        <h1 class="pt-2">Gestion de Citas</h1>
        <div v-if="calendarType == 'month'">
          <v-layout wrap>
            <v-flex sm4 xs12 class="text-sm-left text-xs-center">
              <v-btn fab outline small color="primary" @click="interactuar(false)">
                <v-icon dark>keyboard_arrow_left</v-icon>
              </v-btn>
            </v-flex>
            <v-flex sm4 xs12 class="text-xs-center pt-3">
              <h3>{{month}} {{year}}</h3>
            </v-flex>
            <v-flex sm4 xs12 class="text-sm-right text-xs-center">
              <v-btn fab outline small color="primary" @click="interactuar(true)">
                <v-icon dark>keyboard_arrow_right</v-icon>
              </v-btn>
            </v-flex>
          </v-layout>
        </div>

        <v-btn outline v-if="calendarType == 'day'" v-on:click="calendarType = 'month'">
          <v-icon class="mr-2">fa-arrow-circle-left</v-icon>Regresar a Vista Mensual
        </v-btn>
        <v-sheet height="420">
          <v-calendar
            ref="calendar"
            v-model="startDate"
            :type="calendarType"
            locale="es"
            :now="today"
            :value="today"
            color="primary"
            @click:day="dayClick"
            @click:time="intervalClick"
          >
            <!-- template para renderear vista mensual -->
            <template v-slot:day="{ date }">
              <template v-for="event in eventsMap[date]">
                <div
                  :key="event.id"
                  v-ripple
                  v-bind:class="`event-${event.appointmentType}`"
                  v-html="event.title"
                ></div>
              </template>
            </template>

            <!-- template para renderear vista diaria -->
            <!-- the events at the top (all-day) -->
            <template v-slot:dayHeader="{ date }">
              <template v-for="event in eventsMap[date]">
                <!-- all day events don't have time -->
                <div v-if="!event.time" :key="event.id" class="my-event" v-html="event.title"></div>
              </template>
            </template>

            <template v-slot:interval="{ hour }">
              <div
                v-if="hour < minAppointmentHour || hour > maxAppointmentHour"
                class="text-center daily-invalid-hour"
              >No Disponible</div>
            </template>

            <!-- the events at the bottom (timed) -->
            <template v-slot:dayBody="{ date, timeToY, minutesToPixels }">
              <template v-for="event in eventsMap[date]">
                <!-- timed events -->
                <div
                  v-on:click="appointmentClick(event)"
                  v-if="event.time"
                  :key="event.id"
                  :style="{ top: timeToY(event.time) + 'px', height: minutesToPixels(event.duration) + 'px' }"
                  v-bind:class="`event-${event.appointmentType} with-time`"
                  v-html="event.title"
                ></div>
              </template>
            </template>
          </v-calendar>
        </v-sheet>
      </v-flex>

      <!-- Dialogo para creacion de citas -->
      <v-dialog v-model="dialogOpen" persistent max-width="600px">
        <template v-slot:activator="{ on }"></template>
        <v-card>
          <v-card-title>
            <span class="headline">{{ appointmentDialogTitle }}</span>
          </v-card-title>
          <v-card-text>
            <v-container grid-list-md>
              <v-layout wrap>
                <v-flex xs12>
                  <v-autocomplete
                    v-model="selectedPatient"
                    :items="patients"
                    label="Paciente"
                    required
                    item-text="name"
                    item-value="id"
                  ></v-autocomplete>
                </v-flex>
                <v-flex xs12>
                  <!--v-bind:class="{ disabled: true }"-->
                  <v-select
                    :items="dummyDoctors"
                    label="Doctor"
                    v-model="selectedDoctor"
                    required
                    :rules="textboxRules"
                  ></v-select>
                </v-flex>
                <v-flex xs12>
                  <v-autocomplete
                    v-model="selectedAppointmentType"
                    :items="appointmentTypes"
                    label="Tipo de Cita"
                    required
                    item-text="tipoCita"
                    item-value="id"
                  ></v-autocomplete>
                </v-flex>
                <v-flex xs12 sm12>
                  <v-menu
                    ref="menu"
                    v-model="dateMenuOpen"
                    :close-on-content-click="false"
                    :nudge-right="40"
                    :return-value.sync="selectedDate"
                    lazy
                    transition="scale-transition"
                    offset-y
                    full-width
                    min-width="290px"
                  >
                    <template v-slot:activator="{ on }">
                      <v-text-field
                        disabled
                        v-model="selectedDate"
                        label="Escoger Fecha de Cita"
                        prepend-icon="event"
                        readonly
                        required
                        v-on="on"
                      ></v-text-field>
                    </template>
                    <v-date-picker v-model="selectedDate" no-title scrollable locale="es">
                      <v-spacer></v-spacer>
                      <v-btn flat color="primary" @click="dateMenuOpen = false">Cancelar</v-btn>
                      <v-btn flat color="primary" @click="saveAppointmentDate">Aceptar</v-btn>
                    </v-date-picker>
                  </v-menu>
                </v-flex>
                <v-flex xs12 sm6>
                  <v-menu
                    ref="menu"
                    v-model="timeMenuOpen"
                    :close-on-content-click="false"
                    :nudge-right="40"
                    :return-value.sync="selectedTime"
                    lazy
                    transition="scale-transition"
                    offset-y
                    full-width
                    min-width="290px"
                  >
                    <template v-slot:activator="{ on }">
                      <v-text-field
                        v-model="selectedTime"
                        label="Escoger Hora de Cita"
                        prepend-icon="access_time"
                        readonly
                        required
                        v-on="on"
                      ></v-text-field>
                    </template>
                    <v-time-picker v-model="selectedTime" :landscape="true" locale="es">
                      <v-spacer></v-spacer>
                      <v-btn flat color="primary" @click="timeMenuOpen = false">Cancelar</v-btn>
                      <v-btn flat color="primary" @click="saveAppointmentHour">Aceptar</v-btn>
                    </v-time-picker>
                  </v-menu>
                </v-flex>
                <v-flex xs12 sm6>
                  <v-text-field
                    label="Duración de Cita (en minutos)"
                    v-model="selectedDuration"
                    :rules="duracionRules"
                    required
                  ></v-text-field>
                </v-flex>
              </v-layout>
            </v-container>
            <small>*Campos Requeridos</small>
          </v-card-text>
          <v-card-actions>
            <v-btn
              color="red"
              flat
              v-if="updatingAppointment"
              @click="confirmDeleteAppointment"
            >Eliminar Cita</v-btn>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" flat @click="closeAppointmentDialog">Cancelar</v-btn>
            <v-btn
              color="blue darken-1"
              flat
              @click="updatingAppointment ? updateAppointment() : createAppointment()"
            >{{ updatingAppointment ? 'Actualizar Cita' : 'Crear Cita' }}</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>

      <!-- dialogo para mostrar mensajes a usuario -->
      <div class="text-xs-center">
        <v-dialog v-model="infoDialog" width="500">
          <v-card>
            <v-card-title
              class="headline lighten-2 info-dialog-title-background"
              primary-title
            >Información</v-card-title>
            <v-card-text>{{ this.infoMessage }}</v-card-text>
            <v-divider></v-divider>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="primary"
                flat
                @click="infoDialog = false"
                v-if="!deletingAppointment"
              >Aceptar</v-btn>
              <v-btn
                color="primary"
                flat
                v-if="deletingAppointment"
                @click="deleteAppointment"
              >Eliminar</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </div>
    </v-layout>
  </b-container>
</template>

<style scoped lang="scss">
%my-event {
  margin-top: 2px;
  color: white;
  width: 100%;
}

/*.disabled {
      pointer-events:none;
      color: #bfcbd9;
      cursor: not-allowed;
      background-image: none;
      //background-color: #eef1f6;
      //border-color: #d1dbe5;   
}*/

.event-1 {
  @extend %my-event;
  background-color: rgb(211, 88, 35);
}
.event-2 {
  @extend %my-event;
  background-color: rgb(35, 88, 200);
}
.daily-invalid-hour {
  background-color: rgb(255, 163, 163);
  width: 100%;
}
</style>


<script>
import { calendarDates } from "../mixins/calendarDates";
export default {
  mixins: [calendarDates],
  data: () => ({
    todayDate: "",
    year: "",
    month: "",
    today: "",
    calendarType: "month",
    startDate: "",
    dialogOpen: false,
    dateMenuOpen: false,
    timeMenuOpen: false,
    selectedDate: "",
    selectedTime: "",
    selectedDuration: "",
    newAppointment: "",
    typeOptions: [
      { text: "Diario", value: "day" },
      { text: "Semanal", value: "week" },
      { text: "Mensual", value: "month" }
    ],
    events: [],
    doctors: {
      1: "Randall Lou"
    },
    patients: [],
    textboxRules: [v => !!v || "Seleccione una persona"],
    duracionRules: [
      v => !!v || "Escriba una duración de cita en minutos.",
      v => (v && v.length < 5) || "Verifique la duracion en citas.",
      v => /^[0-9]*$/.test(v) || "Ingrese una duración de cita en números."
    ],
    dummyDoctors: ["Randall Lou", "Cristina Zelaya", "Celeste Espell"],
    selectedPatient: "",
    selectedDoctor: "",
    infoDialog: false,
    infoMessage: "",
    minAppointmentHour: 6,
    maxAppointmentHour: 20,
    updatingAppointment: false,
    appointmentDialogTitle: "Crear Nueva Cita",
    selectedAppointment: "",
    deletingAppointment: "",
    selectedAppointmentType: "",
    appointmentTypes: []
  }),
  mounted() {
    this.todayDate = new Date();
    this.today = this.todayDate.toISOString().substring(0, 10);
    this.month = this.getMes(this.todayDate.getMonth());
    this.year = this.todayDate.getFullYear();
    this.obtenerPacientes();
    this.getAppointments();
    this.obtenerTipoCitas();
  },
  computed: {
    // convert the list of events into a map of lists keyed by date
    eventsMap() {
      const map = {};
      this.events.forEach(e => (map[e.date] = map[e.date] || []).push(e));
      return map;
    }
  },
  methods: {
    showAppointmentDialog() {
      this.appointmentDialogTitle = "Crear Nueva Cita";
      this.dialogOpen = true;
    },
    showAppointmentDetails() {
      alert("details");
    },
    getAppointments() {
      this.$http
        .get("http://localhost:8000/citas")
        .then(response => {
          const e = response.data.data.map(i => {
            return {
              id: i.id,
              title: `Doctor: ${this.doctors[i.idUsuario]}`,
              details: `Paciente: ${i.idPaciente}`,
              date: i.fecha,
              time: i.hora,
              duration: i.duracionCita,
              appointmentType: i.tipoCitaID
            };
          });
          e.forEach(i => {
            this.events.push(i);
          });
        })
        .catch(err => {
          console.log(err);
        });
    },
    /**
     * Valida que la nueva cita que se desea ingresar nose traslape con
     * niguna de las citas ya existentes.
     */
    validateAppointmentHour(data) {
      let d0 = new Date(`${data.fecha} ${data.hora}`);
      console.log(`d0 ${d0.toString()}`);
      for (let i = 0; i < this.events.length; i++) {
        let d1 = new Date(`${this.events[i].date} ${this.events[i].time}`);
        console.log(`vrs d1 ${d1.toString()}`);
        if (d0.valueOf() < d1.valueOf()) {
          if (d0.valueOf() + data.duracionCita * 60 * 1000 > d1.valueOf()) {
            return false;
          }
        } else {
          if (
            d1.valueOf() + this.events[i].duration * 60 * 1000 >
            d0.valueOf()
          ) {
            return false;
          }
        }
      }
      return true;
    },
    createAppointment() {
      // validacion de hora de cita
      const time = Number(this.selectedTime.substring(0, 2));
      if (time < this.minAppointmentHour || time > this.maxAppointmentHour) {
        this.infoMessage = "Por favor escoge una hora disponible.";
        this.infoDialog = true;
        return;
      }
      const data = {
        idUsuario: this.$store.id,
        idPaciente: this.selectedPatient,
        fecha: this.selectedDate,
        hora: this.selectedTime,
        duracionCita: this.selectedDuration,
        estado: 1,
        tipoCitaID: this.selectedAppointmentType
      };
      if (!this.validateAppointmentHour(data)) {
        this.infoMessage =
          "La cita se traslapa con otra cita, por favor revisa los datos.";
        this.infoDialog = true;
        return;
      }
      // cerrar dialogo de creacion de cita
      this.dialogOpen = false;
      this.$http
        .post("http://localhost:8000/citas", data)
        .then(response => {
          if (response.data.success) {
            // empujar nuevo evento a array local de eventos
            this.events.push({
              id: response.data.data.id,
              title: `Doctor: ${this.selectedDoctor}`,
              details: `Paciente: ${this.selectedPatient}`,
              date: this.selectedDate,
              time: this.selectedTime,
              duration: this.selectedDuration,
              doctor: this.selectedDoctor,
              patient: this.selectedPatient
            });
          }
          // resetear campos de dialogo
          this.selectedDoctor = "";
          this.selectedPatient = "";
          this.selectedDuration = "";
        })
        .catch(error => {
          this.infoMessage = "Ocurrió un error al crear cita.";
          this.infoDialog = true;
          this.selectedDoctor = "";
          this.selectedPatient = "";
          this.selectedDuration = "";
        });
    },
    updateAppointment() {
      this.updatingAppointment = false;
      this.dialogOpen = false;
      const data = {
        idUsuario: this.$store.id,
        idPaciente: this.selectedPatient,
        fecha: this.selectedDate,
        hora: this.selectedTime,
        duracionCita: this.selectedDuration,
        estado: 1,
        tipoCitaID: this.selectedAppointmentType
      };
      this.$http
        .put(`http://localhost:8000/citas/${this.selectedAppointment.id}`, data)
        .then(response => {
          if (response.data.success) {
            this.infoMessage = "Cita actualizada";
            this.infoDialog = true;
            const a = response.data.data;
            this.selectedAppointment.time = a.hora;
            this.selectedAppointment.date = a.fecha;
            this.selectedAppointment.duration = a.duracionCita;
            this.selectedAppointment.doctor = a.idUsuario;
            this.selectedAppointment.patient = a.idPaciente;
          }
        })
        .catch(err => {
          console.log(err);
        });
    },
    deleteAppointment() {
      this.updatingAppointment = false;
      this.infoDialog = false;
      this.$http
        .delete(`http://localhost:8000/citas/${this.selectedAppointment.id}`)
        .then(response => {
          if (response.data.success) {
            this.events = this.events.filter(i => {
              return i.id != this.selectedAppointment.id;
            });
          }
        })
        .catch(err => {
          console.log(err);
        });
    },
    dayClick(event) {
      if (this.calendarType === "month") {
        this.selectedDate = event.date;
        this.startDate = event.date;
        this.calendarType = "day";
      }
    },
    intervalClick(event) {
      if (this.updatingAppointment) return;
      this.appointmentDialogTitle = "Crear Nueva Cita";
      const time = Number(event.time.substring(0, 2));
      // no permitir click en horas invalidas
      if (time < this.minAppointmentHour || time > this.maxAppointmentHour) {
        return;
      }
      this.selectedTime = event.time;
      this.dialogOpen = true;
    },
    obtenerPacientes() {
      this.$http
        .get("http://localhost:8000/PacienteController/findAll")
        .then(response => {
          this.patients = response.data.Pacientes.map(i => {
            return {
              id: i.id,
              name: `${i.Apellido}, ${i.Nombre}, ${i.CUI}`
            };
          });
        });
    },
    obtenerTipoCitas() {
      this.$http
        .get("http://localhost:8000/tipos-citas")
        .then(({ data }) => {
          if (data.success) {
            this.appointmentTypes = data.data;
          }
        })
        .catch(error => {
          console.log(error);
        });
    },
    interactuar(type) {
      var today = new Date(this.today);
      if (!type) {
        var SemAnt = new Date(
          today.getFullYear(),
          today.getMonth() - 1,
          today.getDate()
        );
      } else {
        var SemAnt = new Date(
          today.getFullYear(),
          today.getMonth() + 1,
          today.getDate()
        );
      }
      var diaSemAnt = SemAnt.getDate();
      var yearSemAnt = SemAnt.getFullYear();
      var mesSemAnt = SemAnt.getMonth() + 1;
      var fechaSemAnt = yearSemAnt + "-" + mesSemAnt + "-" + diaSemAnt;
      this.startDate = fechaSemAnt;
      this.today = fechaSemAnt;
      this.month = this.getMes(SemAnt.getMonth());
      this.year = SemAnt.getFullYear();
    },
    saveAppointmentHour() {
      this.timeMenuOpen = false;
      this.$refs.menu.save(this.selectedTime);
    },
    saveAppointmentDate() {
      this.dateMenuOpen = false;
      this.$refs.menu.save(this.selectedDate);
    },
    appointmentClick(appointment) {
      this.updatingAppointment = true;
      this.appointmentDialogTitle = "Actualizando Cita";
      // load selected appointment details
      this.selectedAppointment = appointment;
      this.selectedDate = appointment.date;
      this.selectedTime = appointment.time;
      this.selectedDoctor = appointment.doctor;
      this.selectedPatient = appointment.patient;
      this.selectedDuration = appointment.duration;
      this.dialogOpen = true;
    },
    closeAppointmentDialog() {
      this.dialogOpen = false;
      this.updatingAppointment = false;
      this.selectedDate = "";
      this.selectedTime = "";
      this.selectedDoctor = "";
      this.selectedPatient = "";
      this.selectedDuration = "";
    },
    confirmDeleteAppointment() {
      this.dialogOpen = false;
      this.deletingAppointment = true;
      this.infoMessage = "¿Estás seguro?";
      this.infoDialog = true;
    }
  }
};
</script>
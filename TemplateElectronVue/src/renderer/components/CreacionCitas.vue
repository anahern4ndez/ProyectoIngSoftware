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
                <div :key="event.title" v-ripple class="my-event" v-html="event.title"></div>
              </template>
            </template>

            <!-- template para renderear vista diaria -->
            <!-- the events at the top (all-day) -->
            <template v-slot:dayHeader="{ date }">
              <template v-for="event in eventsMap[date]">
                <!-- all day events don't have time -->
                <div v-if="!event.time" :key="event.title" class="my-event" v-html="event.title"></div>
              </template>
            </template>
            <!-- the events at the bottom (timed) -->
            <template v-slot:dayBody="{ date, timeToY, minutesToPixels }">
              <template v-for="event in eventsMap[date]">
                <!-- timed events -->
                <div
                  v-if="event.time"
                  :key="event.title"
                  :style="{ top: timeToY(event.time) + 'px', height: minutesToPixels(event.duration) + 'px' }"
                  class="my-event with-time"
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
            <span class="headline">Crear Nueva Cita</span>
          </v-card-title>
          <v-card-text>
            <v-container grid-list-md>
              <v-layout wrap>
                <v-flex xs12>
                  <v-autocomplete :items="dummyPatients" label="Paciente" required></v-autocomplete>
                </v-flex>
                <v-flex xs12>
                  <v-select
                    :items="dummyDoctors"
                    label="Doctor"
                    v-model="selectedDoctor"
                    required
                    :rules="textboxRules"
                  ></v-select>
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
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" flat @click="dialogOpen = false">Cancelar</v-btn>
            <v-btn color="blue darken-1" flat @click="createAppointment">Crear Cita</v-btn>
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
              <v-btn color="primary" flat @click="infoDialog = false">Aceptar</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </div>
    </v-layout>
  </b-container>
</template>

<style scoped>
.my-event {
  margin-top: 2px;
  padding: 1px;
  background-color: rgb(211, 88, 35);
  color: white;
  border-radius: 5%;
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
    events: [
      {
        title: "Doctor: Randall Lou",
        details: "Paciente: Rodrigo Zea",
        date: "2019-05-10",
        time: "09:00",
        duration: 90
      },
      {
        title: "Doctor: Celeste Azul",
        details: "Paciente: Esteban Cabrera",
        date: "2019-05-10",
        time: "11:00",
        duration: 45
      }
    ],
    dummyPatients: [
      "Rodrigo Zea",
      "Ana Lucía Hernandez",
      "Francisco Molina",
      "Sebastian Arriola",
      "Esteban Cabrera"
    ],
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
    infoMessage: ""
  }),
  mounted() {
    //this.start = this.today;
    this.todayDate = new Date();
    this.today = this.todayDate.toISOString().substring(0, 10);
    //this.selectedDate = this.today;
    this.month = this.getMes(this.todayDate.getMonth());
    this.year = this.todayDate.getFullYear();
    this.obtenerPacientes();
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
      this.dialogOpen = true;
    },
    showAppointmentDetails() {
      alert("details");
    },
    createAppointment() {
      this.dialogOpen = false;

      const data = {
        idUsuario: 1,
        idPaciente: 1,
        fecha: this.selectedDate,
        hora: this.selectedTime,
        duracionCita: this.selectedDuration,
        estado: 1,
        tipoCitaID: 1
      };

      this.$http
        .post("http://localhost:8000/citas", data)
        .then(response => {
          // empujar nuevo evento a array local de eventos
          this.events.push({
            title: `Doctor: ${this.selectedDoctor}`,
            details: `Paciente: ${this.selectedPatient}`,
            date: this.selectedDate,
            time: this.selectedTime,
            duration: this.selectedDuration
          });

          // resetear campos de dialogo
          this.selectedDoctor = "";
          this.selectedPatient = "";
          this.selectedDuration = "";
        })
        .catch(error => {
          this.infoMessage = "";
          Object.keys(error.response.data).forEach(key => {
            if (key != "success") {
              this.infoMessage += error.response.data[key];
            }
          });
          this.infoDialog = true;
          this.selectedDoctor = "";
          this.selectedPatient = "";
          this.selectedDuration = "";
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
      this.selectedTime = event.time;
      this.dialogOpen = true;
    },
    obtenerPacientes() {
      this.$http
        .get("http://localhost:8000/PacienteController/findAll")
        .then(response => {
          this.dummyPatients = response.data.Pacientes.map(i => i.Nombre);
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
      console.log(this.selectedDate);
    }
  }
};
</script>
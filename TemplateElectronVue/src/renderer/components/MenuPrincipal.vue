<template lang="">
	<div onload="obtenerNombre">
			<b-container class="containerMenu">

				<!-- FILA 1, FOTOS Y TÍTULO-->
				<b-row align-h="around" align-v="center">

					<b-col order="1" cols="1">
						<img :src="src" alt="" width="120" height="120"> <!-- v-if="$can('create', 'Post')"-->
					</b-col>

					<b-col order="1" cols="6">
						<h2>BIENVENIDO</h2>
						<h4 id="nombre" type="text" v-model="name">{{name}}</h4>
					</b-col>

					<b-col order="1" cols="3" class="pb-4">
						<img src="../assets/mariposaFundanier.png" alt="" width="240" height="240">
					</b-col>

				</b-row>

				<!-- FILA 2, SET DE BOTONES-->
				<b-row align-h="center">
						<template>
						<div>
							<v-btn outline color="#303841" v-on:click="gestionarPaciente" v-if="$can('ver pacientes')">Gestionar Paciente</v-btn>
							<v-btn outline color="#303841" v-on:click="InformesEstaditicos" v-if="$can('ver estadisticas')">Informes Estadísticos</v-btn>
						</div>
					</template>
				</b-row>

        <hr>

        <!-- FILA 3: SUBTITULO, FECHA Y BOTONES DE CALENDARIO -->
        <h1 class="pt-2">Calendario de Citas</h1>
        <v-layout wrap>
          <v-flex sm4 xs12 class="text-sm-left text-xs-center">
            <v-btn fab outline small color="primary" @click="interactuar(false)">
              <v-icon dark>keyboard_arrow_left</v-icon>
            </v-btn>
          </v-flex>
          <v-flex sm4 xs12 class="text-xs-center pt-3">
            <h3>{{mes}} {{year}}</h3>
          </v-flex>
          <v-flex sm4 xs12 class="text-sm-right text-xs-center">
            <v-btn fab outline small color="primary" @click="interactuar(true)">
              <v-icon dark>keyboard_arrow_right</v-icon>
            </v-btn>
          </v-flex>
        </v-layout>

        <br>

<template>
  <v-layout>
    <v-flex>
      <v-sheet height="420">
        <!-- now is normally calculated by itself, but to keep the calendar in this date range to view events -->
        <v-calendar ref="calendar" :value="today" color="primary" type="week">
          <!-- the events at the top (all-day) -->
          <template v-slot:dayHeader="{ date }">
            <template v-for="event in eventsMap[date]">
              <!-- all day events don't have time -->
              <div
                v-if="!event.time"
                :key="event.title"
                class="my-event"
                :background-color="red"
                @click="open(event)"
                v-html="event.title"
              ></div>
            </template>
          </template>
          <!-- the events at the bottom (timed) -->
          <template v-slot:dayBody="{ date, timeToY, minutesToPixels }">
            <template v-for="event in eventsMap[date]">
              <!-- timed events -->
              <div
                v-if="event.time"
                :key="event.title"
                class="my-event with-time"
                :style="{'backgroundColor':colors[event.idUsuario-1],top: timeToY(event.time) + 'px', height: minutesToPixels(event.duration) + 'px' }"
                :color="red"
                @click="darConsulta(event.idPaciente,event.cui)"
                v-html="event.title"
              ></div>
            </template>
          </template>
        </v-calendar>
      </v-sheet>
    </v-flex>
  </v-layout>
</template>

    <br>
    <b-row>
      <b-col order="2" sm="10" align-v="left">
        <v-btn outline color="#303841" v-on:click="hacerCita" v-if="$can('agendar citas')">Hacer cita</v-btn>
        <v-btn outline color="#303841" v-on:click="gestionarUsuario" v-if="$can('crear usuarios')">Gestionar Usuarios</v-btn>
      </b-col>

      <b-col order="12" sm="2" align-v="left">
          <div>
              <v-switch v-if="$can('vista general')"
                  v-model="switch1"
                  :label="`Vista General`"
                  color="#ffc107"
              ></v-switch>
            </div> 
      </b-col>

      


      </b-row>
			</b-container>
		<br>
	</div>
</template>


<script>
// import { serverBus } from '../main';
import { store } from "../main";
var fecha = new Date();

export default {
  name: "menu",
  mes: "",
  year: fecha.getFullYear(),
  data: () => ({
    today: fecha.toString(),
    start: "2019-06-25",
    events: [],
    id: "",
    name: "",
    switch1: false,
    colors: ["#FF9D14", "#BF760F", "#804F0A", "#402705", "#E68E12"],
    src: `..\\..\\..\\..\\temp\\usrs\\${store.id}\\prfl.jpg`,
  }),
  watch: {
    switch1(newValue) {
      //called whenever switch1 changes
      this.vistaGeneral(newValue);
    },
  },

  computed: {
    // convert the list of events into a map of lists keyed by date
    eventsMap() {
      const map = {};
      this.events.forEach((e) => (map[e.date] = map[e.date] || []).push(e));
      return map;
    },
  },

  mounted() {
    this.$refs.calendar.scrollToTime("07:50");
    store.id = store.state.user.id;
    this.id = store.id;
    console.log(this.src);
  },

  methods: {
    interactuar(type) {
      var today = new Date(this.today);

      if (!type) {
        var SemAnt = new Date(
          today.getFullYear(),
          today.getMonth(),
          today.getDate() - 7
        );
      } else {
        var SemAnt = new Date(
          today.getFullYear(),
          today.getMonth(),
          today.getDate() + 7
        );
      }

      var diaSemAnt = SemAnt.getDate();
      var yearSemAnt = SemAnt.getFullYear();
      var mesSemAnt = SemAnt.getMonth() + 1;

      var fechaSemAnt = yearSemAnt + "-" + mesSemAnt + "-" + diaSemAnt;
      this.$refs.calendar.start = fechaSemAnt;
      this.today = fechaSemAnt;
      this.mes = this.getMes(SemAnt.getMonth());
      this.year = SemAnt.getFullYear();
    },

    updateCalendar(para) {
      if (para == "+") {
        console.log("mas");
        console.log(fecha.getDate());
        fecha.setDate(fecha.getDate() + 5);
        console.log(fecha.getDate());
      } else {
        console.log("menos");
      }

      console.log(fecha.toString);
    },
    open(event) {
      alert(event.title);
    },
    gestionarPaciente() {
      this.$router.push("/gestionPacientes");
    },
    gestionarUsuario() {
      this.$router.push("/gestionUsuarios");
    },
    InformesEstaditicos() {
      this.$router.push("/EstadisticaGeneral");
    },
    darConsulta(id, cui) {
      if (!this.switch1) {
        store.idPaciente = id;
        this.$router.push(
          "/gestionarPaciente/" + id.toString() + "/" + cui.toString()
        );
      }
    },
    datosGenerales() {
      this.$router.push("/Datos");
    },
    hacerCita() {
      this.$router.push("/Citas");
    },
    imprimirId() {
      console.log("Doctor: " + this.id);
    },

    obtenerNombre() {
      this.$http
        .get(
          `http://${process.env.SERVER_IP}:8000/get_nombre?id=${store.state.user.id}`
        )
        .then((response) => {
          this.name = response.data.user.name;
        });
    },

    get_citas(parametro) {
      if (!parametro == 0) parametro = store.id;

      this.$http
        .get(`http://${process.env.SERVER_IP}:8000/get_citas?id=${parametro}`)
        .then((response) => {
          var array = response.data.citas;
          var nombres = response.data.nombres;
          var cuis = response.data.cuis;

          for (let i = 0; i < array.length; i++) {
            const cita = array[i];
            const nombre = nombres[i];
            const Cui = cuis[i];

            const citaN = {
              title: nombre,
              cui: Cui,
              date: cita["fecha"],
              time: cita["hora"],
              idPaciente: cita["idPaciente"],
              idUsuario: cita["idUsuario"],
              duration: 35,
            };

            this.events.push(citaN);
          }
        });
    },

    vistaGeneral(valor) {
      this.events = [];

      if (!valor) this.get_citas(1);
      else this.get_citas(0);
    },

    getMes(mes) {
      if (mes == 0) return "Enero";
      else if (mes == 1) return "Febrero";
      else if (mes == 2) return "Marzo";
      else if (mes == 3) return "Abril";
      else if (mes == 4) return "Mayo";
      else if (mes == 5) return "Junio";
      else if (mes == 6) return "Julio";
      else if (mes == 7) return "Agosto";
      else if (mes == 8) return "Septiembre";
      else if (mes == 9) return "Octubre";
      else if (mes == 10) return "Noviembre";
      else if (mes == 11) return "Diciembre";
      else return "Error en mes";
    },
  },

  beforeMount() {
    this.obtenerNombre();
    this.get_citas(1);
    this.mes = this.getMes(fecha.getMonth());
    this.year = fecha.getFullYear();
  },
};
</script>


<style>
.containerMenu {
  padding: 0px;
}

.my-event {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  border-radius: 2px;
  background-color: #ff9d14;
  color: #000000;
  border: 1px solid #303841;
  font-size: 12px;
  padding: 3px;
  cursor: pointer;
  margin-bottom: 1px;
  left: 4px;
  margin-right: 8px;
  position: relative;
}

.with-time {
  position: absolute;
  right: 4px;
  margin-right: 0px;
}
</style>

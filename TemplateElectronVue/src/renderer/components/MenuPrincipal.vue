<template lang="">
	<div onload="obtenerNombre">
			<b-container class="containerMenu">

				<!-- FILA 1, FOTOS Y TÍTULO-->
				<b-row align-h="around" align-v="center">

					<b-col order="1" cols="1">
						<img src="src\temp\prfl.jpeg" alt="" width="120" height="120">
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
				<b-row align-h="around" align-v="center" class="pb-2">
					<b-col order="1" cols="9">
						<template>
						<div>
							<v-btn outline color="#303841" v-on:click="gestionarPaciente">Gestionar Paciente</v-btn>
							<v-btn outline color="#303841" v-on:click="darConsulta">Generar Reporte</v-btn>
							<v-btn outline color="#303841">Informes Estadísticos</v-btn>
							<v-btn outline color="#303841"v-on:click="datosGenerales">Datos Generales</v-btn>
						</div>
					</template>
					</b-col>
				</b-row>

				<hr>
				<h1 class="pt-2">Calendario de Citas</h1>
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
                :style="{ top: timeToY(event.time) + 'px', height: minutesToPixels(event.duration) + 'px' }"
                class="my-event with-time"
                color="orange"
                @click="darConsulta()"
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
					<b-col order="2" sm-8 align-v="left">
						<v-btn outline color="#303841" v-on:click="hacerCita">Hacer cita</v-btn>
						<v-btn outline color="#303841" v-on:click="gestionarUsuario">Gestionar Usuarios</v-btn>
					</b-col>

				</b-row>
			</b-container>
		<br>
	</div>
</template>

<script>
// import { serverBus } from '../main';
import { store } from '../main';

export default {
  name: "menu",

  data: () => ({
    today: Date.now().toString(),
    events: [
      {
        title: "Javier Xela",
        date: "2019-05-20",
        time: "09:00",
        duration: 45
      },
      {
        title: "Chonguengue",
        date: "2019-05-23",
        time: "20:30",
        duration: 180
      }
    ],

    id: '',
    name: ''
  }),

  computed: {
    // convert the list of events into a map of lists keyed by date
    eventsMap() {
      const map = {};
      this.events.forEach(e => (map[e.date] = map[e.date] || []).push(e));
      return map;
    }
  },

  mounted() {
    this.$refs.calendar.scrollToTime("07:50");
    this.id = store.id;

    console.log("ID doctor: " + this.id);
  },

  methods: {
    open(event) {
      alert(event.title);
    },
    gestionarPaciente() {
      this.$router.push("/gestionPacientes");
    },
    gestionarUsuario() {
      this.$router.push("/gestionUsuarios");
    },
    darConsulta() {
      this.$router.push("/gestionarPaciente");
    },
    datosGenerales() {
      this.$router.push("/Datos");
    },
    hacerCita() {
      this.$router.push("/Citas");
    },
    imprimirId(){
      console.log('Doctor: ' + this.id);
    },
    obtenerNombre() {

      this.$http.get(`http://localhost:8000/get_nombre?id=${store.id}`).then(response => {
        this.name = response.data.user.name;
      });
    }
  },
  beforeMount(){
    this.obtenerNombre()
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




<template lang="">
	<div>	
		<div class="body">

			<b-container class="bv-example-row">

				<!-- FILA 1, FOTOS Y TÍTULO-->
				<b-row align-h="around" align-v="center">

					<b-col order="1" cols="1">
						<img src="../assets/Randall.jpeg" alt="" width="120" height="120">
					</b-col>

					<b-col order="1" cols="6">
						<h2>BIENVENIDO</h2>
						<h4>Dr. Randall Lou</h4>
					</b-col>

					<b-col order="1" cols="3" class="pb-4">
						<img src="../assets/mariposaFundanier.png" alt="" width="240" height="240">
					</b-col>

				</b-row>

				<!-- FILA 2, SET DE BOTONES-->
				<b-row align-h="around" align-v="center" class="pb-5">
					<b-col order="1" cols="8">
						<template>
						<div>
							<v-btn outline color="warning" v-on:click="gestionarPaciente">Gestionar Paciente</v-btn>
							<v-btn outline color="warning" v-on:click="darConsulta">Generar Reporte</v-btn>
							<v-btn outline color="warning">Informes Estadísticos</v-btn>
							<v-btn outline color="warning">Datos Generales</v-btn>
						</div>
					</template>
					</b-col>
				</b-row>



			<template>
  <v-layout>
    <v-flex>
      <v-sheet height="300">
        <!-- now is normally calculated by itself, but to keep the calendar in this date range to view events -->
        <v-calendar ref="calendar" :now="today" :value="today" color="primary" type="week">
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
                @click="open(event)"
                v-html="event.title"
              ></div>
            </template>
          </template>
        </v-calendar>
      </v-sheet>
    </v-flex>
  </v-layout>
</template>

				<b-row>

					<b-col order="2" sm-8 align-v="left">
						<b-button variant="outline-primary">Hacer Cita</b-button>
						<b-button v-on:click="gestionarUsuario" variant="outline-primary">Gestionar Usuarios</b-button>
					</b-col>

				</b-row>
			</b-container>


		</div>
		<br>
	</div>
</template>

<script>
export default {
  name: "menu",

  data: () => ({
    today: "2019-01-08",
    events: [
      {
        title: "Weekly Meeting",
        date: "2019-01-07",
        time: "09:00",
        duration: 45
      },
      {
        title: "Thomas' Birthday",
        date: "2019-01-10"
      },
      {
        title: "Mash Potatoes",
        date: "2019-01-09",
        time: "12:30",
        duration: 180
      }
    ]
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
    this.$refs.calendar.scrollToTime("08:00");
  },
  methods: {
    open(event) {
      alert(event.title);
    },
    gestionarPaciente() {
      this.$router.push("/page-four");
    },
    gestionarUsuario() {
      this.$router.push("/page-two");
    },
    darConsulta() {
      this.$router.push("/Consulta");
    }
  }
};
</script>






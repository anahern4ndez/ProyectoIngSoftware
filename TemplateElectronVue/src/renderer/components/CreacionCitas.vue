<template>
  <v-layout wrap>
    <v-flex
      xs12
      class="mb-3">
      <v-sheet height="500">
        <v-calendar
          :type="calendarType"
          locale="es"
          :now="today"
          :value="today"
          color="primary">
          <template v-slot:day="{ date }">
            <template v-for="event in eventsMap[date]">
              <v-menu
                :key="event.title"
                v-model="event.open"
                full-width
                offset-x>
                <template v-slot:activator="{ on }">
                  <div
                    v-if="!event.time"
                    v-ripple
                    class="my-event"
                    v-on="on"
                    v-html="event.title">
                  </div>
                </template>
                <v-card
                  color="grey lighten-4"
                  min-width="350px"
                  flat
                >
                  <v-toolbar
                    color="rgb(211, 88, 35)"
                    dark>
                    <v-toolbar-title v-html="event.title"></v-toolbar-title>
                    <v-spacer></v-spacer>
                  </v-toolbar>
                  <v-card-title primary-title>
                    <span v-html="event.details"></span>
                  </v-card-title>
                </v-card>
              </v-menu>
            </template>
          </template>
        </v-calendar>

        <template v-slot:dayHeader="{ present }">
          <template
            v-if="present"
            class="text-xs-center">
            Today
          </template>
        </template>

      </v-sheet>
    </v-flex>

    <v-flex>
      <v-btn v-on:click="showAppointmentDialog">Crear Cita</v-btn>
    </v-flex>

    <!-- <v-flex
      sm4
      xs12
      class="text-sm-left text-xs-center"
    >
      <v-btn @click="$refs.calendar.prev()">
        <v-icon
          dark
          left
        >
          keyboard_arrow_left
        </v-icon>
        Mes Anterior
      </v-btn>
    </v-flex>
    <v-flex
      sm4
      xs12
      class="text-xs-center"
    >
      <v-select
        v-model="calendarType"
        :items="typeOptions"
        label="Type"
      ></v-select>
    </v-flex>
    <v-flex
      sm4
      xs12
      class="text-sm-right text-xs-center"
    >
      <v-btn @click="$refs.calendar.next()">
        Mes Siguiente
        <v-icon
          right
          dark
        >
          keyboard_arrow_right
        </v-icon>
      </v-btn>
    </v-flex> -->

    <v-dialog v-model="dialogOpen" persistent max-width="600px">
      <template v-slot:activator="{ on }">
      </template>
      <v-card>
        <v-card-title>
          <span class="headline">Crear Nueva Cita</span>
        </v-card-title>
        <v-card-text>
          <v-container grid-list-md>
            <v-layout wrap>
              <v-flex xs12>
                <v-select :items="dummyPatients" label="Paciente" required v-model="selectedPatient"></v-select>
              </v-flex>
              <v-flex xs12>
                <v-select :items="dummyDoctors" label="Doctor" required v-model="selectedDoctor"></v-select>
              </v-flex>
              <v-flex xs12 sm6>
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
                  min-width="290px">
                  <template v-slot:activator="{ on }">
                    <v-text-field
                      v-model="selectedDate"
                      label="Escoger Fecha de Cita"
                      prepend-icon="event"
                      readonly
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker v-model="selectedDate" no-title scrollable locale="es">
                    <v-spacer></v-spacer>
                    <v-btn flat color="primary" @click="dateMenuOpen = false">Cancelar</v-btn>
                    <v-btn flat color="primary" @click="$refs.menu.save(selectedDate)">Aceptar</v-btn>
                  </v-date-picker>
                </v-menu>
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

  </v-layout>
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
  export default {
    data: () => ({
      today: '',
      calendarType: 'month',
      dialogOpen: false,
      dateMenuOpen: false,
      selectedDate: '',
      newAppointment: '',
      typeOptions: [
        { text: 'Diario', value: 'day' },
        { text: 'Semanal', value: 'week' },
        { text: 'Mensual', value: 'month' },
      ],
      events: [
        {
          title: 'Doctor: Randall Lou',
          details: 'Paciente: Rodrigo Zea',
          date: '2019-05-10',
          open: false
        },
        {
          title: 'Doctor: Celeste Azul',
          details: 'Paciente: Esteban Cabrera',
          date: '2019-05-10',
          open: false
        }
      ],
      dummyPatients: [
        'Rodrigo Zea',
        'Ana Lucía Hernandez',
        'Francisco Molina',
        'Sebastian Arriola',
        'Esteban Cabrera'
      ],
      dummyDoctors: [
        'Randall Lou',
        'Cristina Zelaya',
        'Celeste Azul'
      ],
      selectedPatient: '',
      selectedDoctor: ''
    }),
    mounted () {
      this.today = new Date().toISOString().substring(0, 10);
      this.selectedDate = new Date().toISOString().substr(0, 10);
    },
    computed: {
      // convert the list of events into a map of lists keyed by date
      eventsMap () {
        const map = {}
        this.events.forEach(e => (map[e.date] = map[e.date] || []).push(e))
        return map
      }
    },
    methods: {
      open (event) {
        alert(event.title)
      },
      showAppointmentDialog () {
        this.dialogOpen = true;
      },
      createAppointment () {
        this.dialogOpen = false;
        this.events.push({
          title: `Doctor: ${this.selectedDoctor}`,
          details: `Paciente: ${this.selectedPatient}`,
          date: this.selectedDate,
          open: false
        });
      }
    }
  }
</script>
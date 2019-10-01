<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
  <div>
    <div class="headers">
      <h1>Catéter</h1>

      <!-- Agregar setteo automatico de num. de cateter -->
      <h2>Colocación de catéter No.</h2>
    </div>

    <b-container>
      <b-row align-h="around" align-v="center">
        <b-col order="1" cols="5">
          <div class="item-style">
            <v-autocomplete :items="pacientes" label="Paciente" required></v-autocomplete>
          </div>
        </b-col>
        <b-col order="2" cols="5">
          <div class="radio-style">
            <label for="sexInput">Sexo del paciente</label>
            <v-radio-group class="radioGroup" v-model="sexo" row required disabled>
              <v-radio label="Femenino" value="1" color="black"></v-radio>
              <v-radio label="Masculino" value="2" color="black"></v-radio>
            </v-radio-group>
          </div>

          <div>
            <label for="nameInput">Edad del paciente</label>
            <v-text-field v-model="age" label="Edad del paciente" outline required disabled></v-text-field>
          </div>
        </b-col>
      </b-row>

      <v-divider></v-divider>

      <b-row align-h="around" align-v="center">
        <b-col order="1" cols="5">
          <div class="item-style">
            <label for="registroInput">Registro</label>
            <v-text-field
              v-model="registro"
              label="Registro"
              outline
              :rules="registerRules"
              required
            ></v-text-field>
          </div>
        </b-col>
        <b-col order="2" cols="5">
          <div class="date-style">
            <label for="nameInput">Fecha de colocación</label>

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
                  label="Escoger Fecha de Colocación"
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
          </div>
        </b-col>
      </b-row>

      <v-divider></v-divider>

      <b-row align-h="around" align-v="center">
        <b-col order="1" cols="5">
          <div class="radio-style">
            <label for="indicacionInput">Indicación</label>
            <v-radio-group class="radioGroup" v-model="cambio" row required>
              <v-radio label="Cambio de Cateter" :value="1" color="black"></v-radio>
              <v-radio label="Uremia" :value="2" color="black"></v-radio>
              <v-radio label="Otros, especificar " :value="3" color="black"></v-radio>
            </v-radio-group>
          </div>
        </b-col>
      </b-row>

      <v-divider></v-divider>

      <transition name="fade">
        <b-row align-h="around" align-v="center" v-if="cambio == 1">
          <b-col order="1" cols="5">
            <div class="radio-style">
              <label for="indicacionInput">Razón por retiro de catéter</label>
              <v-radio-group class="radioGroup" v-model="retiro" row required>
                <v-radio label="Disfunsión" value="1" color="black"></v-radio>
                <v-radio label="Infección" value="2" color="black"></v-radio>
                <v-radio label="Otros, especificar " value="3" color="black"></v-radio>
              </v-radio-group>
            </div>
          </b-col>
        </b-row>
      </transition>

      <transition name="fade">
        <v-divider v-if="cambio == 1"></v-divider>
      </transition>

      <b-row align-h="around" align-v="center">
        <b-col order="1" cols="5">
          <div class="table-style">
            <label for="equipoInput">Equipo y Materiales</label>
            <!--<table>
              <thead>
                <tr>
                  <th class="text-left">Descripción</th>
                  <th class="text-left">Respuesta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Monitor y/o Saturador</td>
                  <td>
                    <v-radio-group class="radioGroup" v-model="monitor" row required>
                      <v-radio label="Sí" value="1" color="black"></v-radio>
                      <v-radio label="No" value="2" color="black"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </tbody>
            </table>-->
          </div>
        </b-col>
      </b-row>
    </b-container>

    <v-card></v-card>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$http
      .get("http://localhost:8000/PacienteController/findAll")
      .then(response => {
        this.pacientes = response.data.Pacientes.map(
          i => i.Apellido + ", " + i.Nombre + " - " + i.CUI
        );
      });
  },
  data() {
    return {
      pacientes: [],
      sexo: "",
      age: "",
      cambio: "",
      retiro: "",
      registro: "",
      selectedDate: "",
      monitor: "",
      dateMenuOpen: false,
      radioRules: [v => !!v || "Debe seleccionar una opción"],
      registerRules: [
        v => !!v || "Ingrese el registro de paciente",
        v => (v && v.length < 60) || "Se permite como maximo 60 caracteres"
      ]
    };
  },
  methods: {
    saveAppointmentDate() {
      this.dateMenuOpen = false;
      this.$refs.menu.save(this.selectedDate);
    }
  }
};
</script>
<style scoped>
body {
  font-family: Nunito;
}

.headers {
  font-family: Nunito;
  text-align: center;
  margin: 15px 0 25px 0;
}
.headers h1 {
  font-weight: bolder;
}
.headers h2 {
  font-weight: normal;
}

.radio-style {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.radio-style div {
  align-self: flex-end;
}
.radio-style .radioGroup {
  align-self: flex-start;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
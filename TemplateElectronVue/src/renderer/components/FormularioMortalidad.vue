<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Mortalidad</h1>
      <div>
        <label class="text-center"><b>Nombre:</b></label>
          <input id="nombre" type="text" v-model="nombre" class="form-control" placeholder="Nombre">
            <b-row align-h="around" align-v="center">
              <b-col>
              <v-radio-group v-model="sexo" row>
                  <br><label class="text-left"><b>Sexo:</b></label>
                  <b-col>
                  <v-radio label="Masculino" value="Masculino" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                  <v-radio label="Femenino" value="Femenino" color="orange" ></v-radio>
                  </b-col>
              </v-radio-group>
              </b-col>
              </b-row>

            <label class="text-center"><b>Edad</b></label>
            <input id="edad" type="text" v-model="edad" class="form-control" placeholder="Edad">

            <label class="text-center"><b>No. de registro</b></label>
            <input id="no_de_registro" type="text" v-model="no_de_registro" class="form-control" placeholder="No. de registro">

            <label class="text-center"><b>Fecha de deceso</b></label>
            <input id="fecha_de_deceso" type="date" v-model="fecha_de_deceso" class="form-control" placeholder="Fecha de deceso">

            <br><label class="text-center"><b>Ultima terapia en la que encontrba el paciente:</b></label>
            <!-- <b-container class="bv-example-row1"> -->
              <b-row align-h="around" align-v="center">
                <b-col>
                  <v-radio-group v-model="ultima_terapia" row>
                  
                  <b-col>
                  <v-radio label="Pre Dialisis" value="preDialisis" color="orange" ></v-radio>
                  <br>
                  <v-radio label="Dialisis Peritoneal" value="dialisisPeritoneal" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                  <v-radio label="Hemodialisis" value="Hemodialisis" color="orange" ></v-radio>
                  <br>
                  <v-radio label="Transplante Renal" value="transplanteRenal" color="orange" ></v-radio>
                  </b-col>
              </v-radio-group>
                  <!-- <v-checkbox
                    v-model="preDialisis"
                    label="Pre Dialisis"
                    color="orange"
                    value="preDialisis"
                    hide-details
                  ></v-checkbox>
                  <v-checkbox
                    v-model="hemoDialisis"
                    label="Hemodialisis"
                    color="orange"
                    value="hemodialisis"
                    hide-details
                  ></v-checkbox>
                </b-col>
                <b-col>
                  <v-checkbox
                    v-model="dialisisPeritoneal"
                    label="Dialisis Peritoneal"
                    color="orange"
                    value="dialisisPeritoneal"
                    hide-details
                  ></v-checkbox>
                  <v-checkbox
                    v-model="transplanteRenal"
                    label="Transplante Renal"
                    color="orange"
                    value="transplanteRenal"
                    hide-details
                  ></v-checkbox> -->
                </b-col>
              </b-row>
            <!-- </b-container> -->

            <label class="text-center"><b>Sitio en el que ocurre el deceso</b></label>
            <!-- <v-container fluid> -->
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="sitio_deceso" column>
                    <v-radio
                      label="Hospicio"
                      color="orange"
                      value="Hospicio"
                    ></v-radio>
                    <v-radio
                      label="Hospital"
                      color="orange"
                      value="Hospital"
                    ></v-radio>
                    <v-radio
                      label="Casa"
                      color="orange"
                      value="Casa"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            <!-- </v-container> -->
            <label class="text-center"><b>Causa de muerte</b></label>
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="causa" column>
                    <v-radio
                      label="Infecciosa"
                      color="orange"
                      value="Infecciosa"
                    ></v-radio>
                    <v-radio
                      label="Evento cardiovascular"
                      color="orange"
                      value="EventoCardiovascular"
                    ></v-radio>
                    <v-radio
                      label="otro"
                      color="orange"
                      value="Casa"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            </b-container>
      </div>
      <div>
        <b-container class="bv-example-row2">
          <b-row class="justify-content-md-center">
            <b-col>
              <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="dgenerales">Guardar</button>
            </b-col>
          </b-row>
        </b-container>
      </div>
  </div>
</template>


<script>
import { store } from '../main';
export default {
  mounted() {
    this.id=store.CUI
  },
  data() {
    return {
      nombre:'',
      sexo:'',
      edad:'',
      no_de_registro:'',
      fecha_de_deceso:'',
      ultima_terapia:'',
      sitio_deceso:'',
      causa:''
    };
  },
  methods:{
    agregar(){
        this.$http.post(`http://localhost:8000/forms/mortalidad?nombre=${this.nombre}&sexo=${this.sexo}&edad=${this.edad}&no_de_registro=${this.no_de_registro}&fecha_de_deceso=${this.fecha_de_deceso}&ultima_terapia=${this.ultima_terapia}&sitio_deceso=${this.sitio_deceso}&causa=${this.causa}`).then(response=>{
      })
    },
    dgenerales() {
      this.$router.push("/FormularioHemodialisis");
    }
  }  
};
</script>
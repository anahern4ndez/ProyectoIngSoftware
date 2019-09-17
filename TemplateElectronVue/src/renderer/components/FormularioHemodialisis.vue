<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Hemodialisis</h1>
      <div>
        <label class="text-center"><b>Nombre:</b></label>
        <input id="nombre" type="text" v-model="nombre" class="form-control" placeholder="Nombre">
        <label class="text-center"><b>Edad</b></label>
        <input id="edad" type="text" v-model="edad" class="form-control" placeholder="Edad">
        <b-row align-h="around" align-v="center">
          <b-col>
            <v-radio-group v-model="row" row>
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


            <label class="text-center"><b>Registro</b></label>
            <input id="registro" type="text" v-model="registro" class="form-control" placeholder="No. de registro">

            <label class="text-center"><b>Fecha</b></label>
            <input id="deceso" type="date" v-model="deceso" class="form-control" placeholder="Fecha de deceso">

            <br><label class="text-center"><b>Ultima terapia en la que encontrba el paciente:</b></label>
              <b-row align-h="around" align-v="center">
                <b-col>
                  <v-radio-group v-model="row" row>
                  <b-col>
                  <v-radio label="FUNDANIER" value="FUNDANIER" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                  <v-radio label="UNAERC" value="UNAERC" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                  <v-radio label="Otro" value="Otro" color="orange" ></v-radio>
                  </b-col>
              </v-radio-group>
                </b-col>
              </b-row>
            <label class="text-center"><b>Fecha de colocacion del cateter</b></label>
            <input id="deceso" type="date" v-model="fechaCateter" class="form-control">

            <br><label class="text-center"><b>Localizacion del cateter femoral, subclavio y yugular (Derecho/Izquierdo)</b></label>
            <b-row align-h="around" align-v="center">
              <b-col>
                <v-radio-group v-model="row" row>
                  <br><label class="text-left"><b>Femoral:</b></label>
                  <b-col>
                    <v-radio label="Derecho" value="Derecho" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="Izquierdo" value="Izquierdo" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="N/A" value="N/A" color="orange" ></v-radio>
                  </b-col>
                </v-radio-group>
              </b-col>
            </b-row>

            <b-row align-h="around" align-v="center">
              <b-col>
                <v-radio-group v-model="row" row>
                  <br><label class="text-left"><b>Subclavio:</b></label>
                  <b-col>
                    <v-radio label="Derecho" value="Derecho" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="Izquierdo" value="Izquierdo" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="N/A" value="N/A" color="orange" ></v-radio>
                  </b-col>
                </v-radio-group>
              </b-col>
            </b-row>

            <b-row align-h="around" align-v="center">
              <b-col>
                <v-radio-group v-model="row" row>
                  <br><label class="text-left"><b>Yugular:</b></label>
                  <b-col>
                    <v-radio label="Derecho" value="Derecho" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="Izquierdo" value="Izquierdo" color="orange" ></v-radio>
                  </b-col>
                  <b-col>
                    <v-radio label="N/A" value="N/A" color="orange" ></v-radio>
                  </b-col>
                </v-radio-group>
              </b-col>
            </b-row>

            <label class="text-center"><b>No. de sesiones por semana</b></label>
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="ex7" column>
                    <v-radio
                      label="Uno"
                      color="orange"
                      value="1"
                    ></v-radio>
                    <v-radio
                      label="Dos"
                      color="orange"
                      value="2"
                    ></v-radio>
                    <v-radio
                      label="Tres"
                      color="orange"
                      value="3"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            <label class="text-center"><b>Turno</b></label>
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="ex7" column>
                    <v-radio
                      label="Uno"
                      color="orange"
                      value="1"
                    ></v-radio>
                    <v-radio
                      label="Dos"
                      color="orange"
                      value="2"
                    ></v-radio>
                    <v-radio
                      label="Tres"
                      color="orange"
                      value="3"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            <label class="text-center"><b>Fecha de realizacion de cultivo</b></label>
            <input id="FechaCultivo" type="date" v-model="deceso" class="form-control" placeholder="Nombre de medico">

            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>Resultado de cultivo</b></label>
                  <input id="FechaCultivo" type="text" v-model="deceso" class="form-control" placeholder="Positivo/Negativo">
                </b-col>
                <b-col>
                  <label class="text-center"><b>Microorganizmo aislado</b></label>
                  <input id="Microorganizmo" type="text" v-model="deceso" class="form-control" placeholder="Microorganizmo aislado">
                </b-col>
            </b-row>
            <label class="text-center"><b>Medico que reporta el evento</b></label>
            <input id="NombreMedico" type="text" v-model="deceso" class="form-control" placeholder="Nombre de medico">
      </div>
      <div>
        <b-container class="bv-example-row2">
          <b-row class="justify-content-md-center">
            <b-col>
              <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="agregar">Guardar</button>
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
      peso:'',
      id:'',
      telefono:'',
      talla:'',
      pa:''
    };
  },
  methods:{
    agregar(){
        this.$http.put(`http://localhost:8000/DG/updateDG?id=${this.id}&Telefono=${this.telefono}&Peso=${this.peso}&Talla=${this.talla}&PA=${this.pa}`).then(response=>{
      })
    }
  }  
};
</script>
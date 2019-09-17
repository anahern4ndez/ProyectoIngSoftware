<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Reporte Transfusiones</h1>
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

            <label class="text-center"><b>Fecha de transfusion</b></label>
            <input id="deceso" type="date" v-model="deceso" class="form-control" placeholder="Fecha de deceso">
            
            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>Grupo</b></label>
                  <input id="grupo" type="text" v-model="grupo" class="form-control" placeholder="Grupo">
                </b-col>
                <b-col>
                  <label class="text-center"><b>RH</b></label>
                  <input id="rh" type="text" v-model="rh" class="form-control" placeholder="RH">
                </b-col>
            </b-row>
            
            <label class="text-center"><b>Terapia de Reemplazo Renal</b></label>
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="ex7" column>
                    <v-radio
                      label="Dialisis Peritoneal"
                      color="orange"
                      value="DialisisPeritoneal"
                    ></v-radio>
                    <v-radio
                      label="Hemodialisis"
                      color="orange"
                      value="Hemodialisis"
                    ></v-radio>
                    <v-radio
                      label="NTRR"
                      color="orange"
                      value="NTRR"
                    ></v-radio>
                    <v-radio
                      label="Transplante"
                      color="orange"
                      value="Transplante"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            
            <label class="text-center"><b>Indicacion transfusion</b></label>
              <v-row>
                <v-col cols="12" sm="6" md="6">
                  <v-radio-group v-model="ex7" column>
                    <v-radio
                      label="Insuficiencia Cardiaca"
                      color="orange"
                      value="InsuficienciaCardiaca"
                    ></v-radio>
                    <v-radio
                      label="Procedimiento Quirurgico"
                      color="orange"
                      value="ProcedimientoQuirurgico"
                    ></v-radio>
                    <v-radio
                      label="Otros"
                      color="orange"
                      value="Otros"
                    ></v-radio>
                    </v-radio-group>
                  </v-col>
                </v-row>
            
            <label class="text-center"><b>Derivado Sanguineo</b></label>
            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>Paquete Globular</b></label>
                  <input id="PaqueteGlobular" type="text" v-model="grupo" class="form-control" placeholder="Paquete Globular">
                  <label class="text-center"><b>Plaquetas</b></label>
                  <input id="Plaquetas" type="text" v-model="grupo" class="form-control" placeholder="Plaquetas">
                </b-col>
                <b-col>
                  <label class="text-center"><b>Plasma Fresco Congelado</b></label>
                  <input id="PlasmaFrescoCongelado" type="text" v-model="rh" class="form-control" placeholder="Plasma Fresco Congelado">
                  <label class="text-center"><b>Sangre Completa</b></label>
                  <input id="SangreCompleta" type="text" v-model="grupo" class="form-control" placeholder="Sangre Completa">
                </b-col>
            </b-row>

            <label class="text-center"><b>Signos vitales al inicio del procedimiento:</b></label>
            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>PA</b></label>
                  <input id="PA" type="text" v-model="grupo" class="form-control" placeholder="PA">
                </b-col>
                <b-col>
                  <label class="text-center"><b>FC</b></label>
                  <input id="FC" type="text" v-model="rh" class="form-control" placeholder="FC">
                </b-col>
                <b-col>
                    <label class="text-center"><b>Sat</b></label>
                    <input id="Sat" type="text" v-model="sat" class="form-control" placeholder="Sat">
                </b-col>
            </b-row>

            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>Hora de inicio</b></label>
                  <input id="HoraInicio" type="time" v-model="HoraInicio" class="form-control" placeholder="PA">
                </b-col>
                <b-col>
                  <label class="text-center"><b>Hora de finalizacion</b></label>
                  <input id="HoraFinal" type="time" v-model="HoraFinal" class="form-control">
                </b-col>
            </b-row>

            <b-row align-h="around" align-v="center">
                <b-col>
                  <label class="text-center"><b>Medico resposable</b></label>
                  <input id="MedicoResponsable" type="text" v-model="HoraInicio" class="form-control" placeholder="Medico responsable">
                </b-col>
                <b-col>
                  <label class="text-center"><b>Nefrologo que supervisa</b></label>
                  <input id="NefrologoSupervisa" type="text" v-model="HoraFinal" class="form-control"placeholder="Nefrologo que supervisa">
                </b-col>
            </b-row>

            <label class="text-center"><b>Nota de transfusion</b></label>

            <b-row align-h="start" align-v="center">
                <b-col>
                  <label class="text-center"><b>Previa autorizacion de los encargados, por indicacion de </b></label>
                </b-col>
                <b-col>
                  <input id="NefrologoSupervisa" type="text" v-model="HoraFinal" class="form-control"placeholder="">
                </b-col>
                <b-col>
                  <label class="text-center"><b>se procede a</b></label>
                </b-col>
            </b-row>

            <b-row align-h="start" align-v="center">
                <b-col>
                  <label class="text-center"><b>realizar transfusion de</b></label>
                </b-col>
                <b-col>
                  <input id="NefrologoSupervisa" type="text" v-model="HoraFinal" class="form-control"placeholder="">
                </b-col>
                <b-col>
                  <label class="text-center"><b>(derivado sanquineo) al paciente</b></label>
                </b-col>
                 <b-col>
                  <input id="NefrologoSupervisa" type="text" v-model="HoraFinal" class="form-control"placeholder="">
                </b-col>
            </b-row>
            <b-row align-h="start" align-v="center">
                <b-col>
                  <label class="text-center"><b>, numero de expediente</b></label>
                </b-col>
                <b-col>
                  <input id="NefrologoSupervisa" type="text" v-model="HoraFinal" class="form-control"placeholder="">
                </b-col>
                <b-col>
                  <label class="text-center"><b>en fecha</b></label>
                </b-col>
                 <b-col>
                  <input id="NefrologoSupervisa" type="date" v-model="HoraFinal" class="form-control"placeholder="Nefrologo que supervisa">
                </b-col>
                <b-col>
                  <label class="text-center"><b>La hora de inicio fue</b></label>
                </b-col>
                <b-col>
                  <input id="NefrologoSupervisa" type="time" v-model="HoraFinal" class="form-control"placeholder="Nefrologo que supervisa">
                </b-col>
            </b-row>
            <b-row align-h="start" align-v="center">
                <b-col>
                  <label class="text-center"><b>y la hora de finalizacion fue</b></label>
                </b-col>
                <b-col>
                  <input id="NefrologoSupervisa" type="time" v-model="HoraFinal" class="form-control"placeholder="Nefrologo que supervisa">
                </b-col>
                <b-col>
                </b-col>
                <b-col>
                </b-col>
                <b-col>
                </b-col>
            </b-row>

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
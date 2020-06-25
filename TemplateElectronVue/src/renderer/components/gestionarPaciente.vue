<template lang="">
    <form class="form-horizontal">
        <fieldset>
        <!-- Text input-->
        <h1 style="text-align: Left;">Consulta</h1>
        <!-- Text input-->
        <div class="form-group encapsulado">
        <!-- Lefts-->
            <b-container>
                <b-row class="justify-content-md-center">
                    <b-col>
                        <div>
                            <b-container>
                                <b-row class="justify-content-md-start">
                                    <h3 style="font-weight: bold;">Paciente: {{paciente.nombre}} {{paciente.apellido}}</h3>  
                                </b-row>
                                <b-row class="justify-content-md-center">
                                    <div v-if="imageData">
                                        <img id="fotoPaciente" :src="imageData" alt="" width="273" height="183">
                                    </div>
                                    <div v-else> <!-- se utiliza la imagen default si no se ha escogido una  -->
                                        <img id="fotoPaciente" src="../assets/default.png" alt="" width="273" height="183">
                                    </div>
                                </b-row>
                            </b-container>
                        </div>
                        <div>
                            <b-container>
                                <b-row>
                                    <b-col>
                                    <v-text-field
                                        v-model="paciente.Nombre_de_padre"
                                        label="Nombre del padre"
                                        outline :disabled="true"
                                    ></v-text-field> 
                                    </b-col>
                                    <b-col>
                                    <v-text-field
                                        v-model="paciente.Nombre_de_madre"
                                        label="Nombre de la madre"
                                        outline :disabled="true"
                                    ></v-text-field> 
                                    </b-col>
                                </b-row>
                                <b-row>
                                    <b-col>
                                    <v-text-field
                                        v-model="paciente.Procedencia"
                                        label="Procedencia"
                                        outline :disabled="true"
                                    ></v-text-field> 
                                    </b-col>
                                    <b-col>
                                    <v-text-field
                                        v-model="paciente.Telefono"
                                        label="Télefono"
                                        outline :disabled="true"
                                    ></v-text-field> 
                                    </b-col>
                                </b-row>
                                <b-row>
                                    <b-col>
                                        <v-text-field
                                            v-model="paciente.Transfusiones"
                                            label="Transfuciones"
                                            outline :disabled="true"
                                        ></v-text-field>
                                    </b-col>
                                    <b-col>
                                    <v-text-field
                                        v-model="paciente.Estudia"
                                        label="Estudia"
                                        outline :disabled="true"
                                    ></v-text-field>
                                    </b-col>
                                </b-row>
                            </b-container>
                        </div>
                    </b-col>

                    <b-col>
                        <br><br><br>
                        <table class="table table-bordered table-ligth">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 10%">Vacuna</th>
                                    <th scope="row" style="width: 10%">1ra Dosis</th>
                                    <th scope="row" style="width: 10%">2ra Dosis</th>
                                    <th scope="row" style="width: 10%">3ra Dosis</th>
                                    <th scope="row" style="width: 10%">Refuerzos</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">BCG</th>
                                    <td><v-layout><v-checkbox color="green" v-model="bcg1" @change="fillBCG" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="bcg2" @change="fillBCG" :disabled="!bcg1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="bcg3" @change="fillBCG" :disabled="!bcg2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="bcgRef" :disabled="!bcg3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Poliovirus</th>
                                    <td><v-layout><v-checkbox color="green" v-model="poliovirus1" @change="fillPoliovirus" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="poliovirus2" @change="fillPoliovirus" :disabled="!poliovirus1"  hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="poliovirus3" @change="fillPoliovirus" :disabled="!poliovirus2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="poliovirusRef" :disabled="!poliovirus3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Hepatitis A</th>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisA1" @change="fillHepatitisA" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisA2" @change="fillHepatitisA" :disabled="!hepatitisA1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisA3" @change="fillHepatitisA" :disabled="!hepatitisA2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisARef" :disabled="!hepatitisA3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Hepatitis B</th>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisB1" @change="fillHepatitisB" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisB2" @change="fillHepatitisB" :disabled="!hepatitisB1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisB3" @change="fillHepatitisB" :disabled="!hepatitisB2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="hepatitisBRef" :disabled="!hepatitisB3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Neumococo</th>
                                    <td><v-layout><v-checkbox color="green" v-model="neumococo1" @change="fillNeumococo" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="neumococo2" @change="fillNeumococo" :disabled="!neumococo1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="neumococo3" @change="fillNeumococo" :disabled="!neumococo2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="neumococoRef" :disabled="!neumococo3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Influenza</th>
                                    <td><v-layout><v-checkbox color="green" v-model="influenza1" @change="fillInflueza" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="influenza2" @change="fillInflueza" :disabled="!influenza1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="influenza3" @change="fillInflueza" :disabled="!influenza2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="influenzaRef" :disabled="!influenza3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Diftteria/Tétano/Tosferina(DPT)</th>
                                    <td><v-layout><v-checkbox color="green" v-model="DPT1" @change="fillDPT" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="DPT2" @change="fillDPT" :disabled="!DPT1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="DPT3" @change="fillDPT" :disabled="!DPT2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="DPTRef" :disabled="!DPT3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="width: 10%">Sarampión/Paperas/Rubeola(SPR)</th>
                                    <td><v-layout><v-checkbox color="green" v-model="SPR1" @change="fillSPR" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="SPR2" @change="fillSPR" :disabled="!SPR1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="SPR3" @change="fillSPR" :disabled="!SPR2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                    <td><v-layout><v-checkbox color="green" v-model="SPRRef" :disabled="!SPR3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br>

                        <b-row class="justify-content-md-center">
                            <b-col>
                                <button type="button" class="btn btn-lg btn-warning btn-block ml-4" v-on:click="consulta">Dar Consulta</button>
                            </b-col>
                            <b-col>
                                <button type="button" class="btn btn-lg btn-warning btn-block"  v-on:click="history">Historial</button>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </div>
        </fieldset>
        </form>
        </fieldset>
    </form>
</template>
<script>
import { store } from '../main';

export default {
    
    data: () => ({
        imageData: "",

        paciente: {
            nombre: '',
            apellido: '',
            Nombre_de_padre: "",
            Nombre_de_madre: "",
            Procedencia: "",
            Telefono: "",
            Grupo_De_Sangre: "",
            Estudia: "",
            Transfusiones: ""
        },

        bcg: 0,
        bcg1: false,
        bcg2: false,
        bcg3: false,
        bcgRef: false,
        poliovirus: 0,
        poliovirus1: false,
        poliovirus2: false,
        poliovirus3: false,
        poliovirusRef: false,
        hepatitisA: 0,
        hepatitisA1: false,
        hepatitisA2: false,
        hepatitisA3: false,
        hepatitisARef: false,
        hepatitisB: 0,
        hepatitisB1: false,
        hepatitisB2: false,
        hepatitisB3: false,
        hepatitisBRef: false,
        neumococo: 0,
        neumococo1: false,
        neumococo2: false,
        neumococo3: false,
        neumococoRef: false,
        influenza: 0,
        influenza1: false,
        influenza2: false,
        influenza3: false,
        influenzaRef: false,
        DPT: 0,
        DPT1: false,
        DPT2: false,
        DPT3: false,
        DPTRef: false,
        SPR: 0,
        SPR1: false,
        SPR2: false,
        SPR3: false,
        SPRRef: false,
    }),
    mounted() {
        const date = new Date()
        this.fecha = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate()

        store.idPaciente = this.$route.params.idPaciente
        // store.id = this.$route.params.cui
        
        const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };

        this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {

            if(response.data.Paciente[0] == null){
            }else{
                this.paciente.nombre = response.data.Paciente[0].Nombre;
                this.paciente.apellido = response.data.Paciente[0].Apellido;
                this.paciente.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
                this.paciente.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
                this.paciente.Procedencia = response.data.Paciente[0].procedencia.Departamento;
                this.paciente.Telefono = response.data.Paciente[0].Telefono;
                this.paciente.Grupo_De_Sangre = response.data.Paciente[0].tipo_de__sangre.significado;
                this.paciente.Estudia = response.data.Paciente[0].estudia.significado;
                this.paciente.Transfusiones = response.data.Paciente[0].transfusiones.significado;
                this.imageData = response.data.Paciente[0].Imagen
            }
        });

        const vacunm = {
            idPaciente: store.idPaciente,
            fecha: this.fecha
        }

        this.$http.post(`http://localhost:8000/vacunaController/findOne`, vacunm).then(response => {

            if (response.data.Consulta != undefined) {
                this.bcg = response.data.Consulta.BCG
                this.poliovirus = response.data.Consulta.Poliovirus
                this.hepatitisA = response.data.Consulta.HepatitisA
                this.hepatitisB = response.data.Consulta.HepatitisB
                this.neumococo = response.data.Consulta.Neumococo
                this.influenza = response.data.Consulta.Influenza
                this.DPT = response.data.Consulta.DPT
                this.SPR = response.data.Consulta.SPR
            }
        }).then(() => {
            this.setVacunaData()
        })
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
    open(event) {
      alert(event.title);
    },
    consulta() {
      this.$router.push({name: "Consulta"});
    },
    history() {
      this.$router.push("/History");
    },

    setVacunaData() {

        if (this.bcg === 4) {
            this.bcgRef = true
            this.bcg3 = true
            this.bcg2 = true
            this.bcg1 = true
        } else if (this.bcg === 3) {
            this.bcgRef = false
            this.bcg3 = true
            this.bcg2 = true
            this.bcg1 = true
        } else if (this.bcg === 2) {
            this.bcgRef = false
            this.bcg3 = false
            this.bcg2 = true
            this.bcg1 = true
        } else if (this.bcg === 1) {
            this.bcgRef = false
            this.bcg3 = false
            this.bcg2 = false
            this.bcg1 = true
        } else if (this.bcg === 0) {
            this.bcgRef = false
            this.bcg3 = false
            this.bcg2 = false
            this.bcg1 = false
        }

        if (this.poliovirus === 4) {
            this.poliovirusRef = true
            this.poliovirus3 = true
            this.poliovirus2 = true
            this.poliovirus1 = true
        } else if (this.poliovirus === 3) {
            this.poliovirusRef = false
            this.poliovirus3 = true
            this.poliovirus2 = true
            this.poliovirus1 = true
        } else if (this.poliovirus === 2) {
            this.poliovirusRef = false
            this.poliovirus3 = false
            this.poliovirus2 = true
            this.poliovirus1 = true
        } else if (this.poliovirus === 1) {
            this.poliovirusRef = false
            this.poliovirus3 = false
            this.poliovirus2 = false
            this.poliovirus1 = true
        } else if (this.poliovirus === 0) {
            this.poliovirusRef = false
            this.poliovirus3 = false
            this.poliovirus2 = false
            this.poliovirus1 = false
        }

        if (this.hepatitisA === 4) {
            this.hepatitisARef = true
            this.hepatitisA3 = true
            this.hepatitisA2 = true
            this.hepatitisA1 = true
        } else if (this.hepatitisA === 3) {
            this.hepatitisARef = false
            this.hepatitisA3 = true
            this.hepatitisA2 = true
            this.hepatitisA1 = true
        } else if (this.hepatitisA === 2) {
            this.hepatitisARef = false
            this.hepatitisA3 = false
            this.hepatitisA2 = true
            this.hepatitisA1 = true
        } else if (this.hepatitisA === 1) {
            this.hepatitisARef = false
            this.hepatitisA3 = false
            this.hepatitisA2 = false
            this.hepatitisA1 = true
        } else if (this.hepatitisA === 0) {
            this.hepatitisARef = false
            this.hepatitisA3 = false
            this.hepatitisA2 = false
            this.hepatitisA1 = false
        }

        if (this.hepatitisB === 4) {
            this.hepatitisBRef = true
            this.hepatitisB3 = true
            this.hepatitisB2 = true
            this.hepatitisB1 = true
        } else if (this.hepatitisB === 3) {
            this.hepatitisBRef = false
            this.hepatitisB3 = true
            this.hepatitisB2 = true
            this.hepatitisB1 = true
        } else if (this.hepatitisB === 2) {
            this.hepatitisBRef = false
            this.hepatitisB3 = false
            this.hepatitisB2 = true
            this.hepatitisB1 = true
        } else if (this.hepatitisB === 1) {
            this.hepatitisBRef = false
            this.hepatitisB3 = false
            this.hepatitisB2 = false
            this.hepatitisB1 = true
        } else if (this.hepatitisB === 0) {
            this.hepatitisBRef = false
            this.hepatitisB3 = false
            this.hepatitisB2 = false
            this.hepatitisB1 = false
        }

        if (this.neumococo === 4) {
            this.neumococoRef = true
            this.neumococo3 = true
            this.neumococo2 = true
            this.neumococo1 = true
        } else if (this.neumococo === 3) {
            this.neumococoRef = false
            this.neumococo3 = true
            this.neumococo2 = true
            this.neumococo1 = true
        } else if (this.neumococo === 2) {
            this.neumococoRef = false
            this.neumococo3 = false
            this.neumococo2 = true
            this.neumococo1 = true
        } else if (this.neumococo === 1) {
            this.neumococoRef = false
            this.neumococo3 = false
            this.neumococo2 = false
            this.neumococo1 = true
        } else if (this.neumococo === 0) {
            this.neumococoRef = false
            this.neumococo3 = false
            this.neumococo2 = false
            this.neumococo1 = false
        }
        
        if (this.influenza === 4) {
            this.influenzaRef = true
            this.influenza3 = true
            this.influenza2 = true
            this.influenza1 = true
        } else if (this.influenza === 3) {
            this.influenzaRef = false
            this.influenza3 = true
            this.influenza2 = true
            this.influenza1 = true
        } else if (this.influenza === 2) {
            this.influenzaRef = false
            this.influenza3 = false
            this.influenza2 = true
            this.influenza1 = true
        } else if (this.influenza === 1) {
            this.influenzaRef = false
            this.influenza3 = false
            this.influenza2 = false
            this.influenza1 = true
        } else if (this.influenza === 0) {
            this.influenzaRef = false
            this.influenza3 = false
            this.influenza2 = false
            this.influenza1 = false
        }
        
        if (this.DPT === 4) {
            this.DPTRef = true
            this.DPT3 = true
            this.DPT2 = true
            this.DPT1 = true
        } else if (this.DPT === 3) {
            this.DPTRef = false
            this.DPT3 = true
            this.DPT2 = true
            this.DPT1 = true
        } else if (this.DPT === 2) {
            this.DPTRef = false
            this.DPT3 = false
            this.DPT2 = true
            this.DPT1 = true
        } else if (this.DPT === 1) {
            this.DPTRef = false
            this.DPT3 = false
            this.DPT2 = false
            this.DPT1 = true
        } else if (this.DPT === 0) {
            this.DPTRef = false
            this.DPT3 = false
            this.DPT2 = false
            this.DPT1 = false
        }

        if (this.SPR === 4) {
            this.SPRRef = true
            this.SPR3 = true
            this.SPR2 = true
            this.SPR1 = true
        } else if (this.SPR === 3) {
            this.SPRRef = false
            this.SPR3 = true
            this.SPR2 = true
            this.SPR1 = true
        } else if (this.SPR === 2) {
            this.SPRRef = false
            this.SPR3 = false
            this.SPR2 = true
            this.SPR1 = true
        } else if (this.SPR === 1) {
            this.SPRRef = false
            this.SPR3 = false
            this.SPR2 = false
            this.SPR1 = true
        } else if (this.SPR === 0) {
            this.SPRRef = false
            this.SPR3 = false
            this.SPR2 = false
            this.SPR1 = false
        }
    },

    getVacunaData () {
        if (this.bcgRef) {
            this.bcg = 4
        } else if (this.bcg3) {
            this.bcg = 3
        } else if (this.bcg2) {
            this.bcg = 2
        } else if (this.bcg1) {
            this.bcg = 1
        } else {
            this.bcg = 0
        }

        if (this.poliovirusRef) {
            this.poliovirus = 4
        } else if (this.poliovirus3) {
            this.poliovirus = 3
        } else if (this.poliovirus2) {
            this.poliovirus = 2
        } else if (this.poliovirus1) {
            this.poliovirus = 1
        } else {
            this.poliovirus = 0
        }

        if (this.hepatitisARef) {
            this.hepatitisA = 4
        } else if (this.hepatitisA3) {
            this.hepatitisA = 3
        } else if (this.hepatitisA2) {
            this.hepatitisA = 2
        } else if (this.hepatitisA1) {
            this.hepatitisA = 1
        } else {
            this.hepatitisA = 0
        }

        if (this.hepatitisBRef) {
            this.hepatitisB = 4
        } else if (this.hepatitisB3) {
            this.hepatitisB = 3
        } else if (this.hepatitisB2) {
            this.hepatitisB = 2
        } else if (this.hepatitisB1) {
            this.hepatitisB = 1
        } else {
            this.hepatitisB = 0
        }

        if (this.neumococoRef) {
            this.neumococo = 4
        } else if (this.neumococo3) {
            this.neumococo = 3
        } else if (this.neumococo2) {
            this.neumococo = 2
        } else if (this.neumococo1) {
            this.neumococo = 1
        } else {
            this.neumococo = 0
        }

        if (this.influenzaRef) {
            this.influenza = 4
        } else if (this.influenza3) {
            this.influenza = 3
        } else if (this.influenza2) {
            this.influenza = 2
        } else if (this.influenza1) {
            this.influenza = 1
        } else {
            this.influenza = 0
        }

        if (this.DPTRef) {
            this.DPT = 4
        } else if (this.DPT3) {
            this.DPT = 3
        } else if (this.DPT2) {
            this.DPT = 2
        } else if (this.DPT1) {
            this.DPT = 1
        } else {
            this.DPT = 0
        }

        if (this.SPRRef) {
            this.SPR = 4
        } else if (this.SPR3) {
            this.SPR = 3
        } else if (this.SPR2) {
            this.SPR = 2
        } else if (this.SPR1) {
            this.SPR = 1
        } else {
            this.SPR = 0
        }
    },

    fillBCG: function() {
            
        if(!this.bcg1){
            this.bcg2 = false;
            this.bcg3 = false;
            this.bcgRef = false;
        }
        if(!this.bcg2){
            this.bcg3 = false;
            this.bcgRef = false;
        }
        if(!this.bcg3){
            this.bcgRef = false;
        }
    },
    fillPoliovirus: function() {
        
        if(!this.poliovirus1){
            this.poliovirus2 = false;
            this.poliovirus3 = false;
            this.poliovirusRef = false;
        }
        if(!this.poliovirus2){
            this.poliovirus3 = false;
            this.poliovirusRef = false;
        }
        if(!this.poliovirus3){
            this.poliovirusRef = false;
        }
    },
    fillHepatitisA: function(){

        if(!this.hepatitisA1){
            this.hepatitisA2 = false;
            this.hepatitisA3 = false;
            this.hepatitisARef = false;
        }
        if(!this.hepatitisA2){
            this.hepatitisA3 = false;
            this.hepatitisARef = false;
        }
        if(!this.hepatitisA3){
            this.hepatitisARef = false;
        }
    },
    fillHepatitisB: function(){

        if(!this.hepatitisB1){
            this.hepatitisB2 = false;
            this.hepatitisB3 = false;
            this.hepatitisBRef = false;
        }
        if(!this.hepatitisB2){
            this.hepatitisB3 = false;
            this.hepatitisBRef = false;
        }
        if(!this.hepatitisB3){
            this.hepatitisBRef = false;
        }
    },
    fillNeumococo: function(){

        if(!this.neumococo1){
            this.neumococo2 = false;
            this.neumococo3 = false;
            this.neumococoRef = false;
        }
        if(!this.neumococo2){
            this.neumococo3 = false;
            this.neumococoRef = false;
        }
        if(!this.neumococo3){
            this.neumococoRef = false;
        }
    },
    fillInflueza: function(){
        
        if(!this.influenza1){
            this.influenza2 = false;
            this.influenza3 = false;
            this.influenzaRef = false;
        }
        if(!this.influenza2){
            this.influenza3 = false;
            this.influenzaRef = false;
        }
        if(!this.influenza3){
            this.influenzaRef = false;
        }
    },
    fillDPT: function(){

        if(!this.DPT1){
            this.DPT2 = false;
            this.DPT3 = false;
            this.DPTRef = false;
        }
        if(!this.DPT2){
            this.DPT3 = false;
            this.DPTRef = false;
        }
        if(!this.DPT3){
            this.DPTRef = false;
        }
    },
    fillSPR: function(){

        if(!this.SPR1){
            this.SPR2 = false;
            this.SPR3 = false;
            this.SPRRef = false;
        }
        if(!this.SPR2){
            this.SPR3 = false;
            this.SPRRef = false;
        }
        if(!this.SPR3){
            this.SPRRef = false;
        }
    },
  }
};
</script>
<style scoped>


.cuerpo {
  border: solid #a9a9a9 2px;
  text-align: center;
  margin-left: 5%;
  width: 90%;
  padding: 5%;
  padding-top: 2%;
  padding-bottom: 1%;
}

.encapsulado {
    background-color: white;
  margin: 2%;
  padding: 5%;

}

table.table-bordered > tbody > tr > th {
  border: 3px solid #a9a9a9;
}
table.table-bordered > tbody > tr > td {
  border: 3px solid #a9a9a9;
}

</style>
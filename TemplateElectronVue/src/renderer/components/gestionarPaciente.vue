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
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <h3 style="font-weight: bold;">Paciente: </h3>  
                                                </b-col>
                                                <b-col>
                                                    <h3>{{paciente.nombre}} {{paciente.apellido}}</h3> 
                                                </b-col>
                                            </b-row>
                                            <b-row>
                                            <img style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
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
                                            v-model="paciente.Grupo_De_Sangre"
                                            label="Grupo de sangre"
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
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Transfusiones"
                                            label="Transfuciones"
                                            outline :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                    </b-row>
                                        </b-container>
                                    </div>
                                </b-col>                       
                                <b-col>
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
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Poliovirus</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis A</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis B</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Neumococo</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Influenza</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Diftteria/Tétano/Tosferina(DPT)</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Sarampión/Paperas/RUbeola(SPR)</th>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-2 my-0 ml-2"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 pl-3 my-0 ml-2"></v-checkbox></v-layout></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-ligth" >
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width: 10%" >Éstado</th>
                                            <th scope="row" >Área</th>
                                            <th scope="row" style="width: 20%">Hora estimada</th>
                                            <th scope="row" style="width: 20%">Hora de servicio</th>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>   
                                            </tbody>
                                    </table>
                                </b-col>
                                </b-row>
                                <b-row>
                                    <b-container class="bv-example-row2">
                                        <b-row class="justify-content-md-center">
                                        <b-col>
                                            <button type="button" class="btn btn-lg btn-warning btn-block ml-4" v-on:click="consulta">Dar Consulta</button>
                                        </b-col>
                                        <b-col>
                                            <button type="button" class="btn btn-lg btn-warning btn-block">Historial</button>
                                        </b-col>
                                        <b-col> </b-col>
                                        <b-col> </b-col>
                                        <b-col> </b-col>
                                        </b-row>
                                    </b-container>
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
        }
    }),
    mounted() {
        const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };

        this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {
            console.log("Sali exitoso: " + response.data.Paciente[0]);
            

            if(response.data.Paciente[0] == null){
                console.log('Nothing to do here..');
            }else{
                console.log("Dentro de if");
                this.paciente.nombre = response.data.Paciente[0].Nombre;
                this.paciente.apellido = response.data.Paciente[0].Apellido;
                this.paciente.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
                this.paciente.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
                this.paciente.Procedencia = response.data.Paciente[0].procedencia.Departamento;
                this.paciente.Telefono = response.data.Paciente[0].Telefono;
                this.paciente.Grupo_De_Sangre = response.data.Paciente[0].tipo_de__sangre.significado;
                this.paciente.Estudia = response.data.Paciente[0].estudia.significado;
                this.paciente.Transfusiones = response.data.Paciente[0].transfusiones.significado;
            }
        });
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
      this.$router.push("/Consulta");
    }
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

.posicion {
  position: relative;
}

.centrado {
  vertical-align: middle;
}
</style>
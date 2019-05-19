<template lang="">
    <form class="form-horizontal">
                        <fieldset>
                        <!-- Text input-->
                        <h1 style="text-align: Left;">Consulta</h1>
                        <!-- Text input-->
                        <div class="form-group ">
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
                                                    <h3>Juan García</h3> 
                                                </b-col>
                                                <b-col>
                                                </b-col>
                                            </b-row>
                                            <b-row>
                                            <img style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
                                            </b-row>
                                        </b-container>
                                    </div>
                                    <div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Nombre de Papá: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Nombre de Mamá: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Teléfono: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Grupo de sangre: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Estudia: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Transfuciones: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
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
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Poliovirus</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis A</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis B</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Neumococo</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Influenza</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Diftteria/Tétano/Tosferina(DPT)</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Sarampión/Paperas/RUbeola(SPR)</th>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
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
                                            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="consulta">Dar Consulta</button>
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
export default {
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
<style>
  .cuerpo {
    border: solid #A9A9A9 2px;
    text-align:  center;
    margin-left: 5%;
    width: 90%;
    padding: 5%;
    padding-top: 2%;
    padding-bottom: 1%;
  }

  .encapsulado {
    border: solid #A9A9A9 2px; 
    margin: 2%; padding: 5%; 
    border-radius: 25px;
  }

  table.table-bordered > tbody > tr >th {
    border:1px solid  #A9A9A9;
  }
  table.table-bordered > tbody > tr >td {
    border:1px solid  #A9A9A9;
  }

  .posicion {
      position: relative;
  }

</style>
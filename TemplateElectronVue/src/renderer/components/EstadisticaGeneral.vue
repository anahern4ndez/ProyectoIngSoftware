<template lang="">
	<div>
        <b-container class="containerMenu">

            <!-- FILA 1 variable a estudiar-->
            <b-row align-h="around" align-v="center">
                <b-col>
                    <h2>Ingrese la variable a estudiar:</h2>
                </b-col>

                <b-col>
                    <v-combobox
                        v-model="varEstudio"
                        :items="posiblesVariables"
                        :search-input.sync="search"
                        :hide-selected="hideSelected"
                        label="Seleccione las variables a estudiar."
                        :multiple="multiple"
                        persistent-hint
                        :small-chips="chips"
                        :clearable="clearable"
                    >
                        <template v-if="noData" v-slot:no-data>
                            <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title>
                                No se encontró "<strong>{{ search }}</strong>".
                                </v-list-item-title>
                            </v-list-item-content>
                            </v-list-item>
                        </template>
                    </v-combobox>
                </b-col>
            </b-row>

            <br>
            <!-- FILA 2 condiciones-->
            <b-row align-h="around" align-v="center">
                <b-col>
                    <h2>Ingrese las condiciones:</h2>
                </b-col>

                <b-col>
                    <v-combobox
                        v-model="condiciones"
                        :items="posiblesVariables"
                        :search-input.sync="search"
                        :hide-selected="hideSelected"
                        label="Seleccione las variables a estudiar."
                        :multiple="multiple"
                        persistent-hint
                        :small-chips="chips"
                        :clearable="clearable"
                    >
                        <template v-if="noData" v-slot:no-data>
                            <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title>
                                No se encontró "<strong>{{ search }}</strong>".
                                </v-list-item-title>
                            </v-list-item-content>
                            </v-list-item>
                        </template>
                    </v-combobox>
                </b-col>
            </b-row>


            <hr>

            <b-row v-for="(a,index) in condiciones" :key="index">
                <b-col>
                    {{a}}
                    {{index}}
                </b-col>

                <b-col>
                    <v-select
                    :items="simbolosCondiciones"
                    label="Seleccione uno: "
                    v-model="simboloAgrupacion[index]"
                    ></v-select>
                </b-col>

                <b-col>
                    <v-text-field
                        label="Solo"
                        v-model="textoAgrupacion[index]"
                        placeholder="Ingrese titulo"
                        solo
                    >
                    </v-text-field>
                </b-col>

            </b-row>

            <hr>

            <!-- FILA 3 agrupacion-->
            <b-row align-h="around" align-v="center">
                <b-col>
                    <h2>Ingrese la variable de agrupacion:</h2>
                </b-col>

                <b-col>
                    <v-combobox
                        v-model="agrupacion"
                        :items="posiblesVariables"
                        label="Seleccione las variables de agrupacion."
                    >
                        <template v-if="noData" v-slot:no-data>
                            <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title>
                                No se encontró "<strong>{{ search }}</strong>".
                                </v-list-item-title>
                            </v-list-item-content>
                            </v-list-item>
                        </template>

                    </v-combobox>
                </b-col>
            </b-row>

            <!-- FILA 4-->
            <b-row align-h="around" align-v="center" class="pb-2">
                <v-btn outline color="#303841" v-on:click="prueba">Aceptar</v-btn>
            </b-row>

            <!-- Tabla-->
            <table>
                <thead>
                    <tr>
                        <th class="text-left">Variables</th>
                        <th class="text-left">Condiciones</th>
                        <th class="text-left">Agrupación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(variable,index) in varEstudio">
                        <td>{{variable}}</td>
                        <td>{{condiciones[index]}} {{simboloAgrupacion[index]}} {{textoAgrupacion[index]}}</td>
                        <td>{{agrupacion}}</td>
                    </tr>
                </tbody>
            </table>



        </b-container>
	</div>
</template>


<script>
import { store } from "../main";
var fecha = new Date();

export default {

  data: () => ({
      posiblesVariables: ['Presion Arterial', 'Tipo de sangre', 'Edad', 'Peso'],
      search: null,
      chips: true,
      multiple: true,
      hideSelected: true,
      noData: true,
      clearable: false,
      varEstudio: [],
      condiciones: [],
      agrupacion: "",
      simboloAgrupacion:[],
      textoAgrupacion:[],
      simbolosCondiciones: ["=",">",">=","<","<=","diferente"],
  }),

  watch: {
      switch1(newValue){
        //called whenever switch1 changes
        this.vistaGeneral(newValue);
      }
    },

  computed: {

    //   Método útil en caso de que se usen objetos!
       "columns": function columns() {
            if (this.varEstudio.length == 0) {
                return [];
            }
            return Object.keys(this.varEstudio[0])
        }
  },

  methods: {
      prueba()
      {
          console.log(this.varEstudio);
          console.log(this.agrupacion);
          console.log(this.condiciones);

          console.log(this.simboloAgrupacion[0]);
          console.log(this.textoAgrupacion[1]);
      }

    },

};
</script>


<style>
table {
  font-family: 'Open Sans', sans-serif;
  min-width: 900px;
  border-collapse: collapse;
  border: 3px solid #44475C;
  margin: 10px 10px 0 10px;
}

table th {
  text-transform: uppercase;
  text-align: left;
  background: #44475C;
  color: #FFF;
  padding: 8px;
  min-width: 30px;
}

table td {
  max-width: 100px;
  text-align: left;
  padding: 8px;
  border-right: 2px solid #7D82A8;
}
table td:last-child {
  border-right: none;
}
table tbody tr:nth-child(2n) td {
  background: #D4D8F9;
}


</style>

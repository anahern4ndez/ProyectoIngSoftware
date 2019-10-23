<template lang="">
	<div>
        <b-container class="containerMenu">

            <!-- FILA 1, TÍTULO-->
            <b-row align-h="around" align-v="center">
                <b-col>
                    <h2 class="text-center">INFORMES ESTADÍSTICOS</h2>
                </b-col>
            </b-row>

            <br><hr><br>

            <!-- COLUMNA1, VARIABLES A ESTUDIAR -->
            <b-row align-h="around" align-v="center">
                <b-col>
                    <h3>Ingrese la variable a estudiar:</h3>
                    <br>
                    <v-combobox
                        v-model="varEstudio"
                        :items="posiblesVariables"
                        :search-input.sync="search"
                        :hide-selected="hideSelected"
                        label="Seleccione la data a estudiar."
                        :multiple="multiple"
                        persistent-hint
                        :small-chips="chips"
                        :clearable="clearable"
                        v-on:click=""
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

                <!-- COLUMNA 2, CONDICIONES -->
                <b-col>
                    <h3>Ingrese el tiempo del estudio:</h3>
                    <br>
                    <v-combobox
                        v-model="condiciones"
                        :items="posiblesTiempos"
                        :search-input.sync="search"
                        :hide-selected="hideSelected"
                        label="Seleccione el tiempo de las muestras"
                        :multiple="multiple"
                        persistent-hint
                        :small-chips="chips"
                        :clearable="clearable"
                         v-on:click=""
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

            <!-- ESPECIFICACIÓN DE LAS CONDICIONES -->
            <h4 v-if="this.condiciones.length > 0">Por favor, especifique las condiciones seleccionadas:</h4>
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

            <br>

            <!-- FILA 3, BOTON DE ACEPTAR/CANCELAR -->
            <b-row align-v="center" class="text-center">
                <b-col order="4">
                    <v-btn outline color="#303841" v-on:click="concatenar">Abrir Documento</v-btn>
                    <v-btn outline color="#303841" v-on:click="clearData">Cancelar</v-btn>
                </b-col>
            </b-row>
        </b-container>
	</div>
</template>


<script>
import { store } from "../main";
var fecha = new Date();

export default {

  data: () => ({
      posiblesVariables: ['Acciones', 'Consultas', 'Datos generales', 'Pacientes', 'Citas'],
      posiblesTiempos: ['Mes pasado', '3 meses', '6 meses', '1 año', '2 años', 'Toda la data'],
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
      variablesEstudio: "",
      variablesCondiciones: "",

    //   Variable solo para hacer pruebas
      showTable: false,

    // Ejemplo de un array de objetos
      rows: [
      { id: 1, name: "Chandler Bing", phone: '305-917-1301', profession: 'IT Manager' },
      { id: 2, name: "Ross Geller", phone: '210-684-8953', profession: 'Paleontologist' },
      { id: 3, name: "Rachel Green", phone: '765-338-0312', profession: 'Waitress'},
      { id: 4, name: "Monica Geller", phone: '714-541-3336', profession: 'Head Chef' },
      { id: 5, name: "Joey Tribbiani", phone: '972-297-6037', profession: 'Actor' },
      { id: 6, name: "Phoebe Buffay", phone: '760-318-8376', profession: 'Masseuse' }
    ]
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
      },

      concatenar()
      {
            this.variablesEstudio = "";
            this.variablesCondiciones = "";

            if (this.varEstudio.length > 0)
            {
                for (let i = 0; i < this.varEstudio.length; i++) {
                    if (i == this.varEstudio.length - 1)
                        this.variablesEstudio += this.varEstudio[i];
                    else
                        this.variablesEstudio += this.varEstudio[i] + "; ";
                }
            }

            if (this.condiciones.length > 0)
            {
                for (let i = 0; i < this.condiciones.length; i++) {
                    if (i == this.condiciones.length - 1)
                        this.variablesCondiciones += this.condiciones[i] + " " + this.simboloAgrupacion[i] + " " + this.textoAgrupacion[i];
                    else
                        this.variablesCondiciones += this.condiciones[i] + " " + this.simboloAgrupacion[i] + " " + this.textoAgrupacion[i] + "; ";
                }
            }

            this.guardarDatos();
      },

    // En esta función iría todo el backend para insertar en array de objetos y extraer de bd.
      guardarDatos()
      {
          this.showTable = true;
      },

      clearData()
      {
          this.varEstudio = [];
          this.condiciones = [];
          this.agrupacion = "";
          this.variablesEstudio = "";
          this.variablesCondiciones = "";
          this.showTable = false;

          this.concatenar();
      }

    },

};
</script>


<style scoped>
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

<template lang="">
	<div onload="obtenerNombre">
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
                </b-col> 

                <b-col>
                    <v-select
                    :items="simbolosCondiciones"
                    label="Seleccione uno: "
                    v-model="a.simbolo"
                    ></v-select>
                </b-col>    

                <b-col>
                    <v-text-field
                        label="Solo"
                        v-model="a.text"
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

            <!-- FILA 2-->
            <b-row align-h="around" align-v="center" class="pb-2">
                <v-btn outline color="#303841" v-on:click="prueba">Aceptar</v-btn>                
            </b-row>


            <!-- Tabla-->
            <b-row align-h="around" align-v="center" class="pb-2">        
            </b-row>



        </b-container>
	</div>
</template>


<script>
import { store } from "../main";
var fecha = new Date();

export default {

  data: () => ({
      posiblesVariables: ['Presion Arterial', 'Tipo de sango', 'Edad', 'Peso'],
      search: null,
      chips: true,
      multiple: true,
      hideSelected: true,
      noData: true,
      clearable: false,
      varEstudio: [],
      condiciones: [],
      agrupacion: [],
      simbolosCondiciones: ["=",">",">=","<","<=","diferente"]
  }),

  watch: {
      switch1(newValue){
        //called whenever switch1 changes
        this.vistaGeneral(newValue);
      }
    },

  computed: {
  },

  methods: {
      prueba()
      {
          
          console.log(this.varEstudio);
          console.log(this.agrupacion);
          console.log(this.condiciones);
          
      }

    },

};
</script>


<style>

</style>

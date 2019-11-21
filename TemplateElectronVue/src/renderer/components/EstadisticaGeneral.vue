<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Estadísticas Generales</h1>
        <br>
        <b-container class="text-center" fluid>
            <b-row>
                <b-col class="titulo1">
                    <div>Variable de estudio</div>
                    <br>
                    <v-combobox
                    :items="posiblesVariables"
                    v-on:change="changeDisableVariable"
                    v-model="selectVariable"
                    label="Elija la variable a estudiar">
                    </v-combobox>
                    <br>
                </b-col>
                <b-col cols="1" class="titulo1">
                </b-col>
                <b-col class="titulo1">
                    <div>Tiempo de recolección de datos</div>
                    <br>
                    <v-combobox
                    :items="posiblesTiempos"
                    v-on:change="changeDisableTiempo"
                    v-model="selectTiempo"
                    label="Elija el formulario que desea subir">
                    </v-combobox>
                    <br>
                    <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeForm" ref="changeForm"/>
                </b-col>
            </b-row>
            <v-btn text large color="yellow" type="button" v-on:click="startExcel" :disabled='isDisabledButton'>Abrir formulario</v-btn>
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
      clearable: false,
      selectVariable: ' ',
      selectTiempo: ' ',
      isDisabledAbrir: true,
      isDisabledTiempo: true,
      isDisabledButton: true,
      nombreArchivo: 'Citas.csv',
  }),

  methods:{
    startExcel(){
        this.isDisabledSubir = false;
        this.isDisabledSubirForm = false;
        this.exit = false;

        const {shell} = require('electron');
        var fs = require('fs');
        var dir = process.cwd();

        dir = dir.concat('\\src\\CSVs\\',this.nombreArchivo);
        // console.log(dir)
        shell.openItem(dir);
    },
    changeDisableVariable(event){
        if (this.selectVariable !== ' ' || this.selectVariable !== null)
            this.isDisabledAbrir = false
        else
            this.isDisabledAbrir = true
        this.enableButton()
        console.log(this.selectVariable)
    },
    changeDisableTiempo(event){
        if (this.selectTiempo !== ' ' || this.selectTiempo !== null)
            this.isDisabledTiempo = false
        else
            this.isDisabledTiempo = true
        this.enableButton()
        console.log(this.selectTiempo)
    },
    enableButton(){
        if (!this.isDisabledAbrir && !this.isDisabledTiempo)
            this.isDisabledButton = false
        else
            this.isDisabledButton = true
    },

    formClick: function(event){ // on a click on the button with id 'one'
        const btn = this.$refs.changeForm
        btn.click(); // trigger the click on second, and go on 
    },
    changeForm: function(event) {
        var input = event.target;

        this.path = input.files[0].path;
        console.log(this.path);
        input.value = '';
    },
}

};
</script>


<style scoped>
.titulo1{
    font-size: 20px;
}
</style>

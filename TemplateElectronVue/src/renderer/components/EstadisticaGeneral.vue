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
            <v-btn text large color="yellow" type="button" v-on:click="startWord" :disabled='isDisabledButton'>Abrir formulario</v-btn>
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
  }),

  methods:{
    startWord(strFile){
        this.isDisabledSubir = false;
        this.isDisabledSubirForm = false;
        this.exit = false;

        const {shell} = require('electron');
        var fs = require('fs');
        var dir = process.cwd();

        var dirCopy;
        if(this.selectVariable === 'Peritonitis'){
            //dir += this.direccionPeritonitis;
            this.nombreNuevoFormulario = this.direccionPeritonitis.concat('_',this.name,'_',this.apellido,'_',this.fecha,'.docx');
            dirCopy = this.dirPeritonitis;
        }
        else if(this.selectVariable === 'Trasplante renal'){
            //dir += this.direccionTransplanteRenal;
            this.nombreNuevoFormulario = this.direccionTransplanteRenal.concat('_',this.name,'_',this.apellido,'_',this.fecha,'.docx');
            dirCopy = this.dirTransplanteRenal;
        }
        else if(this.selectVariable === 'Transfusión'){
            //dir += this.direccionTransfusion;
            this.nombreNuevoFormulario = this.direccionTransfusion.concat('_',this.name,'_',this.apellido,'_',this.fecha,'.docx');
            dirCopy = this.dirTransfusion;
        }
        else if(this.selectVariable === 'Hemodialisis'){
            //dir += this.direccionHemodialisis;
            this.nombreNuevoFormulario = this.direccionHemodialisis.concat('_',this.name,'_',this.apellido,'_',this.fecha,'.docx');
            dirCopy = this.dirHemodialisis;
        }
        else if(this.selectVariable === 'Mortalidad'){
            //dir += this.direccionMortalidad;
            this.nombreNuevoFormulario = this.direccionMortalidad.concat('_',this.name,'_',this.apellido,'_',this.fecha,'.docx');
            dirCopy = this.dirMortalidad;
        }
        // Se sacara una copia del archivo original y se pondra en uno NUEVO
        fs.copyFile(dirCopy, this.nombreNuevoFormulario, (err) => {
            if (err) throw err;
            console.log('Archivo copiado con Exito');
            this.path = dir.concat('\\',this.nombreNuevoFormulario);
            shell.openItem(this.nombreNuevoFormulario);
        });
    },
    changeDisableVariable(event){
        if(this.selectVariable !== ' '){
            this.isDisabledAbrir = false
        }
        else{
            this.isDisabledAbrir = false
        }
        this.enableButton()
    },
    changeDisableTiempo(event){
        if(this.selectTiempo !== ' '){
            this.isDisabledTiempo = false
        }
        else{
            this.isDisabledTiempo = true
        }
        this.enableButton()
    },
    enableButton(){
        if (!this.isDisabledAbrir && !this.isDisabledTiempo)
            this.isDisabledButton = false
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

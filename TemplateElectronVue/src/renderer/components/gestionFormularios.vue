<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Gestión de formularios</h1>
        <br>
        <b-container class="text-center" fluid>
            <b-row>
                <b-col class="titulo1">
                    <div>Llenar formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    v-on:change="changeDisableAbrir"
                    v-model="selectAbrir"
                    label="Elija el formulario que desea abrir para llenar">
                    </v-combobox>
                    <br>
                    <!-- <v-btn text large color="yellow" type="button" href='ms-word:ofv|u|file:./CHOL.docx' >Abrir formulario</v-btn> -->
                    <v-btn text large color="yellow" type="button" v-on:click="startWord" :disabled='isDisabledAbrir'>Abrir formulario</v-btn>
                </b-col>
                <b-col cols="1" class="titulo1">

                </b-col>
                <b-col class="titulo1">
                    <div>Guardar y subir formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    v-on:change="changeDisableSubir"
                    v-model="selectSubir"
                    label="Elija el formulario que desea subir">
                    </v-combobox>
                    <br>
                    <v-btn text large color="yellow" @click="formClick" :disabled='isDisabledSubir'>Elegir formulario</v-btn>
                    <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeForm" ref="changeForm"/>
                    <v-btn text large color="yellow" @click="subirFormulario" ref="path" :disabled='isDisabledSubirForm'>Subir formulario</v-btn>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
                formulario: null,
                selectAbrir: ' ',
                selectSubir: ' ',
                items: [
                'Peritonitis',
                'Transplante renal',
                'Transfusión',
                'Hemodialisis',
                'Mortalidad',
                ],
                path: ' ',
                // referencia: 'ms-word:ofv|u|file:///C:/Users/Ulises/Desktop/CHOL.docx hola',
                referencia: 'ms-word:ofv|u|file:../TemplateElectronVue/CHOL.docx',
                isDisabledAbrir: true,
                isDisabledSubir: true,
                isDisabledSubirForm: true,
            };
        },
        methods:{
            startWord(strFile){
                //var myApp = new ActiveXObject("Word.Application");
                const {shell} = require('electron');
                var fs = require('fs');

                var dir = process.cwd();
                dir += '\\CHOL.docx'

                console.log(dir);
                shell.openItem(dir);

                // Se sacara una copia del archivo original y se pondra en uno NUEVO
                fs.copyFile('CHOL.docx', 'Nuevo.docx', (err) => {
                    if (err) throw err;
                    console.log('Archivo copiado con Exito');
                });
            },
            changeDisableAbrir(event){
                if(this.selectAbrir !== ' '){
                    this.isDisabledAbrir = false
                }
            },
            changeDisableSubir(event){
                if(this.selectSubir !== ' '){
                    this.isDisabledSubir = false,
                    this.isDisabledSubirForm = false
                }
            },
            subirFormulario(){
                if(this.path === ' '){
                    // Mostrar Alerta
                    console.log("No se pudo subir Formulario")
                }
                else{
                    // Subir Documento al servidor
                    // Mostrar mensaje de subida con exito
                   console.log("Se subio el Formulario: "+this.path)
                }
            },
            formClick: function(event){ // on a click on the button with id 'one'
                const btn = this.$refs.changeForm
                btn.click(); // trigger the click on second, and go on 
            },
            changeForm: function(event) {
                var input = event.target;
                //console.log(input.files)
                //Este es el path del documento
                this.path = input.files[0].path;
                console.log(this.path);
                input.value = '';

                /* try
                {

                    var shell = require('shelljs');
                    let nodePath = (shell.which('node').toString());
                    shell.config.execPath = nodePath;

                    const ipServer = '192.168.0.156';
                    const serverPassword = 'perritoUVG';
                    const pcPath = this.path;
                    const serverUser = 'adminlocal';
                    const serverPath = '/home/adminlocal/Dowloads';

                    var string =`pscp -pw ${serverPassword} "${pcPath}" ${serverUser}@${ipServer}:${serverPath}`;

                    shell.exec(string);

                } catch (error)
                {
                    console.log("Error al subir imagen al servidor");
                }*/
            },
        }
    };

</script>


<style>
.titulo1{
    font-size: 20px;
}
</style>
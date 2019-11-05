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
                    <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="">Prueb</button> 
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
                // referencia: 'ms-word:ofv|u|file:///C:/Users/Ulises/Desktop/CHOL.docx',
                referencia: 'ms-word:ofv|u|file:../TemplateElectronVue/CHOL.docx',
                isDisabledAbrir: true,
                isDisabledSubir: true,
                isDisabledSubirForm: true,
                direccionCHOL: '\\CHOL.docx',
                dirCHOL: 'CHOL.docx',
                direccionPeritonitis: '\\Peritonitis.docx',
                dirPeritonitis: 'Peritonitis.docx',
                direccionTransplanteRenal: '\\TransplanteRenal.docx',
                dirTransplanteRenal: 'TransplanteRenal.docx',
                direccionTransfusion: '\\Transfusion.docx',
                dirTransfusion: 'Transfusion.docx',
                direccionHemodialisis: '\\Hemodialisis.docx',
                dirHemodialisis: 'Hemodialisis.docx',
                direccionMortalidad: '\\Mortalidad.docx',
                dirMortalidad: 'Mortalidad.docx', 
            };
        },
        methods:{
            startWord(strFile){
                //var myApp = new ActiveXObject("Word.Application");
                const {shell} = require('electron');
                var fs = require('fs');

                var dir = process.cwd();
                dir += this.direccionCHOL;

                var dirCopy;

                if(this.selectAbrir === 'Peritonitis'){
                    dir += this.direccionPeritonitis;
                    dirCopy = this.dirPeritonitis;
                }
                else if(this.selectAbrir === 'Transplante renal'){
                    dir += this.direccionTransplanteRenal;
                    dirCopy = this.dirTransplanteRenal;
                }
                else if(this.selectAbrir === 'Transfusión'){
                    dir += this.direccionTransfusion;
                    dirCopy = this.dirTransfusion;
                }
                else if(this.selectAbrir === 'Hemodialisis'){
                    dir += this.direccionHemodialisis;
                    dirCopy = this.dirHemodialisis;
                }
                else if(this.selectAbrir === 'Mortalidad'){
                    dir += this.direccionMortalidad;
                    dirCopy = this.dirMortalidad;
                }

                // Se sacara una copia del archivo original y se pondra en uno NUEVO
                fs.copyFile(dirCopy, 'CopiaFormulario.docx', (err) => {
                    if (err) throw err;
                    console.log('Archivo copiado con Exito');
                    console.log(dirCopy);
                    shell.openItem('CopiaFormulario.docx');
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
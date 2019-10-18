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
                    label="Elija el formulario que desea abrir para llenar">
                    </v-combobox>
                    <br>
                    <!-- <v-btn text large color="yellow" type="button" href='ms-word:ofv|u|file:./CHOL.docx' >Abrir formulario</v-btn> -->
                    <v-btn text large color="yellow" type="button" href='ms-word:ofv|u|file:///C:/Users/Ulises/Desktop/CHOL.docx' >Abrir formulario</v-btn>
                </b-col>
                <b-col cols="1" class="titulo1">

                </b-col>
                <b-col class="titulo1">
                    <div>Guardar y subir formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    label="Elija el formulario que desea subir">
                    </v-combobox>
                    <br>
                    <v-btn text large color="yellow" @click="imgClick">Subir formulario</v-btn>
                    <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeImg" ref="changeImg"/>
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
                select: 'Peritonitis',
                items: [
                'Peritonitis',
                'Transplante renal',
                'Transfusion',
                'Hemodialisis',
                'Mortalidad',
                'Hemodialisis',
                ],
                path: '',
            };
        },
        methods:{
            startWord(strFile){
                //var myApp = new ActiveXObject("Word.Application");
                var myApp
                if (myApp != null)
                {
                myApp.Visible = true;
                myApp.Documents.Open(strFile);
                }
            },
            imgClick: function(event){ // on a click on the button with id 'one'
                const btn = this.$refs.changeImg
                btn.click(); // trigger the click on second, and go on 
            },
            changeImg: function(event) {
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
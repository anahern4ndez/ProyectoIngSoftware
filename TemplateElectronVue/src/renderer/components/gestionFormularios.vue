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
                </b-col>
                <b-col cols="1" class="titulo1">
                    <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="">Prueb</button> 
                </b-col>
                <b-col class="titulo1">
                    <div>Guardar y subir formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    label="Elija el formulario que desea subir">
                    </v-combobox>
                    <br>
                    <v-btn text large color="yellow">Subir formulario</v-btn>
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
            load(){
                let routeData = this.$router.resolve({name: '/Consulta'});
                window.open(routeData.href, '_blank');
            }
        }
    };

</script>


<style>
.titulo1{
    font-size: 20px;
}
</style>
<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
    <div>
        <h1 class ="headers">Hemodiálisis</h1>  
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab v-for="(paciente) in this.pacientes" :key="paciente.nombre" :title="paciente.Nombre">
                <div class="cuerpo">
                    <form class="form-horizontal">
                        <fieldset>
                            <b-container class="bv-example-row1" >
                                <v-card>  
                                    <v-card-title primary-title>
                                        <h2 class="headers">Datos de paciente</h2>
                                        <v-flex xs12>
                                            <v-layout align-center justify-end column fill-height />
                                            <div class="DatosPaciente">
                                                <!-- imagen paciente -->
                                                <div v-if="paciente.Imagen">
                                                    <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" :src="paciente.Imagen" alt="" width="273" height="183">
                                                </div>
                                                <div v-else> <!-- se utiliza la imagen default si no se ha escogido una  -->
                                                    <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" src="../assets/default.png" alt="" width="273" height="183">
                                                </div>
                                                <!-- demas datos -->
                                                <div style="float:left; width: 50%">
                                                    <h4 id="headers">Nombres </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Nombre}}</h3>
                                                    <h4 id="headers">Apellidos </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Apellido}}</h3>
                                                    <h4 id="headers"> CUI </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.CUI}}</h3>
                                                    <h4 id="headers"> Estado </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.EstadoActual}}</h3>
                                                </div>
                                                <div style="float:left; width: 50%">
                                                    <h4 id="headers"> Edad </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Edad}}</h3>
                                                    <h4 id="headers"> Número telefónico </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Telefono}}</h3>
                                                    <h4 id="headers"> Nombre del padre </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Nombre_de_padre}}</h3>
                                                    <h4 id="headers"> Nombre de la madre </h4>
                                                    <h3 class="subheading font-weight-light" style="padding-left:10%"> {{paciente.Nombre_de_madre}}</h3>
                                                </div>
                                            </div>
                                        </v-flex>
                                    </v-card-title>
                                </v-card>
                            </b-container>
                        </fieldset>
                    </form>
                </div>
            </b-tab>
        </b-tabs>
    </div>
</template>

<script>
export default {
    mounted(){
        this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
            this.pacientes = response.data.Pacientes;
        });
        this.getTodaysDate();
    },
    data(){
        return{
            pacientes: [],
            todaysDate: '',
        }
    },
    methods: {
        getTodaysDate(){
            const daysOfWeek = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            const months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre','octubre', 'noviembre', 'diciembre']
            const engDateMonth = new Date().getUTCMonth();
            const engDateDay = new Date().getDay();
            const engDateYear = new Date().getFullYear();
            const engDateDate = new Date().getDate();
            this.todaysDate = ''.concat(daysOfWeek[engDateDay], ', ', engDateDate, ' de ',  months[engDateMonth], ' del ', engDateYear);
        }
    }
}
</script>
<style scoped>
.DatosPaciente {
    padding-left:3%;
    padding-right:8%;
    padding-top:2%;
    padding-bottom:5%;
    display: grid;
    grid-gap: 30px 5%;
    grid-template-columns: 40% 30% 30%;
}
.cuerpo {
    border: solid #a9a9a9 2px;
    text-align: center;
    margin-left: 5%;
    width: 90%;
    padding: 5%;
    padding-top: 2%;
    padding-bottom: 1%;
    }
h4 .headers{
    font-family: Nunito;
    font-weight: bolder;
    font-size: medium;
}
.headers{
    font-family: Nunito;
    font-weight: bolder;
}
</style>
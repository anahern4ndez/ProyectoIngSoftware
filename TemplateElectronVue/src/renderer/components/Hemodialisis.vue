<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
    <div>
        <h1 class ="headers">Hemodiálisis</h1>  
        <!--b-tabs-title> Pacientes agendados para hoy: {{todaysDate}}</b-tabs-title-->
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab v-for="(paciente) in this.pacientes" :key="paciente.nombre" :title="paciente.Nombre">
                <div class="cuerpo">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="encapsulado">
                                <h2 class="headers">Datos de paciente</h2>
                                <br><br><br>
                                <div class="DatosPaciente">
                                    <!-- imagen paciente -->
                                    <div v-if="paciente.Imagen">
                                        <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" :src="paciente.Imagen" alt="" width="273" height="183">
                                    </div>
                                    <div v-else> <!-- se utiliza la imagen default si no se ha escogido una  -->
                                        <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" src="../assets/default.png" alt="" width="273" height="183">
                                    </div>
                                    <!-- demas datos -->
                                    <div>
                                        <v-text-field
                                            :value="paciente.Nombre"
                                            label="Nombre"
                                            filled
                                            disabled
                                        ></v-text-field>
                                        <v-text-field
                                            :value="paciente.Apellido"
                                            label="Apellido"
                                            filled
                                            disabled
                                        ></v-text-field>
                                        <v-text-field
                                            :value="paciente.CUI"
                                            label="CUI"
                                            filled
                                            disabled
                                        ></v-text-field>
                                        <v-text-field
                                            :value="paciente.EstadoActual"
                                            label="Estado"
                                            filled
                                            disabled
                                        ></v-text-field>
                                    </div>
                                    <div>
                                        <v-text-field
                                            :value="paciente.Edad"
                                            label="Edad"
                                            filled
                                            disabled
                                        ></v-text-field>
                                        <v-text-field
                                            :value="paciente.Telefono"
                                            label="Telefono"
                                            filled
                                            disabled
                                        ></v-text-field>
                                        <v-text-field
                                            :value="paciente.Nombre_de_padre"
                                            label="Nombre de padre"
                                            filled
                                            disabled
                                        ></v-text-field><v-text-field
                                            :value="paciente.Nombre_de_madre"
                                            label="Nombre de madre"
                                            filled
                                            disabled
                                        ></v-text-field>
                                    </div>
                                </div>
                            </div>
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
    display: grid;
        /*  between rows, between columns */
    grid-gap: 10px 5%;
    grid-template-columns: 35% 28% 28%;
}
.cuerpo {
    border: solid #a9a9a9 2px;
    text-align: center;
    margin-left: 5%;
    width: 90%;
    padding: 0.2%;
    padding-top: 2%;
    padding-bottom: 1%;
}
.encapsulado {
    background-color: white;
    margin: 2%;
    padding: 5%;
    padding-top: 2%;
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
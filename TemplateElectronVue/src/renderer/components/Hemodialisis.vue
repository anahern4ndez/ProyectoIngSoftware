<template>
    <div class="grey--text text--darken-2">
        <h1>Toma de datos - Hemodialisis</h1>

        <v-card>
            <v-toolbar flat color="primary">
                <v-toolbar-title>Pacientes agendados</v-toolbar-title>
                <v-tabs vertical>
                    <v-tab v-for="(pacientes) in this.pacientes[0]" :key="pacientes.nombre">{{pacientes.Nombre}}</v-tab>
                </v-tabs>
            </v-toolbar>
        </v-card>

    </div>
</template>

<script>
export default {
    mounted(){
        this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
        //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      
            this.pacientes = response.data.Pacientes;
            //objeto utilizado para los labels..
            if (response.data.Pacientes[0] == null){
                console.log('Nothing to do here..');
            } else {
                this.selectedPatients.Nombre = response.data.Pacientes[0].Nombre;
                this.selectedPatients.Apellido = response.data.Pacientes[0].Apellido;
                this.selectedPatients.Edad = response.data.Pacientes[0].Edad;
                this.selectedPatients.CUI = response.data.Pacientes[0].CUI;
                this.selectedPatients.Telefono = response.data.Pacientes[0].Telefono;
                this.imageData = response.data.Pacientes[0].Imagen;
                
            }
        });
    },
    data(){
        return{
            pacientes: [],
            selectedPatients:{
                Nombre: '',
                Apellido: '',
                EstadoActual: '',
                Edad: '',
                Telefono: '',
                CUI: ''
            },
            imageData: ''
        }
    },
    methods: {

    }
}
</script>
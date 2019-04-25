<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Ingresar a un paciente</h1>

    <b-container class="bv-example-row1">
      <b-row align-h="around" align-v="center">
        <b-col order="2" cols="10">
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3  class="text-xs-center">Datos Personales</h3>
                <div> {{ card_text }} </div>
              </div>
            </v-card-title>
          </v-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
      //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      this.pacientes = response.data.Pacientes;

    });
  },
    data () {
      return {
        search:'',        
        //datos del paciente a ingresar
        Nombre:'', 
        Apellido:'', 
        Fecha_de_nacimiento:'',
        Procedencia:'',
        Nombre_de_padre:'',
        Nombre_de_madre:'',
        Telefono:'',
        Edad: '',
        Sindrome_Clinico_Presentacion: '',
        Dx_Definitivo:'',
        Dx_Asociados:'',
        CUI: '',
        Imagen:'None (por ahora)',
        Tipo_de_Sangre: '',
        Estudia: '',
        Transfusiones:'',
        EstadoActual:'',
        Sexo:'',
        selected: null,
        pacientes: []
      }
  },
    methods: {
        //para filtrar los datos de la tabla
    }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>

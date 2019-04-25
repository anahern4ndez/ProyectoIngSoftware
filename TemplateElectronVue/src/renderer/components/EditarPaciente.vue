<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Editar datos del paciente</h1>
    </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
      //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      this.pacientes = response.data.Pacientes;
      console.log(this.pacientes);
      //asi se deberia recorrer la shit esta:
      /**
      * <v-for='paciente in Pacientes'>
          <p>{{paciente.nombre}}</p>
          <p>{{paciente.apellido}}</p>
          .
          .
          .

      * 
       */

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


<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Pacientes</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="2" cols="10">
                <div class="Tabla">
                    <v-text-field
                        v-model="search"
                        label="Búsqueda por nombre, apellido o número de CUI"
                        outline
                    ></v-text-field>
                    <v-data-table
                        :headers="headers"
                        :items="pacientes"
                        :search="search"
                    >
                        <template slot="items" slot-scope="props">
                        <td class="text-xs-center">{{ props.item.id }}</td>
                        <td class="text-xs-center">{{ props.item.Nombre }}</td>
                        <td class="text-xs-center">{{ props.item.Apellido }}</td>
                        <td class="text-xs-center">{{ props.item.Nombre_de_padre }}</td>
                        <td class="text-xs-center">{{ props.item.Fecha_de_nacimiento }}</td>
                        </template>
                        <!-- cuando la busqueda no tenga resultados -->
                        <template v-slot:no-results>
                            <v-alert :value="true" color="error">
                            No se ha encontrado un paciente que tenga "{{ search }}" en su información.
                            </v-alert>
                        </template>
                    </v-data-table>
                </div>
                    <form>
                        <div class="form-group">
                            <br>
                            <br>
                            <br>
                        <h2>Nombres </h2>
                        <h3 class="subheading font-weight-light"> Aqui van los nombres del paciente</h3>
                        </div>
                        <div class="form-group" >
                            <h2>Apellidos </h2>
                            <h3 class="subheading font-weight-light"> Aqui van los apellidos del paciente</h3>
                        </div>
                        <div class="form-group">
                            <h2> CUI </h2>
                            <h3 class="subheading font-weight-light"> Aqui va el número de CUI del paciente</h3>
                        </div>
                        <div class="form-group">
                            <h2> Estado </h2>
                            <h3 class="subheading font-weight-light"> Aqui va el estado actual del paciente</h3>
                        </div>
                        <div>
                            <h2> Edad </h2>
                            <h3 class="subheading font-weight-light"> Aqui va la edad del paciente</h3>
                        </div>
                        <div>
                            <h2> Número telefónico </h2>
                            <h3 class="subheading font-weight-light"> Aqui va el número de teléfono (emergencia) del paciente</h3>
                        </div>
                        <div>
                            <h2> Nombre del padre </h2>
                            <h3 class="subheading font-weight-light"> Aqui va el nombre del paciente</h3>
                        </div>
                        <div>
                            <h2> Nombre de la madre </h2>
                            <h3 class="subheading font-weight-light"> Aqui va el nombre de la madre paciente</h3>
                        </div>
                    </form>
                
                </b-col>
            </b-row>
        </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
            <b-col order="4" cols="6">
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="darConsulta"> Dar consulta </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Eliminar paciente</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="editarDatos"> Editar datos</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="archivos"> Archivos </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="reportes"> Reporte</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="estadisticas"> Estadísticas </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="casoslegales"> Casos legales</button>
            </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
      //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      
      this.pacientes = response.data.Pacientes;
      //var paciente;
      //asi se deberia recorrer la shit esta:
      /**for (var paciente in this.lista){
          this.pacientes.push({ 'nombre': paciente.Nombre,
              apellido: paciente.Apellido,
              pais_nacimiento: paciente.Procedencia,
              fecha_nacimiento: paciente.Fecha_de_nacimiento})
        }
        console.log(this.pacientes)*/
    });
  },
    data () {
      return {
        search:'',
        selected: null,
        lista: [],
        headers: [
          {
            text: 'CUI (ID)',
            align: 'center',
            value: 'id'
          },
          { text: 'Nombre', align: 'center', value: 'nombre' },
          { text: 'Apellido', align: 'center', value: 'apellido' }, 
          { text: 'Procedencia', align: 'center', value: 'pais_nacimiento' },
          { text: 'Fecha de nacimiento', align: 'center', value: 'fecha_nacimiento' },
        ],
        pacientes: []
      }
  },
    methods: {
        //para filtrar los datos de la tabla
        ingresarNuevo(){
          this.$router.push('/IngresarPaciente');
        },
        // falta vista para dar una consulta
        darConsulta(){
          this.$router.push('/IngresarPaciente');
        },
        eliminar(){
          this.$router.push('/IngresarPaciente');
        },
        editarDatos(){
          this.$router.push('/EditarPaciente');
        },
        casoslegales(){
          this.$router.push('/EditarPaciente');
        },
        archivos(){
          this.$router.push('/IngresarPaciente');
        },
        reportes(){
          this.$router.push('/EditarPaciente');
        },
        estadisticas(){
          this.$router.push('/EditarPaciente');
        }
        
        
    }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>

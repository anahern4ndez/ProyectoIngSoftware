
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
                        <td class="text-xs-center">{{ props.item.nombre }}</td>
                        <td class="text-xs-center">{{ props.item.apellido }}</td>
                        <td class="text-xs-center">{{ props.item.pais_nacimiento }}</td>
                        <td class="text-xs-center">{{ props.item.fecha_nacimiento }}</td>
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
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="crear">Ingresar nuevo paciente</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="crear"> Dar consulta </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Eliminar paciente</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Editar datos</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Archivos </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Reporte</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Estadísticas </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar"> Casos legales</button>
            </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
export default {
    data () {
      return {
        search:'',
        id:'',
        name:'',
        email:'',
        password:'',
        selected: null,
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
        pacientes: [
          {
            id: 1,
            nombre: 'Frozen Yogurt',
            apellido: 159,
            pais_nacimiento: 9.0,
            fecha_nacimiento: 24,
          },
          {
            id: 2,
            nombre: 'Ice cream sandwich',
            apellido: 237,
            pais_nacimiento: 6.0,
            fecha_nacimiento: 37,
          },
          {
            id: 3,
            nombre: 'Eclair',
            apellido: 262,
            pais_nacimiento: 16.0,
            fecha_nacimiento: 23,
          },

          {
            id: 4,
            nombre: 'Cupcake',
            apellido: 305,
            pais_nacimiento: 3.7,
            fecha_nacimiento: 67
          },
          {
            id: 5,
            nombre: 'Gingerbread',
            apellido: 356,
            pais_nacimiento: 16.0,
            fecha_nacimiento: 49
          },
          {
            id: 6,
            nombre: 'Jelly bean',
            apellido: 375,
            pais_nacimiento: 0.0,
            fecha_nacimiento: 94
          },
          {
            id: 7,
            nombre: 'Lollipop',
            apellido: 392,
            pais_nacimiento: 0.2,
            fecha_nacimiento: 98
          },
          {
            id: 8,
            nombre: 'Honeycomb',
            apellido: 408,
            pais_nacimiento: 3.2,
            fecha_nacimiento: 87
          },
          {
            id: 9,
            nombre: 'Donut',
            apellido: 452,
            pais_nacimiento: 25.0,
            fecha_nacimiento: 51
          },
          {
            id: 10,
            nombre: 'KitKat',
            apellido: 518,
            pais_nacimiento: 26.0,
            fecha_nacimiento: 65
          }
        ]
      }
  },
    methods: {
        //para filtrar los datos de la tabla
        eliminar(){
        this.$http.delete(`http://localhost:8000/users/destroy?id=${this.id}`).then(response=>{});
        },
        crear(){
        this.$http.post(`http://localhost:8000/users/create?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}`).then(response=>{});
        },
        modificar(){
        this.$http.put(`http://localhost:8000/users/update?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}`).then(response=>{});
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

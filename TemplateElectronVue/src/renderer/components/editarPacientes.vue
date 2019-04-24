<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Pacientes</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
            <input v-model="search" class="form-control" placeholder="Buscar por nombre, apellido a número CUI">
            <br>
            <br>
            <br>
            <v-data-table
                :headers="headers"
                :items="pacientes"
                class="elevation-1"
            >
                <template v-slot:items="props">
                <td>{{ props.item.id }}</td>
                <td class="text-xs-center">{{ props.item.nombre }}</td>
                <td class="text-xs-center">{{ props.item.apellido }}</td>
                <td class="text-xs-center">{{ props.item.pais_nacimiento }}</td>
                <td class="text-xs-center">{{ props.item.fecha_nacimiento }}</td>
                </template>
            </v-data-table>
          <b-col order="1" cols="5">
            <form>
              <div class="form-group">
                <br>
                <br>
                <br>
              <h1>Nombre</h1>
              <h2 class="subheading font-weight-light">  Aqui va el nombre del paciente</h2>
              </div>
              <div class="form-group" >
                <label for="dpiInput">DPI</label>
                <input id="dpiInput" type="text" v-model="id" class="form-control" placeholder="DPI">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input
                  id="emailInput"
                  type="email"
                  v-model="email"
                  class="form-control"
                  placeholder="Correo Electronico"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input
                  id="passwordInput"
                  type="password"
                  v-model="password"
                  class="form-control"
                  placeholder="Contraseña"
                >
              </div>
              <div>
                <label for="levelInput">Tipo de usuario</label>
                <b-form-select id="levelInput" v-model="selected" class="mb-3">
                  <option value="Doctor">Doctor</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Secretaria">Secretaria</option>
                  <option value="Visitante">Visitante</option>
                  <option value="Asistente">Asistente</option>
                </b-form-select>
              </div>
            </form>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
          <b-col>
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="crear">Crear</button>
          </b-col>
          <b-col>
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="modificar">Modificar</button>
          </b-col>
          <b-col>
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar" >Eliminar</button>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/users").then(response => {
      this.user = response.data.users;
    });
  },
    data () {
      return {
        currentPage: 1,
        elementsPerPage: 3,
        ascending: false,
        sortColumn: '',
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
          }
        ]
      }
  },
  methods: {
        //aqui va el metodo para llenar la tabla  
  }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>

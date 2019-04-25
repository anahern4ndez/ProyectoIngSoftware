<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Usuarios</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="2" cols="6">
            <!--<div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="DPI de usuario a editar permisos"
              >
              <div class="input-group-append">
                <button class="btn btn-warning" type="button">Buscar</button>
              </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
              <div class="col-auto">
                <table class="table table-responsive text-center">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>[email protected]</td>
                    </tr>
                    <tr>
                      <td>Smith</td>
                      <td>Thomas</td>
                      <td>[email protected]</td>
                    </tr>
                    <tr>
                      <td>Merry</td>
                      <td>Jim</td>
                      <td>[email protected]</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>-->
            <v-data-table :headers="headers" :items="user" class="elevation-1">
              <template v-slot:items="props">
                <td class="text-xs-center">{{ props.item.id }}</td>
                <td class="text-xs-center">{{ props.item.name }}</td>
                <td class="text-xs-center">{{ props.item.email }}</td>
              </template>
            </v-data-table>
          </b-col>
          <b-col order="1" cols="5">
            <form>
              <div v-if="errorDPI">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese un DPI, por favor
                </v-alert>
              </div>
              <div class="form-group">
                <label for="dpiInput">DPI</label>
                <input id="dpiInput" type="text" v-model="id" class="form-control" placeholder="DPI">
              </div>
              <div v-if="errorName">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese un nombre, por favor
                </v-alert>
              </div>
              <div class="form-group">
                <label for="nameInput">Nombre</label>
                <input id="nameInput" type="text" v-model="name" class="form-control" placeholder="Nombre">
              </div>
              <!--<div v-if="errorDPI">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese un DPI, por favor
                </v-alert>
              </div>
              <div class="form-group">
                <label for="dpiInput">DPI</label>
                <input id="dpiInput" type="text" v-model="id" class="form-control" placeholder="DPI">
              </div>-->
              <div v-if="errorEmail">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese un correo, por favor
                </v-alert>
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
              <div v-if="errorPassword">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese una contraseña, por favor
                </v-alert>
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
              <div v-if="errorTipoUsuario">
                <v-alert :value="true" type="error" id="alert">
                  Seleccione un tipo de usuario, por favor
                </v-alert>
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
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar">Eliminar</button>
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
  data() {
    return {
      picked: "",
      nombre:'',
      id:'',
      name:'',
      email:'',
      password:'',
      selected: null,
      errorName: false,
      errorDPI: false,
      errorEmail: false,
      errorPassword: false,
      errorTipoUsuario: false,
      user: [],
      headers: [
        { text: "ID", align: "center", value: "ID" },
        { text: "Nombre", align: "center", value: "Nombre" },
        { text: "Correo", align: "center", value: "Correo" },
        { text: "DPI", align: "center", value: "DPI" }
      ]
    };
  },
  methods:{
    refreshUsers(){
      this.$http.get("http://localhost:8000/users").then(response => {
      this.user = response.data.users;
    });
    },
    eliminar(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;

      if(this.id === ''){
        this.errorDPI = true;
      }else{
        this.errorDPI = false;
      }
      if(this.id != ''){
      this.$http.delete(`http://localhost:8000/users/destroy?id=${this.id}`).then(response=>{
        this.refreshUsers()
      });
      this.name = '';
      this.id = '';
      this.email = '';
      this.password = '';
      this.selected = null;
      }
    },
    crear(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;

      if(this.name === ''){
        this.errorName = true;
      }else{
        this.errorName = false;
      }

      if(this.id === ''){
        this.errorDPI = true;
      }else{
        this.errorDPI = false;
      }

      if(this.email === ''){
        this.errorEmail = true;
      }else{
        this.errorEmail = false;
      }

      if(this.password === ''){
        this.errorPassword = true;
      }else{
        this.errorPassword = false;
      }

      if(this.selected == null){
        this.errorTipoUsuario = true;
      }else{
        this.errorTipoUsuario = false;
      }

      if(this.name != '' && this.id != '' && this.password != '' && this.email != '' && this.selected != null){
        this.$http.post(`http://localhost:8000/users/create?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}`).then(response=>{
          this.refreshUsers()
        });
        this.name = '';
        this.id = '';
        this.email = '';
        this.password = '';
        this.selected = null;
      }
    },
    modificar(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;

      if(this.name === ''){
        this.errorName = true;
      }else{
        this.errorName = false;
      }

      if(this.id === ''){
        this.errorDPI = true;
      }else{
        this.errorDPI = false;
      }

      if(this.email === ''){
        this.errorEmail = true;
      }else{
        this.errorEmail = false;
      }

      if(this.password === ''){
        this.errorPassword = true;
      }else{
        this.errorPassword = false;
      }

      if(this.selected == null){
        this.errorTipoUsuario = true;
      }else{
        this.errorTipoUsuario = false;
      }

      if(this.name != '' && this.id != '' && this.password != '' && this.email != '' && this.selected != null){
        this.$http.put(`http://localhost:8000/users/update?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}`).then(response=>{
          this.refreshUsers()
        });
        this.name = '';
        this.id = '';
        this.email = '';
        this.password = '';
        this.selected = null;
      }
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

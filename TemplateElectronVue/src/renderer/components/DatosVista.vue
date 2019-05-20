<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Usuarios</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="1" cols="8">
            <div class="input-group">
              <input
                id="busquedaInput"
                type="text"
                class="form-control"
                v-model="idb"
                v-on:keyup.enter="getOneUser"
                placeholder="Nombre Del paciente que desea buscar">
            <div class="input-group-append">
                <button class="btn btn-warning" type="button" v-on:click="getOneUser">Buscar</button>
            </div>
            </div>
            <v-data-table :headers="headers" :items="user" class="elevation-1">
              <template v-slot:items="props">
                <td class="text-xs-center">{{ props.item.id }}</td>
                <td class="text-xs-center">{{ props.item.name }}</td>
                <td class="text-xs-center">{{ props.item.email }}</td>
                <td class="text-xs-center"v-if="props.item.puesto===1" >Administrador</td>
                <td class="text-xs-center"v-if="props.item.puesto===2" >Doctor</td>
                <td class="text-xs-center"v-if="props.item.puesto===3" >Secretaria</td>
                <td class="text-xs-center"v-if="props.item.puesto===4" >Asistente</td>
                <td class="text-xs-center"v-if="props.item.puesto===5" >Visitante</td>
              </template>
            </v-data-table>
          </b-col>
          <b-col order="3" cols="4">
            <h1 class="text-center">Paciente Seleccionado</h1>
            <br>
            <img id="fotoPaciente" style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
            <br>
            <b-col>
              <label class="text-center"><b>Nombres</b></label>
              <label class="text-center">Juan Andres</label>
              <label class="text-center"><b>Apellidos</b></label>
              <label class="text-center">Perez molina</label>
            </b-col>
            <b-col>
              <label class="text-center"><b>Estado</b></label>
              <label class="text-center">En tratamiento</label>
              <label class="text-center"><b>Edad</b></label>
              <label class="text-center">15 años</label>
            </b-col>
            <br>
            <b-col>
              <label class="text-center"><b>Procedencia</b></label>
              <label class="text-center">Guatemala</label>
              <label class="text-center"><b>No. Emergencia</b></label>
              <label class="text-center">12345678</label>
            </b-col>
            <b-col>
              <label class="text-center"><b>Nombre de Padre</b></label>
              <label class="text-center">Oscar Juarez</label>
            </b-col> 
            <b-col>
              <label class="text-center"><b>Nombre de Madre</b></label>
              <label class="text-center">Lulu Martinez</label>
            </b-col> 
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
      passwordVerification: '',
      selected: '',
      puesto:'',
      idb: '',
      selected: null,
      user: [],
      headers: [
        { text: "Nombres", align: "center", value: "Nombres" },
        { text: "Apellidos", align: "center", value: "Apellidos" },
        { text: "Procedencia", align: "center", value: "Procedencia" },
        { text: "Fecha de Nac", align: "center", value: "FechadeNac" }
      ]
    };
  },
  methods:{
    refreshUsers(){
      this.$http.get("http://localhost:8000/users").then(response => {
      this.user = response.data.users;
    });
    },
    getOneUser(){
      this.$http.get(`http://localhost:8000/users/look?idb=${this.idb}`).then(response => {
        if(response.data.usersi === null){
          this.errorBusqueda = true;
        }else{
          this.name = response.data.usersi.name;
          this.id = response.data.usersi.id;
          this.email = response.data.usersi.email;
          this.idb = '';
          this.errorBusqueda = false;
          this.errorName = false;
          this.errorDPI = false;
          this.errorEmail = false;
          this.errorPassword = false;
          this.errorTipoUsuario = false;
          this.errorFormato = false;
          this.errorLargo = false;
          this.errorPasswordVerification = false;
          this.errorPasswordVerification2 = false;

          if (response.data.usersi.puesto === 1){
            this.selected = 'Administrador'; 
          }
          if (response.data.usersi.puesto === 2){
            this.selected = 'Doctor'; 
          }
          if (response.data.usersi.puesto === 3){
            this.selected = 'Secretaria'; 
          }
          if (response.data.usersi.puesto === 4){
            this.selected = 'Asistente'; 
          }
          if (response.data.usersi.puesto === 5){
            this.selected = 'Visitante'; 
          }
        }
      });
    },
    eliminar(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;

      if(this.id === ''){
        this.errorDPI = true;
      }else{
        this.errorDPI = false;
      }
      if(this.id != ''){
      this.$http.delete(`http://localhost:8000/users/destroy?id=${this.id}`).then(response=>{
        this.refreshUsers();
        this.name = '';
        this.id = '';
        this.email = '';
        this.password = '';
        this.selected = null;
      });
      }
    },
    crear(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorFormato = false;
      this.errorLargo = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;

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

      if(this.passwordVerification === ''){
        this.errorPasswordVerification2 = true;
      }else{
        this.errorPasswordVerification2 = false;
        if(this.passwordVerification != this.password){
          this.errorPasswordVerification = true;
        }else{
          this.errorPasswordVerification = false;
        }
      }

      if(this.selected == null){
        this.errorTipoUsuario = true;
      }else{
        this.errorTipoUsuario = false;
      }
      if (this.selected=="Administrador") {
        this.puesto=1;
      }
      if (this.selected=="Doctor") {
        this.puesto=2;
      }
      if (this.selected=="Secretaria") {
        this.puesto=3;
      }
      if (this.selected=="Asistente") {
        this.puesto=4;
      }
      if (this.selected=="Visitante") {
        this.puesto=5;
      }
      if(this.name != '' && this.id != '' && this.password != '' && this.email != '' && this.selected != null && this.password == this.passwordVerification){
        this.$http.post(`http://localhost:8000/users/create?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}&puesto=${this.puesto}`).then(response=>{
          this.refreshUsers();
          this.name = '';
          this.id = '';
          this.email = '';
          this.password = '';
          this.passwordVerification = '';
          this.selected = null;
        }).catch(error => {
          if (error.response.data.email === undefined){
            this.errorFormato = false;
          }else{
            this.errorFormato = true;
          }

          if (error.response.data.password === undefined){
            this.errorLargo = false;
          }else{
            this.errorLargo = true;
          }
        });
      }
    },
    modificar(){
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorFormato = false;
      this.errorLargo = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;

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

      if(this.passwordVerification === ''){
        this.errorPasswordVerification2 = true;
      }else{
        this.errorPasswordVerification2 = false;
        if(this.passwordVerification != this.password){
          this.errorPasswordVerification = true;
        }else{
          this.errorPasswordVerification = false;
        }
      }

      if(this.selected == null){
        this.errorTipoUsuario = true;
      }else{
        this.errorTipoUsuario = false;
      }
      if (this.selected=="Administrador") {
        this.puesto=1;
      }
      if (this.selected=="Doctor") {
        this.puesto=2;
      }
      if (this.selected=="Secretaria") {
        this.puesto=3;
      }
      if (this.selected=="Asistente") {
        this.puesto=4;
      }
      if (this.selected=="Visitante") {
        this.puesto=5;
      }
      if(this.name != '' && this.id != '' && this.password != '' && this.email != '' && this.selected != null && this.password == this.passwordVerification){
        this.$http.put(`http://localhost:8000/users/update?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}&puesto=${this.puesto}`).then(response=>{
          this.refreshUsers();
          this.name = '';
          this.id = '';
          this.email = '';
          this.password = '';
          this.passwordVerification = '';
          this.selected = null;
        }).catch(error => {
          if (error.response.data.email === undefined){
            this.errorFormato = false;
          }else{
            this.errorFormato = true;
          }

          if (error.response.data.password === undefined){
            this.errorLargo = false;
          }else{
            this.errorLargo = true;
          }
        });
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
<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Usuarios</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="2" cols="7">
            <div v-if="errorBusqueda">
              <v-alert :value="true" type="error" id="alert">
                El usuario que busca no se encuentra en la base de datos
              </v-alert>
            </div>
            <div class="input-group">
              <input
                id="busquedaInput"
                type="text"
                class="form-control"
                v-model="idb"
                v-on:keyup.enter="getSomeUser"
                placeholder="Nombre de usuario a editar permisos"
              >
              <div class="input-group-append">
                <v-btn color="yellow darken-3" type="button" v-on:click="getSomeUser">Buscar</v-btn>
              </div>
            </div>
            <br>
            <v-data-table :headers="headers" :items="user" class="elevation-1">
              <template v-slot:items="props">
                <tr @click="selectUser(props.item)">
                  <td class="text-xs-center">{{ props.item.name }}</td>
                  <td class="text-xs-center">{{ props.item.email }}</td>
                  <td class="text-xs-center"v-if="props.item.puesto===1" >Administrador</td>
                  <td class="text-xs-center"v-if="props.item.puesto===2" >Profesional</td>
                  <td class="text-xs-center"v-if="props.item.puesto===3" >Secretaria</td>
                  <td class="text-xs-center"v-if="props.item.puesto===4" >Asistente</td>
                  <td class="text-xs-center"v-if="props.item.puesto===5" >Visitante</td>
                </tr>
              </template>
            </v-data-table>
          </b-col>
          <b-col order="1" cols="4">
            <v-form>
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
              <div v-if="errorFormato">
                <v-alert :value="true" type="error" id="alert">
                  El formato de correo no es válido
                </v-alert>
              </div>
              <div v-if="errorEmailRepetido">
                <v-alert :value="true" type="error" id="alert">
                  El correo ya esta registrado
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
              <div v-if="errorLargo">
                <v-alert :value="true" type="error" id="alert">
                  La contraseña debe tener como mínimo 6 caracteres y un máximo de 255 caracteres
                </v-alert>
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
              <div v-if="errorPasswordVerification">
                <v-alert :value="true" type="error" id="alert">
                  Las contraseñas ingresadas no coinciden
                </v-alert>
              </div>
              <div v-if="errorPasswordVerification2">
                <v-alert :value="true" type="error" id="alert">
                  Ingrese su contraseña para realizar la validación de contraseñas
                </v-alert>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Ingresar contraseña nuevamente</label>
                <input
                  id="passwordInputVerification"
                  type="password"
                  v-model="passwordVerification"
                  class="form-control"
                  placeholder="Verificación de contraseña"
                >
              </div>
              <div v-if="errorTipoUsuario">
                <v-alert :value="true" type="error" id="alert">
                  Seleccione un tipo de usuario, por favor
                </v-alert>
              </div>
              <div>
                <label for="levelInput">Tipo de usuario</label>
                <b-form-select id="levelInput"  v-model="selected" class="mb-3" placeholder="Tipo de usuario">
                  <option value="Administrador">Administrador</option>
                  <option value="Profesional">Profesional</option>
                  <option value="Secretaria">Secretaria</option>
                  <option value="Asistente">Asistente</option>
                  <option value="Visitante">Visitante</option>
                  <option value="Tipo de usuario">Tipo de usuario</option>
                </b-form-select>
              </div>
              <div>
                <label for="levelInput">Foto de usuario</label>
              <div>
              
              <v-btn class="boton1" color="yellow darken-3" id="botonimagen" @click="imgClick"> Seleccionar Imagen </v-btn>
              <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeImg" ref="changeImg"/>
              </div>
              </div>
            </v-form>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
          <b-col>
            <v-btn color="yellow darken-3" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="crear">Crear</v-btn>
          </b-col>
          <b-col>
            <v-btn color="yellow darken-3" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="modificar">Modificar</v-btn>
          </b-col>
          <b-col>
            <v-btn color="yellow darken-3" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="eliminar">Eliminar</v-btn>
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
      nombre: "",
      name: "",
      email: "",
      password: "",
      passwordVerification: "",
      selected: "",
      puesto: "",
      idb: "",
      selected: "Tipo de usuario",
      errorFormato: false,
      errorLargo: false,
      errorName: false,
      errorDPI: false,
      errorEmail: false,
      errorPassword: false,
      errorTipoUsuario: false,
      errorBusqueda: false,
      errorPasswordVerification: false,
      errorPasswordVerification2: false,
      errorDPILargo: false,
      errorDPIRepetido: false,
      errorEmailRepetido: false,
      imagen: null,
      path: "",
      user: [],
      headers: [
        { text: "Nombre", align: "center", value: "Nombre", sortable: false },
        { text: "Correo", align: "center", value: "Correo", sortable: false },
        { text: "Puesto", align: "center", value: "PUESTO", sortable: false }
      ]
    };
  },
  methods: {
    refreshUsers() {
      this.$http.get("http://localhost:8000/users").then(response => {
        this.user = response.data.users;
      });
    },
    getSomeUser() {
      if (this.idb == "Administrador") {
        this.idb = 1;
      }
      if (this.idb == "Profesional") {
        this.idb = 2;
      }
      if (this.idb == "Secretaria") {
        this.idb = 3;
      }
      if (this.idb == "Asistente") {
        this.idb = 4;
      }
      if (this.idb == "Visitante") {
        this.idb = 5;
      }
      this.$http
        .get(`http://localhost:8000/users/some?idb=${this.idb}`)
        .then(response => {
          if (response.data.usersia.length === 0) {
            this.errorBusqueda = true;
          } else {
            this.errorBusqueda = false;
            this.user = response.data.usersia;
          }
          this.idb = "";
        });
    },
    getOneUser() {
      this.$http
        .get(`http://localhost:8000/users/look?idb=${this.idb}`)
        .then(response => {
          if (response.data.usersi === null) {
            this.errorBusqueda = true;
          } else {
            this.name = response.data.usersi.name;
            this.id = response.data.usersi.id;
            this.email = response.data.usersi.email;
            this.idb = "";
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
            this.errorDPILargo = false;
            this.errorDPIRepetido = false;
            this.errorEmailRepetido = false;

            if (response.data.usersi.puesto === 1) {
              this.selected = "Administrador";
            }
            if (response.data.usersi.puesto === 2) {
              this.selected = "Profesional";
            }
            if (response.data.usersi.puesto === 3) {
              this.selected = "Secretaria";
            }
            if (response.data.usersi.puesto === 4) {
              this.selected = "Asistente";
            }
            if (response.data.usersi.puesto === 5) {
              this.selected = "Visitante";
            }
          }
        });
    },
    selectUser(recibed) {
      this.name = recibed.name;
      this.id = recibed.id;
      this.email = recibed.email;
      this.idb = "";
      if (recibed.puesto === 1) {
        this.selected = "Administrador";
      }
      if (recibed.puesto === 2) {
        this.selected = "Profesional";
      }
      if (recibed.puesto === 3) {
        this.selected = "Secretaria";
      }
      if (recibed.puesto === 4) {
        this.selected = "Asistente";
      }
      if (recibed.puesto === 5) {
        this.selected = "Visitante";
      }
    },
    eliminar() {
      this.errorName = false;
      this.errorDPI = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;
      this.errorDPILargo = false;
      this.errorDPIRepetido = false;
      this.errorEmailRepetido = false;

      if (this.id === "") {
        this.errorDPI = true;
      } else {
        this.errorDPI = false;
      }
      if (this.id != "") {
        this.$http
          .delete(`http://localhost:8000/users/destroy?id=${this.id}`)
          .then(response => {
            this.refreshUsers();
            this.name = "";
            this.id = "";
            this.email = "";
            this.password = "";
            this.selected = "Tipo de usuario";
          });
      }
    },
    crear() {
      this.errorName = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorFormato = false;
      this.errorLargo = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;
      this.errorEmailRepetido = false;

      if (this.name === "") {
        this.errorName = true;
      } else {
        this.errorName = false;
      }

      if (this.id === "") {
        this.errorDPI = true;
      } else {
        this.errorDPI = false;
      }

      if (this.email === "") {
        this.errorEmail = true;
      } else {
        this.errorEmail = false;
      }

      if (this.password === "") {
        this.errorPassword = true;
      } else {
        this.errorPassword = false;
      }

      if (this.passwordVerification === "") {
        this.errorPasswordVerification2 = true;
      } else {
        this.errorPasswordVerification2 = false;
        if (this.passwordVerification != this.password) {
          this.errorPasswordVerification = true;
        } else {
          this.errorPasswordVerification = false;
        }
      }

      if (this.selected == "Tipo de usuario") {
        this.errorTipoUsuario = true;
      } else {
        this.errorTipoUsuario = false;
      }
      if (this.selected == "Administrador") {
        this.puesto = 1;
      }
      if (this.selected == "Profesional") {
        this.puesto = 2;
      }
      if (this.selected == "Secretaria") {
        this.puesto = 3;
      }
      if (this.selected == "Asistente") {
        this.puesto = 4;
      }
      if (this.selected == "Visitante") {
        this.puesto = 5;
      }
      if (
        this.name != "" &&
        this.password != "" &&
        this.email != "" &&
        this.selected != null &&
        this.password == this.passwordVerification
      ) {
        this.$http
          .post(
            `http://localhost:8000/users/create?name=${this.name}&email=${this.email}&password=${this.password}&puesto=${this.puesto}`,
            this.imagen
          )
          .then(response => {
            this.refreshUsers();
            this.name = "";
            this.id = "";
            this.email = "";
            this.password = "";
            this.passwordVerification = "";
            this.selected = "Tipo de usuario";
            this.imagen = null;
          })
          .catch(error => {
            if (error.response.data.id === undefined) {
              this.errorDPIRepetido = false;
            } else {
              if (
                error.response.data.id[0] === "The id has already been taken."
              ) {
                this.errorDPIRepetido = true;
              }
            }

            if (error.response.data.email === undefined) {
              this.errorFormato = false;
              this.errorEmailRepetido = false;
            } else {
              if (
                error.response.data.email[0] ===
                "The email has already been taken."
              ) {
                this.errorEmailRepetido = true;
              } else {
                this.errorFormato = true;
              }
            }

            if (error.response.data.password === undefined) {
              this.errorLargo = false;
            } else {
              this.errorLargo = true;
            }
          });
      }
    },
    imgClick: function(event) {
      // on a click on the button with id 'one'
      const btn = this.$refs.changeImg;
      btn.click(); // trigger the click on second, and go on
    },
    changeImg: function(event) {
      var input = event.target;
      //console.log(input.files)
      //Este el el path de la imagen
      this.path = input.files[0].path;
      // console.log(this.path);

      this.$http.get(`http://localhost:8000/users/getID`).then(response => {
        try {
          const { exec } = require("child_process");

          const ipServer = "192.168.0.156";
          const serverPassword = "perritoUVG";
          const pcPath = this.path;
          const serverUser = "adminlocal";
          const idUsr = parseInt(response.data.idersia.id) + 1;
          const serverPath = "/home/adminlocal/Fundanier/usrs/";

          // pathDirectorio es la dirección completa de la imágen, pero sin el nombre de esta
          let pathDirectorio = `.\\temp\\usrs\\${idUsr}`;
          let pathDirectorio2 = `temp/usrs/${idUsr}`;

          const nombreFoto = this.path.split("\\").pop();
          console.log(nombreFoto);

          // Copiamos la imagen y la renombramos al directorio de fotos
          const string = `xcopy "${pcPath}" "${pathDirectorio}\\" /i`;
          const rename = `cd ${pathDirectorio2} & ren ${nombreFoto} prfl.jpg`;

          // Obtenemos el directorio de la imágen + el nombre de la imágen
          // NOTE: Deberíamos de usar esta variable para mandar una foto al servidor.
          pathDirectorio = pathDirectorio.replace(/\\/g, "/");

          const comando = `pscp -pw ${serverPassword} -p -r -q "${pathDirectorio}" ${serverUser}@${ipServer}:${serverPath}`;

          //se copia la imagen
          exec(string, (error, stdout, stderr) => {
            if (error) {
              console.log(`error: ${error.message}`);
              return;
            }
            if (stderr) {
              console.log(`stderr: ${stderr}`);
              return;
            }
            console.log(`stdout: ${stdout}`);

            //se cambia el nombre a la imagen
            exec(rename, (error, stdout, stderr) => {
              if (error) {
                console.log(`error: ${error.message}`);
                return;
              }
              if (stderr) {
                console.log(`stderr: ${stderr}`);
                return;
              }
              console.log(`stdout: ${stdout}`);

              //Se sube la imagen al server
              exec(comando, (error, stdout, stderr) => {
                if (error) {
                  console.log(`error: ${error.message}`);
                  return;
                }
                if (stderr) {
                  console.log(`stderr: ${stderr}`);
                  return;
                }
                console.log(`stdout: ${stdout}`);
              });
            });
          });
        } catch (error) {
          console.log("Error al subir imagen al servidor");
        }
      });
      input.value = "";
    },
    modificar() {
      this.errorName = false;
      this.errorEmail = false;
      this.errorPassword = false;
      this.errorTipoUsuario = false;
      this.errorFormato = false;
      this.errorLargo = false;
      this.errorBusqueda = false;
      this.errorPasswordVerification = false;
      this.errorPasswordVerification2 = false;
      this.errorDPILargo = false;
      this.errorEmailRepetido = false;

      if (this.name === "") {
        this.errorName = true;
      } else {
        this.errorName = false;
      }

      if (this.email === "") {
        this.errorEmail = true;
      } else {
        this.errorEmail = false;
      }

      if (this.password === "") {
        this.errorPassword = true;
      } else {
        this.errorPassword = false;
      }

      if (this.passwordVerification === "") {
        this.errorPasswordVerification2 = true;
      } else {
        this.errorPasswordVerification2 = false;
        if (this.passwordVerification != this.password) {
          this.errorPasswordVerification = true;
        } else {
          this.errorPasswordVerification = false;
        }
      }

      if (this.selected == "Tipo de usuario") {
        this.errorTipoUsuario = true;
      } else {
        this.errorTipoUsuario = false;
      }
      if (this.selected == "Administrador") {
        this.puesto = 1;
      }
      if (this.selected == "Profesional") {
        this.puesto = 2;
      }
      if (this.selected == "Secretaria") {
        this.puesto = 3;
      }
      if (this.selected == "Asistente") {
        this.puesto = 4;
      }
      if (this.selected == "Visitante") {
        this.puesto = 5;
      }
      if (
        this.name != "" &&
        this.password != "" &&
        this.email != "" &&
        this.selected != null &&
        this.password == this.passwordVerification
      ) {
        this.$http
          .put(
            `http://localhost:8000/users/update?id=${this.id}&name=${this.name}&email=${this.email}&password=${this.password}&puesto=${this.puesto}`
          )
          .then(response => {
            this.refreshUsers();
            this.name = "";
            this.id = "";
            this.email = "";
            this.password = "";
            this.passwordVerification = "";
            this.selected = "Tipo de usuario";
            this.imagen = null;
          })
          .catch(error => {
            if (error.response.data.email === undefined) {
              this.errorFormato = false;
            } else {
              this.errorFormato = true;
            }

            if (error.response.data.password === undefined) {
              this.errorLargo = false;
            } else {
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
.boton1 {
  height: 50px;
  width: auto;
}
</style>
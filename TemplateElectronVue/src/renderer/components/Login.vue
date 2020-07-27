<template lang="">
  <scroll-lock>
    <div>
      <div class="body">
        <form class="form-signin form form--login">
          <img src="../assets/imagenLogo.png" alt="" width="500" height="200" />

          <br />

          <div class="text-center texto">
            Por favor, ingrese sus credenciales
          </div>

          <div v-if="error">
            <v-alert :value="true" type="error" id="alert">
              Email o contraseña incorrecta.
            </v-alert>
          </div>

          <div v-if="errorEmail">
            <v-alert :value="true" type="error" id="alert">
              Ingrese su email, por favor.
            </v-alert>
          </div>
          <div class="form-block">
            <label for="inputEmail" class="sr-only">Usuario</label>
            <input
              v-model.trim="email"
              @keyup.enter="loginMethod"
              class="field form-control"
              name="email"
              placeholder="Email"
              autofocus=""
              id="email"
              oninvalid="setCustomValidity('Ingrese su usuario')"
              oninput="setCustomValidity('')"
              required
            />
          </div>

          <div v-if="errorPass">
            <v-alert :value="true" type="error" id="alert">
              Ingrese su contraseña, por favor.
            </v-alert>
          </div>
          <div class="form-block">
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input
              v-model.trim="password"
              class="field form-control"
              name="password"
              type="password"
              placeholder="Contraseña"
              id="password"
              oninvalid="setCustomValidity('Ingrese su constraseña')"
              oninput="setCustomValidity('')"
              @keyup.enter="loginMethod"
              required
            />
          </div>
        </form>
      </div>
      <br />

      <div class="centerBtn">
        <VueLoadingButton
          class="btn-block success"
          @click.native="loginMethod"
          :loading="isLoading"
        >
          Ingresar
        </VueLoadingButton>
      </div>
    </div>
  </scroll-lock>
</template>

<script>
import VueLoadingButton from "vue-loading-button";
import { store } from "../main";
// import { serverBus } from '../main';

export default {
  name: "login",

  mounted() {
    // store.id = store.state.user.id;
    // console.log(store.state.server_ip);
  },
  data() {
    return {
      loader: false,
      error: false,
      errorEmail: false,
      errorPass: false,
      isLoading: false,
      email: "",
      password: "",
      id: 0,
    };
  },

  components: {
    VueLoadingButton,
  },

  methods: {
    loginMethod() {
      //this.loader = true;
      this.isLoading = true;

      this.errorEmail = false;
      this.errorPass = false;
      this.error = false;

      if (this.email === "") {
        //this.loader = false;
        this.errorEmail = true;
        this.isLoading = false;
      } else {
        //this.loader = true;
        this.errorEmail = false;
        this.isLoading = true;
      }

      if (this.password === "") {
        //this.loader = false;
        this.errorPass = true;
        this.isLoading = false;
      } else {
        //this.loader = true;
        this.errorPass = false;
        this.isLoading = true;
      }

      if (this.password != "" && this.email != "") {
        this.isLoading = true;
        const data = {
          email: this.email,
          password: this.password,
        };
        this.$http
          .post(`http://${process.env.SERVER_IP}:8000/login`, data)
          .then((response) => {
            this.id = response.data.id;
            store.id = this.id;

            // Vuex store mutation to save user data
            const userData = {
              id: response.data.id,
              role: response.data.role,
              permissions: response.data.permissions,
            };
            this.$store.commit("saveUserData", userData);

            try {
              const { exec } = require("child_process");

              const ipServer = process.env.SERVER_IP;
              const serverPassword = process.env.SERVER_PASSWORD;
              // const relativePath = "./src/temp";
              let relativePath = process.cwd() + `\\temp\\usrs\\${this.id}`;
              const serverUser = process.env.SERVER_USER;
              const serverPath = `/home/adminlocal/Fundanier/usrs/${this.id}/prfl.jpg`;

              let directorio = `mkdir .\\temp\\usrs\\${this.id}`;
              console.log(relativePath);

              exec(directorio, (error, stdout, stderr) => {
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

              var string = `pscp -pw ${serverPassword} -p -q ${serverUser}@${ipServer}:${serverPath} "${relativePath}"`;

              exec(string, (error, stdout, stderr) => {
                if (error) {
                  console.log(`error: ${error.message}`);
                  this.$router.push("/menu-principal");
                  return;
                }
                if (stderr) {
                  console.log(`stderr: ${stderr}`);
                  this.$router.push("/menu-principal");
                  return;
                }
                console.log(`stdout: ${stdout}`);

                this.$router.push("/menu-principal");
              });
            } catch (error) {
              console.log("Error con shelljs", error);
            }
          })
          .then(() => {
            this.isLoading = false;
          })
          .catch((error) => {
            this.isLoading = false;
            this.error = true;
            this.success = false;
          });

        //this.loader = false;
        // setTimeout(() => (this.isLoading = false), 1000);
      } else {
        this.isLoading = false;
      }
    },
  },
};
</script>

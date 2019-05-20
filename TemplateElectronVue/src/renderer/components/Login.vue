<template lang="">
    <div>
        <div class="body">
            <form class="form-signin form form--login">
                <img src="../assets/imagenLogo.png" alt="" width="500" height="200">

                <br>

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
                    <input v-model.trim="email"
                        class="field form-control"
                        name="email"
                        placeholder="Email"
                        autofocus=""
                        id="email" 
                        oninvalid="setCustomValidity('Ingrese su usuario')"
                        oninput="setCustomValidity('')" 
                        required 
                    >
                </div>
                
                <div v-if="errorPass">
                    <v-alert :value="true" type="error" id="alert">
                        Ingrese su contraseña, por favor.
                    </v-alert>
                </div>
                <div class="form-block">
                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input v-model.trim="password"
                        class="field form-control"
                        name="password"
                        type="password" 
                        placeholder="Contraseña" 
                        id="password"  
                        oninvalid="setCustomValidity('Ingrese su constraseña')"
                        oninput="setCustomValidity('')" 
                        required>
                </div>
            </form>
        </div>
        <br>

        <div class="centerBtn">
            <VueLoadingButton
                class="btn-block success"
                @click.native="loginMethod"
                :loading="isLoading">
                Ingresar
            </VueLoadingButton>
        </div>
    </div>
</template>

<script>
import VueLoadingButton from "vue-loading-button";

export default {
    name: 'login',

    data () {
        return{
            loader: false,
            error: false,
            errorEmail: false,
            errorPass: false,
            isLoading: false,
            email: '',
            password: '',
        }
    },

    components: {
        VueLoadingButton
    },

    methods: {
        loginMethod() {
            //this.loader = true;
            this.isLoading = true;

            this.errorEmail = false;
            this.errorPass = false;

            console.log("User: " + this.email);
            console.log("Pass: " + this.password);

            if(this.email === ''){
                //this.loader = false;
                this.errorEmail = true;
                this.isLoading = false;
            }else{
                //this.loader = true;
                this.errorEmail = false;
                this.isLoading = true;
            }

            if(this.password === ''){
                //this.loader = false;
                this.errorPass = true;
                this.isLoading = false;
            }else{
                //this.loader = true;
                this.errorPass = false;
                this.isLoading = true;
            }


            if(this.password != '' && this.email != ''){
                //this.loader = true;
                this.isLoading = true;
                const data = {
                    email: this.email,
                    password: this.password
                };

                this.$http.post('http://localhost:8000/login', data).then(response => {

                    var id=1;// esta es la variable donde debes de poner el id del usuario logeado.
                    //porfa mandanos el id a la pantalla de MenuPrincipal.vue

                    try {

                        var shell = require('shelljs');
                        let nodePath = (shell.which('node').toString());
                        shell.config.execPath = nodePath;

                        const ipServer = '192.168.0.156';
                        const serverPassword = 'perritoUVG';
                        const relativePath = './src/temp';
                        const serverUser = 'adminlocal';
                        const serverPath = `/home/adminlocal/Fundanier/usrs/${id}/img/prfl.jpeg`;

                        var string = `pscp -pw ${serverPassword} ${serverUser}@${ipServer}:${serverPath} ${relativePath}`;

                        shell.exec(string);

                    } catch (error) {

                        console.log("Ujte no tiene injtalado PJJP\n PD: Me gujtan las piñas coladas y las Xecas");

                    }

                    console.log(response);
                    this.error = false;
                    this.$router.push('/menu-principal');
                    this.success = true;
                }).
                catch(error => {
                    this.error = true;
                    console.log("Error");
                    this.success = false;
                });
            }

            //this.loader = false;
            setTimeout(() => (this.isLoading = false), 2000);
        }
    }
}

</script>
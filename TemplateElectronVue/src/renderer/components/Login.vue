<template lang="">
    <div>
        <div class="body">
            <form class="form-signin form form--login">

                <img src="../assets/imagenLogo.png" alt="" width="500" height="200">

                <div class="text-center texto">
                    Por favor, ingrese sus credenciales
                </div>

                <div :class="{'is-waiting': loader}">
                    
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
                </div>
            </form>
        </div>

        <div class="centerBtn">
            <button class="btn btn-lg btn-warning btn-block" v-on:click="loginMethod">Ingresar</button>
        </div>
    </div>
</template>

<script>


export default {
    name: 'login',

    data () {
        return{
            loader: false,
            error: false,
            errorEmail: false,
            errorPass: false,
            email: '',
            password: ''
        }
    },

    methods: {
        loginMethod() {
            this.loader = true;
            this.errorEmail = false;
            this.errorPass = false;

            console.log("User: " + this.email);
            console.log("Pass: " + this.password);

            if(this.email === ''){
                this.loader = false;
                this.errorEmail = true;
            }else{
                this.loader = false;
                this.errorEmail = false;
            }

            if(this.password === ''){
                this.loader = false;
                this.errorPass = true;
            }else{
                this.loader = false;
                this.errorPass = false;
            }


            if(this.password != '' && this.email != ''){
                const data = {
                    email: this.email,
                    password: this.password
                };
                this.$http.post('http://localhost:8000/login', data).then(response => {
                    console.log(response);
                    this.error = false;
                    this.$router.push('/page-three');
                }).
                catch(error => {
                    this.error = true;
                    console.log(error.response.data.status);
                    console.log("Error");
                });
            }
        }
    }
}

</script>
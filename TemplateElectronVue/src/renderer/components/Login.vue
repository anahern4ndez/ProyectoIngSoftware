<template>
    <div class="body">
        <form class="form-signin form form--login">

            <img src="../assets/imagenLogo.png" alt="" width="500" height="200">

            <div class="text-center texto">
                Por favor, ingrese sus credenciales
            </div>

            <div class="info info--error" v-if="infoError">Login failed. Please try again.</div>

            <div :class="{'is-waiting': loader}">

                <div class="form-block">
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input v-model.trim="email"
                        class="field form-control"
                        name="email"
                        placeholder="Usuario"
                        autofocus=""
                        id="inputUsuario" 
                        oninvalid="setCustomValidity('Ingrese su usuario')"
                        oninput="setCustomValidity('')" 
                        required 
                    >
                </div>
                
                <div class="form-block">
                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input v-model.trim="password"
                        class="field form-control"
                        name="password"
                        type="password" 
                        placeholder="Contraseña" 
                        id="inputPassword"  
                        oninvalid="setCustomValidity('Ingrese su constraseña')"
                        oninput="setCustomValidity('')" 
                        required>
                </div>
                
                <div class="form-block form__actions">
                    <button class="btn btn-lg btn-warning btn-block" v-on:click="login">Ingresar</button>
                </div>

            </div>
        </form>
    </div>
</template>

<script>


export default {
    name: 'login',

    data () {
        return{
            loader: false,
            infoError: false,
            email: '',
            password: ''
        }
    },

    methods: {
        login() {
            this.loader = true
            this.infoError = false

            console.log("User: " + this.email);
            console.log("Pass: " + this.password);

            this.$http.get('http://localhost:8000/evaluateLogin').then((response) => {
                console.log("Hola amigos");
                //this.$router.push('/page-three');
            }, () => {
                this.infoError = true
                this.loader = false
                this.password = ''
            });
        }
    }
}

</script>
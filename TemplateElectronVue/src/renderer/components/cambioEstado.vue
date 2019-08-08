<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center">Cambio de Estado</h1>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">
                    <b-col order="1" cols="5">
                        <div class="form-group">
                            <label for="nameInput">Nombre</label>
                            <input id="nameInput" type="text" v-model="name" class="form-control" placeholder="Ingrese el nombre del paciente">
                        </div>
                        <div class="form-group">
                            <label for="nameInput">Edad</label>
                            <input id="ageInput" type="text" v-model="age" class="form-control" placeholder="Ingrese la edad del paciente">
                        </div>                       
                    </b-col>
                    <b-col order="2" cols="5">
                        <label for="nameInput" class="bajar">Sexo</label>
                        <div class="subir">
                            <v-radio-group v-model="sexo" row :rules="radioRules" required>
                                <v-radio label="Femenino" value="1" color="black"></v-radio>
                                <v-radio label="Masculino" value="2" color="black"></v-radio>
                            </v-radio-group>
                        </div>
                        <div class="form-group subir2">
                            <label for="nameInput">Número de registro</label>
                            <input id="registerInput" type="text" v-model="register" class="form-control" placeholder="Ingrese en número de registro del paciente">
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
                name:'',
                age: '',
                register: '',
                sexo: '',
                radioRules:[v => !!v || 'Debe seleccionar una opción'],
            };
        },
        methods:{

        }
    };

</script>


<style>
div#Tabla {
  float: right;
  align-items: center;
}
.subir{
    position: relative;
    top: -5px;
}
.subir2{
    position: relative;
    top: -14px;
}
.bajar{
    position: relative;
    top: 10px;
}
</style>
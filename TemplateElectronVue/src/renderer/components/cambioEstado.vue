<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Cambio de Estado</h1>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">
                    <b-col order="1" cols="5">
                        <div class="form-group">
                            <label for="nameInput" style="font-family: Nunito;">Nombre del paciente</label>
                            <input style="font-family: Nunito;" id="nameInput" type="text" v-model="name" class="form-control" placeholder="Ingrese el nombre del paciente">
                        </div>
                        <div class="form-group">
                            <label for="nameInput" style="font-family: Nunito;">Edad del paciente</label>
                            <input style="font-family: Nunito;" id="ageInput" type="text" v-model="age" class="form-control" placeholder="Ingrese la edad del paciente">
                        </div>
                        <div style="float:left; width:50%">
                            <v-flex xs12 sm6 md4>
                                <v-menu
                                    v-model="menu"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    lazy
                                    transition="scale-transition"
                                    offset-y
                                    full-width
                                    min-width="200px"
                                >
                                    <template v-slot:activator="{ on }">
                                    
                                        <v-text-field
                                        v-model="fecha"
                                        label="Fecha"
                                        prepend-icon="event"
                                        readonly
                                        v-on="on"
                                        style="width:600%"
                                        ></v-text-field>
                                    
                                    </template>
                                    <v-date-picker v-model="fecha" @input="menu = false" color="#3A4750" locale='es-ES'></v-date-picker>
                                </v-menu>
                            </v-flex>
                        </div>                    
                    </b-col>
                    <b-col order="2" cols="5">
                        <label style="font-family: Nunito;" for="nameInput" class="subir">Sexo del paciente</label>
                        <div class="subir2">
                            <v-radio-group v-model="sexo" row :rules="radioRules" required>
                                <v-radio label="Femenino" value="1" color="black"></v-radio>
                                <v-radio label="Masculino" value="2" color="black"></v-radio>
                            </v-radio-group>
                        </div>
                        <div class="form-group subir3">
                            <label style="font-family: Nunito;" for="nameInput">Número de registro</label>
                            <input style="font-family: Nunito;" id="registerInput" type="text" v-model="register" class="form-control" placeholder="Ingrese en número de registro del paciente">
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
        <div>            
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">    
                    <b-col order="1" cols="5">
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Terapia actual en la que se encuentra el paciente</label> 
                    </b-col> 
                    <b-col order="2" cols="5">
                    </b-col>                        
                </b-row>
            </b-container>
        </div>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">  
                        <div>
                            <v-radio-group v-model="actual" row :rules="radioRules" required>
                                <v-radio label="Pre diálisis" value="1" color="black"></v-radio>
                                <v-radio label="Diálisis peritoneal" value="2" color="black"></v-radio>
                                <v-radio label="Hemodiálisis" value="3" color="black"></v-radio>
                                <v-radio label="Transplante renal" value="4" color="black"></v-radio>
                            </v-radio-group>
                        </div>             
                </b-row>
            </b-container>
        </div>
        <div>            
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">    
                    <b-col order="1" cols="5">
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Cambio de Status de paciente a</label> 
                    </b-col> 
                    <b-col order="2" cols="5">
                    </b-col>                        
                </b-row>
            </b-container>
        </div>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">  
                        <div>
                            <v-radio-group v-model="cambio" row :rules="radioRules" required>
                                <v-radio label="Pre diálisis" value="1" color="black"></v-radio>
                                <v-radio label="Diálisis peritoneal" value="2" color="black"></v-radio>
                                <v-radio label="Hemodiálisis" value="3" color="black"></v-radio>
                                <v-radio label="Transplante renal" value="4" color="black"></v-radio>
                            </v-radio-group>
                        </div>             
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
                fecha: null,
                menu: false,
                actual: '',
                cambio: '',
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
    top: -20px;
}
.subir2{
    position: relative;
    top: -40px;
}
.subir3{
    position: relative;
    top: -44px;
}
.bajar{
    position: relative;
    top: 10px;
}
</style>
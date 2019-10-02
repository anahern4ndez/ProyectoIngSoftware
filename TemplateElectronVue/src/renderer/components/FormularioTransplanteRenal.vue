<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Transplante Renal</h1>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">
                    <b-col order="1" cols="5">
                        <v-text-field
                          v-model="name"
                          label="Nombre del paciente"
                          outline
                          :rules="nameRules"
                          required
                        ></v-text-field>
                        <v-text-field
                          v-model="age"
                          label="Edad del paciente"
                          outline
                          :rules="ageRules"
                          required
                        ></v-text-field>
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
                        <div class="subir3">
                        <v-text-field
                            v-model="register"
                            label="Número de registro"
                            outline
                            :rules="registerRules"
                            required
                        ></v-text-field>
                        </div>
                            <div v-if="errorRegistro" class="subir3">
                            <v-alert :value="true" type="error" id="alert">
                            Por favor, ingrese un número de registro que aun no haya sido ingresado
                            </v-alert>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
        <div>            
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">    
                    <b-col>
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Causa ERC: </label> 
                    </b-col> 
                    <b-col>
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Tipo de Donante: </label> 
                    </b-col>                       
                </b-row>
                <b-row align-h="around" align-v="center">    
                    <b-col>
                        <v-radio-group v-model="causaERC" row :rules="radioRules" required>
                            <v-radio label="Desconocida" value="1" color="black"></v-radio>
                            <v-radio label="Glomerulopatía" value="2" color="black"></v-radio>
                            <v-radio label="Uropatía" value="3" color="black"></v-radio>
                        </v-radio-group>
                    </b-col> 
                    
                    <b-col>
                        <v-radio-group v-model="tipoDonante" row :rules="radioRules" required>
                            <v-radio label="TRDVR" value="1" color="black"></v-radio>
                            <v-radio label="TRDVNR" value="2" color="black"></v-radio>
                            <v-radio label="TRDC" value="3" color="black"></v-radio>
                        </v-radio-group>
                    </b-col>                      
                </b-row>
            </b-container>
        </div>

        <b-container>
            <b-row align-h="around" align-v="center">    
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Tiempos de Isquemia: </label> 
                </b-col> 
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Cirugía de Banca: </label> 
                </b-col>                       
            </b-row>
            <b-row align-h="around" align-v="center">    
                <b-col>
                    <v-radio-group v-model="tiempoIsquemia" row :rules="radioRules" required>
                        <v-radio label="Isquemia Caliente" value="1" color="black"></v-radio>
                        <v-radio label="Isquemia Fría" value="2" color="black"></v-radio>
                    </v-radio-group>
                </b-col>

                <b-col>
                    <v-radio-group v-model="cirugiaBanca" row :rules="radioRules" required>
                        <v-radio label="Si" value="1" color="black"></v-radio>
                        <v-radio label="No" value="2" color="black"></v-radio>
                    </v-radio-group>
                </b-col>                      
            </b-row>
        </b-container>


        <b-container>
            <b-row align-h="around" align-v="center">    
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Transfusión Previa: </label> 
                </b-col> 
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Complicaciones Quirúrgicas: </label> 
                </b-col>                       
            </b-row>
            <b-row align-h="around" align-v="center">    
                <b-col>
                    <v-radio-group v-model="transfusionesPrevias" row :rules="radioRules" required>
                        <v-radio label="Si" value="1" color="black"></v-radio>
                        <v-radio label="No" value="2" color="black"></v-radio>
                    </v-radio-group>
                </b-col>

                <b-col>
                    <v-radio-group v-model="complicaciones" row :rules="radioRules" required>
                        <v-radio label="Si" value="1" color="black"></v-radio>
                        <v-text-field
                                v-model="service"
                                label="Descripción de complicación"
                                outline
                                :rules="serviceRules"
                                required
                            ></v-text-field>
                        <v-radio label="No" value="2" color="black"></v-radio>
                    </v-radio-group>
                </b-col>                      
            </b-row>
        </b-container>

        <b-container>
            <b-row align-h="around" align-v="center">    
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Tratamiento: </label> 
                </b-col> 
                <b-col >
                    <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Mantenimiento: </label> 
                </b-col>                       
            </b-row>
            <b-row align-h="around" align-v="center">    
                <b-col>
                    <v-radio-group v-model="tratamiento" row :rules="radioRules" required>
                        <v-radio label="Basilixumab" value="1" color="black"></v-radio>
                        <v-radio label="Micofenolato" value="2" color="black"></v-radio>
                        <v-radio label="Timoglobulina" value="3" color="black"></v-radio>
                    </v-radio-group>
                </b-col>

                <b-col>
                    <v-radio-group v-model="mantenimiento" row :rules="radioRules" required>
                        <v-radio label="Protocolo 1" value="1" color="black"></v-radio>
                        <v-radio label="Protocolo 2" value="2" color="black"></v-radio>
                    </v-radio-group>
                </b-col>                      
            </b-row>
        </b-container>
        
    </div>
</template>

<script>
export default {
  mounted() {},
  data() {
    return {
      cui: "",
      name: "",
      age: "",
      register: "",
      service: "",
      sexo: "",
      fecha: null,
      menu: false,
      actual: "",
      cambio: "",
      errorFaltanDatos: false,
      errorRegistro: false,
      //Hacer las reglas
      radioRules: [v => !!v || "Debe seleccionar una opción"],
      nameRules: [
        v => !!v || "Se requiere el nombre del paciente",
        v => (v && v.length < 60) || "Se permite como maximo 60 caracteres"
      ],
      ageRules: [
        v => !!v || "Se requiere la edad del paciente",
        v =>
          (v && v.length <= 3) ||
          "Verifique que la edad tenga como maximo 3 digitos.",
        v => (v && isNaN(v) == false) || "La edad debe ser un numero",
        v => (v && v >= 0) || "La edad debe estar entre 0 años a 200 años",
        v => (v && v <= 200) || "La edad debe estar entre 0 años a 200 años"
      ],
      registerRules: [
        v => !!v || "Se requiere el número de registro del paciente",
        v => (v && v.length < 60) || "Se permite como maximo 60 caracteres",
        v =>
          (v && isNaN(v) == false) || "El numero de registro debe ser un numero"
      ],
      serviceRules: [
        v => !!v || "Se requiere el nombre del servicio",
        v => (v && v.length < 60) || "Se permite como maximo 60 caracteres"
      ],
      dateRules: [v => !!v || "Se requiere una fecha"]
    };
  },
  methods: {
    ingresarNuevoEstado() {
      if (
        this.name != "" &&
        this.age != "" &&
        this.register != "" &&
        this.sexo != "" &&
        this.fecha != null &&
        this.actual != "" &&
        this.cambio != "" &&
        isNaN(this.age) === false &&
        this.age.length <= 3 === true &&
        this.name.length < 60 === true &&
        this.register.length < 60 === true &&
        isNaN(this.register) === false &&
        (this.age <= 200 && this.age >= 0) === true
      ) {
        //this.$http.post(`http://localhost:8000/cambioEstadoController/save?name=${this.name}&age=${this.age}&register=${this.register}&sexo=${this.sexo}&fecha=${this.fecha}&actual=${this.actual}&cambio=${this.cambio}&cui=${this.cui}`).then(response=>{
        this.errorFaltanDatos = false;
        this.errorRegistro = false;
        this.name = " ";
        this.age = " ";
        this.register = " ";
        this.sexo = " ";
        this.fecha = null;
        this.menu = false;
        this.actual = " ";
        this.cambio = " ";
        //}).catch(error => {
        //console.log("Error");
        //this.errorRegistro = true;
        //});
      } else {
        this.errorFaltanDatos = true;
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
.subir {
  position: relative;
  top: -20px;
}
.subir2 {
  position: relative;
  top: -40px;
}
.subir3 {
  position: relative;
  top: -40px;
}
.bajar {
  position: relative;
  top: 10px;
}
</style>
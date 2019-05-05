<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Ingresar a un paciente</h1>
    <div id="datosPersonales">
      <b-container class="bv-example-row1" >
        <b-row align-h="around" align-v="center">
          <b-col order="2" cols="10">
            <v-card>
              <v-card-title primary-title>
                <v-flex xs12>
                  <v-layout align-center justify-end column fill-height />
                    <h3 class="text-xs-center">Datos Personales</h3>
                    <br>
                    <v-text-field
                            v-model="CUI"
                            label="Número de CUI"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Sexo"
                            label="Género"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Nombre"
                            label="Nombres"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Apellido"
                            label="Apellidos"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Fecha_de_nacimiento"
                            label="Fecha de nacimiento"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Procedencia"
                            label="Procedencia"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Nombre_de_padre"
                            label="Nombre del padre"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Nombre_de_madre"
                            label="Nombre de la madre"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Telefono"
                            label="Teléfonos"
                            outline
                        ></v-text-field>
                    <br>
                    <v-text-field
                            v-model="Edad"
                            label="Edad"
                            outline
                        ></v-text-field>
                </v-flex>
              </v-card-title>
            </v-card>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
            <b-col order="4" cols="6">
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
            </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
      //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      this.pacientes = response.data.Pacientes;

    });
  },
    data () {
      return {
        search:'',        
        //datos del paciente a ingresar
        id:'',
        CUI:'', 
        Nombre:'', 
        Apellido:'', 
        Fecha_de_nacimiento:'',
        Procedencia:'',
        Nombre_de_padre:'',
        Nombre_de_madre:'',
        Telefono:'',
        Edad: '',
        //los siguientes se pondran como predeterminados por cuestion de tiempo, pero se volveran dinámicos después
        Sindrome_Clinico_Presentacion: 1,
        Dx_Definitivo:'Na',
        Dx_Asociados:'Na',
        Imagen:'None (por ahora)',
        Tipo_de_Sangre: 1,
        Estudia: 1,
        Transfusiones:1,
        EstadoActual:1,
        Sexo:1,
        selected: null,
        pacientes: []
      }
  },
    methods: {
        ingresarNuevo(){
          const info = {
            id:this.CUI,
            CUI: this.CUI,
            Nombre: this.Nombre,
            Apellido: this.Apellido,
            Fecha_de_nacimiento: this.Fecha_de_nacimiento,
            Procedencia: this.Procedencia,
            Nombre_de_padre: this.Nombre_de_padre,
            Nombre_de_madre: this.Nombre_de_madre,
            Telefono: this.Telefono,
            Edad: this.Edad,
            Sindrome_Clinico_Presentacion: this.Sindrome_Clinico_Presentacion,
            Dx_Definitivo: this.Dx_Definitivo,
            Dx_Asociados: this.Dx_Asociados,
            Imagen: this.Imagen,
            Tipo_de_Sangre: this.Tipo_de_Sangre,
            Estudia: this.Estudia,
            Transfusiones: this.Transfusiones,
            EstadoActual: this.EstadoActual,
            Sexo: this.Sexo
        };
          this.$http.post('http://localhost:8000/PacienteController/insert', info).then(response => {
              this.error = false;
              this.id='';
              this.CUI=''; 
              this.Nombre='';
              this.Apellido='';
              this.Fecha_de_nacimiento='';
              this.Procedencia='';
              this.Nombre_de_padre='';
              this.Nombre_de_madre='';
              this.Telefono='';
              this.Edad= '';
          }).
          catch(error => {
              this.error = true;
              console.log(error.response.data.status);
              console.log("Error");
          });

        }
    }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
div#datosPersonales {
  width: 500px;
  height: 800px;
  margin: auto;
  float: left;

}
</style>

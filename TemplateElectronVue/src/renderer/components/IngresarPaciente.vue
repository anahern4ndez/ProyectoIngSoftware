<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 id="headers" class="text-center">Ingresar a un paciente</h1>
    <br><br>
    <div class="Datos">
      <div>
        <b-container class="bv-example-row1" >
              <v-card>
                <v-card-title primary-title>
                  <v-flex xs12>
                    <v-layout align-center justify-end column fill-height />
                      <h3 id="headers" class="text-xs-center">Datos Personales</h3>
                      <br>
                      <div style="float:left; margin-right:5%; width:50%">
                      <v-text-field
                              v-model="CUI"
                              label="Número de CUI"
                              outline
                              :rules="cuiRules"
                              required
                              @change="checkLocation(CUI)"
                          ></v-text-field>
                      </div>
                      <v-radio-group v-model="Sexo" row :rules="radioRules" required >
                          <v-radio label="Mujer" value="1" color="black"></v-radio>
                          <v-radio label="Hombre" value="2" color="black"></v-radio>
                        </v-radio-group>
                      <br>

                      <v-text-field
                              v-model="ProcedenciaTxt"
                              label="Lugar de nacimiento"
                              outline
                              :disabled="true"
                          ></v-text-field>
                      <v-text-field
                              v-model="Nombre"
                              label="Nombres"
                              outline
                              required
                              :rules="nombreRules"
                          ></v-text-field>
                      <v-text-field
                              v-model="Apellido"
                              label="Apellidos"
                              outline
                              required
                              :rules="nombreRules"
                          ></v-text-field>
                      
                      <div style="float:left; width:50%">
                        <v-flex xs12 sm6 md4>
                          <v-menu
                            v-model="menu_nacimiento"
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
                                v-model="Fecha_de_nacimiento"
                                label="Fecha de nacimiento"
                                prepend-icon="event"
                                readonly
                                v-on="on"
                                style="width:250%"
                                
                              ></v-text-field>
                              
                            </template>
                          <v-date-picker v-model="Fecha_de_nacimiento" @input="menu_nacimiento = false, computeAge(Fecha_de_nacimiento)" color="#3A4750" locale='es-ES'></v-date-picker>
                          </v-menu>
                        </v-flex>
                      </div>
                      <div>

                    <v-text-field
                            v-model="Edad"
                            label="Edad"
                            :disabled="true"
                            outline
                        ></v-text-field>
                        </div>
                      <v-text-field
                            v-model="Nombre_de_padre"
                            label="Nombre del padre"
                            outline
                            required
                            :rules="nombreRules"
                        ></v-text-field>
                      <v-text-field
                              v-model="Nombre_de_madre"
                              label="Nombre de la madre"
                              outline
                              required
                              :rules="nombreRules"
                          ></v-text-field>
                      <v-text-field
                              v-model="Telefono"
                              label="Teléfonos"
                              outline
                              required
                              :rules="nombreRules"
                          ></v-text-field>
                  </v-flex>
                </v-card-title>
              </v-card>
        </b-container>
      </div>

        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers"  class="text-xs-center">Síndrome Clínico de Presentación</h3>              
                  <v-container fluid>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrítico" value="1" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrotico" value="2" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Anomalías Urinarias Asintomáticas" value="3" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="IRA" value="4" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="IRC" value="5" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="ITU" value="6" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Uropatía Obstructiva" value="7" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Tubulopatía" value="8" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="HTA" value="9" color="green"></v-checkbox>
                      <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Nefrolitiasis" value="10" color="green"></v-checkbox>
                  </v-container>
            </v-flex>
          </v-card-title>
        </v-card>
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers"  class="text-xs-center">Dx. Definitivo</h3>
            <v-textarea

              v-model="Dx_Definitivo"
              outline
              name="Dx_Definitivo"
              value=""
              rows=38
            ></v-textarea>
            </v-flex>
          </v-card-title>
        </v-card>
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers" class="text-xs-center">Dx. Asociados</h3>
              <v-textarea
                v-model="Dx_Asociados"
                outline
                name="Dx_Asociados"
                value=""
                rows=38
              ></v-textarea>
              </v-flex>
            </v-card-title>
          </v-card>
    </div>  

    <div id="Historia">
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers" class="text-xs-center">Historia</h3>
            <v-textarea
              outline
              v-model="Historia"
              name="Historia"
              rows=40
            ></v-textarea>
            </v-flex>
          </v-card-title>
        </v-card>
    </div>
  <div>
    <button float="left" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo" :disabled="this.Sindrome_Clinico_Presentacion===''">Ingresar nuevo paciente</button> 
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
        Historia:'',
        //datos del paciente a ingresar
        CUI:'', 
        Nombre:'', 
        Apellido:'',
        //aqui se guarda la fecha  
        Fecha_de_nacimiento: null,
        //sirve para menu de nacimiento, como un trigger
        menu_nacimiento: false,
        Procedencia:'', //este es para el codigo de la procedencia (que es el que se metera en la tabla en la db)
        ProcedenciaTxt:'',  //este es para mostrar el depto, municipio
        Nombre_de_padre:'',
        Nombre_de_madre:'',
        Telefono:'',
        Edad: '',
        //los siguientes se pondran como predeterminados por cuestion de tiempo, pero se volveran dinámicos después
        Sindrome_Clinico_Presentacion: '',
        Dx_Definitivo:'',
        Dx_Asociados:'',
        Imagen:'',
        Tipo_de_Sangre: 1,
        Estudia: 1,
        Transfusiones:1,
        EstadoActual:1,
        Sexo: '',
        pacientes: [],
        pass: false,
        

        //reglas de FORM
        cuiRules: [
          (v) => !!v || 'Se requiere CUI',
          (v) => v && v.length <= 13 || 'Verifique que el CUI sea de 13 digitos.'
        ],
        nombreRules: [
          (v) => !!v || 'Se requiere este campo',
          (v) => v && v.length < 60 || 'Se permite como maximo 60 caracteres'

        ],
        radioRules:[v => !!v || 'Debe seleccionar una opción'],
      }
  },
    methods: {
        ingresarNuevo(){
          var pass = false;
          const info = {
            CUI: this.CUI,
            Nombre: this.Nombre,
            Apellido: this.Apellido,
            Fecha_de_nacimiento: this.Fecha_de_nacimiento,
            Procedencia: this.CUI.substr(this.CUI.length-4),
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
            Sexo: this.Sexo,
            Historia:this.Historia
          };
          
          

          this.$http.post('http://localhost:8000/PacienteController/insert', info).then(response => {
            this.error = false;
            this.CUI=' '; 
            this.Nombre=' ';
            this.Apellido=' ';
            this.Fecha_de_nacimiento=' ';
            this.ProcedenciaTxt=' ';
            this.Nombre_de_padre=' ';
            this.Nombre_de_madre=' ';
            this.Telefono=' ';
            this.Edad= ' ';
            this.Historia=' ';
            this.Dx_Definitivo=' ';
            this.Dx_Asociados=' ';
          }).
          catch(error => {
              this.error = true;
              console.log(error.response.data.status);
              console.log("Error");
          });
          

        },

        computeAge(datePicked){
          if (this.menu_nacimiento == false){
            var fechaActual = new Date();
            var aComputar = new Date(datePicked);

            var diffAnio = fechaActual.getFullYear() - aComputar.getFullYear();
            var meses = fechaActual.getMonth() - aComputar.getMonth();

            if (meses<0 || (meses == 0 && fechaActual.getDate() < aComputar.getDate())){
              --diffAnio;
            }
            //console.log(diffAnio);
            if (diffAnio>0){
              return this.Edad = diffAnio;
            } else{
              return this.Edad = meses + ' meses';
            }
            
          }
        
        },
        prettyPlaceholders(){
          //poner aqui todos los placeholders que cambian en runtime..
          this.Edad = ' ';
          this.ProcedenciaTxt = ' ';
        },
        checkLocation(inStr){
          //partimos de la premisa que el dpi tiene 13 digitos...
          var ultimos=inStr.substr(inStr.length-4);
          var data = {
            id_Dep: ultimos
          }
          //TODO: AJAX REQUEST..
          this.$http.post(`http://localhost:8000/ProcedenciaController/locate/`,data).then(response=>{
            //console.log(response.data.locations[0].Departamento);
            var dep = response.data.locations[0].Departamento;
            var muni = response.data.locations[0].Municipio;
            this.ProcedenciaTxt =  dep.concat(', '.concat(muni));
          });
          


        }
    },
    beforeMount(){
      this.prettyPlaceholders();
    }
};
</script>
<style>
.Datos {
  padding-left:3%;
  padding-right:8%;
  padding-top:2%;
  padding-bottom:5%;
  display: grid;
  grid-gap: 30px 5%;
  grid-template-columns: 50% 50%;
}
div#inBox {
  float:left; margin-right:5%; width:45%
}

div#inBox-date {
  margin-left: 5%;
  width: 50%;
  float: right;
}
div#Historia {
  margin-left: 5%;
  margin-bottom: 5%;

}
/*
    configuracion para los headers
*/
h3#headers{
  font-family: Nunito;
  font-weight: bolder;
  font-size: x-large;
}
h1#headers{
  font-family: Nunito;
  font-weight: bolder;
}
</style>

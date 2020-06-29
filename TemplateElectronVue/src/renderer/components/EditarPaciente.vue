<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 id="headers" class="text-center">Editar información del paciente</h1>
    <br><br>
    <v-form
      ref="form"
      v-model="pass"
    >
    <b-container class="bv-example-row1" >
      <v-card>  
        <v-card-title primary-title>
          <v-flex xs12>
            <v-layout align-center justify-end column fill-height />
            
              <v-text-field
                  v-model="Numero_expediente"
                  label="Número de expediente"
                  outline
                  :rules="cuiRules"
                  required
              ></v-text-field>
          </v-flex>
        </v-card-title>
      </v-card>
    </b-container>
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
                      <v-radio-group v-model="Sexo" row >
                        <v-radio name="Sexo" label="Mujer" :value="1" color="black"></v-radio>
                        <v-radio name="Sexo" label="Hombre" :value="2" color="black"></v-radio>
                      </v-radio-group>
                      <br>

                      <v-text-field
                              v-model="ProcedenciaTxt"
                              label="Lugar de nacimiento"
                              outline
                              :disabled="true"
                          ></v-text-field>
                      
                      <v-select
                        v-if="procedenciasOpc"
                        v-bind:items="procedenciasOpc"
                        v-model="residencia"
                        item-text="`${data.item.Departamento}, ${data.item.Municipio}`"
                        item-value="ID"
                        label = "Residencia actual" 
                        :rules ="radioRules"
                        outline
                        required
                      >
                        <template
                          slot="selection" slot-scope="data">
                          {{ data.item.Departamento}}, {{data.item.Municipio}}

                        </template>

                        <template slot="item" slot-scope="data">
                          <v-list-tile-content>
                            <v-list-tile-title v-html="`${data.item.Departamento}, ${data.item.Municipio}`">
                            </v-list-tile-title>
                          </v-list-tile-content>
                        </template>
                        
                      </v-select>

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
                              :rules="phoneRules"
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
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrítico" color="green" :value="1"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrotico" color="green" :value="2"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Anomalías Urinarias Asintomáticas" color="green" :value="3"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="IRA" color="green" :value="4"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="IRC" color="green" :value="5"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="ITU" color="green" :value="6"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Uropatía Obstructiva" color="green" :value="7"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Tubulopatía" color="green" :value="8"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="HTA" color="green" :value="9"></v-checkbox>
                  <v-checkbox v-model="Sindrome_Clinico_Presentacion" label="Nefrolitiasis" color="green" :value="10"></v-checkbox>
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
              :rules="nombreRules"
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
                :rules="nombreRules"
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
              :rules="nombreRules"
            ></v-textarea>
            </v-flex>
          </v-card-title>
        </v-card>
    </div>
    <div>
      <button float="left" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="save" :disabled="!pass">Guardar cambios</button> 
    </div>
    <!-- dialogo para mostrar mensajes a usuario -->
      <div class="text-xs-center">
        <v-dialog v-model="infoDialog" width="500">
          <v-card>
            <v-card-title
              class="headline lighten-2 info-dialog-title-background"
              primary-title
            >Información</v-card-title>
            <v-card-text>{{ this.infoMessage }}</v-card-text>
            <v-divider></v-divider>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="primary"
                flat
                @click="infoDialog = false"
              >Aceptar</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </div>
    </v-form>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get(`http://localhost:8000/PacienteController/findOne?CUI=${this.$route.params.cui}`).then(response=>{
      this.Numero_expediente = response.data.Paciente[0].Numero_expediente;
      this.CUI = response.data.Paciente[0].CUI;
      this.Nombre = response.data.Paciente[0].Nombre;
      this.Apellido = response.data.Paciente[0].Apellido;
      this.Sexo = response.data.Paciente[0].Sexo;
      this.Procedencia = response.data.Paciente[0].Procedencia;
      this.Fecha_de_nacimiento = response.data.Paciente[0].Fecha_de_nacimiento;
      this.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
      this.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
      this.Historia = response.data.Paciente[0].Historia;
      this.Dx_Definitivo = response.data.Paciente[0].Dx_Definitivo;
      this.Dx_Asociados = response.data.Paciente[0].Dx_Asociados;
      this.Telefono = response.data.Paciente[0].Telefono;
      this.checkLocation(response.data.Paciente[0].CUI);
      this.computeAge(response.data.Paciente[0].Fecha_de_nacimiento);
      this.Sindrome_Clinico_Presentacion = response.data.Paciente[0].Sindrome_Clinico_Presentacion;
      this.id = response.data.Paciente[0].id;
      this.Tipo_de_Sangre = response.data.Paciente[0].Tipo_de_Sangre;
      this.Estudia = response.data.Paciente[0].Estudia;
      this.Transfusiones = response.data.Paciente[0].Transfusiones;
      this.residencia = response.data.Paciente[0].Residencia;
    });

    this.$http.get("http://localhost:8000/ProcedenciaController/getAllLocation").then(response => {
      this.procedenciasOpc = response.data.locations;
    });
  },
    data () {
      return {
        search:'',        
        //datos extra (se pondran en la tabla de pacientes para mientras)
        id:'',
        Historia:'',
        Numero_expediente: '',
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
        EstadoActual:1,
        Sexo: '',
        Tipo_de_Sangre: 1,
        Estudia: 1,
        Transfusiones:1,
        pacientes: [],
        procedenciasOpc: undefined,
        pass: false,
        residencia:'',
        infoDialog: false,
        infoMessage: "",

        //reglas de FORM
        cuiRules: [
          (v) => !!v || 'Se requiere este campo',
          (v) => v && v.length <= 13 || 'Verifique que el CUI sea de 13 digitos.'
        ],
        nombreRules: [
          (v) => !!v || 'Se requiere este campo',
          (v) => v && v.length < 60 || 'Se permite como maximo 60 caracteres'

        ],
        phoneRules: [
          (v) => !!v || 'Se requiere este campo',
          (v) => v && v.length <= 8 || 'Verifique que teléfono tenga como máximo 8 dígitos.',
          (v) => v && this.isANumber(v) || 'Verifique dato ingresado sean números.'
        ],
        radioRules:[v => !!v || 'Debe seleccionar una opción'],
      }
  },
    methods: {
        save(){
          var pass = true;
          const info = {
            Numero_expediente: this.Numero_expediente,
            CUI: this.CUI,
            Nombre: this.Nombre,
            Apellido: this.Apellido,
            Fecha_de_nacimiento: this.Fecha_de_nacimiento,
            Procedencia: this.CUI.substr(this.CUI.length-4),
            Nombre_de_padre: this.Nombre_de_padre,
            Nombre_de_madre: this.Nombre_de_madre,
            Telefono: this.Telefono,
            Edad: (this.Edad).toString(),
            Sindrome_Clinico_Presentacion: this.Sindrome_Clinico_Presentacion,
            Dx_Definitivo: this.Dx_Definitivo,
            Dx_Asociados: this.Dx_Asociados,
            Imagen: this.Imagen,
            Tipo_de_Sangre: this.Tipo_de_Sangre,
            Estudia: this.Estudia,
            Transfusiones: this.Transfusiones,
            EstadoActual: this.EstadoActual,
            Sexo: this.Sexo,
            Historia:this.Historia,
            id: this.id,
            Residencia: this.residencia,
          };
          if (info.Edad.substring(info.Edad.length -5, info.Edad.length) === "meses") {
            info.Edad = parseFloat((this.Edad).substring(0,info.Edad.length -6))/12.0;
          }
          else{
            info.Edad = parseFloat((this.Edad).substring(0,info.Edad.length -5));
          }

          this.$http.put('http://localhost:8000/PacienteController/updateAll', info).then(response => {
              this.error = false;
              this.resetValidation();
              this.infoMessage = "Los datos del paciente fueron actualizados exitosamente.";
              this.infoDialog = true;
          }).
          catch(error => {
              this.error = true;
              console.log(error.response.data.status);
              console.log("Error");
              this.infoMessage = "Ocurrió un error al actualizar los datos del paciente.";
              this.infoDialog = true;
          });

        },

        computeAge(datePicked){
          if (this.menu_nacimiento == false){
            var fechaActual = new Date();
            var aComputar = new Date(datePicked);

            var diffAnio = fechaActual.getFullYear() - aComputar.getFullYear();
            var meses = fechaActual.getMonth() - aComputar.getMonth();
            if (diffAnio>0){
              return this.Edad = diffAnio + ' años';
            } else{
              return this.Edad = meses + ' meses';
            }
            
          }
        
        },
        resetValidation () {
          this.$refs.form.resetValidation()
        },
        reset () {
          this.$refs.form.reset()
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
        },
        isANumber(expediente){
          let isNumber = false;
          if(!isNaN(parseInt(expediente))){
            isNumber = true;
          }
          return isNumber;
        }
    },
    beforeMount(){
      this.prettyPlaceholders();
    }
};
</script>
<style scoped>
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
  width: 100%;
  float: right;
}
div#Historia {
  margin: 2% 2% 2% 2%;

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

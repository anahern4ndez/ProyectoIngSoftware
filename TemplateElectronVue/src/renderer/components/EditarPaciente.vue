<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 id="headers" class="text-center">Ingresar a un paciente</h1>
    <div id="datos">
      <div id="datosPersonales">
        <b-container class="bv-example-row1" >
              <v-card>
                <v-card-title primary-title>
                  <v-flex xs12>
                    <v-layout align-center justify-end column fill-height />
                      <h3 id="headers" class="text-xs-center">Datos Personales</h3>
                      <br>
                      <div id="inBox">
                        <v-text-field
                                v-model="Sexo"
                                label="Género"
                                outline
                            ></v-text-field>
                      </div>
                      <v-text-field
                              v-model="CUI"
                              label="Número de CUI"
                              outline
                          ></v-text-field>
                      <v-text-field
                              v-model="Nombre"
                              label="Nombres"
                              outline
                          ></v-text-field>
                      <v-text-field
                              v-model="Apellido"
                              label="Apellidos"
                              outline
                          ></v-text-field>

                      <div id="inBox">
                          <v-text-field
                                  v-model="Procedencia"
                                  label="Procedencia"
                                  outline
                              ></v-text-field>
                      </div>
                      <v-text-field
                              v-model="Fecha_de_nacimiento"
                              label="Fecha de nacimiento"
                              outline
                          ></v-text-field>
                      <v-text-field
                              v-model="Nombre_de_padre"
                              label="Nombre del padre"
                              outline
                          ></v-text-field>
                      <v-text-field
                              v-model="Nombre_de_madre"
                              label="Nombre de la madre"
                              outline
                          ></v-text-field>
                      <v-text-field
                              v-model="Telefono"
                              label="Teléfonos"
                              outline
                          ></v-text-field>
                  </v-flex>
                </v-card-title>
              </v-card>
        </b-container>
      </div>
    </div>
    <div id="datosGenerales">
      <b-container class="bv-example-row1" >
            <v-card>
              <v-card-title primary-title>
                <v-flex xs12>
                  <v-layout align-center justify-end column fill-height />
                    <h3 id="headers"  class="text-xs-center">Datos Generales</h3>
                    <br>
                    <v-text-field
                            v-model="Edad"
                            label="Edad"
                            outline
                        ></v-text-field>
                    <div id="inBox">
                      <v-text-field
                              v-model="kg_perc"
                              label="Kg. Percentil"
                              outline
                          ></v-text-field>
                    </div>
                    <v-text-field
                            v-model="Peso"
                            label="Peso"
                            outline
                        ></v-text-field>
                    <div id="inBox">
                      <v-text-field
                              v-model="cms_perc"
                              label="Cms. Percentil"
                              outline
                          ></v-text-field>
                    </div>
                    <v-text-field
                            v-model="Talla"
                            label="Talla"
                            outline
                        ></v-text-field>
                    <v-text-field
                            v-model="PA"
                            label="P/A"
                            outline
                        ></v-text-field>
                    <v-text-field
                            v-model="Percentil"
                            label="Percentil"
                            outline
                        ></v-text-field>
                </v-flex>
              </v-card-title>
            </v-card>
      </b-container>
    </div>
    <div id="SinDiag">
      <div id="sindrome">
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers"  class="text-xs-center">Síndrome Clínico de Presentación</h3>              
                  <v-container fluid>
                    <p>{{ selected }}</p>
                    <v-checkbox v-model="selected" label="Sx. Nefrítico" value="Sx. Nefrítico"></v-checkbox>
                    <v-checkbox v-model="selected" label="Sx. Nefrotico" value="Sx. Nefrotico"></v-checkbox>
                    <v-checkbox v-model="selected" label="Anomalías Urinarias Asintomáticas" value="Anomalías Urinarias Asintomáticas"></v-checkbox>
                    <v-checkbox v-model="selected" label="IRA" value="IRA"></v-checkbox>
                    <v-checkbox v-model="selected" label="IRC" value="IRC"></v-checkbox>
                    <v-checkbox v-model="selected" label="ITU" value="ITU"></v-checkbox>
                    <v-checkbox v-model="selected" label="Uropatía Obstructiva" value="Uropatía Obstructiva"></v-checkbox>
                    <v-checkbox v-model="selected" label="Tubulopatía" value="Tubulopatía"></v-checkbox>
                    <v-checkbox v-model="selected" label="HTA" value="HTA"></v-checkbox>
                    <v-checkbox v-model="selected" label="Nefrolitiasis" value="Nefrolitiasis"></v-checkbox>
                  </v-container>
            </v-flex>
          </v-card-title>
        </v-card>
      </div>
      <div id="diagDef">
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers"  class="text-xs-center">Dx. Definitivo</h3>
            <v-textarea
              outline
              name="Dx_Definitivo"
              value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
              rows=38
            ></v-textarea>
            </v-flex>
          </v-card-title>
        </v-card>
      </div>
      <div id="diagAsoc">
        <v-card>
          <v-card-title primary-title>
            <v-flex xs12>
              <v-layout align-center justify-end />
                <h3 id="headers" class="text-xs-center">Dx. Asociados</h3>
            <v-textarea
              outline
              name="Dx_Asociados"
              value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
              rows=38
            ></v-textarea>
            </v-flex>
          </v-card-title>
        </v-card>
      </div>
    </div>
    <div>
      <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
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
        Dx_Definitivo:'',
        Dx_Asociados:'',
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
div#datosPersonales {
  width: 47%;
  margin-left: 20px;
  float: left;
}
div#datosGenerales {
  width: 47%;
  margin-right: 20px;
  float: right;
}
div#inBox {
  margin-left: 5%;
  width: 50%;
  float: right;
}
/*
    div para las boxes de síndrome clínico y diagnóstivo definitivo y asociados 
*/
div#SinDiag {
  margin-top:2%;
  margin-bottom: 20%;
  width: 100%;
  float: left;
}
div#sindrome {
  margin-left: 2%;
  margin-right: 2%;
  margin-top:2%;
  margin-bottom:2%;
  float:left;
  width: 32%;
}
div#diagDef {
  margin-top:2%;
  margin-bottom:2%;
  float:left;
  width: 30%;
  height:100%;
}
div#diagAsoc {
  margin-left: 2%;
  margin-right: 2%;
  margin-top:2%;
  margin-bottom:2%;
  float:left;
  width: 30%;
  height:auto;
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

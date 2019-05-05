<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Pacientes</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="2" cols="30">
                <div>
                  <v-card>
                    <v-text-field
                        v-model="search"
                        label="Búsqueda por nombre, apellido o número de CUI"
                        outline
                    ></v-text-field>

                <!--    cuadro de dialogo para cambiar el estado del paciente -->
                    <v-dialog v-model="dialog" max-width="500px">
                      <v-card>
                        <v-card-title>
                          <span class="headline">Edit</span>
                        </v-card-title>
                        <v-card-text>
                          <v-flex xs12 sm6 md4>
                            <div>
                              <label for="changeStatus">Cambio estado de paciente</label>
                             
                              <select class='form-control' name='changeStatus' id='changeStatus' v-model='estadoNuevo'>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                              </select>
                              
                              
                            </div>
                          </v-flex>
                        </v-card-text>
                        
                        <v-card-actions>
                          <v-spacer></v-spacer>
                          <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
                          <v-btn color="blue darken-1" flat @click="save">Save</v-btn>
                        </v-card-actions>
                        </v-card>
                    </v-dialog>
                     
                    <v-data-table
                        
                        :headers="headers"
                        :items="pacientes"
                        :search="search"
                        item-key="id"
                        v-model="selected"
                       
                    >
                      
                        <template slot="items" slot-scope="props">
                          <tr @click="changeSelected(props.item)">
                              <td class="text-xs-center">{{ props.item.CUI }}</td>
                              <td class="text-xs-center">{{ props.item.Nombre }}</td>
                              <td class="text-xs-center">{{ props.item.Apellido }}</td>
                              <td class="text-xs-center">{{ props.item.Procedencia }}</td>
                              <td class="text-xs-center">{{ props.item.Fecha_de_nacimiento }}</td>
                              <td class="text-xs-center">{{ props.item.EstadoActual }}</td>
                              <td class="justify-center layout px-0">
                                <v-icon
                                small
                                class="ma-3"
                                @click="editarDatos(props.item)"
                                >
                                  edit
                                </v-icon>
                                <v-icon
                                  small
                                  class="ma-3"
                                  @click="deleteItem(props.item)"
                                >
                                  delete
                                </v-icon>
                              </td>
                            </tr>
                          </template>
                        <!-- cuando la busqueda no tenga resultados -->
                        <template v-slot:no-results>
                            <v-alert :value="true" color="error">
                            No se ha encontrado un paciente que tenga "{{ search }}" en su información.
                            </v-alert>
                         
                        </template>
                    </v-data-table>
                  </v-card>
                </div>
                    <template>
                      <form>
                        <div class="form-group">
                            <br>
                            <br>
                            <br>
                        <h2>Nombres </h2>
                        <h3 class="subheading font-weight-light"> {{selectedPatients.Nombre}}</h3>
                        </div>
                        <div class="form-group" >
                            <h2>Apellidos </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.Apellido}}</h3>
                        </div>
                        <div class="form-group">
                            <h2> CUI </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.CUI}}</h3>
                        </div>
                        <div class="form-group">
                            <h2> Estado </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.EstadoActual}}</h3>
                        </div>
                        <div>
                            <h2> Edad </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.Edad}}</h3>
                        </div>
                        <div>
                            <h2> Número telefónico </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.Telefono}}</h3>
                        </div>
                        <div>
                            <h2> Nombre del padre </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.Nombre_de_padre}}</h3>
                        </div>
                        <div>
                            <h2> Nombre de la madre </h2>
                            <h3 class="subheading font-weight-light"> {{selectedPatients.Nombre_de_madre}}</h3>
                        </div>
                    </form>
                    </template>
                    
                
                </b-col>
            </b-row>
        </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
            <b-col order="4" cols="6">
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="darConsulta"> Dar consulta </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="editarDatos"> Editar datos</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="archivos"> Archivos </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="reportes"> Reporte</button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="estadisticas"> Estadísticas </button>
                <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="casoslegales"> Casos legales</button>
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
      this.selectedPatients = response.data.Pacientes[0]
    });
  },
    data () {
      return {
        search:'',
        selected: [],
        selected2: null,
        estadoNuevo: null,
        dialog: false,
        radioGroup:1,
        lista: [],
        headers: [
          {text: 'CUI (ID)', align: 'center',value: 'id'},
          { text: 'Nombre', align: 'center', value: 'Nombre' },
          { text: 'Apellido', align: 'center', value: 'Apellido' }, 
          { text: 'Procedencia', align: 'center', value: 'Procedencia' },
          { text: 'Fecha de nacimiento', align: 'center', value: 'Fecha_de_nacimiento' },
          { text: 'Estado', align: 'center', value: 'EstadoActual' },
        ],
        editedIndex: -1,
        pacientes: [],
        selectedPatients:'',
        selectedIndex: 0,
        editedItem:{
          Nombre: '',
          Apellido: '',
          Procedencia: '',
          Fecha_de_nacimiento: '',
          EstadoActual:''
        }
      }
  },
    methods: {
        //para filtrar los datos de la tabla
        ingresarNuevo(){
          this.$router.push('/IngresarPaciente');
        },
        changeSelected(received){
          this.selectedPatients = received
        },
        /* metodos de redirección de botones */
        // falta vista para dar una consulta
        darConsulta(){
          this.$router.push('/IngresarPaciente');
        },
        eliminar(){
          this.$router.push('/IngresarPaciente');
        },
        editarDatos(received){
          this.dialog=true;
          this.editedIndex = this.pacientes.indexOf(received)
          this.$http.get(`http://localhost:8000/PacienteController/update/?val=${this.val}/id=${this.editedIndex}`);
        },
        casoslegales(){
          this.$router.push('/EditarPaciente');
        },
        archivos(){
          this.$router.push('/IngresarPaciente');
        },
        reportes(){
          this.$router.push('/EditarPaciente');
        },
        estadisticas(){
          this.$router.push('/EditarPaciente');
        },
        showAlert(a){
          console.log("aver");
          console.log(a);
        },
        
        close () {
          this.dialog = false
          setTimeout(() => {
            this.editedItem = Object.assign({}, this.defaultItem)
            this.editedIndex = -1
          }, 300)
        },
        editItem (item) {
          this.editedIndex = this.pacientes.indexOf(item)
          this.editedItem = Object.assign({}, item)
          this.dialog = true
        },
        save () {
          if (this.editedIndex > -1) {
            Object.assign(this.pacientes[this.editedIndex], this.editedItem)
          }
          var data = {
            id: this.pacientes[this.editedIndex].CUI,
            estado: this.estadoNuevo,
          }
          //console.log(data.estado)
          this.$http.put(`http://localhost:8000/PacienteController/update/`,data);
          this.close()
        }, 
        pasoParam(item){
          //capturamos al item que se le dio click...
          this.editedItem = item
          //selected2 contiene el CUI de lo selececionado
          this.selected2 = this.editedItem.CUI;
          
        },
        deleteItem(item){
          const index = this.pacientes.indexOf(item)
          console.log(index)
          console.log(this.pacientes[index])
          const id = this.pacientes[index].CUI
          console.log(id)
          this.$http.delete('http://localhost:8000/PacienteController/destroy', id).then(response => {
          
          });
            
        }

        
        
    },
    computed: {
      msg() {
        const selectedRow = this.selectedPatient[0];
        return selectedRow ? `${selectedRow.Nombre} ${selectedRow.Apellido}` : "no data selected";
      }
    }
        
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>

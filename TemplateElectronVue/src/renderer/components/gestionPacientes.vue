<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 id="headers" class="text-center">Gestión de Pacientes</h1>
    <br>
    <br>
    <div>
      <div id="TablaPacientes">
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
                      <option v-for='item in estados_response' :key ='item.ID' :value='item.ID'>{{item.significado}}</option>
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
                    <td class="text-xs-center">{{ props.item.procedencia.Departamento }}</td>
                    <td class="text-xs-center">{{ props.item.Fecha_de_nacimiento }}</td>
                    <td class="text-xs-center">{{ props.item.estado_actual.significado }}</td>
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
      <div id="DatosPaciente">
          <template>
            <form>
              <h2 id="headers" style="text-align:center"> Paciente seleccionado </h2>
              <br>
              <div>
                <img id="fotoPaciente" style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
              </div>
              <br>
              <div style="float:left; width: 50%">
              <h3 id="headers">Nombres </h3>
              <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Nombre}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h3 id="headers">Apellidos </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Apellido}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h3 id="headers"> CUI </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.CUI}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h3 id="headers"> Estado </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Estado}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h3 id="headers"> Edad </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Edad}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h3 id="headers"> Número telefónico </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.telefono}}</h3>
              </div>
              <div style="float:left; width: 45%">
                  <h3 id="headers"> Nombre del padre </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Padre}}</h3>
              </div>
              <div style="float:left; width: 50%; margin-left:5%">
                  <h3 id="headers"> Nombre de la madre </h3>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Madre}}</h3>
              </div>
              <br>
              <br>
          </form>
          </template>
      </div>
    </div>
    <div id="botones">
      <br>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
      </div>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="darConsulta"> Dar consulta </button>
      </div>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="editarPaciente"> Editar datos</button>
      </div>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="archivos"> Archivos </button>
      </div>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="reportes"> Reporte</button>
      </div>
      <div id="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="estadisticas"> Estadísticas </button>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
      //esto deberia ser un arrray de pacientes que contengan todos sus atributos...
      
      this.pacientes = response.data.Pacientes;
      //objeto utilizado para los labels..
      if (response.data.Pacientes[0] == null){
        console.log('Nothing to do here..');
      } else {
        this.selectedPatients.Nombre = response.data.Pacientes[0].Nombre;
        this.selectedPatients.Apellido = response.data.Pacientes[0].Apellido;
        this.selectedPatients.Estado = response.data.Pacientes[0].estado_actual.significado;
        this.selectedPatients.Edad = response.data.Pacientes[0].Edad;
        this.selectedPatients.CUI = response.data.Pacientes[0].CUI;
        this.selectedPatients.telefono = response.data.Pacientes[0].Telefono;
        this.selectedPatients.Madre = response.data.Pacientes[0].Nombre_de_madre;
        this.selectedPatients.Padre = response.data.Pacientes[0].Nombre_de_padre;

        console.log(this.selectedPatients);
        this.Nombre = response.data.Pacientes[0].Nombre;
        this.Apellido = response.data.Pacientes[0].Apellido;
      }
          });
    this.$http.get(`http://localhost:8000/EstadoController/getAllEstado`).then(response =>{
      this.estados_response = response.data.Estados;

    });
  },
    data () {
      return {
        search:'',
        selected: [],
        selected2: null,
        estados_response: '',
        estadoNuevo: null,
        dialog: false,
        radioGroup:1,
        lista: [],
        headers: [
          { text: 'CUI (ID)', align: 'center',value: 'CUI'},
          { text: 'Nombre', align: 'center', value: 'Nombre' },
          { text: 'Apellido', align: 'center', value: 'Apellido' }, 
          { text: 'Procedencia', align: 'center', value: 'Procedencia' },
          { text: 'Fecha de nacimiento', align: 'center', value: 'Fecha_de_nacimiento' },
          { text: 'Estado', align: 'center', value: 'EstadoActual' },
        ],
        editedIndex: -1,
        pacientes: [],
        selectedPatients:{
          Nombre: '',
          Apellido: '',
          Estado: '',
          Edad: '',
          telefono: '',
          Padre: '',
          Madre: '',
          CUI: ''
        },
        selectedIndex: 0,
        deletedCUI: '',
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
        prettySelected(){
          if (this.selectedPatients == null){
            this.selectedPatients = '';
          }
          
        },
        changeSelected(received){
          this.selectedPatients = received
        },
        /* metodos de redirección de botones */
        // falta vista para dar una consulta
        darConsulta(){
          this.$router.push('/darConsulta');
        },
        eliminar(){
          this.$router.push('/IngresarPaciente');
        },
        editarDatos(received){
          this.dialog=true;
          this.editedIndex = this.pacientes.indexOf(received)
        },
        editarPaciente(){
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
          console.log(data.estado)
          this.close()
          this.$http.put(`http://localhost:8000/PacienteController/update/`,data).then(response=>{
            this.selectedPatients.EstadoActual = this.estadoNuevo;
            this.reloadTable()
          });
        }, 
        pasoParam(item){
          //capturamos al item que se le dio click...
          this.editedItem = item
          //selected2 contiene el CUI de lo selececionado
          this.selected2 = this.editedItem.CUI;
          
        },
        deleteItem(item){
          this.deletedCUI = item.id
          
          this.$http.delete(`http://localhost:8000/PacienteController/delete?cui=${this.deletedCUI}`).then(response=>{
            this.reloadTable()
          });
            
        },
        reloadTable(){
          this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {      
            this.pacientes = response.data.Pacientes;
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
div#TablaPacientes {
  width: 65%;
  padding-left: 2%;
  margin-right: 2%;
  float: left;
}
div#DatosPaciente {
  width: 30%;
  margin-left: 2%;
  float: right;
}
div#botones{

  width: 96%;
  margin-left: 2%;
  margin-right: 2%;
  float: left;
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
h2#headers{
  font-family: Nunito;
  font-weight: bolder;
}
div#boton {
  width: 30%;
  margin-top: 1%;
  margin-left: 1%;
  margin-right: 1%;
  margin-bottom: 1%;
  float: left;
}
</style>

<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >

<template>
  <div class="grey--text text--darken-2">
    <h1 id="headers" class="text-center">Gestión de Pacientes</h1>
    <br>
    <br>
    <div>
      <div id="TablaInfoPacientes">
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
                <span class="headline">Editar estado</span>
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
                <v-btn color="blue darken-1" flat @click="close">Cancelar</v-btn>
                <v-btn color="blue darken-1" flat @click="save">Guardar</v-btn>
              </v-card-actions>
              </v-card>
          </v-dialog>
          <!--    cuadro de dialogo para eliminar el paciente -->
          <v-dialog v-model="dialog_delete" max-width="500px">
            <v-card>
              <v-card-title>
                <span class="headline">Eliminar paciente</span>
              </v-card-title>

              <v-card-text>
                <p>¿Desea eliminar el paciente?</p>
              </v-card-text>
              
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" flat @click="close">Cancelar</v-btn>
                <v-btn color="red darken-1" flat @click="deleteItem(selectedPatients)">Eliminar</v-btn>
              </v-card-actions>
              </v-card>
          </v-dialog>


          <!--    cuadro de dialogo para confirmar accion el paciente -->
          <v-dialog v-model="completeDialog" max-width="500px">
            <v-card>
              <v-card-title>
                <span class="headline">Acción realizada</span>
              </v-card-title>

              <v-card-text>
                <p>Acción completada exitosamente</p>
              </v-card-text>
              
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" flat @click="completeDialog=false">OK</v-btn>
              </v-card-actions>
              </v-card>
          </v-dialog>
            
          <v-data-table
              
              :headers="headers"
              :items="pacientes"
              :search="search"
              item-key="id"
              v-model="selected"
              :rows-per-page-text="rowsText"
              
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
                        @click="showDeleteDiag()"
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
              <!-- para que tenga el footer de la tabla en espanol -->
              <template v-slot:pageText="props">
                {{ props.pageStart }} - {{ props.pageStop }} de {{ props.itemsLength }}
              </template>
          </v-data-table>
        </v-card>
      </div>
      <div id="DatosPaciente">
          <template>
            <form>
              <h2 id="headers" style="text-align:center"> Paciente seleccionado </h2>
              <br>
              <div v-if="imageData">
                <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" :src="imageData" alt="" width="273" height="183">
              </div>
              <div v-else> <!-- se utiliza la imagen default si no se ha escogido una  -->
                <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" src="../assets/default.png" alt="" width="273" height="183">
              </div>
              <br>
              <div>
              <!-- elementos para seleccionar imagen--> 
              <button class="btn btn-lg btn-warning btn-block" id="botonimagen" @click="imgClick"> Seleccionar Imagen </button>
              <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeImg" ref="changeImg"/>
              </div>
              <br>
              <div style="float:left; width: 50%">
              <h4 id="headers">Nombres </h4>
              <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Nombre}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h4 id="headers">Apellidos </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Apellido}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h4 id="headers"> CUI </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.CUI}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h4 id="headers"> Estado </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.EstadoActual}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h4 id="headers"> Edad </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Edad}}</h3>
              </div>
              <div style="float:left; width: 50%">
                  <h4 id="headers"> Número telefónico </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Telefono}}</h3>
              </div>
              <div style="float:left; width: 45%">
                  <h4 id="headers"> Nombre del padre </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Nombre_de_padre}}</h3>
              </div>
              <div style="float:left; width: 50%; margin-left:5%">
                  <h4 id="headers"> Nombre de la madre </h4>
                  <h3 class="subheading font-weight-light" style="padding-left:10%"> {{selectedPatients.Nombre_de_madre}}</h3>
              </div>
              <br>
              <br>
          </form>
          </template>
      </div>
    </div>
    <div id="botones">
      <br>
      <div class="boton">
        <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="ingresarNuevo">Ingresar nuevo paciente</button>
      </div>
      <div class="boton">
        <router-link :to="{name: 'gestionarPaciente', params: { idPaciente: this.selectedPatients.id, cui: this.selectedPatients.CUI }}" class="btn btn-lg btn-warning btn-block">Dar Consulta</router-link>
      </div>
      <div class="boton">
        <router-link :to="{name: 'cambioEstado', params: { cui: this.selectedPatients.CUI, nombre: this.selectedPatients.Nombre, edad: this.selectedPatients.Edad, sexo: this.selectedPatients.Sexo, estado: this.selectedPatients.estado_actual, registro: this.selectedPatients.Numero_expediente }}" class="btn btn-lg btn-warning btn-block">Editar estado de paciente seleccionado</router-link>
      </div>
      <br>
      <div class="boton" style="width: 94%;">
        <router-link :to="{name: 'gestionFormularios', params: { cui: this.selectedPatients.CUI, nombre: this.selectedPatients.Nombre, apellido: this.selectedPatients.Apellido }}" class="btn btn-lg btn-warning btn-block"> Ingresar formulario de este paciente </router-link>
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
        console.log('No se han recibido pacientes. ');
      } else {
        this.selectedPatients.id = response.data.Pacientes[0].id;
        this.selectedPatients.Nombre = response.data.Pacientes[0].Nombre;
        this.selectedPatients.Apellido = response.data.Pacientes[0].Apellido;
        this.selectedPatients.EstadoActual = response.data.Pacientes[0].estado_actual.significado;
        this.selectedPatients.CUI = response.data.Pacientes[0].CUI;
        this.selectedPatients.Telefono = response.data.Pacientes[0].Telefono;
        this.selectedPatients.Nombre_de_madre = response.data.Pacientes[0].Nombre_de_madre;
        this.selectedPatients.Nombre_de_padre = response.data.Pacientes[0].Nombre_de_padre;
        this.imageData = response.data.Pacientes[0].Imagen;
        this.estadoNuevo = response.data.Pacientes[0].estado_actual;
        //modificacion para el display de la edad para cada elemento recibido
        for (let index = 0; index < response.data.Pacientes.length; index++) {
          const edadPaciente = response.data.Pacientes[index].Edad;
          if (edadPaciente < 1){
            response.data.Pacientes[index].Edad = Math.round(edadPaciente*12.0) + ' meses';
          }
          else{
            response.data.Pacientes[index].Edad = edadPaciente + ' años';
          } 
        }
        this.selectedPatients.Edad = response.data.Pacientes[0].Edad;
      }
    });
    this.$http.get(`http://localhost:8000/EstadoController/getAllEstado`).then(response =>{
      this.estados_response = response.data.Estados;
    });
  },
    data () {
      return {
        rowsText: "Filas por página: ",
        search:'',
        selected: [],
        selected2: null,
        estados_response: '',
        estadoNuevo: null,
        dialog: false,
        dialog_delete: false,
        completeDialog: false,
        radioGroup:1,
        headers: [
          { text: 'CUI (ID)', align: 'center',value: 'CUI'},
          { text: 'Nombre', align: 'center', value: 'Nombre' },
          { text: 'Apellido', align: 'center', value: 'Apellido' }, 
          { text: 'Procedencia', align: 'center', value: 'procedencia.Departamento' },
          { text: 'Fecha de nacimiento', align: 'center', value: 'Fecha_de_nacimiento' },
          { text: 'Estado', align: 'center', value: 'estado_actual.significado' },
        ],
        editedIndex: -1,
        pacientes: [],
        selectedPatients:{
          id: '',
          Nombre: '',
          Apellido: '',
          EstadoActual: '',
          Edad: '',
          Telefono: '',
          Nombre_de_padre: '',
          Nombre_de_madre: '',
          CUI: ''
        },
        selectedIndex: 0,
        deletedCUI: '',
        editedItem:{
          Nombre: '',
          Apellido: '',
          EstadoActual: '',
          Edad: '',
          Telefono: '',
          Nombre_de_padre: '',
          Nombre_de_madre: '',
          CUI: '',
          Procedencia: '',
          Fecha_de_nacimiento: ''
        },
        imageData : ""
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
          this.selectedPatients = this.pacientes[this.pacientes.indexOf(received)];
          this.selectedPatients.EstadoActual = this.pacientes[this.pacientes.indexOf(received)].estado_actual.significado
          this.imageData = this.selectedPatients.Imagen;
        },
        editarDatos(received){
          //this.dialog=true;
          this.editedIndex = this.pacientes.indexOf(received)
          this.editedItem = Object.assign({}, received)
          this.$router.push({name: 'EditarPaciente', params: { cui: this.editedItem.CUI }})
          
        },
        close () {
          this.dialog = false
          this.dialog_delete = false
          setTimeout(() => {
            this.editedItem = Object.assign({}, this.defaultItem)
            this.editedIndex = -1
          }, 300)
        },
        save () {
          if (this.editedIndex > -1) {
            Object.assign(this.pacientes[this.editedIndex], this.editedItem)
          }
          var data = {
            id: this.pacientes[this.editedIndex].CUI,
            estado: this.estadoNuevo,
            img: this.imageData,
          }
          this.close()
          this.$http.put(`http://localhost:8000/PacienteController/update/`,data).then(response=>{
            //console.log(this.selectedPatients);
            //var nuevoEstado = this.estados_response[this.estados_response.ID.indexOf(this.estadoNuevo)];
            this.selectedPatients.EstadoActual = (this.estados_response[this.estadoNuevo -1]).significado;
            this.selectedPatients.Imagen = this.imageData;
            this.completeDialog = true
            this.reloadTable()
          });
        }, 
        pasoParam(item){
          //capturamos al item que se le dio click...
          this.editedItem = item
          //selected2 contiene el CUI de lo selececionado
          this.selected2 = this.editedItem.CUI;
          
        },

        showDeleteDiag(){
          this.dialog_delete = true;
        },

        deleteItem(item){
          
          this.deletedCUI = item.id
          
          this.$http.delete(`http://localhost:8000/PacienteController/delete?cui=${this.deletedCUI}`).then(response=>{
            this.reloadTable()
            this.close()
            this.completeDialog = true
          });
            
        },
        reloadTable(){
          this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {      
            this.pacientes = response.data.Pacientes;
          });
        },
        imgClick: function(event){// on a click on the button with id 'one'
          const btn = this.$refs.changeImg
          btn.click();// trigger the click on second, and go on 
        },
        changeImg: function(event) {
          //this.save();
          var input = event.target;
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            // definir accion a realizar despues que se haya seleccionado una imagen
            reader.onload = (e) => {
              this.imageData = e.target.result;
              var data = {
                id: this.selectedPatients.CUI,
                estado: this.estadoNuevo.id,
                img: this.imageData,
              }
              //guardar el cambio de imagen en db
              this.$http.put(`http://localhost:8000/PacienteController/update/`,data).then(response=>{
                this.selectedPatients.EstadoActual = this.estadoNuevo.significado;
                this.selectedPatients.Imagen = this.imageData;
              });
            }
            }
            reader.readAsDataURL(input.files[0]);

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
div#TablaInfoPacientes {
  width: 65%;
  margin-left: 2%;
  margin-right: 0.5%;
  float: left;
}
div#DatosPaciente {
  width: 30%;
  margin-left: 2%;
  margin-right: 2%;
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
h4#headers{
  font-family: Nunito;
  font-weight: bolder;
  font-size: medium;
}
h1#headers{
  font-family: Nunito;
  font-weight: bolder;
}
h2#headers{
  font-family: Nunito;
  font-weight: bolder;
}
.boton {
  width: 30%;
  margin-top: 1%;
  margin-left: 1%;
  margin-right: 1%;
  margin-bottom: 1%;
  float: left;
}
.hide_file {
  z-index: 10;
  opacity: 0;
  cursor: pointer;
  float: center;
  height: 100%;
  width: 100%;
}
div#SelImg {
  z-index: 200;
  width: min-content;
  height: fit-content;
}
</style>

<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Gestión de Paciente</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col order="1" cols="8">
          
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
                <tr @click="selectUser(props.item)">
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
        <br><br>
         <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="dgenerales">Continuar</button>
      </div>
          </b-col>
          <b-col order="3" cols="4">
            <h1 class="text-center">Paciente Seleccionado</h1>
            <br>
            <img id="fotoPaciente" style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
            <br>
            <b-col>
              <label class="text-center"><b>Nombres</b></label>
              <label class="text-center">Juan Andres</label>
              <label class="text-center"><b>Apellidos</b></label>
              <label class="text-center">Perez molina</label>
            </b-col>
            <b-col>
              <label class="text-center"><b>Estado</b></label>
              <label class="text-center">En tratamiento</label>
              <label class="text-center"><b>Edad</b></label>
              <label class="text-center">15 años</label>
            </b-col>
            <br>
            <b-col>
              <label class="text-center"><b>Procedencia</b></label>
              <label class="text-center">Guatemala</label>
              <label class="text-center"><b>No. Emergencia</b></label>
              <label class="text-center">12345678</label>
            </b-col>
            <b-col>
              <label class="text-center"><b>Nombre de Padre</b></label>
              <label class="text-center">Oscar Juarez</label>
            </b-col> 
            <b-col>
              <label class="text-center"><b>Nombre de Madre</b></label>
              <label class="text-center">Lulu Martinez</label>
              <input id="prueba" type="text" v-model="prueba" class="form-control" placeholder="Prueba">
            </b-col> 
        </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
import { store } from '../main';
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
        this.selectedPatients.EstadoActual = response.data.Pacientes[0].estado_actual.significado;
        this.selectedPatients.Edad = response.data.Pacientes[0].Edad;
        this.selectedPatients.CUI = response.data.Pacientes[0].CUI;
        this.selectedPatients.Telefono = response.data.Pacientes[0].Telefono;
        this.selectedPatients.Nombre_de_madre = response.data.Pacientes[0].Nombre_de_madre;
        this.selectedPatients.Nombre_de_padre = response.data.Pacientes[0].Nombre_de_padre;
        //this.Nombre = response.data.Pacientes[0].Nombre;
        //this.Apellido = response.data.Pacientes[0].Apellido;
        this.imageData = response.data.Pacientes[0].Imagen;
        this.estadoNuevo = response.data.Pacientes[0].estado_actual;
      }
          });
    this.$http.get(`http://localhost:8000/EstadoController/getAllEstado`).then(response =>{
      this.estados_response = response.data.Estados;

    });
  },
  data() {
    return {
      rowsText: "Filas por página: ",
        search:'',
        prueba:'',
        selected: [],
        selected2: null,
        estados_response: '',
        estadoNuevo: null,
        dialog: false,
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
  methods:{
    refreshUsers(){
      this.$http.get("http://localhost:8000/users").then(response => {
      this.user = response.data.users;
    });
    },
    selectUser(recibed){
      this.prueba = recibed.id;
      store.CUI=this.prueba   
    },
    dgenerales() {
      this.$router.push("/FormularioTransfusiones");
    }
  }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
div#TablaPacientes {
  width: 100%;
  padding-left: 2%;
  margin-right: 2%;
  float: left;
}
div#DatosPaciente {
  width: 25%;
  margin-left: 2%;
  float: right;
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
</style>

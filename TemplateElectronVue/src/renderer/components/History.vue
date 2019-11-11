<template lang="">
    <div class = "Main">
      <div class = "History">
        <h3 style="font-weight: bold;">Paciente:</h3>
        <h3>{{this.paciente.nombre}} {{this.paciente.apellido}}</h3> 
            <div class="TimelineContainer">
            <v-timeline dense clipped>
            
            <v-timeline-item
              fill-dot
              class="white--text mb-12"
              color="orange"
              medium
            >
              <template v-slot:icon>
                <span>KR</span>
              </template>
              
            </v-timeline-item>
           
            <v-timeline-item
              v-for="(generalHistorial,index) in generalHistorial"
              class="mb-4"
              v-bind:color="generalHistorial.color"
              small>
            <v-container v-on:click="saludar(index)">  
              <v-row justify="space-between">
                  <v-col cols="7">
                    {{generalHistorial.tipoDeFormulario}}
                  </v-col>
                  <v-col class="text-right" cols="5">{{generalHistorial.fecha}}</v-col>
              </v-row>
            </v-container>
            </v-timeline-item>
            
    
          </v-timeline>
        </div>
      </div>
      <div class = "Display">
        <h3 style="font-weight: bold;">Fecha:</h3>
        <h3>{{this.generalHistorial[this.number].fecha}}</h3> 
        <div class = "DisplayBox">
          <!--<img style="margin-left: 5%; margin-top: 5%" src="../assets/consulta.png" alt="" width="520" height="450">-->
          <HistoryConsulta :text="this.actual" v-if="actual.tipoDeFormulario==='Consulta'"></HistoryConsulta>
          <cambioEstadoHistory :text="this.actual" v-if="actual.tipoDeFormulario==='Cambio de estado'"></cambioEstadoHistory>
          <HemodialisisHistory :text="this.actual" v-if="actual.tipoDeFormulario==='Hemodiálisis'"></HemodialisisHistory> 
        </div>
      </div>
    </div>
</template>
<style scoped>
   .Main{
    display: grid;
    grid-template-columns: 50% 50% ;
    grid-template-rows: 100%;
   }
   .TimelineContainer{
     background-color: white;
     margin:20px;
   }
   .History{
     border-right: 5px solid black;
     height: 100%;
   }
   .Display{
     margin-left:20px;
   }
   .DisplayBox{
    height: 650px;
    overflow: scroll;
   }

</style>
<script>
  import { store } from '../main';
  import HistoryConsulta from "./HistoryConsulta";
  import cambioEstadoHistory from "./cambioEstadoHistory";
  import HemodialisisHistory from "./HemodialisisHistory";
import { Cookies } from 'electron';
import { log } from 'util';
  export default {
    components: {HistoryConsulta, cambioEstadoHistory, HemodialisisHistory},
    data: () => ({
        consultas: [],
        cEstados:[],
        consulta: null,
        actual: {tipoDeFormulario: null},
        generalHistorial: [],
        cEstado: null,
        paciente: {
            nombre: 'Karlie',
            apellido: 'Rath',
            CUI: ''
        },
        fechas: [],
        number: 0
    }),
    mounted() {
      const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };
      this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {            

            if(response.data.Paciente[0] == null){
                
            }else{
                this.paciente.nombre = response.data.Paciente[0].Nombre;
                this.paciente.apellido = response.data.Paciente[0].Apellido;
                this.paciente.cui =1131671408;
                this.paciente.id = 1;
            }
      }).then(() => {
        this.$http.post("http://localhost:8000/ConsultaController/findAllUser", this.paciente).then(response => {
          this.consultas = response.data.Consulta
          for (let i =0; i < this.consultas.length; i++){
            this.consulta=this.consultas[i]
            this.consulta.tipoDeFormulario = "Consulta"
            this.consulta.color = "red"
            this.generalHistorial.push(this.consulta)
          }
        }).then(() => {
          
          this.$http.post("http://localhost:8000/cambioEstadoController/findAllUser", this.paciente).then(response => {
            this.consultas = response.data.Consulta
            for (let i =0; i < this.consultas.length; i++){
              this.consulta=this.consultas[i]
              this.consulta.tipoDeFormulario = "Cambio de estado"
              this.consulta.color = "blue"
              this.generalHistorial.push(this.consulta)
            }
        
          }).then(() => {
            
           this.$http.post("http://localhost:8000//hemodialisis/findAllUser", this.paciente).then(response => {
            this.consultas = response.data.Consulta
            for (let i =0; i < this.consultas.length; i++){
              this.consulta=this.consultas[i]
              this.consulta.tipoDeFormulario = "Hemodiálisis"
              this.consulta.color = "green"
              this.consulta.fecha = this.consulta.FechaHemodialisis
      
              this.consulta.HeparinizacionCebado = JSON.parse(this.consulta.Heparinizacion)['Cebado']
              this.consulta.HeparinizacionTransdialisis = JSON.parse(this.consulta.Heparinizacion)['Transdialisis']
              
              this.consulta.ConductividadNa = JSON.parse(this.consulta.Conductividad)['Na']
              this.consulta.ConductividadK = JSON.parse(this.consulta.Conductividad)['K']
              this.consulta.ConductividadHCO3 = JSON.parse(this.consulta.Conductividad)['HCO3']
              
              this.consulta.TiempoHoras = JSON.parse(this.consulta.Tiempo)['Horas']
              this.consulta.TiempoMinutos = JSON.parse(this.consulta.Tiempo)['Minutos']
              
              this.consulta.ViaLugar = JSON.parse(this.consulta.Via)['Lugar']
              this.consulta.ViaDireccion = JSON.parse(this.consulta.Via)['Direccion']
              
              this.consulta.LugarDeProcedencia = this.consulta.LugarDeProcedencia === 1 ? "1" : "2";

              this.consulta.FlujoDializante = String(this.consulta.FlujoDializante);

              this.generalHistorial.push(this.consulta)
            }

          }).then(() => {
            this.generalHistorial.sort(function (d1, d2) {
                return new Date(d1.fecha) - new Date(d2.fecha)
            })
            console.log(this.generalHistorial)
            })
          })
        }) 
      })
    },
    methods: {
      saludar: function (n) {
        this.number=n
        this.actual=this.generalHistorial[n]
        console.log(this.actual)
        
      }   
    },
  }
</script>


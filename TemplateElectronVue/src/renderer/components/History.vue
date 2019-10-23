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
              class="mb-4"
              color="red"
              small
              v-for="(fecha,index) in fechas">
            <v-container v-on:click="saludar(index)">  
              <v-row justify="space-between">
                  <v-col cols="7">
                    Consulta
                  </v-col>
                  <v-col class="text-right" cols="5">{{fecha}}</v-col>
              </v-row>
            </v-container>
            </v-timeline-item>
            
    
          </v-timeline>
        </div>
      </div>
      <div class = "Display">
        <h3 style="font-weight: bold;">Fecha:</h3>
        <h3>{{this.fechas[this.number]}}</h3> 
        <div>
          <!--<img style="margin-left: 5%; margin-top: 5%" src="../assets/consulta.png" alt="" width="520" height="450">-->
          <HistoryConsulta :text="this.consulta"></HistoryConsulta>
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

</style>
<script>
  import { store } from '../main';
  import HistoryConsulta from "./HistoryConsulta";
  export default {
    components: {HistoryConsulta},
    data: () => ({
        consultas: [],
        consulta: null,
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
                this.paciente.CUI = response.data.Paciente[0].CUI;
            }
      }).then(() => {
      this.$http.post("http://localhost:8000/ConsultaController/findAllUser", this.paciente.CUI).then(response => {
        this.consultas = response.data.Consulta
        for (let i =0; i < this.consultas.length; i++){
          this.fechas.push(this.consultas[i].fecha)
        }
          this.consulta=this.consultas[0]
        });
      })
    },
    methods: {
      saludar: function (n) {
        this.number=n
        this.consulta=this.consultas[n]
        
      }   
    },
  }
</script>


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
                <span>JL</span>
              </template>
              
            </v-timeline-item>
      
            <v-timeline-item
              class="mb-4"
              small
            >
              <v-row justify="space-between">
                <v-col cols="7">
                  
                  Ingreso
                </v-col>
                <v-col class="text-right" cols="5">1/07/19</v-col>
              </v-row>
            </v-timeline-item>
      
            <v-timeline-item
              class="mb-4"
              color="grey"
              small
            >
              <v-row justify="space-between">
                <v-col cols="7">
                  Consulta
                </v-col>
                <v-col class="text-right" cols="5">2/01/19</v-col>
              </v-row>
            </v-timeline-item>
      
            <v-timeline-item
              class="mb-4"
              color="grey"
              small
            >
              <v-row justify="space-between">
                <v-col cols="7">
                  Consulta
                </v-col>
                <v-col class="text-right" cols="5">20/01/19</v-col>
              </v-row>
            </v-timeline-item>
            <v-timeline-item
              class="mb-4"
              color="grey"
              small
            >
              <v-row justify="space-between">
                <v-col cols="7">
                  Transplante
                </v-col>
                <v-col class="text-right" cols="5">10/03/19</v-col>
              </v-row>
            </v-timeline-item>
            <v-timeline-item
              class="mb-4"
              color="red"
              small
            >
              <v-row justify="space-between">
                <v-col cols="7">
                  Taller1
                </v-col>
                <v-col class="text-right" cols="5">24/03/19</v-col>
              </v-row>
            </v-timeline-item>
            <v-timeline-item
              class="mb-4"
              color="red"
              small
            >
            <v-row justify="space-between">
                <v-col cols="7">
                  Consulta
                </v-col>
                <v-col class="text-right" cols="5">28/03/19</v-col>
              </v-row>
            </v-timeline-item>
            
    
          </v-timeline>
        </div>
      </div>
      <div class = "Display">
        <h3 style="font-weight: bold;">Fecha:</h3>
        <h3>{{this.fecha}}</h3> 
        <div>
          <img style="margin-left: 5%; margin-top: 5%" src="../assets/consulta.png" alt="" width="520" height="450">
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
  export default {
    data: () => ({
        paciente: {
            nombre: 'Karlie',
            apellido: 'Rath'
        },
        fecha: "2019-10-1"
  })
  }
</script>


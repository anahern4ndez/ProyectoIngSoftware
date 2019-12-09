<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Cambio de Estado</h1>
        <div>            
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">    
                    <b-col order="1" cols="5">
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Terapia actual en la que se encuentra el paciente</label> 
                    </b-col> 
                    <b-col order="2" cols="5">
                    </b-col>                        
                </b-row>
            </b-container>
        </div>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">  
                    <div>
                        <v-radio-group v-model="text.estadoinicial" row :rules="radioRules" required readonly>
                            <v-radio name='actual' label="Pre diálisis" :value="1" color="black"></v-radio>
                            <v-radio name='actual' label="Diálisis peritoneal" :value="2" color="black"></v-radio>
                            <v-radio name='actual' label="Hemodiálisis" :value="3" color="black"></v-radio>
                            <v-radio name='actual' label="Transplante renal" :value="4" color="black"></v-radio>
                        </v-radio-group>
                    </div>             
                </b-row>
            </b-container>
        </div>
        <div>            
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">    
                    <b-col order="1" cols="5">
                        <label for="nameInput" style="font-weight: bold; font-family: Nunito; font-size: 120%;">Cambio de Status de paciente a</label> 
                    </b-col> 
                    <b-col order="2" cols="5">
                    </b-col>                        
                </b-row>
            </b-container>
        </div>
        <div>
            <b-container class="bv-example-row1" >
                <b-row align-h="around" align-v="center">  
                        <div>
                            <v-radio-group v-model="text.estadofinal" row :rules="radioRules" required readonly>
                                <v-radio name='actual' label="Pre diálisis" :value="1" color="black"></v-radio>
                                <v-radio name='actual' label="Diálisis peritoneal" :value="2" color="black"></v-radio>
                                <v-radio name='actual' label="Hemodiálisis" :value="3" color="black"></v-radio>
                                <v-radio name='actual' label="Transplante renal" :value="4" color="black"></v-radio>
                            </v-radio-group>
                        </div>             
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<script>
    export default {
        name: "cambioEstadoHistory",
        props:{
            text:{
                //Suejto a cambio
                required:true,
            }
        },
        /*
        watch: {
            text: function(newVal){
                this.consulta = newVal   // or this.openPopup(newVal) is this suits
            }
        },*/
        data(){
            return{
                paciente: {
                    nombre: '',
                    apellido: '',
                },
            }
        },
        mounted(){
        }
    }
</script>


<style>
div#Tabla {
  float: right;
  align-items: center;
}
.subir{
    position: relative;
    top: -20px;
}
.subir2{
    position: relative;
    top: -40px;
}
.subir3{
    position: relative;
    top: -40px;
}
.bajar{
    position: relative;
    top: 10px;
}
</style>
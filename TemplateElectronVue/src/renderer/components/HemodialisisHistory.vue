<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
    <div>
        <br>
        <h1 class ="headers">Hemodiálisis</h1>  
        <br>
        <!--b-tabs-title> Pacientes agendados para hoy: {{todaysDateFormatted}}</b-tabs-title-->
        <v-card>
            <v-toolbar flat color="primary" dark>
                
            </v-toolbar>
                <div class="cuerpo">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="encapsulado">
                                    <br><br>
                                    <v-text-field
                                        v-model="text.NoHemodialisis"
                                        label="No. de Hemodiálisis"
                                        outline
                                        disabled
                                        class="mitad"
                                        
                                    ></v-text-field>
                                    <v-layout align-center justify-end style="width: 100%">
                                        <v-container fluid row align-center justify-space-around fill-height>
                                            <h4 class="headers" style="margin-right: 10%">Lugar de procedencia:</h4>
                                            <v-checkbox class="align-center justify-center"  v-model="text.LugarDeProcedencia" label="Hospitalizado" value="1" color="green"></v-checkbox>
                                            <v-checkbox class="align-center justify-center"  v-model="text.LugarDeProcedencia" label="Ambulatorio" value="2" color="green"></v-checkbox>
                                        </v-container>
                                    </v-layout>
                                </div>
                                    <div>
                                        <ol>
                                            <ul>
                                                <h4 class="headers">1. Hemodiálisis:</h4>
                                                <v-layout align-center justify-end>
                                                    <v-container fluid row align-center justify-space-around fill-height>
                                                        <v-checkbox class="align-center justify-center" v-model="text.LugarDeProcedencia" label="Aguda" value="1" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="text.LugarDeProcedencia" label="Crónica" value="2" color="green"></v-checkbox>
                                                    </v-container>
                                                </v-layout>
                                            </ul>
                                            <ul id="via">
                                                <h4 class="headers">2. Vía:</h4>
                                                <v-container row>
                                                        <v-checkbox class="align-center justify-center" v-model="text.ViaLugar" label="Femoral" value="Femoral" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="text.ViaLugar" label="Subclavio" value="Subclavio" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="text.ViaLugar" label="Yugular" value="Yugular" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="text.ViaLugar" label="Derecho" value="Derecho" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="text.ViaLugar" label="Izquierdo" value="Izquierdo" color="green"></v-checkbox>
                                                </v-container>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" v-model="text.ViaDireccion" label="Invertido" value="Invertido" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.ViaDireccion" label="Normal" value="Normal" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">3. Líneas pediátricas:</h4>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" v-model="text.LineasPediatrica" label="6.5 Mm" value="6.5" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.LineasPediatrica" label="8.0 Mm" value="8" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">4. Filtro #:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox class="align-center justify-center" v-model="text.Filtro" label="0.7 m2" value="0.7" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.Filtro" label="0.9 m2" value="0.9" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.Filtro" label="0.11 m2" value="0.11" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.Filtro" label="1.5 m2" value="1.5" color="green"></v-checkbox>
                                                    <v-text-field
                                                    v-model="text.Filtro" 
                                                    label="Otros"
                                                    outline
                                                    
                                                    ></v-text-field>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">5. Flujo de dializante:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox class="align-center justify-center" v-model="text.FlujoDializante" label="300" value="300" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="text.FlujoDializante" label="400" value="400" color="green"></v-checkbox>
                                                    <v-text-field
                                                    v-model="text.FlujoDializante"
                                                    label="Otros (ml/min)"
                                                    outline
                                                    
                                                    ></v-text-field>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">6. Flujo de sangre</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="text.FlujoDeSangre"
                                                    label="QB (ml/min)"
                                                    outline
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">7. UF</h4>
                                                <v-text-field
                                                    v-model="text.UF"
                                                    label="(ml total)"
                                                    outline
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">8. Heparinización</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="text.HeparinizacionCebado"
                                                    label="Cebado (UL)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="text.HeparinizacionTransdialisis"
                                                    label="Trans-Diálisis (UL/hora)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">9. Tiempo</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="text.TiempoHoras"
                                                    label="Horas"
                                                    outline
                                                    class="mitad"
                                                    
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="text.TiempoMinutos"
                                                    label="Minutos"
                                                    outline
                                                    class="mitad"
                                                    
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">10. Conductividad</h4>
                                                <v-container row align-center justify-space-around fill-height>
                                                    <v-checkbox class="align-center justify-center" label="Na+" v-model="text.ConductividadNa" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" label="K+" v-model="text.ConductividadK" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" label="HCO3" v-model="text.ConductividadHCO3"  color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">11. Peso/Talla</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="text.PesoPre"
                                                    label="Peso Pre-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="text.PesoPost"
                                                    label="Peso Post-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="text.Talla"
                                                    label="Talla (m)"
                                                    outline
                                                    class="mitad"
                                                    
                                                ></v-text-field>
                                                <v-text-field
                                                    disabled
                                                    v-model="text.PesoDelta"
                                                    label="Peso delta"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                        </ol>
                                    </div>
                                    <h3 id="headers" class="text-xs-center">Especiales</h3>
                                    <v-textarea
                                        outline
                                        v-model="text.Especiales"
                                        name="Especiales"
                                        value=""
                                        rows=10
                                    ></v-textarea>
                                    <br><br>
                                    <h4 class="headers">Observaciones</h4>
                                    <v-textarea
                                        outline
                                        v-model="text.Observaciones"
                                        name="Observaciones"
                                        value=""
                                        rows=10
                                    ></v-textarea>
                               
                            </fieldset>
                        </form>
                    </div>
                    <br>

        </v-card>
    </div>
</template>

<script>
    export default {

        name: "HemodialisisHistory",
        props:{
            text:{
                //Suejto a cambio
                required:true,
            }
        },
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
<style scoped>
.DatosPaciente {
    display: grid;
        /*  between rows, between columns */
    grid-gap: 10px 5%;
    grid-template-columns: 35% 28% 28%;
}
.Hemodialisis {
    display: grid;
        /*  between rows, between columns */
    grid-gap: 10px 5%;
    grid-template-columns: 45% 45%;
}
.cuerpo {
    border: solid #a9a9a9 2px;
    text-align: center;
    align-content: center;
    justify-content: center;
    margin-left: 5%;
    width: 90%;
    padding: 0.2%;
    padding-top: 2%;
    padding-bottom: 1%;
    display: flexbox;
    align-items: center;
    justify-content: center;
}
.encapsulado {
    background-color: white;
    margin: 2%;
    padding-top: 2%;
}
.mitad {
    width: 45%;
    float: left;
    margin-right: 5%;
}
table.table-bordered {
    table-layout:fixed;
}
table.table-bordered > tbody > tr > th {
    border: 3px solid #a9a9a9;
}
table.table-bordered > tbody > tr > td{
    border: 3px solid #a9a9a9;
    width: 10%;
    word-wrap: break-word;
}
h4 .headers{
    font-family: Nunito;
    font-weight: bolder;
    font-size: medium;
}
.headers{
    font-family: Nunito;
    font-weight: bolder;
}
ol {
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
  break-inside: avoid-column;
  -webkit-column-break-inside: avoid;
}
ol > ul{
  break-inside: avoid-column;
  -webkit-column-break-inside: avoid;
}
td > input {
    position: relative;
    width: 100%;
    word-wrap: break-word;
}
.v-container {
    background: aquamarine;
    text-align: center; /* center checkbox horizontally */
    vertical-align: middle; /* center checkbox vertically */
    align-items: center;
    justify-content: center;
}
.dialogText {
    font-size: 1.5rem;
    padding: 5%;
}
.headline {
    font-weight: bolder;
    font-family: Nunito;
}
.v-btn {
    font-size: 1.3rem;
    margin: 3%;
    padding: 3%;
    height: fit-content;
}
</style>
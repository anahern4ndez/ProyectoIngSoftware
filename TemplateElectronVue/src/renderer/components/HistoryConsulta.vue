
<template>
    <div class="encapsulado">
        <!-- Form Name -->
        <h2 class="headers" style="text-align: left;">Dar Consulta</h2>
        <b-container class="bv-example-row2">
            <b-row class="justify-content-md-center">
                <b-col>
                    <!-- Center-->
                    <div style="margin-left: 2%" class="form-group encapsulado">
                        <v-layout align-center justify-end />
                        <h3 class="headers text-xs-center">Dx. Definitivo</h3>
                        <br/>
                        <v-textarea
                            outline
                            rows=14
                            :auto-grow=true
                            v-model="text.Dx_Asociados"      
                        ></v-textarea>
                    </div>  
                </b-col>
                <b-col>
                    <!-- Center-->
                    <div style="margin-left: 2%" class="form-group encapsulado">
                        <v-layout align-center justify-end />
                        <h3 class="headers text-xs-center">Dx. Definitivo</h3>
                        <br/>
                        <v-textarea
                            outline
                            rows=14
                            :auto-grow=true 
                            v-model="text.Dx_Definitivo"     
                        ></v-textarea>
                    </div>  
                </b-col>                   
            </b-row>
        </b-container>

        <!-- Textarea -->
        <div class="form-group encapsulado">
            <div class="form-group">
                <v-layout align-center justify-end />
                <h3 class="headers text-xs-center">Historia</h3>
                <v-textarea
                    v-model="text.historia"
                    outline
                    rows=8
                    :auto-grow=true
                ></v-textarea>
            </div>
        </div>



        <!-- Textarea -->
        <div class="form-group encapsulado">
            <b-container>
                <b-row>
                    <b-col>
                        <!-- Textarea -->
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Evaluación Médica</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.evalucion_medica"
                            ></v-textarea>
                        </div>
                    </b-col>
                    <b-col>
                        <!-- Textarea -->                           
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Plan Médico</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.plan_medico"
                            ></v-textarea>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <b-container>
                <b-row>
                    <b-col>
                    <!-- Textarea -->
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Evaluación Psicológica</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.evaluacion_psicologica"
                            ></v-textarea>
                        </div>
                    </b-col>
                    <b-col>
                    <!-- Textarea -->                           
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Plan Psicológico</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.plan_psicologico"
                            ></v-textarea>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <b-container>
                <b-row>
                    <b-col>
                        <!-- Textarea -->
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Evaluación de Trabajo Social</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.evaluacion_trabajo_social"
                            ></v-textarea>
                        </div>
                    </b-col>
                    <b-col>
                    <!-- Textarea -->                           
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Plan de Trabajo Social</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.plan_trabajo_social"
                            ></v-textarea>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <b-container>
                <b-row>
                    <b-col>
                        <!-- Textarea -->
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Evaluación Nutricional</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.evaluacion_nutricional"
                            ></v-textarea>
                        </div>
                    </b-col>
                    <b-col>
                        <!-- Textarea -->                           
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Plan Nutricional</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.plan_nutricional"
                            ></v-textarea>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <b-container>
                <b-row>
                    <b-col>
                        <!-- Textarea -->
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Evaluación Farmacológica</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.evaluacion_farmacologica"
                            ></v-textarea>
                        </div>
                    </b-col>
                    <b-col>
                        <!-- Textarea -->                           
                        <div class="form-group">
                            <v-layout align-center justify-end />
                            <h3 class="headers text-xs-center">Plan Farmacológico</h3>
                            <v-textarea
                                outline
                                rows=8
                                v-model="text.plan_farmacologico"
                            ></v-textarea>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>       
</template>

<script>
    export default {
        name: "HistoryConsulta",


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

<style scoped>
    .cuerpo {
        border: solid #a9a9a9 2px;
        text-align: center;
        margin-left: 5%;
        width: 90%;
        padding: 5%;
        padding-top: 2%;
        padding-bottom: 1%;
    }

    .encapsulado {
        background-color: white;
        margin: 2%;
        padding: 3%;
        /* padding-top: 2%; */
    }

    table.table-bordered > tbody > tr > th {
    border: 3px solid #a9a9a9;
    }
    table.table-bordered > tbody > tr > td {
    border: 3px solid #a9a9a9;
    }

    .posicion {
    position: relative;
    }

    .centrado {
    vertical-align: middle;
    }

    div.col-auto > ul > li.nav-item {
        color:red;
    }

    h1, h2, h3, h4 {
        font-family: Nunito;
        font-weight: bolder;
        text-align: center;
    }

    .headers{
        font-family: Nunito;
        font-weight: bolder;
    }
</style>
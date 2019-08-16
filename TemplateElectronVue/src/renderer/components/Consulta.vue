

<template lang="">
    <div>
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab title="Consulta"  active >
                <div class="cuerpo">
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Text input-->
                        <div style="display: flex; justify-content:space-between;">
                            <h1 >Consulta General</h1>
                            <h1 >{{this.fecha}}</h1>
                        </div>
                        

                        <!-- Text input-->
                        <div class="form-group ">
                        <!-- Lefts-->
                        <div class="encapsulado">
                            <b-container>
                                <b-row class="justify-content-md-center">
                                <b-col>
                                    <div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <h3 style="font-weight: bold;">Paciente:</h3>  
                                                </b-col>
                                                <b-col>
                                                    <h3>{{this.paciente.nombre}} {{this.paciente.apellido}}</h3> 
                                                </b-col>
                                            </b-row>
                                            <b-row>
                                            <img style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
                                            </b-row>
                                        </b-container>
                                    </div>
                                </b-col>                       
                                <b-col>
                                    <!-- Right-->
                                    <div style="margin-left: 2%">
                                        <h3 style="text-align:center; font-weight: bold;margin-bottom: 2%;">Observaciones especiales: </h3>  
                                        <div>                     
                                            <v-textarea
                                                v-model="comentario"
                                                outline
                                                rows=10
                                            ></v-textarea>
                                        </div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <button type="button" class="btn btn-lg btn-warning btn-block">Agregar Comentario</button> 
                                                </b-col>
                                                <b-col>
                                                    <button type="button" class="btn btn-lg btn-warning btn-block">Ver más</button>
                                                </b-col>
                                            </b-row>
                                        </b-container>
                                    </div>
                                </b-col>
                                </b-row>
                            </b-container>
                        </div>
                        </div>
                        <!-- Form Name -->
                        <h2 id="headers" style="text-align: left;">Datos Generales</h2>

                        <div class="encapsulado">                    
                            <b-container>
                                    <b-row>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Nombre_de_padre"
                                            label="Nombre del padre"
                                            outline
                                            :disabled="true"
                                        ></v-text-field> 
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Nombre_de_madre"
                                            label="Nombre de la madre"
                                            outline
                                            :disabled="true"
                                        ></v-text-field> 
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Procedencia"
                                            label="Lugar de nacimiento"
                                            outline
                                            :disabled="true"
                                        ></v-text-field> 
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Telefono"
                                            label="Teléfono"
                                            outline
                                            :disabled="true"
                                        ></v-text-field> 
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Grupo_De_Sangre"
                                            label="Grupo de sangre"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Estudia"
                                            label="Estudia"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Transfusiones"
                                            label="Transfusiones"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.Peso"
                                            label="Peso"
                                            outline
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.kg_perc"
                                            label="Kg. Percentil"
                                            outline
                                        ></v-text-field>
                                        </b-col>
                                        
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.Talla"
                                            label="Talla"
                                            outline
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.cms_perc"
                                            label="Cms. Percentil"
                                            outline
                                    ></v-text-field>
                                    </b-col>
                                
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.PA"
                                            label="P/A"
                                            outline
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.Percentil"
                                            label="Percentil"
                                            outline
                                        ></v-text-field>
                                        </b-col>
                                    </b-row>

                           
                                    
                                    <table class="table table-bordered table-ligth">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 10%">Vacuna</th>
                                                <th scope="row" style="width: 10%">1ra Dosis</th>
                                                <th scope="row" style="width: 10%">2ra Dosis</th>
                                                <th scope="row" style="width: 10%">3ra Dosis</th>
                                                <th scope="row" style="width: 10%">Refuerzos</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">BCG</th>
                                                <td><v-layout><v-checkbox color="green" v-model="bcg1" @change="fillBCG" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="bcg2" @change="fillBCG" :disabled="!bcg1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="bcg3" @change="fillBCG" :disabled="!bcg2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="bcgRef" :disabled="!bcg3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Poliovirus</th>
                                                <td><v-layout><v-checkbox color="green" v-model="poliovirus1" @change="fillPoliovirus" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="poliovirus2" @change="fillPoliovirus" :disabled="!poliovirus1"  hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="poliovirus3" @change="fillPoliovirus" :disabled="!poliovirus2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="poliovirusRef" :disabled="!poliovirus3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis A</th>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisA1" @change="fillHepatitisA" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisA2" @change="fillHepatitisA" :disabled="!hepatitisA1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisA3" @change="fillHepatitisA" :disabled="!hepatitisA2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisARef" :disabled="!hepatitisA3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis B</th>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisB1" @change="fillHepatitisB" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisB2" @change="fillHepatitisB" :disabled="!hepatitisB1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisB3" @change="fillHepatitisB" :disabled="!hepatitisB2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="hepatitisBRef" :disabled="!hepatitisB3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Neumococo</th>
                                                <td><v-layout><v-checkbox color="green" v-model="neumococo1" @change="fillNeumococo" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="neumococo2" @change="fillNeumococo" :disabled="!neumococo1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="neumococo3" @change="fillNeumococo" :disabled="!neumococo2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="neumococoRef" :disabled="!neumococo3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Influenza</th>
                                                <td><v-layout><v-checkbox color="green" v-model="influenza1" @change="fillInflueza" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="influenza2" @change="fillInflueza" :disabled="!influenza1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="influenza3" @change="fillInflueza" :disabled="!influenza2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="influenzaRef" :disabled="!influenza3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Diftteria/Tétano/Tosferina(DPT)</th>
                                                <td><v-layout><v-checkbox color="green" v-model="DPT1" @change="fillDPT" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="DPT2" @change="fillDPT" :disabled="!DPT1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="DPT3" @change="fillDPT" :disabled="!DPT2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="DPTRef" :disabled="!DPT3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Sarampión/Paperas/Rubeola(SPR)</th>
                                                <td><v-layout><v-checkbox color="green" v-model="SPR1" @change="fillSPR" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="SPR2" @change="fillSPR" :disabled="!SPR1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="SPR3" @change="fillSPR" :disabled="!SPR2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox color="green" v-model="SPRRef" :disabled="!SPR3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>

                                        </tbody>
                                    </table>

                    </b-container>
                </div>

                        <!-- Form Name -->
                        <h2 id="headers" style="text-align: left;">Dar Consulta</h2>
                        <div>
                        <b-container class="bv-example-row2">
                            <b-row class="justify-content-md-center">
                                <b-col>
                                
                                    <!-- Left-->
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div class="form-group">
                                          <v-flex xs12>
                                            <v-layout align-center justify-end />
                                                <h3 id="headers"  class="text-xs-center">Síndrome Clínico de Presentación</h3>              
                                                <v-container fluid >
                                                    <v-radio-group v-model="Sindrome_Clinico_Presentacion">
                                                        <v-radio
                                                            v-for="s in sindromes"
                                                            :label="s.significado"
                                                            :key="s.ID"
                                                            :value="s.ID"
                                                            color="green"
                                                            @change="sindromeValue(s.ID, s.significado)"
                                                            
                                                        ></v-radio>
                                                    </v-radio-group>
                                                </v-container>
                                            </v-flex>
                                        </div>
                                    </div>
                                </b-col>
                                <b-col>
                                    <!-- Center-->
                                    <div style="margin-left: 2%"class="form-group encapsulado">
                                         <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Dx. Definitivo</h3>
                                        <v-textarea
                                            v-model="Dx_Definitivo"
                                            outline
                                            rows=18.5
                                            :auto-grow=true
                                        ></v-textarea>
                                    </div>
                                </b-col>
                                <b-col>
                                    <!-- Right-->
                                    <div style="margin-left: 2%"class="form-group encapsulado">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Dx. Asociado</h3>
                                        <v-textarea
                                            v-model="Dx_Asociado"
                                            outline
                                            rows=18.5
                                            :auto-grow=true
                                        ></v-textarea>
                                    </div>  
                                </b-col>
                            </b-row>
                        </b-container>
                        </div>       

                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                        <div class="form-group">
                            <v-layout align-center justify-end />
                                <h3 id="headers"  class="text-xs-center">Historia</h3>
                            <v-textarea
                                v-model="historia"
                                outline
                                rows=8
                                :auto-grow=true
                            ></v-textarea>
                        </div>
                        </div>

                        <!-- Text input-->
                    <div class="form-group ">
                        <!-- Left-->
                        <b-container>
                            <b-row>
                                <b-col>
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div>
                                            <v-layout align-center justify-end />
                                                <h3 id="headers"  class="text-xs-center">Medicamentos</h3>
                                            <b-container>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Prednisona" label="Prednisona" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Prednisona_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Prednisona"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Prednisona_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Prednisona"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="cyac" label="Cyac" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cyac_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!cyac"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cyac_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!cyac"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Tac" label="Tac" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Tac_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Tac"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Tac_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Tac"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="MMF" label="MMF" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="MMF_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!MMF"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="MMF_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!MMF"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="AZA" label="AZA" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="AZA_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!AZA"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="AZA_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!AZA"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CFM" label="CFM" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CFM_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!CFM"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CFM_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!CFM"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Enalapril" label="Enalapril" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Enalapril_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Enalapril"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Enalapril_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Enalapril"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Losartan" label="Losartan" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Losartan_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Losartan"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Losartan_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Losartan"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Amlodipina" label="Amlodipina" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Amlodipina_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Amlodipina"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Amlodipina_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Amlodipina"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CitratoNa" label="Citrato Na" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_Na_mg"
                                                            label="mili-equi"
                                                            outline
                                                            :disabled="!CitratoNa"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_Na_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!CitratoNa"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CitratoK" label="Citrato K" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_K_mg"
                                                            label="mili equiva."
                                                            outline
                                                            :disabled="!CitratoK"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_K_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!CitratoK"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Furosemida" label="Furosemida" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Furosemida_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Furosemida"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Furosemida_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Furosemida"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Alfacalcidol" label="Alfacalcidol" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Alfacalcidol_mg"
                                                            label="micro gr"
                                                            outline
                                                            :disabled="!Alfacalcidol"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Alfacalcidol_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Alfacalcidol"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CaCO3" label="CaCO3" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CaCO3_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!CaCO3"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CaCO3_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!CaCO3"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="EPO" label="EPO"  color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="EPO_mg"
                                                            label="unidades"
                                                            outline
                                                            :disabled="!EPO"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="EPO_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!EPO"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Fe" label="Fe" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Fe_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Fe"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Fe_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Fe"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Cefadroxilo"  color="green" label="Cefadroxilo" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cefadroxilo_mg"
                                                            label="mg"
                                                            outline
                                                            :disabled="!Cefadroxilo"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cefadroxilo_frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            :disabled="!Cefadroxilo"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                            </b-container> 
            
                                        </div>
                                    </div>
                                </b-col>
                        <!-- Right-->
                                <b-col>
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div>
                                            <v-layout align-center justify-end />
                                                <h3 id="headers"  class="text-xs-center">Resultados de laboratorios</h3>
                                            <b-container>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Na"
                                                            label="Na"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cl"
                                                            label="Cl"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="BUN"
                                                            label="BUN"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Glu"
                                                            label="Glu"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="K"
                                                            label="K"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="HCO"
                                                            label="HCO"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Creat"
                                                            label="Creat"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="WB"
                                                            label="WB"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Col"
                                                            label="Col"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Alb"
                                                            label="Alb"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="HB"
                                                            label="HB"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="HT"
                                                            label="HT"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                   <b-col>
                                                        <v-text-field
                                                            v-model="Ca"
                                                            label="Ca"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="P"
                                                            label="P"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="MG"
                                                            label="MG"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="PTL"
                                                            label="PTL"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="EGO"
                                                            label="EGO"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="pH"
                                                            label="pH"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Glu2"
                                                            label="Glu"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Prot"
                                                            label="Prot"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Hem"
                                                            label="Hem"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Gr"
                                                            label="Gr"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="GB"
                                                            label="GB"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cil"
                                                            label="Cil"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="URO"
                                                            label="URO"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="PTH"
                                                            label="PTH"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Ferritina"
                                                            label="Ferritina"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <button type="button" class="btn btn-lg btn-warning btn-block" style="margin-top:10%;">Imágenes</button>
                                                    </b-col>
                                                                                
                                                </b-row>
                                            </b-container> 
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                        </b-container>
                    </div>

                    <div class="form-group encapsulado" style="text-align:left;">
                        <v-layout align-center justify-end />
                            <h3 id="headers"  class="text-xs-center">Examen físico</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 10%">COONG</th>
                                <td style="width: 5%">NI</td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.coong"
                                        rows=1
                                        hide-details
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Corazón</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="corazonCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.corazon"
                                        rows=1
                                        hide-details
                                        :disabled="!corazonCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Pulmones</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="pulmonesCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.pulmones"
                                        rows=1
                                        hide-details
                                        :disabled="!pulmonesCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Abdomen</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="abdomenCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.abdomen"
                                        rows=1
                                        hide-details
                                        :disabled="!abdomenCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Genitales</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="genitalesCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.genitales"
                                        rows=1
                                        hide-details
                                        :disabled="!genitalesCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Extremidades</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="extremidadesCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.extremidades"
                                        rows=1
                                        hide-details
                                        :disabled="!extremidadesCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Piel</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="pielCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.piel"
                                        rows=1
                                        hide-details
                                        :disabled="!pielCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">SN</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="snCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.sn"
                                        rows=1
                                        hide-details
                                        :disabled="!snCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Otros</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="otrosCheck" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.otros"
                                        rows=1
                                        hide-details
                                        :disabled="!otrosCheck"
                                    ></v-textarea>
                                </td>
                            </tr>

                        </tbody>
                        </table>
                    </div>
                        
                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                             <b-container>
                                
                                <b-row>
                                    <b-col>
                                        <!-- Textarea -->
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Evaluación Médica</h3>
                                        <v-textarea
                                            v-model="Evaluacion_Medica"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                    <b-col>
                            <!-- Textarea -->                           
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Plan Médico</h3>
                                        <v-textarea
                                            v-model="Plan_Medico"
                                            outline
                                            rows=8
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
                                            <h3 id="headers"  class="text-xs-center">Evaluación Psicológica</h3>
                                        <v-textarea
                                            v-model="Evaluacion_Psicologica"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                    <b-col>
                            <!-- Textarea -->                           
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Plan Psicológico</h3>
                                        <v-textarea
                                            v-model="Plan_Psicologica"
                                            outline
                                            rows=8
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
                                            <h3 id="headers"  class="text-xs-center">Evaluación de Trabajo Social</h3>
                                        <v-textarea
                                            v-model="Evaluacion_Trabajo_Social"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                    <b-col>
                            <!-- Textarea -->                           
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Plan de Trabajo Social</h3>
                                        <v-textarea
                                            v-model="Plan_Trabajo_Social"
                                            outline
                                            rows=8
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
                                            <h3 id="headers"  class="text-xs-center">Evaluación Nutricional</h3>
                                        <v-textarea
                                            v-model="Evaluacion_Nutricional"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                    <b-col>
                                        <!-- Textarea -->                           
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Plan Nutricional</h3>
                                        <v-textarea
                                            v-model="Plan_Nutricional"
                                            outline
                                            rows=8
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
                                            <h3 id="headers"  class="text-xs-center">Evaluación Farmacológica</h3>
                                        <v-textarea
                                            v-model="Evaluacion_Farmacologica"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                    <b-col>
                                        <!-- Textarea -->                           
                                        <div class="form-group">
                                        <v-layout align-center justify-end />
                                            <h3 id="headers"  class="text-xs-center">Plan Farmacológico</h3>
                                        <v-textarea
                                            v-model="Plan_Farmacologico"
                                            outline
                                            rows=8
                                        ></v-textarea>
                                        </div>
                                    </b-col>
                                </b-row>
                            </b-container>
                        </div>
                        
                        <!-- Button -->
                        <div class="form-inline" style="text-align: center;align-items: center;justify-content: center;">
                            <div>
                            <b-container class="bv-example-row2">
                                <b-row class="justify-content-md-center">
                                
                                    <b-col>
                                        <button type="button" class="btn btn-lg btn-warning btn-block" >Agregar imagen</button>
                                    </b-col>
                                
                                </b-row>
                            </b-container>
                            </div>
                        </div>
        
                        <div>
                            <v-switch
                                :label="`Solicitar próxima visita`"
                                color="#ffc107"
                            ></v-switch>
                        </div> 

                        <div class="form-inline" style="text-align: center;align-items: center;justify-content: center;">
                            <div>
                            <b-container class="bv-example-row2">
                                <b-row class="justify-content-md-center">
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="guardar" >Guardar</button>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Cancelar</button>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Imprimir</button>
                                </b-col>
                                </b-row>
                            </b-container>
                            </div>
                        </div>
                        </fieldset>
                    </form>

                </div>
            </b-tab>
            <b-tab class='posicion' title="Detalles físicos" style="position: sticky;">
                <div class="cuerpo">
                    <h1 style="text-align: center;">Detalles físicos</h1>

                    <div class="encapsulado">
                        <b-container>
                            <b-row >
                                <b-col cols="2">
                                    <h3 style="font-weight: bold;">Paciente: </h3>  
                                </b-col>
                                <b-col cols="10">
                                    <h3 style="text-align: left;">Juan García</h3>  
                                </b-col>
                                <b-col></b-col>
                            </b-row>

                            <br>

                            <b-row >
                                <b-col>
                                    <v-select
                                        :items="fisico"
                                        label="Variable"
                                        outline
                                        height = 0.5
                                    ></v-select>
                                </b-col>
                                <b-col>
                                    <v-select
                                        :items="tiempo"
                                        label="Tiempo"
                                        outline
                                        height = 0.5
                                    ></v-select>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block centrado">Generar gráfica</button> 
                                </b-col>
                            </b-row >
                        </b-container>
                    </div>
                </div>
            </b-tab>
            <b-tab class='posicion' title="Signos vitales" style="position: sticky;">
                <div class="cuerpo">
                    <h1 style="text-align: center;">Signos vitales</h1>

                    <div class="encapsulado">
                        <b-container>
                            <b-row >
                                <b-col>
                                    <h3 style="font-weight: bold;">Paciente: </h3>  
                                </b-col>
                                <b-col>
                                    <h3>Juan García</h3>  
                                </b-col>
                                <b-col></b-col>
                                <b-col></b-col>
                                <b-col></b-col>
                                <b-col></b-col>
                            </b-row>

                            <br>

                            <b-row >
                                <b-col>
                                    <v-select
                                        :items="vital"
                                        label="Variable"
                                        outline
                                        height = 0.5
                                    ></v-select>
                                </b-col>
                                <b-col>
                                    <v-select
                                        :items="tiempo"
                                        label="Tiempo"
                                        outline
                                        height = 0.5
                                    ></v-select>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block centrado">Generar gráfica</button> 
                                </b-col>
                            </b-row >
                        </b-container>
                    </div>
                </div>
            </b-tab>
            <b-tab class='posicion' title="Mapa">
                <div class="cuerpo">
                    <h1 style="text-align: center;">Mapa</h1>
                    <div class="encapsulado">
                        <h3 id="headers"  class="text-xs-center">Sangre</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">CO</th>
                                <th scope="row" style="width:10%;"></th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">C2</th>
                                <th scope="row" style="width:10%;"></th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">TAC</th>
                                <th scope="row" style="width:10%;"></th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Na</th>
                                <th scope="row" style="width:10%;">136-144</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Cl</th>
                                <th scope="row" style="width:10%;">3.3-5</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">HCO3</th>
                                <th scope="row" style="width:10%;">18-25</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">BUN</th>
                                <th scope="row" style="width:10%;">7-20</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Creatinina</th>
                                <th scope="row" style="width:10%;">0.5-1.1</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Glucosa</th>
                                <th scope="row" style="width:10%;">60-115</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Albumina</th>
                                <th scope="row" style="width:10%;">3.5-4.6</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Colesterol</th>
                                <th scope="row" style="width:10%;">100-200</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Trigliceridos</th>
                                <th scope="row" style="width:10%;">20-175</th>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                                <td style="text-align: left;" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="encapsulado">
                        <h3 id="headers"  class="text-xs-center">Química Sanguínea</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>           
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Ácido Úrico</th>
                                <th scope="row" style="width:10%;">3.4-9</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Calcio</th>
                                <th scope="row" style="width:10%;">8.8-10.4</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Fósforo</th>
                                <th scope="row" style="width:10%;">2.4-4.1</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Fosfatosa Alk</th>
                                <th scope="row" style="width:10%;">75-270</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">PTH</th>
                                <th scope="row" style="width:10%;">11-54</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">DHL</th>
                                <th scope="row" style="width:10%;">405-930</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="encapsulado">
                        <h3 id="headers"  class="text-xs-center">Hematología</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">G. Blancos</th>
                                <th scope="row" style="width:10%;">3.7-10.1</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Hb</th>
                                <th scope="row" style="width:10%;">14.1-17.5</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Ht</th>
                                <th scope="row" style="width:10%;">43.1-51.5</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Plaquetas</th>
                                <th scope="row" style="width:10%;">140-440</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Reticulocitos</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="encapsulado">
                        
                        <h3 id="headers"  class="text-xs-center">Dinámica de Hierro</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Hierro</th>
                                <th scope="row" style="width:10%;">20-151</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">TIBC</th>
                                <th scope="row" style="width:10%;">250-400</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">% Sal</th>
                                <th scope="row" style="width:10%;">20-50</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Ferritina</th>
                                <th scope="row" style="width:10%;">10-60</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Tranferrina</th>
                                <th scope="row" style="width:10%;">212-360</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="encapsulado">
                        <h3 id="headers"  class="text-xs-center">Orina</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Creatinuria</th>
                                <th scope="row" style="width:10%;">15-20</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Proteinuria</th>
                                <th scope="row" style="width:10%;">0-4</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Up/Cr</th>
                                <th scope="row" style="width:10%;"> <0.2</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Calcicluria</th>
                                <th scope="row" style="width:10%;">0-4</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">UCa/Cr</th>
                                <th scope="row" style="width:10%;"><0.21</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">UAc.Úrico</th>
                                <th scope="row" style="width:10%;"><0.57</th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">CCr</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">-CCr</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">KT/V</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>

                            <tr>
                                <th scope="row" style="width:10%;">PET</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="encapsulado">
                        <h3 id="headers"  class="text-xs-center">Otros</h3>
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
                                <th scope="row" style="width:10%;"></th>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Biopsia</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">US</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:10%;">Cambio de estatus</th>
                                <th scope="row" style="width:10%;"></th>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                                <td contenteditable='true' style="text-align: left;" ></td>
                            </tr>
                          
                          
                        </tbody>
                        </table>
                    </div>
                </div>
            </b-tab>
        </b-tabs>
    </div>
</template>

<script>
import { store } from '../main';
// import { onlyFloat } from 'vue-input-only-number';

// Vue.use(onlyFloat);


export default {
    data: () => ({
        update: false,

        
        fisico: ["Peso", "Talla", "IMC"],
        vital: ["Presión arterial", "Pulso cardíaco"],
        tiempo: ["1 mes", "2 meses", "6 meses", "1 año"],

        paciente: {
            nombre: '',
            apellido: '',
            CUI: 0,
            Nombre_de_padre: "",
            Nombre_de_madre: "",
            Procedencia: "",
            Telefono: "",
            Grupo_De_Sangre: "",
            Estudia: "",
            Transfusiones: ""
        },

        datos_generales: {
            Peso: "",
            kg_perc: "",
            Talla: "",
            cms_perc: "",
            PA: "",
            Percentil: ""
        },

        //paciente: "Juan Garcia",
        //Variables para inputs
        comentario: "",
        
        bcg: 0,
        bcg1: false,
        bcg2: false,
        bcg3: false,
        bcgRef: false,
        poliovirus1: false,
        poliovirus2: false,
        poliovirus3: false,
        poliovirusRef: false,
        hepatitisA1: false,
        hepatitisA2: false,
        hepatitisA3: false,
        hepatitisARef: false,
        hepatitisB1: false,
        hepatitisB2: false,
        hepatitisB3: false,
        hepatitisBRef: false,
        hepatitisC1: false,
        hepatitisC2: false,
        hepatitisC3: false,
        hepatitisCRef: false,
        neumococo1: false,
        neumococo2: false,
        neumococo3: false,
        neumococoRef: false,
        influenza1: false,
        influenza2: false,
        influenza3: false,
        influenzaRef: false,
        DPT1: false,
        DPT2: false,
        DPT3: false,
        DPTRef: false,
        SPR1: false,
        SPR2: false,
        SPR3: false,
        SPRRef: false,
        Sindrome_Clinico_Presentacion: 1,
        Dx_Definitivo: "",
        Dx_Asociado: "",
        historia: "",

        //Medicamentos
        Prednisona: false,
        Prednisona_mg: "",
        Prednisona_frecuencia: "",

        cyac: false,
        Cyac_mg: "",
        Cyac_frecuencia: "",

        Tac: false,
        Tac_mg: "",
        Tac_frecuencia: "",

        MMF: false,
        MMF_mg: "",
        MMF_frecuencia: "",

        AZA: false,
        AZA_mg: "",
        AZA_frecuencia: "",

        CFM: false,
        CFM_mg: "",
        CFM_frecuencia: "",

        Enalapril: false,
        Enalapril_mg: "",
        Enalapril_frecuencia: "",

        Losartan: false,
        Losartan_mg: "",
        Losartan_frecuencia: "",

        Amlodipina: false,
        Amlodipina_mg: "",
        Amlodipina_frecuencia: "",

        CitratoNa: false,
        Citrato_Na_mg: "",
        Citrato_Na_frecuencia: "",

        CitratoK: false,
        Citrato_K_mg: "",
        Citrato_K_frecuencia: "",

        Furosemida: false,
        Furosemida_mg: "",
        Furosemida_frecuencia: "",

        Alfacalcidol: false,
        Alfacalcidol_mg: "",
        Alfacalcidol_frecuencia: "",

        CaCO3: false,
        CaCO3_mg: "",
        CaCO3_frecuencia: "",

        EPO: false,
        EPO_mg: "",
        EPO_frecuencia: "",

        Fe: false,
        Fe_mg: "",
        Fe_frecuencia: "",

        Cefadroxilo: false,
        Cefadroxilo_mg: "",
        Cefadroxilo_frecuencia: "",

        //Laboratorios
        Na: "",
        Cl: "",
        BUN: "",
        Glu: "",
        K: "",
        HCO: "",
        Creat: "",
        WB: "",
        Col: "",
        Alb: "",
        HB: "",
        HT: "",
        Ca: "",
        P: "",
        MG: "",
        PTL: "",
        EGO: "",
        pH: "",
        Glu2: "",
        Prot: "",
        Hem: "",
        Gr: "",
        GB: "",
        Cil: "",
        URO: "",
        PTH: "",
        Ferritina: "",

        includeFiles: "",

        Evaluacion_Medica: "",
        Evaluacion_Psicologica: "",
        Evaluacion_Trabajo_Social: "",
        Evaluacion_Nutricional: "",
        Evaluacion_Farmacologica: "",

        Plan_Medico: "",
        Plan_Psicologica: "",
        Plan_Trabajo_Social: "",
        Plan_Nutricional: "",
        Plan_Farmacologico: "",

        corazonCheck: false,
        pulmonesCheck: false,
        abdomenCheck: false,
        genitalesCheck: false,
        extremidadesCheck: false,
        pielCheck: false,
        snCheck: false,
        otrosCheck: false,


        examen_fisico: {
            coong: "",
            corazon: "",
            pulmones: "",
            abdomen: "",
            genitales: "",
            extremidades: "",
            piel: "",
            sn: "",
            otros: ""
        },

        fecha: "",

        datos: [],
        sindromes: [],
        radioRules:[v => !!v || 'Debe seleccionar una opción'],
    }),
    created() {
        
    },

    mounted() {
        console.log("Id de paciente es: " + store.idPaciente);

        this.fecha = new Date().toISOString().slice(0, 10)

        const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };

        this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {            

            if(response.data.Paciente[0] == null){
                console.log('Nothing to do here..');
            }else{
                console.log("Dentro de if");
                this.paciente.nombre = response.data.Paciente[0].Nombre;
                this.paciente.apellido = response.data.Paciente[0].Apellido;
                this.paciente.CUI = response.data.Paciente[0].CUI;
                this.paciente.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
                this.paciente.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
                this.paciente.Procedencia = response.data.Paciente[0].procedencia.Departamento;
                this.paciente.Telefono = response.data.Paciente[0].Telefono;
                this.paciente.Grupo_De_Sangre = response.data.Paciente[0].tipo_de__sangre.significado;
                this.paciente.Estudia = response.data.Paciente[0].estudia.significado;
                this.paciente.Transfusiones = response.data.Paciente[0].transfusiones.significado;

                this.Sindrome_Clinico_Presentacion = response.data.Paciente[0].Sindrome_Clinico_Presentacion;
            }
            

        }).then(() => {
            const data2 = {
                cui: this.paciente.CUI,
                fecha: this.fecha
            }
            this.$http.post(`http://localhost:8000/ConsultaController/findOne`, data2).then(response => {
                this.update = response.data.success
                
            }).then(() => {
                if(this.update){

                    this.$http.post(`http://localhost:8000/ConsultaController/findAll`, data2).then(response => {
                        this.datos_generales.Peso = response.data.Consulta[0].peso
                        this.datos_generales.Talla = response.data.Consulta[0].talla
                        this.datos_generales.PA = response.data.Consulta[0].pa
                        
                        this.Dx_Definitivo = response.data.Consulta[0].Dx_Definitivo
                        this.Dx_Asociado = response.data.Consulta[0].Dx_Asociados
                        this.historia = response.data.Consulta[0].historia

                        this.Evaluacion_Medica = response.data.Consulta[0].evaluacion_medica
                        this.Plan_Medico = response.data.Consulta[0].plan_medica
                        this.Evaluacion_Psicologica = response.data.Consulta[0].evaluacion_psicologica
                        this.Plan_Psicologica = response.data.Consulta[0].plan_psicologico
                        this.Evaluacion_Trabajo_Social = response.data.Consulta[0].evaluacion_trabajo_social
                        this.Plan_Trabajo_Socia = response.data.Consulta[0].plan_trabajo_social
                        this.Evaluacion_Nutricional = response.data.Consulta[0].evaluacion_nutricional
                        this.Plan_Nutricional = response.data.Consulta[0].plan_nutricional
                        this.Evaluacion_Farmacologica = response.data.Consulta[0].evaluacion_farmacologica
                        this.Plan_Farmacologico = response.data.Consulta[0].plan_farmacologico

                    })
                }
            })
        });

        this.$http.get(`http://localhost:8000/sindromeController/getAll`).then(response => {
            if(response.data.Sindrome[0] == null){
                console.log('Nothing to do here..');
            }else{
                
                this.sindromes = response.data.Sindrome;
            }
        });

        

    },
    methods: {
        

        guardar() {
            console.log("Fecha: " + this.fecha)
            console.log("CUI: " + this.paciente.CUI)
            console.log("Peso: " + this.datos_generales.Peso)
            console.log("Talla: " + this.datos_generales.Talla)
            console.log("PA: " + this.datos_generales.PA)
            console.log("Dx_Definitivo: " + this.Dx_Definitivo)
            console.log("Dx_Asociado: " + this.Dx_Asociado)
            console.log("Historia: " + this.historia)


//--------------------------------------------------------------------------------------------------
            let medicamento = {}
            
            if(this.Prednisona){
                medicamento = Object.assign(medicamento, {"Prednisona": {
                    "mg": Number( this.Prednisona_mg),
                    "frecuencia": Number( this.Prednisona_frecuencia)
                }})
            }
            if(this.cyac){
                medicamento = Object.assign(medicamento, {"Cyac": {
                    "mg": Number( this.Cyac_mg),
                    "frecuencia": Number( this.Cyac_frecuencia)
                }})
            }
            if(this.Tac){
                medicamento = Object.assign(medicamento, {"Tac": {
                    "mg": Number( this.Tac_mg),
                    "frecuencia": Number( this.Tac_frecuencia)
                }})
            }
            if(this.MMF){
                medicamento = Object.assign(medicamento, {"MMF": {
                    "mg": Number( this.MMF_mg),
                    "frecuencia": Number( this.MMF_frecuencia)
                }})
            }
            if(this.AZA){
                medicamento = Object.assign(medicamento, {"AZA": {
                    "mg": Number( this.AZA_mg),
                    "frecuencia": Number( this.AZA_frecuencia)
                }})
            }
            if(this.CFM){
                medicamento = Object.assign(medicamento, {"CFM": {
                    "mg": Number( this.CFM_mg),
                    "frecuencia": Number( this.CFM_frecuencia)
                }})
            }
            if(this.Enalapril){
                medicamento = Object.assign(medicamento, {"Enalapril": {
                    "mg": Number( this.Enalapril_mg),
                    "frecuencia": Number( this.Enalapril_frecuencia)
                }})
            }
            if(this.Losartan){
                medicamento = Object.assign(medicamento, {"Losartan": {
                    "mg": Number( this.Losartan_mg),
                    "frecuencia": Number( this.Losartan_frecuencia)
                }})
            }
            if(this.Amlodipina){
                medicamento = Object.assign(medicamento, {"Amlodipina": {
                    "mg": Number( this.Amlodipina_mg),
                    "frecuencia": Number( this.Amlodipina_frecuencia)
                }})
            }
            if(this.CitratoNa){
                medicamento = Object.assign(medicamento, {"Citrato_Na": {
                    "mg": Number( this.Citrato_Na_mg),
                    "frecuencia": Number( this.Citrato_Na_frecuencia)
                }})
            }
            if(this.CitratoK){
                medicamento = Object.assign(medicamento, {"Citrato_K": {
                    "mg": Number( this.Citrato_K_mg),
                    "frecuencia": Number( this.Citrato_K_frecuencia)
                }})
            }
            if(this.Furosemida){
                medicamento = Object.assign(medicamento, {"Furosemida": {
                    "mg": Number( this.Furosemida_mg),
                    "frecuencia": Number( this.Furosemida_frecuencia)
                }})
            }
            if(this.Alfacalcidol){
                medicamento = Object.assign(medicamento, {"Alfacalcidol": {
                    "mg": Number( this.Alfacalcidol_mg),
                    "frecuencia": Number( this.Alfacalcidol_frecuencia)
                }})
            }
            if(this.CaCO3){
                medicamento = Object.assign(medicamento, {"CaCO3": {
                    "mg": Number( this.CaCO3_mg),
                    "frecuencia": Number( this.CaCO3_frecuencia)
                }})
            }
            if(this.EPO){
                medicamento = Object.assign(medicamento, {"EPO": {
                    "mg": Number( this.EPO_mg),
                    "frecuencia": Number( this.EPO_frecuencia)
                }})
            }
            if(this.Fe){
                medicamento = Object.assign(medicamento, {"Fe": {
                    "mg": Number( this.Fe_mg),
                    "frecuencia": Number( this.Fe_frecuencia)
                }})
            }
            if(this.Cefadroxilo){
                medicamento = Object.assign(medicamento, {"Cefadroxilo": {
                    "mg": Number( this.Cefadroxilo_mg),
                    "frecuencia": Number( this.Cefadroxilo_frecuencia)
                }})
            }


//--------------------------------------------------------------------------------------------------
            let resultado_laboratorio = {}

            resultado_laboratorio = Object.assign(resultado_laboratorio, {
                "Na": Number(this.Na),
                "Cl": Number(this.Cl),
                "BUN": Number(this.BUN),
                "Glu": Number(this.Glu),
                "K": Number(this.HCO),
                "Creat": Number(this.Creat),
                "WB": Number(this.WB),
                "Col": Number(this.Col),
                "Alb": Number(this.Alb),
                "HB": Number(this.HB),
                "HT": Number(this.HT),
                "Ca": Number(this.Ca),
                "P": Number(this.P),
                "MG": Number(this.MG),
                "PTL": Number(this.PTL),
                "EGO": Number(this.EGO),
                "pH": Number(this.pH),
                "Glu2": Number(this.Glu2),
                "Prot": Number(this.Prot),
                "Hem": Number(this.Hem),
                "Gr": Number(this.Gr),
                "GB": Number(this.GB),
                "Cil": Number(this.Cil),
                "URO": Number(this.URO),
                "PTH": Number(this.PTH),
                "Ferritina": Number(this.Ferritina),
            })

//--------------------------------------------------------------------------------------------------

            let examenFisico = {}

            examenFisico = Object.assign(examenFisico, {
                "COONG": this.examen_fisico.coong
            })
            if(this.corazonCheck){
                examenFisico = Object.assign(examenFisico, {
                "corazon": this.examen_fisico.corazon
            })}
            if(this.pulmonesCheck){
                examenFisico = Object.assign(examenFisico, {
                "pulmones": this.examen_fisico.pulmones
            })}
            if(this.abdomenCheck){
                examenFisico = Object.assign(examenFisico, {
                "abdomen": this.examen_fisico.abdomen
            })}
            if(this.genitalesCheck){
                examenFisico = Object.assign(examenFisico, {
                "genitales": this.examen_fisico.genitales
            })}
            if(this.extremidadesCheck){
                examenFisico = Object.assign(examenFisico, {
                "extremidades": this.examen_fisico.extremidades
            })}
            if(this.pielCheck){
                examenFisico = Object.assign(examenFisico, {
                "piel": this.examen_fisico.piel
            })}
            if(this.snCheck){
                examenFisico = Object.assign(examenFisico, {
                "sn": this.examen_fisico.sn
            })}
            if(this.otrosCheck){
                examenFisico = Object.assign(examenFisico, {
                "otros": this.examen_fisico.otros
            })}

            const medicamentoJSON = JSON.stringify(medicamento)
            const resultados_labJSON = JSON.stringify(resultado_laboratorio)
            const examen_fisicoJSON = JSON.stringify(examenFisico)

            const info = {
                cui: this.paciente.CUI,
                fecha: this.fecha,
                peso: this.datos_generales.Peso,
                talla: this.datos_generales.Talla,
                pa: this.datos_generales.PA,
                sindrome_clinico: this.Sindrome_Clinico_Presentacion,
                Dx_Definitivo: this.Dx_Definitivo,
                Dx_Asociados: this.Dx_Asociado,
                historia: this.historia,
                medicamento: medicamentoJSON,
                resultados_laboratorio: resultados_labJSON,
                examen_fisico: examen_fisicoJSON,
                evaluacion_medica: this.Evaluacion_Medica,
                plan_medico: this.Plan_Medico,
                evaluacion_psicologica: this.Evaluacion_Psicologica,
                plan_psicologico: this.Plan_Psicologica,
                evaluacion_trabajo_social: this.Evaluacion_Trabajo_Social,
                plan_trabajo_social: this.Plan_Trabajo_Social,
                evaluacion_nutricional: this.Evaluacion_Nutricional,
                plan_nutricional: this.Plan_Nutricional,
                evaluacion_farmacologica: this.Evaluacion_Farmacologica,
                plan_farmacologico: this.Plan_Farmacologico,
                // id_imagenes_lab: null
            }

            if(this.update){
                this.$http.put('http://localhost:8000/ConsultaController/update', info).then(response => {
                    console.log("Si pase update")
                }).catch(error => {

                })
            }else{
                this.$http.post('http://localhost:8000/ConsultaController/insert', info).then(response => {
                    console.log("Si pase insert")
                }).catch(error => {

                })
            }
            

        },
        fillBCG: function() {
            
            if(!this.bcg1){
                this.bcg2 = false;
                this.bcg3 = false;
                this.bcgRef = false;
            }
            if(!this.bcg2){
                this.bcg3 = false;
                this.bcgRef = false;
            }
            if(!this.bcg3){
                this.bcgRef = false;
            }
        },
        fillPoliovirus: function() {
            
            if(!this.poliovirus1){
                this.poliovirus2 = false;
                this.poliovirus3 = false;
                this.poliovirusRef = false;
            }
            if(!this.poliovirus2){
                this.poliovirus3 = false;
                this.poliovirusRef = false;
            }
            if(!this.poliovirus3){
                this.poliovirusRef = false;
            }
        },
        fillHepatitisA: function(){

            if(!this.hepatitisA1){
                this.hepatitisA2 = false;
                this.hepatitisA3 = false;
                this.hepatitisARef = false;
            }
            if(!this.hepatitisA2){
                this.hepatitisA3 = false;
                this.hepatitisARef = false;
            }
            if(!this.hepatitisA3){
                this.hepatitisARef = false;
            }
        },
        fillHepatitisB: function(){

            if(!this.hepatitisB1){
                this.hepatitisB2 = false;
                this.hepatitisB3 = false;
                this.hepatitisBRef = false;
            }
            if(!this.hepatitisB2){
                this.hepatitisB3 = false;
                this.hepatitisBRef = false;
            }
            if(!this.hepatitisB3){
                this.hepatitisBRef = false;
            }
        },
        fillNeumococo: function(){

            if(!this.neumococo1){
                this.neumococo2 = false;
                this.neumococo3 = false;
                this.neumococoRef = false;
            }
            if(!this.neumococo2){
                this.neumococo3 = false;
                this.neumococoRef = false;
            }
            if(!this.neumococo3){
                this.neumococoRef = false;
            }
        },
        fillInflueza: function(){
            
            if(!this.influenza1){
                this.influenza2 = false;
                this.influenza3 = false;
                this.influenzaRef = false;
            }
            if(!this.influenza2){
                this.influenza3 = false;
                this.influenzaRef = false;
            }
            if(!this.influenza3){
                this.influenzaRef = false;
            }
        },
        fillDPT: function(){

            if(!this.DPT1){
                this.DPT2 = false;
                this.DPT3 = false;
                this.DPTRef = false;
            }
            if(!this.DPT2){
                this.DPT3 = false;
                this.DPTRef = false;
            }
            if(!this.DPT3){
                this.DPTRef = false;
            }
        },
        fillSPR: function(){

            if(!this.SPR1){
                this.SPR2 = false;
                this.SPR3 = false;
                this.SPRRef = false;
            }
            if(!this.SPR2){
                this.SPR3 = false;
                this.SPRRef = false;
            }
            if(!this.SPR3){
                this.SPRRef = false;
            }
        },
        sindromeValue: function(id, significado){
            this.Sindrome_Clinico_Presentacion = parseInt(id);
            console.log("Selected:", id, significado);
        }
    }
};
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
    padding: 5%;

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
</style>
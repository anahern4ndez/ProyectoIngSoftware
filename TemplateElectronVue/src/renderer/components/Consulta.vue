

<template lang="">
    <div>
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab title="Consulta"  active >
                <div class="cuerpo">
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Text input-->
                        <h1 style="text-align: center;">Consulta General</h1>

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
                        <h2 style="text-align: left;">Datos Generales</h2>

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
                                            label="Procedencia"
                                            outline
                                            :disabled="true"
                                        ></v-text-field> 
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Telefono"
                                            label="Télefono"
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
                                            v-model="paciente.Peso"
                                            label="Peso"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.kg_perc"
                                            label="Kg. Percentil"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Talla"
                                            label="Talla"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.cms_perc"
                                            label="Cms. Percentil"
                                            outline
                                            :disabled="true"
                                    ></v-text-field>
                                    </b-col>
                                
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.PA"
                                            label="P/A"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="paciente.Percentil"
                                            label="Percentil"
                                            outline
                                            :disabled="true"
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
                                                <td><v-layout><v-checkbox v-model="bcg1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="bcg2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="bcg3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="bcgRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Poliovirus</th>
                                                <td><v-layout><v-checkbox v-model="poliovirus1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="poliovirus2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="poliovirus3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="poliovirusRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis A</th>
                                                <td><v-layout><v-checkbox v-model="hepatitisA1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisA2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisA3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisARef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Hepatitis B</th>
                                                <td><v-layout><v-checkbox v-model="hepatitisB1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisB2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisB3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="hepatitisBRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Neumococo</th>
                                                <td><v-layout><v-checkbox v-model="neumococo1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="neumococo2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="neumococo3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="neumococoRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Influenza</th>
                                                <td><v-layout><v-checkbox v-model="influeza1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="influeza2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="influeza3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="influezaRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Diftteria/Tétano/Tosferina(DPT)</th>
                                                <td><v-layout><v-checkbox v-model="DPT1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="DPT2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="DPT3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="DPTRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 10%">Sarampión/Paperas/RUbeola(SPR)</th>
                                                <td><v-layout><v-checkbox v-model="SPR1" value="1" hide-details class="shrink py-0 pl-3 my-0 ml-5 "></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="SPR2" value="2" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="SPR3" value="3" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                                <td><v-layout><v-checkbox v-model="SPRRef" value="4" hide-details class="shrink py-0 pl-3 my-0 ml-5"></v-checkbox></v-layout></td>
                                            </tr>

                                        </tbody>
                                    </table>

                    </b-container>
                </div>

                        <!-- Form Name -->
                        <h2 style="text-align: left;">Dar Consulta</h2>
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
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrítico" value="1"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Sx. Nefrotico" value="2"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Anomalías Urinarias Asintomáticas" value="3"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="IRA" value="4"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="IRC" value="5"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="ITU" value="6"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Uropatía Obstructiva" value="7"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Tubulopatía" value="8"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="HTA" value="9"></v-checkbox>
                                                    <v-checkbox class="my-0 py-0" v-model="Sindrome_Clinico_Presentacion" label="Nefrolitiasis" value="10"></v-checkbox>
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
                                            name="Dx_Definitivo"
                                            value=""
                                            rows=31
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
                                            name="Dx_Asociado"
                                            value=""
                                            rows=31
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
                                name="Historia"
                                value=""
                                rows=8
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
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Prednisona" label="Prednisona"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Prednisona_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Prednisona_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="cyac" label="Cyac"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cyac_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cyac_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Tac" label="Tac"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Tac_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Tac_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="MMF" label="MMF"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="MMF_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="MMF_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="AZA" label="AZA" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="AZA_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="AZA_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CFM" label="CFM" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CFM_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CFM_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Enalapril" label="Enalapril" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Enalapril_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Enalapril_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Losartan" label="Losartan" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Losartan_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Losartan_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Amlodipina" label="Amlodipina" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Amlodipina_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Amlodipina_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CitratoNa" label="Citrato Na" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_Na_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_Na_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CitratoK" label="Citrato K" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_K_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Citrato_K_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Furosemida" label="Furosemida" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Furosemida_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Furosemida_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Alfacalcidol" label="Alfacalcidol" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Alfacalcidol_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Alfacalcidol_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="CaCO3" label="CaCO3" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CaCO3_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="CaCO3_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="EPO" label="EPO" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="EPO_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="EPO_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Fe" label="Fe" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Fe_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Fe_mg"
                                                            label="mg"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="Cefradoxilo" label="Cefadroxilo" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cefradoxilo_Cantidad"
                                                            label="Cantidad"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="Cefradoxilo_mg"
                                                            label="mg"
                                                            outline
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
                                                    <b-col>
                                                    </b-col>
                                                                                
                                                </b-row>
                                            </b-container> 
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                        </b-container>
                    </div>

                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 10%">COONG</th>
                                <td style="width: 5%">NI</td>
                                <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 10%">Corazón</th>
                                <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                                <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Pulmones</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Abdomen</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Genitales</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;">Taner</td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Extremidades</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Piel</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">SN</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                            <tr>
                            <th scope="row" style="width: 10%">Otros</th>
                            <td style="width: 5%"><v-layout><v-checkbox v-model="includeFiles" hide-details class="shrink py-0 my-0 ml-3 "></v-checkbox></v-layout></td>
                            <td contenteditable='true' style="text-align: left;"></td>
                            </tr>
                        </tbody>
                        </table>
                        
                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                            <!-- Textarea -->
                            <div class="form-group">
                            <v-layout align-center justify-end />
                                <h3 id="headers"  class="text-xs-center">Evaluación Médica</h3>
                            <v-textarea
                                v-model="Evaluacion_Medica"
                                outline
                                name="Evaluacion_Medica"
                                value=""
                                rows=8
                            ></v-textarea>
                            </div>

                            <!-- Textarea -->                           
                            <div class="form-group">
                            <v-layout align-center justify-end />
                                <h3 id="headers"  class="text-xs-center">Evaluación Psicosocial</h3>
                            <v-textarea
                                v-model="Evaluacion_Psicosocial"
                                outline
                                name="Evaluacion_Psicosocial"
                                value=""
                                rows=8
                            ></v-textarea>
                            </div>

                           
                           <!-- Textarea -->
                            <div class="form-group">
                            <v-layout align-center justify-end />
                                <h3 id="headers"  class="text-xs-center">Evaluación Nutricional</h3>
                            <v-textarea
                                v-model="Evaluacion_Nutricional"
                                outline
                                name="Evaluacion_Nutricional"
                                value=""
                                rows=8
                            ></v-textarea>
                            </div>
                            
                            <!-- Textarea -->
                            <div class="form-group">
                            <v-layout align-center justify-end />
                                <h3 id="headers"  class="text-xs-center">Evaluación Farmacológica</h3>
                            <v-textarea
                                v-model="Evaluacion_Farmacologica"
                                outline
                                name="Evaluacion_Farmacologica"
                                value=""
                                rows=8
                            ></v-textarea>
                            </div>

                        </div>

                        <!-- Textarea -->
                        <div class="form-group encapsulado" >
                            <div class="form-group">
                                <v-layout align-center justify-end />
                                    <h3 id="headers"  class="text-xs-center">Plan Médico</h3>
                                <v-textarea
                                    v-model="Plan_Medico"
                                    outline
                                    name="Plan_Medico"
                                    value=""
                                    rows=8
                                ></v-textarea>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <v-layout align-center justify-end />
                                    <h3 id="headers"  class="text-xs-center">Plan Psicosocial</h3>
                                <v-textarea
                                    v-model="Plan_Psicosocial"
                                    outline
                                    name="Plan_Psicosocial"
                                    value=""
                                    rows=8
                                ></v-textarea>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <v-layout align-center justify-end />
                                    <h3 id="headers"  class="text-xs-center">Plan Nutricional</h3>
                                <v-textarea
                                    v-model="Plan_Nutricional"
                                    outline
                                    name="Plan_Nutricional"
                                    value=""
                                    rows=8
                                ></v-textarea>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <v-layout align-center justify-end />
                                    <h3 id="headers"  class="text-xs-center">Plan Farmacológico</h3>
                                <v-textarea
                                    v-model="Plan_Farmacologico"
                                    outline
                                    name="Plan_Farmacologico"
                                    value=""
                                    rows=8
                                ></v-textarea>
                            </div>

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
                                v-model="switch1"
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
                        <table class="table table-bordered table-ligth">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:10%;">Fecha</th>
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
                                <th scope="row" style="width:10%;">Na</th>
                                <th scope="row" style="width:10%;">136-144</th>
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
                                <th scope="row" style="width:10%;">Cl</th>
                                <th scope="row" style="width:10%;">3.3-5</th>
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
                                <th scope="row" style="width:10%;">HCO3</th>
                                <th scope="row" style="width:10%;">18-25</th>
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
                                <th scope="row" style="width:10%;">BUN</th>
                                <th scope="row" style="width:10%;">7-20</th>
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
                                <th scope="row" style="width:10%;">Creatinina</th>
                                <th scope="row" style="width:10%;">0.5-1.1</th>
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
                                <th scope="row" style="width:10%;">Glucosa</th>
                                <th scope="row" style="width:10%;">60-115</th>
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
                                <th scope="row" style="width:10%;">Albumina</th>
                                <th scope="row" style="width:10%;">3.5-4.6</th>
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
                                <th scope="row" style="width:10%;">Colesterol</th>
                                <th scope="row" style="width:10%;">100-200</th>
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
                                <th scope="row" style="width:10%;">Trigliceridos</th>
                                <th scope="row" style="width:10%;">20-175</th>
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
                                <th scope="row" style="width:10%;">CO/C2/TAC</th>
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
                                <th scope="row" style="width:10%;"></th>
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
                            <tr>
                                <th scope="row" style="width:10%;"></th>
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
                            <tr>
                                <th scope="row" style="width:10%;"></th>
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
                            <tr>
                                <th scope="row" style="width:10%;"></th>
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
                            <tr>
                                <th scope="row" style="width:10%;"></th>
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
                            <tr>
                                <th scope="row" style="width:10%;">Peso</th>
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
                                <th scope="row" style="width:10%;">Talla</th>
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
                                <th scope="row" style="width:10%;"></th>
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
export default {
    data: () => ({
        fisico: ["Peso", "Talla", "IMC"],
        vital: ["Presión arterial", "Pulso cardíaco"],
        tiempo: ["1 mes", "2 meses", "6 meses", "1 año"],

        paciente: {
            nombre: '',
            apellido: '',
            Nombre_de_padre: "",
            Nombre_de_madre: "",
            Procedencia: "",
            Telefono: "",
            Grupo_De_Sangre: "",
            Estudia: "",
            Transfusiones: "",
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
        influeza1: false,
        influeza2: false,
        influeza3: false,
        influezaRef: false,
        DPT1: false,
        DPT2: false,
        DPT3: false,
        DPTRef: false,
        SPR1: false,
        SPR2: false,
        SPR3: false,
        SPRRef: false,
        Sindrome_Clinico_Presentacion: "",
        Dx_Definitivo: "",
        Dx_Asociado: "",
        historia: "",

        //Medicamentos
        Prednisona: "",
        Prednisona_Cantidad: "",
        Prednisona_mg: "",

        cyac: "",
        Cyac_Cantidad: "",
        Cyac_mg: "",

        Tac: "",
        Tac_Cantidad: "",
        Tac_mg: "",

        MMF: "",
        MMF_Cantidad: "",
        MMF_mg: "",

        AZA: "",
        AZA_Cantidad: "",
        AZA_mg: "",

        CFM: "",
        CFM_Cantidad: "",
        CFM_mg: "",

        Enalapril: "",
        Enalapril_Cantidad: "",
        Enalapril_mg: "",

        Losartan: "",
        Losartan_Cantidad: "",
        Losartan_mg: "",

        Amlodipina: "",
        Amlodipina_Cantidad: "",
        Amlodipina_mg: "",

        CitratoNa: "",
        Citrato_Na_Cantidad: "",
        Citrato_Na_mg: "",

        CitratoK: "",
        Citrato_K_Cantidad: "",
        Citrato_K_mg: "",

        Furosemida: "",
        Furosemida_Cantidad: "",
        Furosemida_mg: "",

        Alfacalcidol: "",
        Alfacalcidol_Cantidad: "",
        Alfacalcidol_mg: "",

        CaCO3: "",
        CaCO3_Cantidad: "",
        CaCO3_mg: "",

        EPO: "",
        EPO_Cantidad: "",
        EPO_mg: "",

        Fe: "",
        Fe_Cantidad: "",
        Fe_mg: "",

        Cefradoxilo: "",
        Cefradoxilo_Cantidad: "",
        Cefradoxilo_mg: "",

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
        Evaluacion_Psicosocial: "",
        Evaluacion_Nutricional: "",
        Evaluacion_Farmacologica: "",

        Plan_Medico: "",
        Plan_Psicosocial: "",
        Plan_Nutricional: "",
        Plan_Farmacologico: "",

        datos: [],
    }),
    mounted() {
        console.log("Id de paciente es: " + store.idPaciente);

        const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };

        this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {
            console.log("Sali exitoso: " + response.data.Paciente[0]);
            

            if(response.data.Paciente[0] == null){
                console.log('Nothing to do here..');
            }else{
                console.log("Dentro de if");
                this.paciente.nombre = response.data.Paciente[0].Nombre;
                this.paciente.apellido = response.data.Paciente[0].Apellido;
                this.paciente.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
                this.paciente.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
                this.paciente.Procedencia = response.data.Paciente[0].procedencia.Departamento;
                this.paciente.Telefono = response.data.Paciente[0].Telefono;
                this.paciente.Grupo_De_Sangre = response.data.Paciente[0].tipo_de__sangre.significado;
                this.paciente.Estudia = response.data.Paciente[0].estudia.significado;
                this.paciente.Transfusiones = response.data.Paciente[0].transfusiones.significado;
                this.paciente.Peso = response.data.Paciente[0].Peso;
                this.paciente.kg_perc = response.data.Paciente[0].Kg_perc;
                this.paciente.Talla = response.data.Paciente[0].Talla;
                this.paciente.cms_perc = response.data.Paciente[0].Cms_perc;
                this.paciente.PA = response.data.Paciente[0].PA;
                this.paciente.Percentil = response.data.Paciente[0].Percentil;
            }
            //this.Nombre_de_padre = response.data.Paciente[0].Nombre_de_padre;
            //this.Nombre_de_madre = response.data.Paciente[0].Nombre_de_madre;
            //this.Procedencia = response.data.Paciente[0].Procedencia; // Obtener pais y dep
            //this.Telefono = response.data.Paciente[0].Telefono;
            //this.Grupo_De_Sangre = response.data.Paciente[0].Tipo_de_Sangre;
            //this.Estudia = response.data.Paciente[0].Estudia; // Tabla no modelada
            

        });

    },
    methods: {
        guardar() {
            console.log("aaa");
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
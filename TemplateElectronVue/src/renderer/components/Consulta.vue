

<template lang="es">
  
<div>
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab title="Consulta"  active >
                <div class="cuerpo">
                    <form class="form-horizontal" >
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

                        <!-- Loading -->
                        <!-- https://vuetifyjs.com/en/components/cards -->
                        <v-dialog
                            v-model="dialog"
                            max-width="290"
                            persistent
                        >
                            <v-card>
                                <v-card-title class="headline">Está obteniéndose la información del paciente.</v-card-title>

                                <v-card-text>
                                    Espere mientras se cargan los datos...
                                </v-card-text>

                                <v-card-actions>
                                
                                    <v-spacer></v-spacer>

                                    <v-progress-linear
                                        color="orange accent-4"
                                        indeterminate
                                        rounded
                                        height="10"
                                    ></v-progress-linear>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>
                        <!-- Loading -->

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
                                            type =number
                                            :rules="minRules"
                                            min=0
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.kg_perc"
                                            label="Kg. Percentil"
                                            outline
                                            :disabled="true"
                                        ></v-text-field>
                                        </b-col>
                                        
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.Talla"
                                            label="Talla"
                                            outline
                                            type =number
                                            :rules="minRules"
                                            min=0
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.cms_perc"
                                            label="Cms. Percentil"
                                            outline
                                            :disabled="true"
                                    ></v-text-field>
                                    </b-col>
                                
                                    </b-row>
                                    <b-row class="justify-content-md-center">
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.PA"
                                            label="P/A"
                                            outline
                                            type =number
                                            min=0
                                            :rules="minRules"
                                        ></v-text-field>
                                        </b-col>
                                        <b-col>
                                        <v-text-field
                                            v-model="datos_generales.Percentil"
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
                                        <v-select
                                            v-if="dxs"
                                            v-bind:items="dxs"
                                            v-model="enfermedad"
                                            item-text="`${data.item}`"
                                            item-value="ID"
                                            label = "Enfermedades"
                                            v-on:change="agregarEnfermedad"
                                        >
                                        <template
                                        slot="selection" slot-scope="data">
                                        {{data.item.letra}} {{data.item.entero}} {{data.item.decimal}} {{data.item.significado}}

                                        </template>

                                        <template slot="item" slot-scope="data">
                                        <v-list-tile-content>
                                            <v-list-tile-title v-html="` ${data.item.letra} ${data.item.entero} ${data.item.decimal} ${data.item.significado} `">
                                            </v-list-tile-title>
                                        </v-list-tile-content>
                                        </template>
                                        
                                        </v-select>

                                        <br/>
                                        <v-textarea
                                            v-model="Dx_Asociado"
                                            outline
                                            rows=16
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
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.prednisona.estado" label="Prednisona" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.prednisona.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.prednisona.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.prednisona.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.prednisona.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                 <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.cyac.estado" label="Cyac" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cyac.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cyac.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cyac.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cyac.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <!-- Tal vez toque arreglar -->
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.tac.estado" label="Tac" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.tac.mg"
                                                            label="mg"
                                                            outline
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.tac.estado"
                                                            ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.tac.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.tac.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.mmf.estado" label="MMF" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.mmf.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.mmf.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.mmf.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.mmf.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.aza.estado" label="AZA" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.aza.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.aza.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.aza.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.aza.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.cfm.estado" label="CFM" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cfm.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cfm.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cfm.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cfm.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.enalapril.estado" label="Enalapril" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.enalapril.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.enalapril.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.enalapril.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.losartan.estado" label="Losartan" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.losartan.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.losartan.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.losartan.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.amlodipina.estado" label="Amlodipina" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.amlodipina.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.amlodipina.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.amlodipina.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.amlodipina.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.citratoNa.estado" label="Citrato Na" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.citratoNa.mg"
                                                            label="mili-equi"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.citratoNa.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.citratoNa.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.citratoNa.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.citratoK.estado" label="Citrato K" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field

                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            v-model="misMedicamentos.citratoK.mg"
                                                            label="mili equiva."
                                                            outline
                                                            :disabled="!misMedicamentos.citratoK.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.citratoK.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.citratoK.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.furosemida.estado" label="Furosemida" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.furosemida.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.furosemida.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.furosemida.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.furosemida.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.alfacalcidol.estado" label="Alfacalcidol" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.alfacalcidol.mg"
                                                            label="micro gr"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.alfacalcidol.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.alfacalcidol.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.alfacalcidol.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.CaCO3.estado" label="CaCO3" color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.CaCO3.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.CaCO3.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.CaCO3.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.CaCO3.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.epo.estado" label="EPO"  color="green"></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.epo.mg"
                                                            label="unidades"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.epo.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.epo.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.epo.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.fe.estado" label="Fe" color="green" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.fe.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.fe.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.fe.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.fe.estado"
                                                        ></v-text-field>     
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-checkbox class="my-0 mt-4 py-0 " v-model="misMedicamentos.cefadroxilo.estado"  color="green" label="Cefadroxilo" ></v-checkbox>
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cefadroxilo.mg"
                                                            label="mg"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cefadroxilo.estado"
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="misMedicamentos.cefadroxilo.frecuencia"
                                                            label="Frecuencia"
                                                            outline
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            :disabled="!misMedicamentos.cefadroxilo.estado"
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
                                                            v-model="resultados_de_laboratorio.Na"
                                                            label="Na"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Cl"
                                                            label="Cl"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.BUN"
                                                            label="BUN"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Glu"
                                                            label="Glu"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.K"
                                                            label="K"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.HCO"
                                                            label="HCO"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Creat"
                                                            label="Creat"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.WB"
                                                            label="WB"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Col"
                                                            label="Col"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Alb"
                                                            label="Alb"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.HB"
                                                            label="HB"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.HT"
                                                            label="HT"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                   <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Ca"
                                                            label="Ca"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.P"
                                                            label="P"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.MG"
                                                            label="MG"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.PTL"
                                                            label="PTL"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.EGO"
                                                            label="EGO"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.pH"
                                                            label="pH"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Glu2"
                                                            label="Glu"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Prot"
                                                            label="Prot"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Hem"
                                                            label="Hem"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Gr"
                                                            label="Gr"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.GB"
                                                            label="GB"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Cil"
                                                            label="Cil"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.URO"
                                                            label="URO"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.PTH"
                                                            label="PTH"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
                                                            outline
                                                        ></v-text-field> 
                                                    </b-col>
                                                    <b-col>
                                                        <v-text-field
                                                            v-model="resultados_de_laboratorio.Ferritina"
                                                            label="Ferritina"
                                                            type =number
                                                            min="0"
                                                            :rules="minRules"
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



                        <!-- Text input-->
                   
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
                                        v-model="examen_fisico.COONG"
                                        rows=1
                                        hide-details
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Corazón</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.corazon" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.corazon"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.corazon"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Pulmones</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.pulmones" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.pulmones"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.pulmones"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Abdomen</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.abdomen" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.abdomen"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.abdomen"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Genitales</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.genitales" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.genitales"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.genitales"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Extremidades</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.extremidades" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.extremidades"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.extremidades"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Piel</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.piel" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.piel"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.piel"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">SN</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.sn" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.sn"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.sn"
                                    ></v-textarea>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 10%">Otros</th>
                                <td style="width: 5%">
                                    <v-checkbox v-model="examen_fisico_check.otros" hide-details color=green class="shrink py-0 my-0 ml-3 "></v-checkbox>
                                </td>
                                <td>
                                    <v-textarea
                                        :auto-grow=true
                                        v-model="examen_fisico.otros"
                                        rows=1
                                        hide-details
                                        :disabled="!examen_fisico_check.otros"
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

function check(a){
    if (a === -1){
        return ""
    } else {
        return a
    }
}

import { store } from '../main';
export default {
    data: () => ({
        enfermedad: '',
        dialog: false,

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
        dxs: undefined,
        historia: "",

        //Medicamentos

        misMedicamentos: {
            prednisona: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            cyac: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            tac: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            mmf: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            aza: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            cfm: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            enalapril: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            losartan: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            amlodipina: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            citratoNa: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            citratoK: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            furosemida: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            alfacalcidol: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            CaCO3: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            epo: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            fe: {
                estado: false,
                mg: "",
                frecuencia: ""
            },
            cefadroxilo: {
                estado: false,
                mg: "",
                frecuencia: ""
            }
        },

        //Laboratorios
        resultados_de_laboratorio: {
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
            Ferritina: ""
        },        

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

        examen_fisico: {
            COONG: "",
            corazon: "",
            pulmones: "",
            abdomen: "",
            genitales: "",
            extremidades: "",
            piel: "",
            sn: "",
            otros: ""
        },

        examen_fisico_check: {
            corazon: false,
            pulmones: false,
            abdomen: false,
            genitales: false,
            extremidades: false,
            piel: false,
            sn: false,
            otros: false
        },

        fecha: "",

        datos: [],
        sindromes: [],
        inputRules: [
          (v) => !!v || 'Se requiere el campo',
        ],
        minRules:[
            (v) => !!v && parseInt(v) > 0   || 'El número debe de ser mayor a 0'
        ]
        
    }),
    created() {
        
    },

    mounted() {
        this.dialog = true
        console.log("Id de paciente es: " + store.idPaciente);

        const date = new Date()
        this.fecha = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate()

        const data = {
            ID: store.idPaciente // Aqui va el ID del paciente
        };
        this.$http.get("http://localhost:8000/dxs").then(response => {
            this.dxs = response.data.dxs;
            console.log(response.data.dxs)
            
            });
        this.$http.post(`http://localhost:8000/PacienteController/findById`, data).then(response => {            

            if(response.data.Paciente[0] == null){
                console.log('Nothing to do here..');
            }else{
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
                        this.Plan_Medico = response.data.Consulta[0].plan_medico
                        this.Evaluacion_Psicologica = response.data.Consulta[0].evaluacion_psicologica
                        this.Plan_Psicologica = response.data.Consulta[0].plan_psicologico
                        this.Evaluacion_Trabajo_Social = response.data.Consulta[0].evaluacion_trabajo_social
                        this.Plan_Trabajo_Social = response.data.Consulta[0].plan_trabajo_social
                        this.Evaluacion_Nutricional = response.data.Consulta[0].evaluacion_nutricional
                        this.Plan_Nutricional = response.data.Consulta[0].plan_nutricional
                        this.Evaluacion_Farmacologica = response.data.Consulta[0].evaluacion_farmacologica
                        this.Plan_Farmacologico = response.data.Consulta[0].plan_farmacologico

                        this.resultados_de_laboratorio = JSON.parse(response.data.Consulta[0].resultados_laboratorio)
                        for(var key in this.resultados_de_laboratorio){
                            if(this.resultados_de_laboratorio[key] == 0){
                                this.resultados_de_laboratorio[key] = ""
                            }
                        }

                        const jsonTemp = JSON.parse(response.data.Consulta[0].examen_fisico)
                        
                        for(var key in this.examen_fisico){

                            if(jsonTemp.hasOwnProperty(key)){
                                this.examen_fisico[key] = jsonTemp[key]
                                
                                if(key != "coong"){
                                    this.examen_fisico_check[key] = true
                                }
                            }else{
                                this.examen_fisico[key] = ""
                                this.examen_fisico_check[key] = false
                            }
                        }

                        const jsonTemp2 = JSON.parse(response.data.Consulta[0].medicamento)
                        // console.table(jsonTemp2)
                        for(var key in this.misMedicamentos){
                            // console.log(key)
                            if(jsonTemp2.hasOwnProperty(key)){
                                this.misMedicamentos[key].mg = jsonTemp2[key].mg
                                this.misMedicamentos[key].frecuencia = jsonTemp2[key].frecuencia
                                this.misMedicamentos[key].estado = true
                            }else{
                                this.misMedicamentos[key].mg = ""
                                this.misMedicamentos[key].frecuencia = ""
                                this.misMedicamentos[key].estado = false
                            }
                        }
                    })
                }
            })
        }).then(() => {
            this.$http.get(`http://localhost:8000/sindromeController/getAll`).then(response => {
                if(response.data.Sindrome[0] == null){
                    console.log('Nothing to do here..');
                }else{
                    
                    this.sindromes = response.data.Sindrome;
                }
            });
        }).then(() => {
            this.dialog = false;
        }).catch(error => {
            this.dialog = false;
        });

    },
    methods: {
        
        agregarEnfermedad(){
            let s =  this.enfermedad.letra + " "
            if (this.enfermedad.entero>0)
                s = s + this.enfermedad.entero
            if (this.enfermedad.decimal>0)
                s = s +"."+ this.enfermedad.decimal
            s = s + " " + this.enfermedad.significado

            this.Dx_Asociado = this.Dx_Asociado + s +"\n"
            //console.log(this.enfermedad)
        },
        guardar() {
            // console.log("Fecha: " + this.fecha)
            // console.log("CUI: " + this.paciente.CUI)
            // console.log("Peso: " + this.datos_generales.Peso)
            // console.log("Talla: " + this.datos_generales.Talla)
            // console.log("PA: " + this.datos_generales.PA)
            // console.log("Dx_Definitivo: " + this.Dx_Definitivo)
            // console.log("Dx_Asociado: " + this.Dx_Asociado)
            // console.log("Historia: " + this.historia)

            let medicamento = {}
            
            if(this.misMedicamentos.prednisona.estado){
                medicamento = Object.assign(medicamento, {"prednisona": {
                    "mg": Number( this.misMedicamentos.prednisona.mg),
                    "frecuencia": Number( this.misMedicamentos.prednisona.frecuencia)
                }})
            }
            if(this.misMedicamentos.cyac.estado){
                medicamento = Object.assign(medicamento, {"cyac": {
                    "mg": Number( this.misMedicamentos.cyac.mg),
                    "frecuencia": Number( this.misMedicamentos.cyac.frecuencia)
                }})
            }
            if(this.misMedicamentos.tac.estado){
                medicamento = Object.assign(medicamento, {"tac": {
                    "mg": Number( this.misMedicamentos.tac.mg),
                    "frecuencia": Number( this.misMedicamentos.tac.frecuencia)
                }})
            }
            if(this.misMedicamentos.mmf.estado){
                medicamento = Object.assign(medicamento, {"mmf": {
                    "mg": Number( this.misMedicamentos.mmf.mg),
                    "frecuencia": Number( this.misMedicamentos.mmf.frecuencia)
                }})
            }
            if(this.misMedicamentos.aza.estado){
                medicamento = Object.assign(medicamento, {"aza": {
                    "mg": Number( this.misMedicamentos.aza.mg),
                    "frecuencia": Number( this.misMedicamentos.aza.frecuencia)
                }})
            }
            if(this.misMedicamentos.cfm.estado){
                medicamento = Object.assign(medicamento, {"cfm": {
                    "mg": Number( this.misMedicamentos.cfm.mg),
                    "frecuencia": Number( this.misMedicamentos.cfm.frecuencia)
                }})
            }
            if(this.misMedicamentos.enalapril.estado){
                medicamento = Object.assign(medicamento, {"enalapril": {
                    "mg": Number( this.misMedicamentos.enalapril.mg),
                    "frecuencia": Number( this.misMedicamentos.enalapril.frecuencia)
                }})
            }
            if(this.misMedicamentos.losartan.estado){
                medicamento = Object.assign(medicamento, {"losartan": {
                    "mg": Number( this.misMedicamentos.losartan.mg),
                    "frecuencia": Number( this.misMedicamentos.losartan.frecuencia)
                }})
            }
            if(this.misMedicamentos.amlodipina.estado){
                medicamento = Object.assign(medicamento, {"amlodipina": {
                    "mg": Number( this.misMedicamentos.amlodipina.mg),
                    "frecuencia": Number( this.misMedicamentos.amlodipina.frecuencia)
                }})
            }
            if(this.misMedicamentos.citratoNa.estado){
                medicamento = Object.assign(medicamento, {"citratoNa": {
                    "mg": Number( this.misMedicamentos.citratoNa.mg),
                    "frecuencia": Number( this.misMedicamentos.citratoNa.frecuencia)
                }})
            }
            if(this.misMedicamentos.citratoK.estado){
                medicamento = Object.assign(medicamento, {"citratoK": {
                    "mg": Number( this.misMedicamentos.citratoK.mg),
                    "frecuencia": Number( this.misMedicamentos.citratoK.frecuencia)
                }})
            }
            if(this.misMedicamentos.furosemida.estado){
                medicamento = Object.assign(medicamento, {"furosemida": {
                    "mg": Number( this.misMedicamentos.furosemida.mg),
                    "frecuencia": Number( this.misMedicamentos.furosemida.frecuencia)
                }})
            }
            if(this.misMedicamentos.alfacalcidol.estado){
                medicamento = Object.assign(medicamento, {"alfacalcidol": {
                    "mg": Number( this.misMedicamentos.alfacalcidol.mg),
                    "frecuencia": Number( this.misMedicamentos.alfacalcidol.frecuencia)
                }})
            }
            if(this.misMedicamentos.CaCO3.estado){
                medicamento = Object.assign(medicamento, {"CaCO3": {
                    "mg": Number( this.misMedicamentos.CaCO3.mg),
                    "frecuencia": Number( this.misMedicamentos.CaCO3.frecuencia)
                }})
            }
            if(this.misMedicamentos.epo.estado){
                medicamento = Object.assign(medicamento, {"epo": {
                    "mg": Number( this.misMedicamentos.epo.mg),
                    "frecuencia": Number( this.misMedicamentos.epo.frecuencia)
                }})
            }
            if(this.misMedicamentos.fe.estado){
                medicamento = Object.assign(medicamento, {"fe": {
                    "mg": Number( this.misMedicamentos.fe.mg),
                    "frecuencia": Number( this.misMedicamentos.fe.frecuencia)
                }})
            }
            if(this.misMedicamentos.cefadroxilo.estado){
                medicamento = Object.assign(medicamento, {"cefadroxilo": {
                    "mg": Number( this.misMedicamentos.cefadroxilo.mg),
                    "frecuencia": Number( this.misMedicamentos.cefadroxilo.frecuencia)
                }})
            }

           let resultado_laboratorio = {}

            resultado_laboratorio = Object.assign(resultado_laboratorio, {
                "Na": Number(this.resultados_de_laboratorio.Na),
                "Cl": Number(this.resultados_de_laboratorio.Cl),
                "BUN": Number(this.resultados_de_laboratorio.BUN),
                "Glu": Number(this.resultados_de_laboratorio.Glu),
                "K": Number(this.resultados_de_laboratorio.K),
                "HCO": Number(this.resultados_de_laboratorio.HCO),
                "Creat": Number(this.resultados_de_laboratorio.Creat),
                "WB": Number(this.resultados_de_laboratorio.WB),
                "Col": Number(this.resultados_de_laboratorio.Col),
                "Alb": Number(this.resultados_de_laboratorio.Alb),
                "HB": Number(this.resultados_de_laboratorio.HB),
                "HT": Number(this.resultados_de_laboratorio.HT),
                "Ca": Number(this.resultados_de_laboratorio.Ca),
                "P": Number(this.resultados_de_laboratorio.P),
                "MG": Number(this.resultados_de_laboratorio.MG),
                "PTL": Number(this.resultados_de_laboratorio.PTL),
                "EGO": Number(this.resultados_de_laboratorio.EGO),
                "pH": Number(this.resultados_de_laboratorio.pH),
                "Glu2": Number(this.resultados_de_laboratorio.Glu2),
                "Prot": Number(this.resultados_de_laboratorio.Prot),
                "Hem": Number(this.resultados_de_laboratorio.Hem),
                "Gr": Number(this.resultados_de_laboratorio.Gr),
                "GB": Number(this.resultados_de_laboratorio.GB),
                "Cil": Number(this.resultados_de_laboratorio.Cil),
                "URO": Number(this.resultados_de_laboratorio.URO),
                "PTH": Number(this.resultados_de_laboratorio.PTH),
                "Ferritina": Number(this.resultados_de_laboratorio.Ferritina),
            })

            let examenFisico = {}

            examenFisico = Object.assign(examenFisico, {
                "COONG": this.examen_fisico.COONG
            })
            if(this.examen_fisico_check.corazon){
                examenFisico = Object.assign(examenFisico, {
                "corazon": this.examen_fisico.corazon
            })}
            if(this.examen_fisico_check.pulmones){
                examenFisico = Object.assign(examenFisico, {
                "pulmones": this.examen_fisico.pulmones
            })}
            if(this.examen_fisico_check.abdomen){
                examenFisico = Object.assign(examenFisico, {
                "abdomen": this.examen_fisico.abdomen
            })}
            if(this.examen_fisico_check.genitales){
                examenFisico = Object.assign(examenFisico, {
                "genitales": this.examen_fisico.genitales
            })}
            if(this.examen_fisico_check.extremidades){
                examenFisico = Object.assign(examenFisico, {
                "extremidades": this.examen_fisico.extremidades
            })}
            if(this.examen_fisico_check.piel){
                examenFisico = Object.assign(examenFisico, {
                "piel": this.examen_fisico.piel
            })}
            if(this.examen_fisico_check.sn){
                examenFisico = Object.assign(examenFisico, {
                "sn": this.examen_fisico.sn
            })}
            if(this.examen_fisico_check.otros){
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
                    // console.log("Si pase update")
                }).catch(error => {

                })
            }else{
                this.$http.post('http://localhost:8000/ConsultaController/insert', info).then(response => {
                    // console.log("Si pase insert")
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

    div.col-auto > ul > li.nav-item {
        color:red;
    }
</style>
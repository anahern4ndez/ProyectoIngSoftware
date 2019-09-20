<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
    <div>
        <br>
        <h1 class ="headers">Hemodiálisis</h1>  
        <br>
        <!--b-tabs-title> Pacientes agendados para hoy: {{todaysDate}}</b-tabs-title-->
        <v-card>
            <v-toolbar flat color="primary" dark>
                <v-toolbar-title style="text-align: center">Pacientes agendados para hoy: {{todaysDate}}</v-toolbar-title>
            </v-toolbar>
            <v-tabs centered fixed-tabs vertical dark>
                <v-tab v-for="paciente in this.pacientes" :key="paciente.nombre" :title="paciente.Nombre">
                    {{paciente.Nombre}} {{paciente.Apellido}}
                </v-tab>
                <v-tab-item v-for="paciente in this.pacientes" :key="paciente.nombre" :title="paciente.Nombre">
                    <br>
                    <div class="cuerpo">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="encapsulado">
                                    <h2 class="headers">Datos de paciente</h2>
                                    <br><br><br>
                                    <div class="DatosPaciente">
                                        <!-- imagen paciente -->
                                        <div v-if="paciente.Imagen">
                                            <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" :src="paciente.Imagen" alt="" width="273" height="183">
                                        </div>
                                        <div v-else> <!-- se utiliza la imagen default si no se ha escogido una  -->
                                            <img id="fotoPaciente" style="margin-left: auto; margin-right: auto; width:50% margin-top: 2%" src="../assets/default.png" alt="" width="273" height="183">
                                        </div>
                                        <!-- demas datos -->
                                        <div>
                                            <v-text-field
                                                :value="paciente.Nombre"
                                                label="Nombre"
                                                filled
                                                disabled
                                                
                                            ></v-text-field>
                                            <v-text-field
                                                :value="paciente.Apellido"
                                                label="Apellido"
                                                filled
                                                disabled
                                            ></v-text-field>
                                            <v-text-field
                                                :value="paciente.CUI"
                                                label="CUI"
                                                filled
                                                disabled
                                            ></v-text-field>
                                            <v-text-field
                                                :value="paciente.EstadoActual"
                                                label="Estado"
                                                filled
                                                disabled
                                            ></v-text-field>
                                        </div>
                                        <div>
                                            <v-text-field
                                                :value="paciente.Edad"
                                                label="Edad"
                                                filled
                                                disabled
                                            ></v-text-field>
                                            <v-text-field
                                                :value="paciente.Sexo"
                                                label="Género"
                                                filled
                                                disabled
                                            ></v-text-field>
                                            <v-text-field
                                                :value="paciente.Nombre_de_padre"
                                                label="Nombre de padre"
                                                filled
                                                disabled
                                            ></v-text-field><v-text-field
                                                :value="paciente.Nombre_de_madre"
                                                label="Nombre de madre"
                                                filled
                                                disabled
                                            ></v-text-field>
                                        </div>
                                    </div>
                                </div>
                                <div class="encapsulado">
                                    <br><br>
                                    <v-text-field
                                        :v-model="tabs[pacientes.indexOf(paciente)].Registro"
                                        label="Registro"
                                        outline
                                        class="mitad"
                                    ></v-text-field>
                                    <v-text-field
                                        :v-model="tabs[pacientes.indexOf(paciente)].Numero"
                                        label="No."
                                        outline
                                        class="mitad"
                                    ></v-text-field>
                                    <v-layout align-center justify-end style="width: 100%">
                                        <v-container fluid row align-center justify-space-around fill-height>
                                            <h4 class="headers" style="margin-right: 10%">Lugar de procedencia:</h4>
                                            <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Procedencia" label="Hospitalizado" value="1" color="green"></v-checkbox>
                                            <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Procedencia" label="Ambulatorio" value="2" color="green"></v-checkbox>
                                        </v-container>
                                    </v-layout>
                                </div>
                                <br><br><br>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width:10%;">No.</th>
                                            <th scope="row" style="width:10%;">Hora</th>
                                            <th scope="row" style="width:10%;">P/A</th>
                                            <th scope="row" style="width:10%;">PULSO</th>
                                            <th scope="row" style="width:10%;">TEMP</th>
                                            <th scope="row" style="width:10%;">QB</th>
                                            <th scope="row" style="width:10%;">PV</th>
                                            <th scope="row" style="width:10%;">PA</th>
                                            <th scope="row" style="width:10%;">UF/H</th>
                                            <th scope="row" style="width:10%;">MEDICAMENTOS</th>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">1</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">2</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">3</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">4</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">5</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">6</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">7</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;">8</th>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                            <td contenteditable='true' style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:10%;"></th>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                            <th style="text-align: left; max-width: 10%;" >UF/TOTAL</th>
                                            <td style="text-align: left; max-width: 10%;" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="encapsulado">
                                    <h2 class="headers">...</h2>
                                    <br><br><br>
                                    <div>
                                        <ol>
                                            <ul>
                                                <h4 class="headers">1. Hemodiálisis:</h4>
                                                <v-layout align-center justify-end>
                                                    <v-container fluid row align-center justify-space-around fill-height>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Hemodialisis" label="Aguda" value="1" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Hemodialisis" label="Crónica" value="2" color="green"></v-checkbox>
                                                    </v-container>
                                                </v-layout>
                                            </ul>
                                            <ul id="via">
                                                <h4 class="headers">2. Vía:</h4>
                                                <v-layout align-center justify-end>
                                                    <v-container fluid row align-center justify-space-around>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Femoral" value="1" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Subclavio" value="2" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Yugular" value="3" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Derecho" value="4" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Izquierdo" value="5" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Invertido" value="6" color="green"></v-checkbox>
                                                        <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Via" label="Normal" value="7" color="green"></v-checkbox>
                                                        <!--v-text-field
                                                        :v-model="Via"
                                                        value="8"
                                                        label="Otros"
                                                        outline
                                                        ></v-text-field-->
                                                    </v-container>
                                                </v-layout>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">3. Líneas pediátricas:</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas"
                                                    placeholder="6.5 Mm."
                                                    outline
                                                    class="mitad"
                                                    ></v-text-field>

                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas"
                                                    placeholder="8.0 Mm."
                                                    outline
                                                    class="mitad"
                                                    ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">4. Filtro #:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.7 m2" value="0.7" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.9 m2" value="0.9" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.11 m2" value="0.11" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="1.5 m2" value="1.5" color="green"></v-checkbox>
                                                    <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Filtro"
                                                    label="Otros"
                                                    outline
                                                    ></v-text-field>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">5. Flujo de dializante:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante" label="300 ml/min" value="300" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante" label="400 ml/min" value="400" color="green"></v-checkbox>
                                                    <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante"
                                                    label="Otros (ml/min)"
                                                    outline
                                                    ></v-text-field>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">6. Flujo de sangre</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Flujo_sangre"
                                                    label="QB (ml/min)"
                                                    outline
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">7. UF</h4>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].UF"
                                                    label="(ml total)"
                                                    outline
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">8. Heparinización</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Heparinizacion"
                                                    label="Cebado (UL)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Heparinizacion"
                                                    label="Trans-Diálisis (UL/hora)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">9. Tiempo</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Tiempo"
                                                    label="Horas"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Tiempo"
                                                    label="Minutos"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">10. Conductividad</h4>
                                                <v-container row align-center justify-space-around fill-height>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Conductividad" label="Na+" value="0" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Conductividad" label="K+" value="1" color="green"></v-checkbox>
                                                    <v-checkbox v-model="tabs[pacientes.indexOf(paciente)].Conductividad" label="HCO3" value="2" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">10. Peso/Talla</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_pre"
                                                    label="Peso Pre-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_post"
                                                    label="Peso Post-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Talla"
                                                    label="Talla (m)"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_delta"
                                                    label="Peso delta"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                        </ol>
                                    </div>
                                    <br><br>
                                    <div>
                                        <div style="float:left; width:50%">
                                            <v-flex xs12 sm6 md4>
                                                <v-menu
                                                    v-model="tabs[pacientes.indexOf(paciente)].menu_col_cat"
                                                    :close-on-content-click="false"
                                                    lazy
                                                    transition="scale-transition"
                                                    offset-y
                                                    full-width
                                                    min-width="200px"
                                                >
                                                    <template v-slot:activator="{ on }">
                                                    
                                                    <v-text-field
                                                        v-model="tabs[pacientes.indexOf(paciente)].Fecha_col_cat"
                                                        label="Fecha de colocación de catéter"
                                                        prepend-icon="event"
                                                        readonly
                                                        v-on="on"
                                                        style="width:250%"
                                                        
                                                    ></v-text-field>
                                                    
                                                    </template>
                                                <v-date-picker v-model="tabs[pacientes.indexOf(paciente)].Fecha_col_cat" @input="tabs[pacientes.indexOf(paciente)].menu_col_cat = false" color="#3A4750" locale='es-ES'></v-date-picker>
                                            </v-menu>
                                            </v-flex>
                                        </div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="width:10%;">Labs.</th>
                                                    <th scope="row" style="width:10%;">Fecha</th>
                                                    <th scope="row" style="width:10%;">Pre</th>
                                                    <th scope="row" style="width:10%;">Post</th>
                                                    <th scope="row" style="width:10%;">Urr</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">BUN</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">CREAT</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">NA</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">K</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">C</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">P</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">CL</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">ALB</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">GB</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">HB</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">PLAQ</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">PTH</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width:10%;">FERRI</th>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                    <td contenteditable='true' style="text-align: left;" ></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br><br><br>
                                    <h3 id="headers" class="text-xs-center">Especiales</h3>
                                    <v-textarea
                                        v-model="tabs[pacientes.indexOf(paciente)].Especiales"
                                        outline
                                        name="Especiales"
                                        value=""
                                        rows=10
                                    ></v-textarea>
                                    <br><br>
                                    <h4 class="headers">Observaciones</h4>
                                    <v-textarea
                                        v-model="tabs[pacientes.indexOf(paciente)].Observaciones"
                                        outline
                                        name="Observaciones"
                                        value=""
                                        rows=10
                                    ></v-textarea>
                                </div>
                                <button float="left" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="guardar" :disabled="!tabs[pacientes.indexOf(paciente)].pass">Guardar información</button> 
                            </fieldset>
                        </form>
                    </div>
                    <br>
                </v-tab-item>
            </v-tabs>
        </v-card>
    </div>
</template>

<script>

export default {
    mounted(){
        this.$http.get("http://localhost:8000/PacienteController/findAll").then(response => {
            this.pacientes = response.data.Pacientes;
            for (let index = 0; index < response.data.Pacientes.length; index++) {
            //const element = array[index];
            this.tabs.push(
                {
                    tabid: index,
                    pass: true,
                    Hemodialisis: '',
                    Via: '',
                    Lineas_pediatricas: '',
                    Filtro: '',
                    Flujo_dializante: '',
                    Flujo_sangre: '',
                    UF: '',
                    Heparinizacion: '',
                    Tiempo: '',
                    Conductividad: '',
                    Peso_pre: '',
                    Peso_post: '',
                    Peso_delta: '',
                    Talla: '',
                    Fecha_col_cat: null,
                    menu_col_cat: false,
                    Especiales: '',
                    Procedencia: '',
                    Registro: '',
                    Numero: '',
                    Observaciones: '',
                }
            )
        }
        });
        this.getTodaysDate();
        //this.Fecha_col_cat = new Date()
        
        console.log(this.pacientes);
    },
    data(){
        return{
            pacientes: [],
            tabs: [],
            todaysDate: null,
            nombreRules: [
            (v) => !!v || 'Se requiere este campo',
            (v) => v && v.length < 60 || 'Se permite como maximo 60 caracteres'
            ],
            radioRules:[v => !!v || 'Debe seleccionar una opción'],
        }
    },
    methods: {
        getTodaysDate(){
            const daysOfWeek = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            const months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre','octubre', 'noviembre', 'diciembre']
            const engDateMonth = new Date().getUTCMonth();
            const engDateDay = new Date().getDay();
            const engDateYear = new Date().getFullYear();
            const engDateDate = new Date().getDate();
            this.todaysDate = ''.concat(daysOfWeek[engDateDay], ', ', engDateDate, ' de ',  months[engDateMonth], ' del ', engDateYear);
        },
        guardar(){
            var pass = true;
        },
        computeAge(date){
            console.log(date);
        }
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
table.table-bordered > tbody > tr > th {
    border: 3px solid #a9a9a9;
}
table.table-bordered > tbody > tr > td {
    border: 3px solid #a9a9a9;
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
ul{
  break-inside: avoid-column;
  -webkit-column-break-inside: avoid;
}
</style>
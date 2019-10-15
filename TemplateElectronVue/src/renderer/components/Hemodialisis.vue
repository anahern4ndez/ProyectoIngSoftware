<link {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}, {rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'} >
<template>
    <div>
        <br>
        <h1 class ="headers">Hemodiálisis</h1>  
        <br>
        <!--b-tabs-title> Pacientes agendados para hoy: {{todaysDateFormatted}}</b-tabs-title-->
        <v-card>
            <v-toolbar flat color="primary" dark>
                <v-toolbar-title style="text-align: center">Pacientes agendados para hoy: {{todaysDateFormatted}}</v-toolbar-title>
            </v-toolbar>
            <v-tabs centered fixed-tabs vertical dark v-model="activeTab">
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
                                                :value="paciente.estado_actual.significado"
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
                                                :value="paciente.sexo_rel.significado"
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
                                         :rules="expedienteRules"
                                    ></v-text-field>
                                    <v-text-field
                                        :v-model="tabs[pacientes.indexOf(paciente)].Numero"
                                        label="No. de Hemodiálisis"
                                        outline
                                        class="mitad"
                                        :rules="expedienteRules"
                                    ></v-text-field>
                                    <v-layout align-center justify-end style="width: 100%">
                                        <v-container fluid row align-center justify-space-around fill-height>
                                            <h4 class="headers" style="margin-right: 10%">Lugar de procedencia:</h4>
                                            <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Procedencia" label="Hospitalizado" value="1" color="green"></v-checkbox>
                                            <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Procedencia" label="Ambulatorio" value="2" color="green"></v-checkbox>
                                        </v-container>
                                    </v-layout>
                                </div>
                                    <div>
                                        <ol>
                                            <ul>
                                                <h4 class="headers">1. Hemodiálisis:</h4>
                                                <v-layout align-center justify-end>
                                                    <v-container fluid row align-center justify-space-around fill-height>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Hemodialisis" label="Aguda" value="1" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Hemodialisis" label="Crónica" value="2" color="green"></v-checkbox>
                                                    </v-container>
                                                </v-layout>
                                            </ul>
                                            <ul id="via">
                                                <h4 class="headers">2. Vía:</h4>
                                                <v-container row>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Femoral" value="1" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Subclavio" value="2" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Yugular" value="3" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Derecho" value="4" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Izquierdo" value="5" color="green"></v-checkbox>
                                                </v-container>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Invertido" value="6" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via" label="Normal" value="7" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">3. Líneas pediátricas:</h4>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" :v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas" label="6.5 Mm" value="1" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" :v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas" label="8.0 Mm" value="2" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">4. Filtro #:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.7 m2" value="0.7" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.9 m2" value="0.9" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="0.11 m2" value="0.11" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Filtro" label="1.5 m2" value="1.5" color="green"></v-checkbox>
                                                    <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Filtro"
                                                    label="Otros"
                                                    outline
                                                    :rules="expedienteRules"
                                                    ></v-text-field>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">5. Flujo de dializante:</h4>
                                                <v-container fluid row align-center justify-space-around>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante" label="300 ml/min" value="300" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante" label="400 ml/min" value="400" color="green"></v-checkbox>
                                                    <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante"
                                                    label="Otros (ml/min)"
                                                    outline
                                                    :rules="expedienteRules"
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
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">7. UF</h4>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].UF"
                                                    label="(ml total)"
                                                    outline
                                                    :rules="expedienteRules"
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
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Heparinizacion"
                                                    label="Trans-Diálisis (UL/hora)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">9. Tiempo</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].TiempoH"
                                                    label="Horas"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].TiempoM"
                                                    label="Minutos"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">10. Conductividad</h4>
                                                <v-container row align-center justify-space-around fill-height>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad_Na" label="Na+" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad_K" label="K+" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad_HCO3" label="HCO3" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">11. Peso/Talla</h4>
                                                <br>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_pre"
                                                    label="Peso Pre-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_post"
                                                    label="Peso Post-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Talla"
                                                    label="Talla (m)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    :v-model="tabs[pacientes.indexOf(paciente)].Peso_delta"
                                                    label="Peso delta"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                        </ol>
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
            console.log(this.pacientes);
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
                    TiempoH: '',
                    TiempoM: '',
                    Conductividad_Na: '',
                    Conductividad_K: '',
                    Conductividad_HCO3: '',
                    Peso_pre: '',
                    Peso_post: '',
                    Peso_delta: '',
                    Talla: '',
                    Fecha_col_cat: null,
                    menu_col_cat: false,
                    Procedencia: '',
                    Registro: '',
                    Numero: '',
                    Especiales: '',
                    Observaciones: '',
                    idPaciente: response.data.Pacientes[index].id,
                    //tabla 1
                    //tabla 2
                    Fecha: {
                        BUN: "",
                        CREAT: "",
                        NA: "",
                        K: "",
                        C: "",
                        P: "",
                        CL: "",
                        ALB: "",
                        GB: "",
                        BUN: "",
                        HB: "",
                        PLAQ: "",
                        PTH: "",
                        FERRI: ""
                    },
                    Pre: {
                        BUN: "",
                        CREAT: "",
                        NA: "",
                        K: "",
                        C: "",
                        P: "",
                        CL: "",
                        ALB: "",
                        GB: "",
                        BUN: "",
                        HB: "",
                        PLAQ: "",
                        PTH: "",
                        FERRI: ""
                    },
                    Post: {
                        BUN: "",
                        CREAT: "",
                        NA: "",
                        K: "",
                        C: "",
                        P: "",
                        CL: "",
                        ALB: "",
                        GB: "",
                        BUN: "",
                        HB: "",
                        PLAQ: "",
                        PTH: "",
                        FERRI: ""
                    },
                    Urr: {
                        BUN: "",
                        CREAT: "",
                        NA: "",
                        K: "",
                        C: "",
                        P: "",
                        CL: "",
                        ALB: "",
                        GB: "",
                        BUN: "",
                        HB: "",
                        PLAQ: "",
                        PTH: "",
                        FERRI: ""
                    }
                }
            )
        }
        });
        this.todaysDate = new Date();
        this.gettodaysDateFormatted();
    },
    data(){
        return{
            pacientes: [],
            tabs: [],
            todaysDateFormatted: null,
            todaysDate: null,
            activeTab: 0,
            expedienteRules: [
                (v) => !!v || 'Se requiere este campo', 
                (v) => v && this.isANumber(v) || 'Verifique que el dato ingresado sea un número.'
            ],
            nombreRules: [
                (v) => !!v || 'Se requiere este campo',
                (v) => v && v.length < 60 || 'Se permite como maximo 60 caracteres'
            ],
        }
    },
    methods: {
        gettodaysDateFormatted(){
            const daysOfWeek = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            const months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre','octubre', 'noviembre', 'diciembre']
            const engDateMonth = new Date().getUTCMonth();
            const engDateDay = new Date().getDay();
            const engDateYear = new Date().getFullYear();
            const engDateDate = new Date().getDate();
            this.todaysDateFormatted = ''.concat(daysOfWeek[engDateDay], ', ', engDateDate, ' de ',  months[engDateMonth], ' del ', engDateYear);
        },
        guardar(){
            var pass = true;
            
            const table2 = document.getElementById("table2");
            //asignacion de valores de cada celda de la tabla a variables 
            let rowKeys = ["BUN", "CREAT", "NA", "K", "C", "P", "CL", "ALB", "GB", "HB", "PLAQ", "PTH", "FERRI"]
            for (let m = 1; m < table2.rows.length; m++) {
                this.tabs[this.activeTab].Fecha[rowKeys[m-1]] = table2.rows[m].cells[1].innerHTML;
                this.tabs[this.activeTab].Pre[rowKeys[m-1]] = table2.rows[m].cells[2].innerHTML;
                this.tabs[this.activeTab].Post[rowKeys[m-1]] = table2.rows[m].cells[3].innerHTML;
                this.tabs[this.activeTab].Urr[rowKeys[m-1]] = table2.rows[m].cells[4].innerHTML;
            }
            console.log(this.tabs[this.activeTab])
            let info = this.tabs[this.activeTab]
            info['todaysDate'] = this.todaysDate
            this.$http.post('http://localhost:8000/hemodialisis', info).then(response => {
                console.log(response.success)
            })


        },
        computeAge(date){
            console.log(date);
        },
        isANumber(expediente){
          let isNumber = false;
          if(!isNaN(parseInt(expediente))){
            isNumber = true;
          }
          return isNumber;
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
table.table-bordered {
    table-layout:fixed;
}
table.table-bordered > tbody > tr > th {
    border: 3px solid #a9a9a9;
}
table.table-bordered > tbody > tr > td {
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
</style>
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
                                        :value="tabs[pacientes.indexOf(paciente)].Registro"
                                        label="Registro"
                                        outline
                                        class="mitad"
                                        disabled
                                    ></v-text-field>
                                    <v-text-field
                                        v-model="tabs[pacientes.indexOf(paciente)].Numero"
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
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Lugar" label="Femoral" value="Femoral" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Lugar" label="Subclavio" value="Subclavio" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Lugar" label="Yugular" value="Yugular" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Lugar" label="Derecho" value="Derecho" color="green"></v-checkbox>
                                                        <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Lugar" label="Izquierdo" value="Izquierdo" color="green"></v-checkbox>
                                                </v-container>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Direccion" label="Invertido" value="Invertido" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Via.Direccion" label="Normal" value="Normal" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">3. Líneas pediátricas:</h4>
                                                <v-container row>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas" label="6.5 Mm" value="6.5" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Lineas_pediatricas" label="8.0 Mm" value="8" color="green"></v-checkbox>
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
                                                    v-model="tabs[pacientes.indexOf(paciente)].Filtro"
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
                                                    v-model="tabs[pacientes.indexOf(paciente)].Flujo_dializante"
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
                                                    v-model="tabs[pacientes.indexOf(paciente)].Flujo_sangre"
                                                    label="QB (ml/min)"
                                                    outline
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">7. UF</h4>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].UF"
                                                    label="(ml total)"
                                                    outline
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">8. Heparinización</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Heparinizacion.Cebado"
                                                    label="Cebado (UL)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Heparinizacion.Transdialisis"
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
                                                    v-model="tabs[pacientes.indexOf(paciente)].Tiempo.Horas"
                                                    label="Horas"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Tiempo.Minutos"
                                                    label="Minutos"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">10. Conductividad</h4>
                                                <v-container row align-center justify-space-around fill-height>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad.Na" label="Na+" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad.K" label="K+" color="green"></v-checkbox>
                                                    <v-checkbox class="align-center justify-center" v-model="tabs[pacientes.indexOf(paciente)].Conductividad.HCO3" label="HCO3" color="green"></v-checkbox>
                                                </v-container>
                                            </ul>
                                            <ul>
                                                <h4 class="headers">11. Peso/Talla</h4>
                                                <br>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Peso_pre"
                                                    label="Peso Pre-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                    :onChange="getDeltaWeight()"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Peso_post"
                                                    label="Peso Post-Hemodiálisis (kg)"
                                                    outline
                                                    class="mitad"
                                                    :onChange="getDeltaWeight()"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Talla"
                                                    label="Talla (m)"
                                                    outline
                                                    class="mitad"
                                                    :rules="expedienteRules"
                                                ></v-text-field>
                                                <v-text-field
                                                    v-model="tabs[pacientes.indexOf(paciente)].Peso_delta"
                                                    disabled
                                                    label="Peso delta"
                                                    outline
                                                    class="mitad"
                                                ></v-text-field>
                                            </ul>
                                        </ol>
                                    </div>
                                    <br><br><br>
                                    <table class="table table-bordered" id="table">
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
                                        </tbody>
                                    </table>
                                    <button float="left" type="button" class="btn btn-lg btn-warning btn-block" v-on:click="activateTableDialog">Comenzar hemodiálisis</button> 
                                    <!-- cuadro de dialogo de aviso para el autosave de tabla -->
                                    <v-dialog v-model="tabs[pacientes.indexOf(paciente)].tableDialog" persistent max-width="40%">
                                        <v-card class="dialogText">
                                            <v-card-title class="headline">Aviso de autoguardado</v-card-title>
                                            <v-card-text>
                                                Los datos ingresados en la última fila de la tabla serán guardados en este momento. Una vez guardada no se podrá cambiar. 
                                                <br><br>
                                                En caso que desee volver a revisar la tabla, haga clic en "Revisar", este aviso volverá a aparecer en 5 minutos. 
                                                <br><br>
                                                ¿Es toda la información ingresada correcta?
                                            </v-card-text>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn class="v-btn" color="primary darken-1" text @click="recheckTableData()">Revisar</v-btn>
                                            <v-btn class="v-btn" color="primary darken-1" text @click="saveTableData()">Guardar</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-dialog>
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
        this.$http.get("http://localhost:8000/PacienteController/findWithAppointment").then(response => {
            for (let index = 0; index < response.data.Pacientes.length; index++) {
                const edadPaciente = response.data.Pacientes[index].Edad;
                if (edadPaciente < 1){
                    response.data.Pacientes[index].Edad = Math.round(edadPaciente*12.0) + ' meses';
                }
                else{
                    response.data.Pacientes[index].Edad = edadPaciente + ' años';
                } 
            }

            this.pacientes = response.data.Pacientes;
            //console.log(this.pacientes);
            for (let index = 0; index < response.data.Pacientes.length; index++) {
            //const element = array[index];
            this.tabs.push(
                {
                    tableDialog: false,
                    tabid: index,
                    pass: true,
                    Hemodialisis: '',
                    Via: {
                        Lugar: '',
                        Direccion: '',
                    },
                    Lineas_pediatricas: '',
                    Filtro: '',
                    Flujo_dializante: '',
                    Flujo_sangre: '',
                    UF: '',
                    Heparinizacion: {
                        Cebado: '',
                        Transdialisis: '',
                    },
                    Tiempo: {
                        Horas: '',
                        Minutos: '',
                    },
                    Conductividad: {
                        Na: '',
                        K:'',
                        HCO3: '',
                    },
                    Peso_pre: '',
                    Peso_post: '',
                    Peso_delta: '',
                    Talla: '',
                    Procedencia: '',
                    Registro: this.pacientes[index].Numero_expediente,
                    Numero: '',
                    Especiales: '',
                    Observaciones: '',
                    idPaciente: response.data.Pacientes[index].id,
                }
            )
        }
        });
        const id = this.this.tabs[this.activeTab].idPaciente
        this.$http.get("http://localhost:8000/hemodialisis/getHemoNumber", id).then(response => {
            this.tabs[this.activeTab].Hemodialisis = response.count + 1;
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
            let info = this.tabs[this.activeTab]
            info['todaysDate'] = this.todaysDate
            this.$http.post('http://localhost:8000/hemodialisis', info).then(response => {
                console.log(response.success)
            })


        },
        isANumber(expediente){
          let isNumber = false
          if(!isNaN(parseInt(expediente))){
            isNumber = true
          }
          return isNumber
        },
        getDeltaWeight(){
            let weightPre = this.tabs[this.activeTab].Peso_pre
            let weightPost = this.tabs[this.activeTab].Peso_post
            this.tabs[this.activeTab].Peso_delta = Math.abs(weightPre - weightPost)
        },
        /* Al comenzar el proceso de hemodiálisis, se espera 15-30min antes de guardar los datos, pero antes de poder hacerlo, 
            se activa un cuadro de diálogo para verificar que los datos ingresados fueron correctos (porque no se pueden cambiar 
            una vez se haya guardado */
        activateTableDialog(){
            var loop = setInterval(() => {
                this.tabs[this.activeTab].tableDialog = true
                clearInterval(loop)
            }, (900*1000)); //15min
        },
        /* En el caso que el usuario desee volver a verificar los datos, se esperarán 5 minutos antes de volver a intentar guardar los datos */
        recheckTableData(){
            this.tabs[this.activeTab].tableDialog = false
            var loop = setInterval(() => {
                this.activateTableDialog()
                clearInterval(loop)
            }, 300*1000); //5min
        },
        /* En caso que el usuario indique que todos los datos están correctos, se procede a guardar lo ingresado en la última fila */
        saveTableData(){
            this.tabs[this.activeTab].tableDialog = false
            const table = document.getElementById("table")
            let currentRow = table.rows.length -1
            /* guardar datos de table row actuales */
            const time = new Date() 
            this.T1Hora = time.getHours() + ':' + ((time.getMinutes() < 10)?"0":"") + time.getMinutes() + ':' + ((time.getSeconds() < 10)?"0":"") + time.getSeconds()
            //setear la hora en la tabla (para que el usuario la pueda ver)
            table.rows[currentRow].cells[1].innerHTML = this.T1Hora
            const info = {
                idPaciente: this.tabs[this.activeTab].idPaciente,
                P_A: table.rows[currentRow].cells[2].innerHTML,
                Pulso: table.rows[currentRow].cells[3].innerHTML,
                Temp: table.rows[currentRow].cells[4].innerHTML,
                QB: table.rows[currentRow].cells[5].innerHTML,
                PV: table.rows[currentRow].cells[6].innerHTML,
                PA: table.rows[currentRow].cells[7].innerHTML,
                UFH: table.rows[currentRow].cells[8].innerHTML,
                Medicamentos: table.rows[currentRow].cells[9].innerHTML
            }
            this.$http.post('http://localhost:8000/hemodialisis/storeTable', info).then(response => {

                /* deshabilitar modificacion de texto para celdas ya guardadas */ 
                for (let m = 1; m < 10; m++) {
                    table.rows[currentRow].cells[m].contentEditable = false
                }
                /* agregar otra table row */
                currentRow++
                const tr = document.createElement("tr")
                const th = document.createElement("th")
                th.scope = "row"
                th.style = "width: 10%; border: 3px solid #a9a9a9;"
                th.innerHTML = currentRow
                tr.append(th)
                for (let i = 0; i < 9; i++) {
                    const td = document.createElement("td")
                    td.style = ' text-align: left; max-width: 10%; border: 3px solid #a9a9a9;'
                    td.contentEditable = true
                    tr.append(td)
                }
                table.append(tr)
                if(table.rows.length -1 < 8){ //el formulario dice que se tienen hasta 8 entradas en la tabla
                    var loop = setInterval(() => {
                        this.activateTableDialog()
                        clearInterval(loop)
                    }, (900*1000)); //15min
                }
            })
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
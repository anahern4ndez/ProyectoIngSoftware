<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Gestión de formularios</h1>
        <br>
        <b-container class="text-center" fluid>
            <b-row>
                <b-col class="titulo1">
                    <div>Llenar formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    v-on:change="changeDisableAbrir"
                    v-model="selectAbrir"
                    label="Elija el formulario que desea abrir para llenar">
                    </v-combobox>
                    <br>
                    <!-- <v-btn text large color="yellow" type="button" href='ms-word:ofv|u|file:./CHOL.docx' >Abrir formulario</v-btn> -->
                    <v-btn text large color="yellow" type="button" v-on:click="startWord" :disabled='isDisabledAbrir'>Abrir formulario</v-btn>
                    <v-dialog v-model="dialog" persistent max-width="290">
                        <template v-slot:activator="{ on }">
                            <v-btn text large color="yellow" v-on="on" @click="subirFormulario" ref="path" :disabled='isDisabledSubirForm'>Subir formulario</v-btn>
                        </template>
                        <v-card>
                            <v-card-title class="headline">Formulario guardado</v-card-title>
                            <v-card-text>Se ha guardado el formulario del paciente exitosamente.</v-card-text>
                            <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="yellow darken-1" text @click="dialog = false; regresarGestionPacientesView()">Seguir</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </b-col>
                <!-- <b-col cols="1" class="titulo1">
                </b-col>
                <b-col class="titulo1">
                    <div>Guardar y subir formulario</div>
                    <br>
                    <v-combobox
                    :items="items"
                    v-on:change="changeDisableSubir"
                    v-model="selectSubir"
                    label="Elija el formulario que desea subir">
                    </v-combobox>
                    <br>
                    <v-btn text large color="yellow" @click="formClick" :disabled='isDisabledSubir'>Elegir formulario</v-btn>
                    <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeForm" ref="changeForm"/>
                    <v-btn text large color="yellow" @click="subirFormulario" ref="path" :disabled='isDisabledSubirForm'>Subir formulario</v-btn>
                </b-col> -->
            </b-row>
        </b-container>
    </div>
</template>
<script>
import { store } from "../main";
import { log } from "util";
export default {
  mounted() {},
  data() {
    return {
      formulario: null,
      selectAbrir: " ",
      selectSubir: " ",
      items: [
        "Peritonitis",
        "Trasplante renal",
        "Transfusión",
        "Hemodialisis",
        "Mortalidad",
        "Cambio Status",
        "Biopsia Renal",
      ],
      path: " ",
      // referencia: 'ms-word:ofv|u|file:///C:/Users/Ulises/Desktop/CHOL.docx',
      referencia: "ms-word:ofv|u|file:../TemplateElectronVue/CHOL.docx",
      isDisabledAbrir: true,
      isDisabledSubir: true,
      isDisabledSubirForm: true,
      direccionCHOL: "\\CHOL.docx",
      dirCHOL: "CHOL.docx",
      direccionPeritonitis: "Peritonitis",
      dirPeritonitis: "Peritonitis.docx",
      direccionTransplanteRenal: "TrasplanteRenal",
      dirTransplanteRenal: "TrasplanteRenal.docx",
      direccionTransfusion: "Transfusion",
      dirTransfusion: "Transfusion.docx",
      direccionHemodialisis: "Hemodialisis",
      dirHemodialisis: "Hemodialisis.docx",
      direccionMortalidad: "Mortalidad",
      dirMortalidad: "Mortalidad.docx",
      direccionCambioStatus: "CambioStatus",
      dirCambioStatus: "CambioStatus.docx",
      direccionBiopsiaRenal: "BiopsiaRenal",
      dirBiopsiaRenal: "BiopsiaRenal.docx",
      exit: true,
      cui: this.$route.params.cui,

      // TODO: Chino, por favor, obtener el id del paciente al entrar a esta pestaña

      name: this.$route.params.nombre,
      apellido: this.$route.params.apellido,
      nombrecompleto:
        this.$route.params.nombre + " " + this.$route.params.apellido,
      fecha: new Date().toISOString().slice(0, 10),
      nombreNuevoFormulario: " ",
      dialog: false,
    };
  },
  methods: {
    startWord(strFile) {
      this.isDisabledSubir = false;
      this.isDisabledSubirForm = false;
      this.exit = false;

      const { shell } = require("electron");
      var fs = require("fs");
      var dir = process.cwd();

      var dirCopy;
      if (this.selectAbrir === "Peritonitis") {
        //dir += this.direccionPeritonitis;
        this.nombreNuevoFormulario = this.direccionPeritonitis.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirPeritonitis;
      } else if (this.selectAbrir === "Trasplante renal") {
        //dir += this.direccionTransplanteRenal;
        this.nombreNuevoFormulario = this.direccionTransplanteRenal.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirTransplanteRenal;
      } else if (this.selectAbrir === "Transfusión") {
        //dir += this.direccionTransfusion;
        this.selectAbrir = "Transfusion";
        this.nombreNuevoFormulario = this.direccionTransfusion.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirTransfusion;
      } else if (this.selectAbrir === "Hemodialisis") {
        //dir += this.direccionHemodialisis;
        this.nombreNuevoFormulario = this.direccionHemodialisis.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirHemodialisis;
      } else if (this.selectAbrir === "Mortalidad") {
        //dir += this.direccionMortalidad;
        this.nombreNuevoFormulario = this.direccionMortalidad.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirMortalidad;
      } else if (this.selectAbrir === "Cambio Status") {
        //dir += this.direccionMortalidad;
        this.nombreNuevoFormulario = this.direccionCambioStatus.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirCambioStatus;
      } else if (this.selectAbrir === "BiopsiaRenal") {
        //dir += this.direccionMortalidad;
        this.nombreNuevoFormulario = this.direccionBiopsiaRenal.concat(
          "_",
          this.name,
          "_",
          this.apellido,
          "_",
          this.fecha,
          ".docx"
        );
        dirCopy = this.dirBiopsiaRenal;
      }

      const pathNuevo =
        `.\\temp\\pcnts\\${this.cui}\\${this.selectAbrir}\\${this.fecha}\\` +
        this.nombreNuevoFormulario;

      const pathGuardar =
        `.\\temp\\pcnts\\${this.cui}\\${this.selectAbrir}\\${this.fecha}\\` +
        this.nombreNuevoFormulario;

      const rutaNuevoForm = `"${dir}\\temp\\pcnts\\${this.cui}\\${this.selectAbrir}\\${this.fecha}\\${this.nombreNuevoFormulario}"`;
      const rutaCopiaForm = `temp\\pcnts\\${this.cui}\\${this.selectAbrir}\\${this.fecha}\\${this.nombreNuevoFormulario}`;

      // Se sacara una copia del archivo original y se pondra en uno NUEVO
      fs.copyFile(dirCopy, rutaCopiaForm, (err) => {
        if (err) {
          console.log("ERROR DE PARTE DE FS:", err);

          const { exec } = require("child_process");
          //Se crea la carpeta pacientes en la carpeta temporal
          const string = `mkdir "${dir}\\temp\\pcnts\\${this.cui}\\${this.selectAbrir}\\${this.fecha}"`;
          exec(string, (error, stdout, stderr) => {
            if (error) {
              console.log(`error: ${error.message}`);
              return;
            }
            if (stderr) {
              console.log(`stderr ${stderr}`);
              return;
            }

            fs.copyFile(dirCopy, rutaCopiaForm, (err) => {
              if (err) throw err;
              shell.openItem(rutaNuevoForm);
            });
          });
        }
        this.path = pathGuardar;
        shell.openItem(rutaNuevoForm);
      });
    },

    changeDisableAbrir(event) {
      if (this.selectAbrir !== " ") {
        this.isDisabledAbrir = false;
      }
    },

    subirFormulario() {
      const { exec } = require("child_process");
      console.log(this.path);
      if (this.path === " ") {
        // Mostrar Alerta
      } else {
        //se copia el archivo al servidor
        const ipServer = process.env.SERVER_IP;
        const serverPassword = process.env.SERVER_PASSWORD;
        let relativePath = `${process.cwd()}\\temp\\pcnts\\${this.cui}`;
        // relativePath = relativePath.replace(/\\/g, "/");
        const serverUser = process.env.SERVER_USER;
        const serverPath = `/home/adminlocal/Fundanier/pcnts/`;
        const comando = `pscp -pw ${serverPassword} -p -r -q "${relativePath}" "${serverUser}@${ipServer}:${serverPath}"`;

        exec(comando, (error, stdout, stderr) => {
          if (error) {
            console.log(`error: ${error.message}`);
            return;
          }
          if (stderr) {
            console.log(`stderr: ${stderr}`);
            return;
          }
          console.log(`stdout: ${stdout}`);
        });
        console.log(
          `http://${process.env.SERVER_IP}:8000/formularioController/save?NombreDoctor=${store.id}&cui=${this.cui}&fecha=${this.fecha}&TipoFormulario=${this.selectAbrir}&Path=${this.path}`
        );

        // Subir Documento al servidor
        // Mostrar mensaje de subida con exito
        // Subir formulario a base de datos
        this.$http
          .post(
            `http://${process.env.SERVER_IP}:8000/formularioController/save?NombreDoctor=${store.id}&cui=${this.cui}&fecha=${this.fecha}&TipoFormulario=${this.selectAbrir}&Path=${this.path}`
          )
          .then((response) => {
            console.log("Se subio el Formulario: " + this.path);
            this.exit = true;
            this.isDisabledSubirForm = true;
          })
          .catch((error) => {
            console.log("Error", error);
          });
      }
    },
    formClick: function (event) {
      // on a click on the button with id 'one'
      const btn = this.$refs.changeForm;
      btn.click(); // trigger the click on second, and go on
    },
    changeForm: function (event) {
      var input = event.target;
      //console.log(input.files)
      //Este es el path del documento
      this.path = input.files[0].path;
      console.log(this.path);
      input.value = "";
    },
    regresarGestionPacientesView() {
      this.$router.push("/gestionPacientes");
    },
  },
};
</script>
<style>
.titulo1 {
  font-size: 20px;
}
</style>
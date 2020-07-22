<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Estadísticas Generales</h1>
        <br>
        <b-container class="text-center" fluid>
            <b-row>
                <b-col class="titulo1">
                    <div>Variable de estudio</div>
                    <br>
                    <v-combobox
                    :items="posiblesVariables"
                    v-on:change="changeDisableVariable"
                    v-model="selectVariable"
                    label="Elija la variable a estudiar">
                    </v-combobox>
                    <br>
                </b-col>
                <b-col cols="1" class="titulo1">
                </b-col>
                <b-col class="titulo1">
                    <div>Tiempo de recolección de datos</div>
                    <br>
                    <v-combobox
                    :items="posiblesTiempos"
                    v-on:change="changeDisableTiempo"
                    v-model="selectTiempo"
                    label="Elija el tiempo de estudio">
                    </v-combobox>
                    <br>
                    <input type="file" class="hide_file" style="height:auto; width:auto; visibility:hidden" v-on:change="changeForm" ref="changeForm"/>
                </b-col>
            </b-row>
            <v-btn text large color="yellow" type="button" v-on:click="startExcel" :disabled='isDisabledButton'>Abrir formulario</v-btn>
        </b-container>
    </div>
</template>


<script>
import { store } from "../main";
import { log } from "util";
import { resolve } from "dns";
import { rejects } from "assert";
var fecha = new Date();

export default {
  data: () => ({
    posiblesVariables: ["Acciones", "Consultas", "Pacientes", "Citas"],
    posiblesTiempos: [
      "Mes pasado",
      "3 meses",
      "6 meses",
      "1 año",
      "2 años",
      "Toda la data"
    ],
    clearable: false,
    selectVariable: " ",
    selectTiempo: " ",
    isDisabledAbrir: true,
    isDisabledTiempo: true,
    isDisabledButton: true,
    nombreArchivo: " "
  }),
  beforeMount() {
    const { exec } = require("child_process");
    const creacionCSVs =
      "cd ./temp && mkdir CSVs && cd CSVs && type nul > Acciones.csv && type nul > Citas.csv && type nul > Consultas.csv && type nul > GestionUsuario.csv && type nul > Historial.csv && type nul > Pacientes.csv";
    exec(creacionCSVs, (error, stdout, stderr) => {
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
  },

  methods: {
    startExcel() {
      this.nombreArchivo = `${this.selectVariable}.csv`;

      this.crearCSVEnServer(this.nombreArchivo)
        .then(response => {
          this.isDisabledSubir = false;
          this.isDisabledSubirForm = false;
          this.exit = false;

          const { shell } = require("electron");
          var fs = require("fs");
          var dir = process.cwd();

          dir = dir.concat(".\\temp\\CSVs\\", this.nombreArchivo);
          // console.log(dir)
          shell.openItem(dir);
        })
        .catch(error => {
          console.error(error);
        });
    },

    crearCSVEnServer() {
      // Constantes útiles
      const { Pool, Client } = require("pg");
      const fastcsv = require("fast-csv");
      const fs = require("fs");
      //const pathArchivo = `src/CSVs/${this.nombreArchivo}`;
      const pathArchivo = `./temp/CSVs/${this.nombreArchivo}`;
      const ws = fs.createWriteStream(pathArchivo);

      // Se crea el cliente con configuración del servidor
      const client = new Client({
        user: "postgres",
        host: process.env.SERVER_IP,
        database: "fundanier",
        password: process.env.SERVER_PASSWORD,
        port: 5432
      });

      let query;

      if (this.selectVariable === "Acciones") {
        query = `
        SELECT 
          name as "Nombre del usuario", 
          fecha as "Fecha de la acción",
          "TipoFormulario" as "Tipo de acción", 
          "Nombre" as "Nombre del paciente", 
          "Apellido" as "Apellido del paciente",
          hist."CUI" as "CUI del paciente"
        FROM 
          historiales hist
        INNER JOIN pacientes ON pacientes."CUI" = hist."CUI"
        INNER JOIN users ON CAST (users.id AS Character) = hist."IdDoctor"`;
      } else if (this.selectVariable === "Citas") {
        query = `
        SELECT 
          name as "Nombre del usuario",
          fecha "Fecha de la cita",
          hora as "Hora Inicio",
          "duracionCita" as "Duración de la cita",
          "Nombre" as "Nombre del paciente", 
          "Apellido" as "Apellido del paciente"
        FROM citas
        INNER JOIN users u ON u.id = citas."idUsuario"
        INNER JOIN pacientes ON pacientes.id = citas."idPaciente"`;
      } else if (this.selectVariable === "Consultas") {
        query = `
        SELECT
          "Nombre" as "Nombre del paciente", 
          "Apellido" as "Apellido del paciente",
          cui as "CUI",
          fecha as "Fecha consulta",
          peso, talla, pa as "Presión arterial",
          sindrome_clinico,
          historia,
          evaluacion_medica,
          plan_medico,
          evaluacion_psicologica,
          plan_psicologico,
          evaluacion_trabajo_social,
          plan_trabajo_social,
          evaluacion_nutricional,
          plan_nutricional,
          evaluacion_farmacologica,
          plan_farmacologico
        FROM consultas c
        INNER JOIN pacientes ON pacientes."CUI" = c.cui`;
      } else if (this.selectVariable === "Pacientes") {
        query = `
        SELECT 
          "Numero_expediente",
          "CUI",
          "Nombre",
          "Apellido",
          "Fecha_de_nacimiento",
          "Procedencia",
          "Residencia",
          "Nombre_de_padre",
          "Nombre_de_madre",
          "Telefono"
          "Edad",
          "Historia"
        FROM pacientes`;
      }

      let tiempo;
      const fechaActual = new Date();

      if (this.selectTiempo === "Mes pasado") {
        tiempo = new Date(
          fechaActual.getFullYear(),
          fechaActual.getMonth() - 1,
          fechaActual.getDate()
        );
      } else if (this.selectTiempo === "3 meses") {
        tiempo = new Date(
          fechaActual.getFullYear(),
          fechaActual.getMonth() - 3,
          fechaActual.getDate()
        );
      } else if (this.selectTiempo === "6 meses") {
        tiempo = new Date(
          fechaActual.getFullYear(),
          fechaActual.getMonth() - 6,
          fechaActual.getDate()
        );
      } else if (this.selectTiempo === "1 año") {
        tiempo = new Date(
          fechaActual.getFullYear() - 1,
          fechaActual.getMonth(),
          fechaActual.getDate()
        );
      } else if (this.selectTiempo === "2 años") {
        tiempo = new Date(
          fechaActual.getFullYear() - 2,
          fechaActual.getMonth(),
          fechaActual.getDate()
        );
      } else {
        tiempo = new Date(
          fechaActual.getFullYear() - 30,
          fechaActual.getMonth(),
          fechaActual.getDate()
        );
      }

      if (this.selectVariable !== "Pacientes") {
        const condicionTiempo = `
        WHERE fecha >= '${tiempo.getFullYear()}-${tiempo.getMonth()}-${tiempo.getDate()}'`;
        query = query + condicionTiempo;
      }

      // Conexión a servidor
      client.connect();

      return new Promise((resolve, rejects) => {
        client.query(query, (err, res) => {
          const jsonData = JSON.parse(JSON.stringify(res.rows));
          // Escribir el csv
          fastcsv
            .write(jsonData, { headers: true })
            .on("finish", function() {
              console.log("CSV fue creado con éxito usando datos del servidor");
            })
            .pipe(ws);

          // Terminar conexión con el servidor
          client.end();
        });

        resolve("success!");
      });
    },
    changeDisableVariable(event) {
      if (this.selectVariable !== " " || this.selectVariable !== null)
        this.isDisabledAbrir = false;
      else this.isDisabledAbrir = true;
      this.enableButton();
      console.log(this.selectVariable);
    },
    changeDisableTiempo(event) {
      if (this.selectTiempo !== " " || this.selectTiempo !== null)
        this.isDisabledTiempo = false;
      else this.isDisabledTiempo = true;
      this.enableButton();
      console.log(this.selectTiempo);
    },
    enableButton() {
      if (!this.isDisabledAbrir && !this.isDisabledTiempo)
        this.isDisabledButton = false;
      else this.isDisabledButton = true;
    },

    formClick: function(event) {
      // on a click on the button with id 'one'
      const btn = this.$refs.changeForm;
      btn.click(); // trigger the click on second, and go on
    },
    changeForm: function(event) {
      var input = event.target;

      this.path = input.files[0].path;
      console.log(this.path);
      input.value = "";
    }
  }
};
</script>


<style scoped>
.titulo1 {
  font-size: 20px;
}
</style>

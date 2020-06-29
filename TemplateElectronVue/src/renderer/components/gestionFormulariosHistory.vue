<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center" style="font-weight: bolder; font-family: Nunito;">Gestión de formularios</h1>
        <br>
        <b-container class="text-center" fluid>
            <b-row>
                <b-col class="titulo1">
                    <div></div>
                    <v-text-field
                        v-model="text.TipoFormulario"
                        label="Tipo de formulario"
                        outline
                        disabled=True 
                        class="mitad"
                    ></v-text-field>

                    <br>
                    <!-- <v-btn text large color="yellow" type="button" href='ms-word:ofv|u|file:./CHOL.docx' >Abrir formulario</v-btn> -->
                    <v-btn text large color="yellow" type="button" @click="abrirFormulario">Abrir formulario</v-btn>
                </b-col>
   
            </b-row>
        </b-container>
    </div>
</template>
<script>
export default {
  name: "HemodialisisHistory",
  props: {
    text: {
      //Suejto a cambio
      required: true
    }
  },
  data() {
    return {
      paciente: {
        nombre: "",
        apellido: ""
      }
    };
  },
  mounted() {},
  methods: {
    abrirFormulario() {
      console.log("Abriendo " + this.text.Path);
      const { shell } = require("electron");
      // Obtener path del formulario e ingresarlo como parámetro
      shell.openItem(process.cwd() + this.text.Path);
    }
  }
};
</script>
<style>
.titulo1 {
  font-size: 20px;
}
</style>
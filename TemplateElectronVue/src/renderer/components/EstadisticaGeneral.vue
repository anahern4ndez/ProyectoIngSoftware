<template lang="">
	<div onload="obtenerNombre">
        <b-container class="containerMenu">

            <!-- FILA 1, FOTOS Y TÍTULO-->
            <b-row align-h="around" align-v="center">

                <b-col order="1" cols="1">
                    <img src="src\temp\prfl.jpeg" alt="" width="120" height="120">
                </b-col>

                <b-col order="1" cols="6">
                    <h2>BIENVENIDO</h2>
                    <h4 id="nombre" type="text" v-model="name">{{name}}</h4>
                </b-col>

                <b-col order="1" cols="3" class="pb-4">
                    <img src="../assets/mariposaFundanier.png" alt="" width="240" height="240">
                </b-col>

            </b-row>

            <!-- FILA 2, SET DE BOTONES-->
            <b-row align-h="around" align-v="center" class="pb-2">
                <b-col order="1" cols="9">
                    <template>
                    <div>
                        <v-btn outline color="#303841" v-on:click="gestionarPaciente">Gestionar Paciente</v-btn>
                        <v-btn outline color="#303841" v-on:click="darConsulta">Generar Reporte</v-btn>
                        <v-btn outline color="#303841">Informes Estadísticos</v-btn>
                        <v-btn outline color="#303841" v-on:click="datosGenerales">Datos Generales</v-btn>
                    </div>
                </template>
                </b-col>
            </b-row>
        </b-container>
	</div>
</template>


<script>
// import { serverBus } from '../main';
import { store } from "../main";
var fecha = new Date();

export default {

  data: () => ({
    id: "",
    name: "",
    switch1: false,
    colors: ["#FF9D14", "#BF760F", "#804F0A", "#402705", "#E68E12"]
  }),

  watch: {
      switch1(newValue){
        //called whenever switch1 changes
        this.vistaGeneral(newValue);
      }
    },

  computed: {
  },

  methods: {

    },

};
</script>


<style>

</style>

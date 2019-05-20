<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Datos Generales</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col>
            <label class="text-center"><b>Peso:</b></label>
            <input id="peso" type="text" v-model="peso" class="form-control" placeholder="KG">
            <label class="text-center"><b>Talla:</b></label>
            <input id="talla" type="text" v-model="talla" class="form-control" placeholder="CMS">
            <label class="text-center"><b>P/A:</b></label>
            <input id="pa" type="text" v-model="pa" class="form-control" placeholder="">
          </b-col>
          <b-col>
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil1" type="text" v-model="Percentil1" class="form-control" placeholder="Percentil">
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil2" type="text" v-model="Percentil2" class="form-control" placeholder="Percentil">
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil3" type="text" v-model="Percentil3" class="form-control" placeholder="Percentil">
          </b-col>
        </b-row>
        <label class="text-center"><b>Telefono</b></label>
          <input id="telefono" type="text" v-model="telefono" class="form-control" placeholder="telefono">
      </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
          <b-col>
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="agregar">Agregar</button>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    
  },
  data() {
    return {
    };
  },
  methods:{
    eliminar(){
      
    }
  }
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>
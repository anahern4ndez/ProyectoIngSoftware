<template>
    <div class="grey--text text--darken-2">
        <h1 class="text-center">Page Two Component</h1>
        <div id="Tabla">
          <table class="table table-responsive">
              <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                     <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>[email protected]</td>
                  </tr>
                  <tr>
                      <td>Smith</td>
                      <td>Thomas</td>
                      <td>[email protected]</td>
                  </tr>
                  <tr>
                      <td>Merry</td>
                      <td>Jim</td>
                      <td>[email protected]</td>
                  </tr>
                  </tbody>
          </table>
        </div>
        
        <form class="col-4">
          <div class="form-group">
            <label for="nameInput">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input id="exampleInputEmail1" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div>
          <b-form-select v-model="selected" class="mb-3">
            <option :value="null">Seleccione el tipo de usuario</option>
            <option value="Doctor">Doctor</option>
            <option value="Administrador">Administrador</option>
            <option value="Secretaria">Secretaria</option>
            <option value="Visitante">Visitante</option>
            <option value="Asistente">Asistente</option>
          </b-form-select>
          </div>
          <div id="btns" class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Left</button>
            <button type="button" class="btn btn-secondary">Middle</button>
            <button type="button" class="btn btn-secondary">Right</button>
          </div>
        </form>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        picked: ''
      }
    }
  }
</script>
<script>
  export default {
    data() {
      return {
        selected: null
      }
    }
  }
</script>
<style>
div#Tabla{
  float: right;
  align-items: center;
}
</style>

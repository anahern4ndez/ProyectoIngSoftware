<template>
    <div class="grey--text text--darken-2">
        <h1 class="text-center">Page Two Component</h1>
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
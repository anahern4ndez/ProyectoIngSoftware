<template>
    <div>
        <h1 class="accent--text">Page One Component</h1>
    </div>
</template>

<script>
export default {
    mounted () {
        this.$http.get('http://localhost:8000/users').then((response) => {
            console.log(response.data);
        });
    }
}
</script>


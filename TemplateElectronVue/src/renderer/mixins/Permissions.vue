<script>
  export default {
    methods: {
      $can(permissionName) {
        if (!permissionName) return true;
        const permission = this.$store.state.user.permissions.filter(p => p.name == permissionName)[0];
        if (!permission) return false;
        return true;
      },
    },
  };
</script>
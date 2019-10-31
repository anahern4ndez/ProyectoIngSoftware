<script>
  export default {
    methods: {
      $can(permissionName) {
        // return Permissions.indexOf(permissionName) !== -1;
        if (!permissionName) return false;

      },
    },
  };
</script>
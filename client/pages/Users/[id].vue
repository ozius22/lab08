<template>
    <div>
      <p class="font-bold">{{ data.name }}</p>
      <p>user number {{ data.id }}</p>
      <p>{{ data.email }}</p>
      <p>{{ data.course }}</p>
      <p>{{ data.is_active ? 'Currently Active' : 'Not Active' }}</p>
    </div>
  </template>
  
<script>
  definePageMeta({
        layout: 'users'
    })

  export default {
    data() {
      return {
        data: {},
      };
    },
    async mounted() {
        const { id } = this.$route.params;
        const response = await fetch(`http://127.0.0.1:8000/api/users/${id}`);
        const responseData = await response.json();
        this.data = responseData;
    }
  };
</script>
  
<style scoped>

</style>
  
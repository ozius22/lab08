<template>
    <div class="header">
      <h2>Lab 06/09</h2>
      <p id="users">Users</p>
    </div>
  
    <div>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Active</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="u in data" :key="u.id">
            <td>{{ u.name }}</td>
            <td>{{ u.course }}</td>
            <td>
              <span :class="{'active': u.is_active, 'inactive': !u.is_active}">
                {{ u.is_active ? '✔' : '✘' }}
              </span>
            </td>
            <td>
              <button id="link">
                <NuxtLink :to="`/Users/${u.id}`" id="link">View</NuxtLink>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

<script>
export default {
  data() {
    return {
      data: [],
    };
  },
  async mounted() {
        const response = await fetch('http://127.0.0.1:8000/api/users');
        const responseData = await response.json();
        this.data = responseData.data;
      }
  }
</script>

<style scoped>
#link {
  padding: 8px 16px;
  background-color: #4CAF50; 
  border: none;
  color: white;
  cursor: pointer;
  text-decoration: none;
}

template {
  font-family: sans-serif;
}

#users {
  font-size: x-large;
  margin-top: -5px;
}
.header {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;  
}

table {
  font-size: large;
  border-collapse: collapse;
  width: 100%;
  border: 40px solid white;
  border-top: 20px solid white;
  border-bottom: 20px solid white;
}

th, td {
  padding: 16px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

.active {
  color: green;
}

.inactive {
  color: red;
}
</style>
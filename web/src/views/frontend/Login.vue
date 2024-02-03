<template>
  <div>
    <input v-model="email" type="text" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Password" />
    <button @click="login">Login</button>
    <RouterLink to="/auth/register">Sign up</RouterLink>
  </div>
</template>

<script>
import { RouterLink } from "vue-router";
import fetchData from "../../services/fetchData.js";

export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    async login() {
      try {
        const response = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/auth/login",
          {
            email: this.email,
            password: this.password,
          }
        );
        const token = response.access_token;
        localStorage.setItem("token", token);
        this.$router.push({ name: "home_page" });
      } catch (error) {
        console.error("Error logging in:", error);
      }
    },
  },
  components: { RouterLink },
};
</script>

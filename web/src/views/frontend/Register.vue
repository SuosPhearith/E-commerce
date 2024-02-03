<template>
  <div>
    <input v-model="name" type="text" placeholder="Name" />
    <input v-model="email" type="email" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Password" />
    <input
      v-model="passwordConfirmation"
      type="password"
      placeholder="Confirm Password"
    />
    <button @click="register">Register</button>
  </div>
</template>

<script>
import fetchData from "../../services/fetchData.js";

export default {
  data() {
    return {
      name: "",
      email: "",
      password: "",
      passwordConfirmation: "",
    };
  },
  methods: {
    async register() {
      try {
        const userData = {
          name: this.name,
          email: this.email,
          password: this.password,
          c_password: this.passwordConfirmation,
        };

        const response = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/auth/register",
          userData
        );

        this.$router.push({ name: "login_page" });

        // Optionally, you can redirect the user to another page upon successful registration
      } catch (error) {
        console.error("Error registering user:", error);
      }
    },
  },
};
</script>

<template>
  <div class="row">
    <div class="col-md-4 pe-md-0">
      <div class="auth-side-wrapper"></div>
    </div>
    <div class="col-md-8 ps-md-0">
      <div class="auth-form-wrapper px-4 py-5">
        <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
        <h5 class="text-muted fw-normal mb-4">
          Welcome back! Log in to your account.
        </h5>
        <form class="forms-sample" @submit.prevent="login">
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email address</label>
            <input
              v-model="email"
              type="email"
              class="form-control"
              id="userEmail"
              placeholder="Email"
            />
          </div>
          <div class="mb-3">
            <label for="userPassword" class="form-label">Password</label>
            <input
              v-model="password"
              type="password"
              class="form-control"
              id="userPassword"
              autocomplete="current-password"
              placeholder="Password"
            />
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

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
        const response = await axios.post(
          "http://127.0.0.1:8000/api/v2/auth/login",
          {
            email: this.email,
            password: this.password,
          },
          {
            withCredentials: true, // Include credentials (cookies) with the request
            headers: {
              Accept: "application/json",
              "Content-Type": "application/json",
            },
          }
        );

        console.log(response.data); // Handle successful login response
      } catch (error) {
        console.error("Login failed:", error); // Handle login error
      }
    },
  },
};
</script>

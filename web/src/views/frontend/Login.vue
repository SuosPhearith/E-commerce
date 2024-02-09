<template>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-start justify-content-center">
        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-10 mx-auto">
            <div class="card">
              <div class="row">
                <div class="col-md-6 pe-md-0">
                  <div class="auth-side-wrapper"></div>
                </div>
                <div class="col-md-6 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">FURNITURY</a>
                    <h5 class="text-muted fw-normal mb-4">
                      Welcome Furnitury store.
                    </h5>
                    <form @submit.prevent="login()">
                      <div class="mb-3">
                        <label for="userEmail" class="form-label"
                          >Email address</label
                        >
                        <input
                          v-model="email"
                          type="email"
                          class="form-control"
                          id="userEmail"
                          placeholder="Email"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label"
                          >Password</label
                        >
                        <input
                          v-model="password"
                          type="password"
                          class="form-control"
                          id="userPassword"
                          autocomplete="current-password"
                          placeholder="Password"
                        />
                      </div>
                      <div>
                        <button
                          type="submit"
                          class="btn btn-primary me-2 mb-2 mb-md-0 text-white"
                        >
                          Login
                        </button>
                        <button
                          type="button"
                          class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0"
                        >
                          <RiGoogleFill style="width: 22px" />
                          Login with Google
                        </button>
                      </div>
                      <router-link
                        to="/auth/register"
                        class="d-block mt-3 text-muted"
                        >Not a user? Register</router-link
                      >
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { RouterLink } from "vue-router";
import { RiGoogleFill } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
import { message } from "ant-design-vue";

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
        message.error("Invalid credetail!");
        console.error("Error logging in:", error);
      }
    },
  },
  components: { RouterLink, RiGoogleFill },
};
</script>

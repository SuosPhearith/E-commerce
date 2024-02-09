<!-- <template>
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
</template> -->

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
                    <form class="forms-sample">
                      <div class="mb-3">
                        <label for="fullname" class="form-label"
                          >FullName</label
                        >
                        <input
                          v-model="name"
                          type="text"
                          class="form-control"
                          id="fullname"
                          placeholder="FullName"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
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
                          placeholder="Password"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="confirmPassword" class="form-label"
                          >Confirm Password</label
                        >
                        <input
                          v-model="passwordConfirmation"
                          type="password"
                          class="form-control"
                          id="confirmPassword"
                          placeholder="Password"
                        />
                      </div>
                      <div>
                        <a
                          @click="register()"
                          class="btn btn-primary text-white me-2 mb-2 mb-md-0"
                          >Sign up</a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0"
                        >
                          <RiGoogleFill style="width: 22px" />
                          Sign up with google
                        </button>
                      </div>
                      <router-link
                        to="/auth/login"
                        class="d-block mt-3 text-muted"
                        >Already a user? Login</router-link
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
import fetchData from "../../services/fetchData.js";
import { RiGoogleFill } from "vue-remix-icons";
import { message } from "ant-design-vue";

export default {
  components: {
    RiGoogleFill,
  },
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
        message.success("Create successfully!");
        this.$router.push({ name: "login_page" });

        // Optionally, you can redirect the user to another page upon successful registration
      } catch (error) {
        message.error("Please input all fields!");
        console.error("Error registering user:", error);
      }
    },
  },
};
</script>

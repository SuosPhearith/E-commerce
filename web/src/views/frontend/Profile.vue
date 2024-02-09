<template>
  <div>
    <div class="my-breadcrumb my-breadcrumb-image">
      <h2 class="my-breadcrumb-title">Profile</h2>
      <div class="my-breadcrumb-item">
        <RouterLink to="/en/home">Home</RouterLink
        ><RiArrowRightSLine style="width: 15px" />
        <a href="">Profile</a>
      </div>
    </div>
    <div
      v-if="me"
      class="row d-flex justify-content-center align-items-center my-5"
    >
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-center">
              <img
                src="../../assets/img/profile.jpg"
                alt="abc"
                style="width: 100px; height: 100px; border-radius: 50%"
              />
            </div>
            <form @submit.prevent="updateMe()" class="forms-sample">
              <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label"
                  >Name</label
                >
                <input
                  v-model="name"
                  type="text"
                  class="form-control"
                  id="exampleInputUsername1"
                  autocomplete="off"
                  placeholder="Name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  v-model="email"
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  placeholder="Email"
                  readonly
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Current Password</label
                >
                <input
                  v-model="password"
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  autocomplete="off"
                  placeholder="Current Password"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputNewPassword1" class="form-label"
                  >New Password</label
                >
                <input
                  v-model="new_password"
                  type="password"
                  class="form-control"
                  id="exampleInputNewPassword1"
                  autocomplete="off"
                  placeholder="New Password"
                />
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary me-2">
                  Save Changes
                </button>
                <button @click="logout()" class="btn btn-outline-success me-2">
                  Logout
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { RiArrowRightSLine, RiDeleteBinFill } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
import { message } from "ant-design-vue";
export default {
  components: {
    RiArrowRightSLine,
    RiDeleteBinFill,
  },
  data() {
    return {
      me: null,
      email: "",
      name: "",
      password: "",
      new_password: "",
    };
  },
  mounted() {
    this.getMe();
  },
  methods: {
    async getMe() {
      try {
        this.me = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/auth/me",
          null
        );
        this.name = this.me.name;
        this.email = this.me.email;
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async updateMe() {
      try {
        await fetchData("PATCH", "http://127.0.0.1:8000/api/v1/auth/updateMe", {
          name: this.name,
          password: this.password,
          new_password: this.password,
        });
        this.getMe();
        this.password = "";
        this.new_password = "";
        message.success("Updated successfully!");
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    logout() {
      localStorage.clear();
      this.$router.push({ name: "login_page" });
    },
  },
};
</script>

<template>
  <div class="mb-5">
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">My Pruduct</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">My Pruduct</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card mt-5">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in data">
                  <th>{{ index + 1 }}</th>
                  <td>
                    <img
                      :src="`http://127.0.0.1:8000/${item.image}`"
                      alt="iamge"
                      style="
                        height: 70px;
                        width: 100px;
                        object-fit: cover;
                        border-radius: 0%;
                      "
                    />
                  </td>
                  <td>{{ item.name }}</td>
                  <td>{{ item.price }}$</td>
                  <td>{{ item.count }}</td>
                  <td>
                    <router-link
                      :to="`/en/review/${item.id}`"
                      type="button"
                      class="btn btn-outline-primary btn-xs ms-2"
                    >
                      Review
                    </router-link>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { RiArrowRightSLine } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
export default {
  components: {
    RiArrowRightSLine,
  },
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    this.getOrderByUser();
  },
  methods: {
    async getOrderByUser() {
      try {
        // Access $route.params.id using this.$route
        this.data = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/order/product",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

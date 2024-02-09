<template>
  <div class="mb-5">
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Cart</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Cart</a>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in data" :key="item.id">
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
                  <td>
                    <button
                      @click="removeCart(item.cart_id)"
                      type="button"
                      class="btn btn-outline-danger btn-icon btn-xs"
                    >
                      <RiDeleteBinFill />
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex align-items-center justify-content-end">
              <div
                class="mt-4 me-5 d-flex flex-column align-items-center justify-content-center"
              >
                <h3>Total Price: {{ totalPrice }}$</h3>
                <router-link
                  to="/en/order"
                  type="button"
                  class="btn btn-outline-secondary btn-lg mt-3"
                  style="width: 200px"
                >
                  Checkout
                </router-link>
              </div>
            </div>
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
      data: [],
    };
  },
  computed: {
    totalPrice() {
      const totalPrice = this.data.reduce(
        (total, item) => total + parseFloat(item.price),
        0
      );
      return totalPrice.toFixed(2);
    },
  },
  mounted() {
    this.getCart();
  },
  methods: {
    async getCart() {
      try {
        // Access $route.params.id using this.$route
        this.data = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/cart/cart",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async removeCart(id) {
      try {
        // Access $route.params.id using this.$route
        await fetchData(
          "DELETE",
          `http://127.0.0.1:8000/api/v1/cart/${id}`,
          null
        );
        this.getCart();
        message.success("Removed successfully!");
      } catch (error) {
        console.error("Error fetching data:", error);
        message.success("Removed fail!");
      }
    },
  },
};
</script>

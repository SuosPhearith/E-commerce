<template>
  <div>
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
                <tr v-for="(item, index) in data">
                  <th>{{ index + 1 }}</th>
                  <td>
                    <img
                      :src="`http://127.0.0.1:8000/${item.image}`"
                      alt="iamge"
                      style="height: 70px; width: 100px; object-fit: cover"
                    />
                  </td>
                  <td>{{ item.name }}</td>
                  <td>{{ item.price }}$</td>
                  <td>
                    <button
                      @click="removeCart(item.cart_id)"
                      type="button"
                      class="btn btn-danger btn-icon btn-xs"
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
                <button
                  type="button"
                  class="btn btn-outline-secondary btn-lg mt-3"
                  style="width: 200px"
                >
                  Checkout
                </button>
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
      // Use reduce to sum item.price values
      const totalPrice = this.data.reduce(
        (total, item) => total + parseFloat(item.price),
        0
      );

      // Use toFixed to trim to two decimal places and convert to string
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
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

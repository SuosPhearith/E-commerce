<template>
  <div>
    <button @click="addToCart()" class="btn btn-primary me-3">
      Add to Cart
    </button>
    <button @click="addToWishlist()" class="btn btn-primary">
      Add to Wishlist
    </button>
    {{ data }}
  </div>
</template>

<script>
import fetchData from "../../services/fetchData.js";

export default {
  data() {
    return {
      data: null,
    };
  },
  mounted() {
    this.getProductById();
  },
  methods: {
    async getProductById() {
      try {
        // Access $route.params.id using this.$route
        this.data = await fetchData(
          "GET",
          `http://127.0.0.1:8000/api/v1/product/${this.$route.params.id}`,
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async addToCart() {
      try {
        // Access $route.params.id using this.$route
        await fetchData("POST", "http://127.0.0.1:8000/api/v1/cart", {
          product_id: this.$route.params.id,
        });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async addToWishlist() {
      try {
        // Access $route.params.id using this.$route
        await fetchData("POST", "http://127.0.0.1:8000/api/v1/wishlist", {
          product_id: this.$route.params.id,
        });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

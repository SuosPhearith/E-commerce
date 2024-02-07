<template>
  <div class="mb-5">
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Wishlist</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Wishlist</a>
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
                      @click="removeWishlist(item.wishlist_id)"
                      type="button"
                      class="btn btn-outline-danger btn-icon btn-xs"
                    >
                      <RiDeleteBinFill />
                    </button>
                    <button
                      @click="addToCart(item.product_id, item.wishlist_id)"
                      type="button"
                      class="btn btn-outline-primary btn-icon btn-xs ms-2"
                    >
                      <RiShoppingCartLine />
                    </button>
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
import {
  RiArrowRightSLine,
  RiDeleteBinFill,
  RiShoppingCartLine,
} from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
export default {
  components: {
    RiArrowRightSLine,
    RiDeleteBinFill,
    RiShoppingCartLine,
  },
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    this.getWishlist();
  },
  methods: {
    async getWishlist() {
      try {
        // Access $route.params.id using this.$route
        this.data = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/wishlist/wishlist",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async removeWishlist(id) {
      try {
        // Access $route.params.id using this.$route
        await fetchData(
          "DELETE",
          `http://127.0.0.1:8000/api/v1/wishlist/${id}`,
          null
        );
        this.getWishlist();
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async addToCart(productId, wishlistId) {
      try {
        // Access $route.params.id using this.$route
        await fetchData("POST", "http://127.0.0.1:8000/api/v1/cart", {
          product_id: productId,
        });
        await fetchData(
          "DELETE",
          `http://127.0.0.1:8000/api/v1/wishlist/${wishlistId}`,
          null
        );

        this.getWishlist();
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

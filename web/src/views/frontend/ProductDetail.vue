<template>
  <div class="card my-5 py-5">
    <div class="kheang-container">
      <!-- Left Container -->
      <div class="left-container">
        <div class="left-img">
          <img
            v-for="item in data.images"
            :key="item.id"
            :src="`http://127.0.0.1:8000/${item.image}`"
            class="blockimg"
            @click="changeMainImage(item.image)"
            alt=""
          />
        </div>
        <div class="big-img p-5">
          <img
            :src="`http://127.0.0.1:8000/${data.image}`"
            style="width: 100%; height: 100%"
            alt=""
          />
        </div>
      </div>
      <!-- Right Container -->
      <div class="right-container">
        <div class="text-secondary fs-6">GA-75589</div>
        <div class="fs-2 fw-bold">{{ data.name }}</div>
        <div style="border: 1px solid goldenrod; width: 90%" class="mt-2"></div>
        <div class="fs-2 fw-bold mt-3 text-success">${{ data.price }}</div>
        <div class="fs-6 mt-4 text-primary">DESCRIPTION</div>
        <div style="border: 1px solid goldenrod; width: 90%" class="mt-2"></div>
        <div class="mt-2 fs-6 text-secondary">
          <p style="width: 90%">
            {{ data.description }}
          </p>
        </div>
        <div class="fs-6 mt-4 text-primary">DETAIL</div>
        <div style="border: 1px solid goldenrod; width: 90%" class="mt-2"></div>
        <div v-html="data.product_detail"></div>
        <!-- <div class="mt-2 fs-6 detail">
          <div class="row mt-2">
            <div class="col fw-bold">Material</div>
            <div class="col-9">Fabric, foam, oak wood</div>
          </div>
          <div class="row mt-2">
            <div class="col fw-bold">Size</div>
            <div class="col-9">80W 100H</div>
          </div>
          <div class="row mt-2">
            <div class="col fw-bold">Shippng</div>
            <div class="col-9">Available to Asia & Oceania</div>
          </div>
        </div> -->
        <div class="btnCW">
          <div class="btnwrapper">
            <button @click="addToCart()" class="btn1 btn btn-outline-primary">
              Add to Cart
            </button>
          </div>
          <div class="btnwrapper">
            <button
              @click="addToWishlist()"
              class="btn2 btn btn-outline-success"
            >
              Add to Wishlist
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
.kheang-container {
  padding-left: 80px;
  width: 100%;
  height: auto;
  display: flex;
  justify-content: space-evenly;
}
.left-container {
  width: 50%;
  height: 100%;
  display: flex;
}
.left-img {
  display: flex;
  width: 15%;
  justify-content: center;
  flex-direction: column;
}
.blockimg {
  width: 100%;
  height: 20%;
  margin-top: 15px;
}
.big-img {
  display: flex;
  flex-direction: column;
  width: 80%;
  height: 80%;
  margin-top: 15px;
  justify-content: space-between;
  align-items: center;
}

.right-container {
  width: 50%;
  margin-top: 15px;
  display: flex;
  justify-content: start;
  flex-direction: column;
  padding-left: 2%;
}
.detail {
  display: flex;
  width: 90%;
  flex-direction: column;
}
.btnCW {
  display: flex;
  justify-content: space-between;
  width: 90%;
}
.btnwrapper {
  display: flex;
  justify-content: center;

  width: 60%;
  border-radius: 90px;
  margin-top: 25px;
  margin-bottom: 25px;
}
.btn1 {
  display: flex;
  justify-content: center;
  width: 100%;
  border-radius: 90px;
}
.btn2 {
  display: flex;
  justify-content: center;
  width: 70%;
  border-radius: 90px;
}
/* max-width: 575.98px */
@media (max-width: 900px) {
  .kheang-container {
    display: flex;
    align-items: center;
    width: 100%;
    flex-direction: column;
  }
  .left-container {
    width: 100%;
    height: 100%;
    display: flex;
  }
  .right-container {
    width: auto;
  }
}
</style>
<script>
import fetchData from "../../services/fetchData.js";

export default {
  data() {
    return {
      data: [],
      reviews: [],
    };
  },
  mounted() {
    this.getProductById();
    this.getProductReview();
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
    async getProductReview() {
      try {
        // Access $route.params.id using this.$route
        this.reviews = await fetchData(
          "GET",
          `http://127.0.0.1:8000/api/v1/review/product/${this.$route.params.id}`,
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
    changeMainImage(image) {
      this.data.image = image;
    },
  },
};
</script>

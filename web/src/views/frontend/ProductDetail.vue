<template>
  <div>
    <div v-if="!data && !reviews">Loading...</div>
    <div v-else>
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
            <div class="text-secondary fs-6">{{ data.sku }}</div>
            <h4 class="mb-1 d-flex text-danger">
              {{ data.average_review }} <RiStarSFill style="width: 18px" />
            </h4>
            <div class="fs-2 fw-bold">{{ data.name }}</div>
            <div
              style="border: 1px solid goldenrod; width: 90%"
              class="mt-2"
            ></div>
            <div class="fs-2 fw-bold mt-3 text-success">${{ data.price }}</div>
            <div class="fs-6 mt-4 text-primary">DESCRIPTION</div>
            <div
              style="border: 1px solid goldenrod; width: 90%"
              class="mt-2"
            ></div>
            <div class="mt-2 fs-6 text-secondary">
              <p style="width: 90%">
                {{ data.description }}
              </p>
            </div>
            <div class="fs-6 mt-4 text-primary">DETAIL</div>
            <div
              style="border: 1px solid goldenrod; width: 90%"
              class="mt-2"
            ></div>
            <div v-html="data.product_detail"></div>
            <div class="btnCW">
              <div class="btnwrapper">
                <button
                  @click="addToCart()"
                  class="btn1 btn btn-outline-primary"
                >
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
      <div
        class="mb-5 pb-5 d-flex justify-content-center flex-column align-items-center"
      >
        <h2 class="text-center mb-5 my-4">Reviews</h2>
        <div class="container row row-cols-1 row-cols-md-2 g-4">
          <div v-for="review in reviews.data" class="col">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="mb-1">
                  <span class="text-secondary"></span>
                  {{ review.user.name }}
                </h3>
                <h4 class="mb-1 d-flex justify-content-center text-danger">
                  {{ review.rating }} <RiStarSFill style="width: 18px" />
                </h4>
                <p class="card-text">
                  {{ review.description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="mb-4 d-flex justify-content-center">
        <ul class="pagination pagination-rounded mb-0 justify-content-end">
          <li class="page-item">
            <button
              class="page-link"
              @click="changePage(reviews.first_page_url)"
            >
              Previous
            </button>
          </li>
          <li
            v-for="(item, index) in reviews.links"
            :key="index"
            :class="{ 'page-item': true, active: item.active }"
          >
            <button
              v-if="index !== 0 && index !== reviews.links.length - 1"
              @click="changePage(item.url)"
              class="page-link"
            >
              {{ index }}
            </button>
          </li>

          <li class="page-item">
            <button
              class="page-link"
              @click="changePage(reviews.next_page_url)"
            >
              Next
            </button>
          </li>
        </ul>
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
import { RiStarSFill } from "vue-remix-icons";
import { message } from "ant-design-vue";

export default {
  components: {
    RiStarSFill,
  },
  data() {
    return {
      data: [],
      reviews: [],
      reviewUrl: `http://127.0.0.1:8000/api/v1/review/product/${this.$route.params.id}`,
    };
  },
  mounted() {
    this.getProductReview();
    this.getProductById();
  },
  methods: {
    async getProductById() {
      try {
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
        this.reviews = await fetchData("GET", this.reviewUrl, null);
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
        message.success("Added");
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
        message.success("Added");
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    changeMainImage(image) {
      this.data.image = image;
    },
    async changePage(url) {
      this.reviewUrl = url;
      await this.getProductReview();
    },
  },
};
</script>

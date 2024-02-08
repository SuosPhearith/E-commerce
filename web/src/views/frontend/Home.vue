<template>
  <div class="page-content">
    <div class="container-fluid text-center">
      <!-- bg1 -->
      <div class="row phearith-banner" v-if="promotionProducts.length > 0">
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-end"
          style="height: 100%"
        >
          <div
            class="d-flex flex-column justify-content-center align-items-center"
          >
            <h1 class="phearith-banner-title">
              {{ promotionProducts[0].name }}
            </h1>
            <h4 class="my-3 phearith-bannner-description">
              {{ promotionProducts[0].description }}
            </h4>
            <router-link
              :to="`/en/product/${promotionProducts[0].id}`"
              class="btn btn-outline-primary"
              style="width: 150px"
              >Shop Now</router-link
            >
          </div>
        </div>
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-center"
        >
          <div style="max-height: 500px;" class="my-banner">
            <img
              style="height: 100%; object-fit: cover"
              :src="`http://127.0.0.1:8000/${promotionProducts[0].image}`"
              class="card-img"
              alt="..."
          />
          </div>
        </div>
      </div>

      <!-- bg2 -->
      <div class="container my-5">
        <h2
          class="text-center mb-3 mt-4"
          style="text-transform: uppercase; color: goldenrod"
        >
          Choose a promotion product
        </h2>
        <p class="text-muted text-center mb-4 pb-2">
          Our product offers a comprehensive range of features and
          functionalities tailored to meet the diverse needs of modern
          businesses.
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div v-for="item in promotionProducts" :key="item.id" class="col">
            <div class="card">
              <div class="" style="height: 300px;">
                <img
                style="height: 100%; object-fit: contain;"
                  :src="`http://127.0.0.1:8000/${item.image}`"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <h5 class="card-title" style="font-size: 18px">
                  {{ item.name }}
                </h5>
                <p class="card-text text-secondary">{{ item.description }}</p>
                <p
                  class="card-text text-danger d-flex align-items-center justify-content-center"
                >
                  {{ item.average_review }}<RiStarSFill style="width: 16px" />
                </p>
                <p class="card-text text-success">{{ item.price }}$</p>
                <div class="mt-4 d-flex justify-content-center">
                  <router-link
                    :to="`/en/product/${item.id}`"
                    class="btn btn-outline-primary"
                    >View Detail</router-link
                  >

                  <button
                    @click="addToWishlist(item.id)"
                    class="btn btn-outline-danger btn-icon ms-1"
                  >
                    <RiHeart3Line />
                  </button>
                  <button
                    @click="addToCart(item.id)"
                    class="btn btn-outline-success btn-icon ms-1"
                  >
                    <RiShoppingCartLine />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- bg3 -->

      <div class="container my-5">
        <h2
          class="text-center mb-3 mt-4"
          style="text-transform: uppercase; color: goldenrod"
        >
          Choose a product
        </h2>
        <p class="text-muted text-center mb-4 pb-2">
          Our product offers a comprehensive range of features and
          functionalities tailored to meet the diverse needs of modern
          businesses.
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div v-for="item in fetchedData.data" :key="item.id" class="col">
            <div class="card">
              <div class="" style="height: 300px;">
                <img
                style="height: 100%; object-fit: contain;"
                  :src="`http://127.0.0.1:8000/${item.image}`"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <h5 class="card-title" style="font-size: 18px">
                  {{ item.name }}
                </h5>
                <p class="card-text text-secondary">{{ item.description }}</p>
                <p
                  class="card-text text-danger d-flex align-items-center justify-content-center"
                >
                  {{ item.average_review }}<RiStarSFill style="width: 16px" />
                </p>
                <p class="card-text text-success">{{ item.price }}$</p>
                <div class="mt-4 d-flex justify-content-center">
                  <router-link
                    :to="`/en/product/${item.id}`"
                    class="btn btn-outline-primary"
                    >View Detail</router-link
                  >

                  <button
                    @click="addToWishlist(item.id)"
                    class="btn btn-outline-danger btn-icon ms-1"
                  >
                    <RiHeart3Line />
                  </button>
                  <button
                    @click="addToCart(item.id)"
                    class="btn btn-outline-success btn-icon ms-1"
                  >
                    <RiShoppingCartLine />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
          <router-link to="/en/shop" class="phearith-see-more"
            >See More</router-link
          >
        </div>
      </div>

      <!-- bg4 -->
      <div class="row phearith-banner" v-if="promotionProducts.length > 1">
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-center"
        >
          <img
            :src="`http://127.0.0.1:8000/${promotionProducts[1].image}`"
            class="card-img"
            alt="..."
          />
        </div>
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-start"
          style="height: 100%"
        >
          <div
            class="d-flex flex-column justify-content-center align-items-center"
          >
            <h1 class="phearith-bannner-title">
              {{ promotionProducts[1].name }}
            </h1>
            <h4 class="my-3 phearith-bannner-description">
              {{ promotionProducts[1].description }}
            </h4>
            <router-link
              :to="`/en/product/${promotionProducts[1].id}`"
              class="btn btn-primary"
              >Shop Now</router-link
            >
          </div>
        </div>
      </div>

      <!-- bg5 -->

      <div class="row my-5">
        <div class="col-md-12">
          <h2
            class="text-center mb-3 mt-4"
            style="text-transform: uppercase; color: goldenrod"
          >
            Discount
          </h2>
          <p class="text-muted text-center mb-4 pb-2">
            Choose the features and functionality your team need today. Easily
            upgrade as your company grows.
          </p>
          <div class="container">
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-center mt-3 mb-4">Discount</h4>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-award text-primary icon-xxl d-block mx-auto my-3"
                    >
                      <circle cx="12" cy="8" r="7"></circle>
                      <polyline
                        points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"
                      ></polyline>
                    </svg>
                    <h1 class="text-center">$20</h1>
                    <p class="text-muted text-center mb-4 fw-light">
                      per product
                    </p>
                    <h5 class="text-primary text-center mb-4">Up to 5 units</h5>
                    <div class="d-grid">
                      <router-link to="/en/shop" class="btn btn-primary mt-4"
                        >Shop Now</router-link
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-center mt-3 mb-4">Discount</h4>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-gift text-success icon-xxl d-block mx-auto my-3"
                    >
                      <polyline points="20 12 20 22 4 22 4 12"></polyline>
                      <rect x="2" y="7" width="20" height="5"></rect>
                      <line x1="12" y1="22" x2="12" y2="7"></line>
                      <path
                        d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"
                      ></path>
                      <path
                        d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"
                      ></path>
                    </svg>
                    <h1 class="text-center">$30</h1>
                    <p class="text-muted text-center mb-4 fw-light">
                      per product
                    </p>
                    <h5 class="text-success text-center mb-4">
                      Up to 10 units
                    </h5>
                    <div class="d-grid">
                      <router-link to="/en/shop" class="btn btn-success mt-4"
                        >Shop Now</router-link
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-center mt-3 mb-4">Discount</h4>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-briefcase text-primary icon-xxl d-block mx-auto my-3"
                    >
                      <rect
                        x="2"
                        y="7"
                        width="20"
                        height="14"
                        rx="2"
                        ry="2"
                      ></rect>
                      <path
                        d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"
                      ></path>
                    </svg>
                    <h1 class="text-center">$50</h1>
                    <p class="text-muted text-center mb-4 fw-light">
                      per product
                    </p>
                    <h5 class="text-primary text-center mb-4">
                      Up to 30 units
                    </h5>
                    <div class="d-grid">
                      <button class="btn btn-primary mt-4">Shop Now</button>
                    </div>
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
import { RiHeart3Line, RiShoppingCartLine, RiStarSFill } from "vue-remix-icons";
import { RouterLink } from "vue-router";
import fetchData from "../../services/fetchData.js";
export default {
  components: {
    RiHeart3Line,
    RiShoppingCartLine,
    RiStarSFill,
  },
  data() {
    return {
      fetchedData: [],
      promotionProducts: [],
      isLoading: false,
      confirmDelete: false,
      deleteItemId: null,
      apiUrl: "http://127.0.0.1:8000/api/v1/product",
    };
  },
  mounted() {
    this.getAllProducts();
    this.getPromotionProducts();
  },
  methods: {
    async getAllProducts() {
      this.isLoading = true;
      try {
        this.fetchedData = await fetchData("GET", `${this.apiUrl}`, null);
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async getPromotionProducts() {
      this.isLoading = true;
      try {
        this.promotionProducts = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/product/promotion",
          null
        );
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async addToCart(productId) {
      try {
        // Access $route.params.id using this.$route
        await fetchData("POST", "http://127.0.0.1:8000/api/v1/cart", {
          product_id: productId,
        });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async addToWishlist(productId) {
      try {
        // Access $route.params.id using this.$route
        await fetchData("POST", "http://127.0.0.1:8000/api/v1/wishlist", {
          product_id: productId,
        });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

<style scoped>
.see-more {
  cursor: pointer;
  font-size: 25px;
}
.see-more:hover {
  color: goldenrod;
}
.phearith-banner {
  height: 600px;
  background-color: #fff9c4;
}
.phearith-see-more {
  width: fit-content;
  font-size: 22px;
  color: goldenrod;
  cursor: pointer;
  border-bottom: 2px solid goldenrod;
}
.phearith-see-more:hover {
  font-size: 22px;
  color: rgb(184, 133, 7);
  cursor: pointer;
  border-bottom: 2px solid rgb(184, 133, 7);
}
/* CSS for screens smaller than 576px (extra small devices) */
@media (max-width: 575.98px) {
  /* Your CSS rules for extra small devices go here */
  .phearith-banner {
    height: 300px;
  }
  .phearith-bannner-description {
    font-size: 16px;
  }
}

/* CSS for screens between 576px and 767.98px (small devices) */
@media (min-width: 576px) and (max-width: 767.98px) {
  /* Your CSS rules for small devices go here */
  .phearith-banner {
    height: 350px;
  }
  .phearith-bannner-description {
    font-size: 16px;
  }
  .phearith-bannner-title {
    font-size: 20px;
  }
}

/* CSS for screens between 768px and 991.98px (medium devices) */
@media (min-width: 768px) and (max-width: 991.98px) {
  /* Your CSS rules for medium devices go here */
  .phearith-banner {
    height: 400px;
  }
  .phearith-bannner-description {
    font-size: 20px;
  }
  .my-banner{
    max-height: 300px !important;
  
  }
}

/* CSS for screens between 992px and 1199.98px (large devices) */
@media (min-width: 992px) and (max-width: 1199.98px) {
  /* Your CSS rules for large devices go here */
  .phearith-banner {
    height: 450px;
  }
}

/* CSS for screens larger than 1200px (extra large devices) */
@media (min-width: 1200px) {
  /* Your CSS rules for extra large devices go here */
}
</style>

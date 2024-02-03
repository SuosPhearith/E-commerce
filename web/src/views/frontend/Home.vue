<template>
  <div class="page-content">
    <div class="container-fluid text-center">
      <!-- bg1 -->
      <div class="row align-items-center tito-home-bg1" v-if="promotionProducts.length > 0">
        <div
          class="col-6 d-flex justify-content-center align-items-center flex-column"
        >
          <div class="tito-home-rocket">{{ promotionProducts[0].name }}</div>
          <button
            type="button"
            class="btn btn-outline-secondary tito-home-btn-shop"
          >
            Shop Now
          </button>
        </div>
        <div class="col-6">
          <img
            class="tito-carousel-img"
            :src="`http://127.0.0.1:8000/${ promotionProducts[0].image }`"
          />
        </div>
      </div>

      <!-- bg2 -->
      <div class="album py-5 bg-body-tertiary">
        <h2 class="mb-1">Promotion</h2>
        <p class="mb-5">Explore our product promotions for unbeatable discounts and exclusive offers. Join us today to enjoy savings and rewards!</p>
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div v-for="item in promotionProducts" class="col">
              <div class="card shadow-sm">
                <img style="object-fit: cover; max-height: 300px;"
                  :src="`http://127.0.0.1:8000/${ item.image }`"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="card-text">
                    <h4>{{ item.name }}</h4>
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-body-secondary">{{item.price}}$</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- bg3 -->
      <div class="album py-5 bg-body-tertiary">
        <h2 class="mb-2">Popular product</h2>
        <p class="mb-5">Our popular product offers top-notch quality and unbeatable value. Join countless satisfied customers and experience excellence today!</p>
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div v-for="item in fetchedData.data" class="col">
              <div class="card shadow-sm">
                <img style="object-fit: cover; max-height: 300px;"
                  :src="`http://127.0.0.1:8000/${ item.image }`"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="card-text">
                    <h4>{{ item.name }}</h4>
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-body-secondary">{{item.price}}$</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <RouterLink to="/en/shop" class="mt-4 see-more">See more</RouterLink>
      </div>

      <!-- bg4 -->
      <div class="row align-items-center tito-home-bg1" v-if="promotionProducts.length > 1">
        <div class="col-6">
          <img class="tito-carousel-img" :src="`http://127.0.0.1:8000/${ promotionProducts[1].image }`" />
        </div>
        <div
          class="col-6 d-flex justify-content-center align-items-center flex-column"
        >
          <div class="tito-home-rocket">{{ promotionProducts[1].name }}</div>
          <button
            type="button"
            class="btn btn-outline-secondary tito-home-btn-shop"
          >
            Shop Now
          </button>
        </div>
      </div>

      <!-- bg5 -->

      <div class="row tito-home-bg5 tito-section-2">
        <div
          class="col-md-12 d-flex flex-column justify-content-center align-items-center"
        >
          <h3 class="tito-end-1">Our Instagram</h3>
          <span class="tito-end-2">Follow our store on Instagram </span>
          <button class="tito-end-3">Follow Us</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { RouterLink } from "vue-router";
import fetchData from "../../services/fetchData.js";
export default{
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
            }
            catch (error) {
                console.error("Error fetching data:", error);
                this.isLoading = false;
            }
        },
        async getPromotionProducts() {
            this.isLoading = true;
            try {
                this.promotionProducts = await fetchData("GET", "http://127.0.0.1:8000/api/v1/product/promotion", null);
                this.isLoading = false;
            }
            catch (error) {
                console.error("Error fetching data:", error);
                this.isLoading = false;
            }
        },
    },
    components: { RouterLink }
}
</script>

<style scoped>
.see-more{
  cursor: pointer;
  font-size: 25px;
}
.see-more:hover{
  color: goldenrod;
}
</style>

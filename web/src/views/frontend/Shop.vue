<template>
  <div>
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Shop</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">shop</a>
        </div>
      </div>
    </div>
    <div
      class="container-fluid pb-3 pt-4 mt-5 phearith-search"
      style="background-color: antiquewhite"
    >
      <div class="container">
        <nav
          class="row navbar navbar-light bg-light w-100"
          style="
            position: static !important;
            background-color: antiquewhite !important;
            border: none;
            box-shadow: none;
          "
        >
          <div class="col-md-8 col-sm-12 mb-3">
            <div class="container d-flex category-scroll">
              <div
                @click="filterByCategory('/')"
                class="p-2 me-2 px-4 d-flex justify-content-center align-items-center category-item-all"
                style="width: fit-content; border-radius: 5px"
              >
                <p>All</p>
              </div>
              <div
                v-for="category in categories.data" :key="category.id"
                @click="filterByCategory(`/?category=${category.id}`)"
                class="p-2 me-2 px-4 d-flex justify-content-center align-items-center category-item"
                style="width: fit-content; border-radius: 5px"
              >
                <p>{{ category.name }}</p>
              </div>
            </div>
          </div>
          <form
            @submit.prevent="handleSearch()"
            class="col-md-4 d-flex ms-auto mb-3"
          >
            <input
              v-model="search"
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>
      </div>
    </div>

    <!-- bg3 -->
    <div class="py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div v-for="item in fetchedData.data" :key="item.id" class="col text-center">
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
        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-center">
          <ul class="pagination pagination-rounded mb-0 justify-content-end">
            <li class="page-item">
              <button
                class="page-link"
                @click="changePage(fetchedData.first_page_url)"
              >
                Previous
              </button>
            </li>
            <li
              v-for="(item, index) in fetchedData.links"
              :key="index"
              :class="{ 'page-item': true, active: item.active }"
            >
              <button
                v-if="index !== 0 && index !== fetchedData.links.length - 1"
                @click="changePage(item.url)"
                class="page-link"
              >
                {{ index }}
              </button>
            </li>

            <li class="page-item">
              <button
                class="page-link"
                @click="changePage(fetchedData.next_page_url)"
              >
                Next
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>
</template>

<script>
import {
  RiHeart3Line,
  RiShoppingCartLine,
  RiArrowRightSLine,
  RiStarSFill,
} from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
import { RouterLink } from "vue-router";
export default {
  components: {
    RouterLink,
    RiShoppingCartLine,
    RiArrowRightSLine,
    RiHeart3Line,
    RiStarSFill,
  },
  data() {
    return {
      search: "",
      fetchedData: [],
      categories: [],
      isLoading: false,
      confirmDelete: false,
      deleteItemId: null,
      apiUrl: "http://127.0.0.1:8000/api/v1",
      productEndPoint: "http://127.0.0.1:8000/api/v1/product",
      categoryEndPoint: "/category",
    };
  },
  mounted() {
    this.getAllProducts();
    this.getAllCategories();
  },
  methods: {
    async getAllProducts() {
      this.isLoading = true;
      try {
        this.fetchedData = await fetchData(
          "GET",
          `${this.productEndPoint}`,
          null
        );
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async handleSearch() {
      this.isLoading = true;
      try {
        this.fetchedData = await fetchData(
          "GET",
          `${this.productEndPoint}?search=${this.search}`,
          null
        );
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async getAllCategories() {
      this.isLoading = true;
      try {
        this.categories = await fetchData(
          "GET",
          `${this.apiUrl}${this.categoryEndPoint}`,
          null
        );
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async filterByCategory(url) {
      this.productEndPoint = "http://127.0.0.1:8000/api/v1/product";
      this.productEndPoint = this.productEndPoint + url;
      await this.getAllProducts();
    },
    async changePage(url) {
      this.productEndPoint = url;
      await this.getAllProducts();
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
.category-item {
  background-color: rgb(213, 198, 110);
  cursor: pointer;
  min-width: 230px;
}
.category-item-all {
  background-color: rgb(213, 198, 110);
  cursor: pointer;
  min-width: 50px;
}
.category-item:hover {
  background-color: gold;
  cursor: pointer;
}

.category-scroll {
  overflow-x: auto;
}
/* CSS for screens smaller than 576px (extra small devices) */
@media (max-width: 575.98px) {
  /* Your CSS rules for extra small devices go here */
  .phearith-search {
    height: 150px;
  }
}

/* CSS for screens between 576px and 767.98px (small devices) */
@media (min-width: 576px) and (max-width: 767.98px) {
  /* Your CSS rules for small devices go here */
  .phearith-search {
    height: 150px;
  }
}

/* CSS for screens between 768px and 991.98px (medium devices) */
@media (min-width: 768px) and (max-width: 991.98px) {
  /* Your CSS rules for medium devices go here */
}

/* CSS for screens between 992px and 1199.98px (large devices) */
@media (min-width: 992px) and (max-width: 1199.98px) {
  /* Your CSS rules for large devices go here */
}

/* CSS for screens larger than 1200px (extra large devices) */
@media (min-width: 1200px) {
  /* Your CSS rules for extra large devices go here */
}
</style>

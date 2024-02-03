<template>
  <div>
    <div class="my-breadcrumb my-breadcrumb-image">
      <h2 class="my-breadcrumb-title">Shop</h2>
      <div class="my-breadcrumb-item">
        <RouterLink to="/en/home">Home</RouterLink><RiArrowRightSLine style="width: 15px" />
        <a href="">shop</a>
      </div>
    </div>
  </div>
  <div class="container py-3 mt-5 d-flex category-scroll">
    <div @click="filterByCategory('/')" class="p-2 me-2 px-4 d-flex justify-content-center align-items-center category-item" style="width: fit-content; border-radius: 5px;">
      <p>All</p>
    </div>
      <div v-for="category in categories.data" @click="filterByCategory(`/?category=${category.id}`)" class="p-2 me-2 px-4 d-flex justify-content-center align-items-center category-item" style="width: fit-content; border-radius: 5px;">
        <p>{{ category.name }}</p>
      </div>
  </div>
  <!-- bg3 -->
  <div class="album py-5 bg-body-tertiary">
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
                      <router-link
                      :to="'/en/product/' + item.id"
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </router-link>
                    </div>
                    <small class="text-body-secondary">{{item.price}}$</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Pagination -->
          <div class="mt-4 d-flex justify-content-center">
              <ul class="pagination mb-0 justify-content-end">
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
</template>

<script>
import { RiArrowRightSLine } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
import { RouterLink } from "vue-router";
export default {
  components: {
    RiArrowRightSLine,
    RouterLink
},
  data() {
    return {
      fetchedData: [],
      categories: [],
      isLoading: false,
      confirmDelete: false,
      deleteItemId: null,
      apiUrl: "http://127.0.0.1:8000/api/v1",
      productEndPoint: 'http://127.0.0.1:8000/api/v1/product',
      categoryEndPoint: '/category',
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
        this.fetchedData = await fetchData("GET", `${this.productEndPoint}`, null);
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async getAllCategories() {
      this.isLoading = true;
      try {
        this.categories = await fetchData("GET", `${this.apiUrl}${this.categoryEndPoint}`, null);
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async filterByCategory(url) {
      this.productEndPoint= 'http://127.0.0.1:8000/api/v1/product';
      this.productEndPoint = this.productEndPoint + url;
      await this.getAllProducts();
    },
    async changePage(url) {
      this.productEndPoint = url;
      await this.getAllProducts();
    },
  },
};
</script>

<style scoped>
.category-item{
  background-color: rgb(213, 198, 110);
  cursor: pointer;
}
.category-item:hover{
  background-color: gold;
  cursor: pointer;
}

.category-scroll{
  overflow-x: auto;
}
</style>
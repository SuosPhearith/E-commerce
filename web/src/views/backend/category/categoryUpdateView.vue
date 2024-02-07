<template>
  <div v-if="isLoading">loading...</div>
  <div v-else>
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Update Category</h6>
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="nameInput"
              placeholder="Enter Name"
              v-model="categoryName"
            />
          </div>
          <div class="mb-3">
            <label for="descriptionInput" class="form-label">Description</label>
            <input
              type="text"
              class="form-control"
              id="descriptionInput"
              placeholder="Enter Description"
              v-model="categoryDescription"
            />
          </div>
          <RouterLink
            :to="{ name: 'category_index' }"
            class="btn btn-sm btn-secondary me-2"
            type="button"
            >Cancel</RouterLink
          >
          <button class="btn btn-sm btn-primary" type="submit">Update</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { RouterLink } from "vue-router";
import fetchData from "../../../services/fetchData.js";
export default {
  data() {
    return {
      categoryName: "",
      categoryDescription: "",
      isLoading: false,
    };
  },
  mounted() {
    this.fetchCategoryData();
  },
  methods: {
    async fetchCategoryData() {
      this.isLoading = true;
      try {
        const categoryId = this.$route.params.id; // Get the ID from route params
        const response = await fetchData(
          "GET",
          `http://127.0.0.1:8000/api/v1/category/${categoryId}` // Use ID in the API URL
        );
        this.categoryName = response.name;
        this.categoryDescription = response.description;
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching category data:", error);
        this.isLoading = false;
      }
    },
    async submitForm() {
      try {
        // Use PUT method for updating
        const categoryId = this.$route.params.id; // Get the ID from route params
        const response = await fetchData(
          "PATCH",
          `http://127.0.0.1:8000/api/v1/category/${categoryId}`, // Use ID in the API URL
          {
            name: this.categoryName,
            description: this.categoryDescription,
          }
        );
        this.categoryName = "";
        this.categoryDescription = "";
        this.$router.push({ name: "category_index" });
      } catch (error) {
        console.error("Error updating category:", error);
      }
    },
  },
  components: { RouterLink },
};
</script>

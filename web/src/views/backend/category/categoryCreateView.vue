<template>
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Create New Category</h6>
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
        <button class="btn btn-sm btn-primary" type="submit">Create</button>
      </form>
    </div>
  </div>
</template>

<script>
import fetchData from "../../../services/fetchData.js";
export default {
  data() {
    return {
      categoryName: "",
      categoryDescription: "",
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/category/",
          {
            name: this.categoryName,
            description: this.categoryDescription,
          }
        );
        this.categoryName = "";
        this.categoryDescription = "";
        this.$router.push({ name: "category_index" });
      } catch (error) {
        console.error("Error creating category:", error);
      }
    },
  },
};
</script>

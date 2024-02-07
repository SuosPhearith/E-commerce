<template>
  <div v-if="confirmDelete" class="d-flex justify-content-center">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-center">
          <RiInformationLine style="width: 100px" />
        </div>
        <h5 class="card-title">Are you sure you want to delete?</h5>
        <div class="d-flex justify-content-center">
          <button @click="handleConfirmDelete" class="btn btn-secondary m-1">
            Cancel
          </button>
          <button @click="deleteItem()" class="btn btn-danger m-1">
            Delete
          </button>
        </div>
      </div>
    </div>
  </div>
  <div v-else>
    <div v-if="isLoading">loading...</div>
    <div v-else>
      <div class="d-flex justify-content-between align-items-center">
        <ol class="breadcrumb pt-2">
          <li class="breadcrumb-item"><a href="#">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Product Table
          </li>
        </ol>
        <RouterLink
          to="/backend/category/create"
          type="button"
          class="btn btn-primary btn-sm btn-icon-text d-flex justify-content-center align-items-center mb-2"
        >
          <RiAddCircleLine class="me-icon" />
          Create New
        </RouterLink>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Modified by</th>
                  <th>Created at</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in fetchedData.data" :key="item.id">
                  <th>{{ index + 1 }}</th>
                  <td>{{ item.name }}</td>
                  <td>{{ item.description }}</td>
                  <td>{{ item.user.name }}</td>
                  <td>{{ formatDate(item.created_at) }}</td>
                  <td>
                    <RouterLink
                      :to="`/backend/category/${item.id}`"
                      type="button"
                      class="btn btn-primary btn-icon btn-xs"
                      ><RiEditBoxLine style="width: 15px"
                    /></RouterLink>
                    <button
                      @click="handleConfirmDelete(item.id)"
                      type="button"
                      class="btn btn-danger btn-icon btn-xs ms-2"
                    >
                      <RiDeleteBinLine style="width: 15px" />
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Pagination -->
            <div class="mt-4">
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
      </div>
    </div>
  </div>
</template>
<script>
import {
  RiAddCircleLine,
  RiEditBoxLine,
  RiDeleteBinLine,
  RiInformationLine,
} from "vue-remix-icons";
import fetchData from "../../../services/fetchData.js";
import { RouterLink } from "vue-router";

export default {
  components: {
    RiAddCircleLine,
    RouterLink,
    RiEditBoxLine,
    RiDeleteBinLine,
    RiInformationLine,
  },
  data() {
    return {
      fetchedData: [],
      isLoading: false,
      confirmDelete: false,
      deleteItemId: null,
      apiUrl: "http://127.0.0.1:8000/api/v1/category",
    };
  },
  mounted() {
    this.fetchDataFromApi();
  },
  computed: {
    filteredLinks() {
      // Remove the first and last elements from the fetchedData.links array
      // return this.fetchedData.links.slice(1, -1);
    },
  },

  methods: {
    async fetchDataFromApi() {
      this.isLoading = true;
      try {
        this.fetchedData = await fetchData("GET", `${this.apiUrl}`, null);
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    formatDate(datetimeString) {
      const dateObject = new Date(datetimeString);
      const formattedDate = dateObject.toISOString().split("T")[0];
      return formattedDate;
    },
    handleConfirmDelete(id) {
      this.confirmDelete = !this.confirmDelete;
      this.deleteItemId = id;
    },
    async deleteItem() {
      try {
        await fetchData(
          "DELETE",
          `http://127.0.0.1:8000/api/v1/category/${this.deleteItemId}`,
          null
        );
        this.fetchedData.data = this.fetchedData.data.filter(
          (item) => item.id !== this.deleteItemId
        );
        this.deleteItemId = null;
        this.confirmDelete = false;
      } catch (error) {
        console.error("Error deleting item:", error);
      }
    },
    async changePage(pageUrl) {
      this.apiUrl = pageUrl;
      await this.fetchDataFromApi();
    },
  },
};
</script>

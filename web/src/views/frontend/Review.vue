<template>
  <div class="mb-5">
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Review</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Review</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-6 card mt-5">
          <div
            class="card-body d-flex justify-content-center align-items-center flex-column"
          >
            <div class="my-4">
              <vue3-star-ratings v-model="rating" starColor="gold" />
            </div>
            <h5 class="card-title">Description:</h5>
            <textarea
              class="form-control mb-3"
              v-model="description"
              id="exampleFormControlTextarea1"
              placeholder="Description"
              style="height: 100px"
            ></textarea>
            <button @click="handleReiew()" class="btn btn-outline-success">
              Submit Review
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { RiArrowRightSLine } from "vue-remix-icons";
import vue3StarRatings from "vue3-star-ratings";
import fetchData from "../../services/fetchData.js";
import { message } from "ant-design-vue";
export default {
  components: {
    RiArrowRightSLine,
    vue3StarRatings,
  },
  data() {
    return {
      rating: 5,
      description: "",
      data: [],
    };
  },
  mounted() {
    this.getOrderByUser();
  },
  methods: {
    async getOrderByUser() {
      try {
        this.data = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/order/product",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async handleReiew() {
      try {
        this.data = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/review/",
          {
            product_id: this.$route.params.id,
            rating: this.rating,
            description: this.description,
          }
        );
        message.success("Review successfully!");
        this.$router.push({ name: "myProduct_page" });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

<style scoped></style>

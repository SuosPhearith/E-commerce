<template>
  <div class="mb-5">
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Order</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Order</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card mt-5">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in products">
                  <th>{{ index + 1 }}</th>
                  <td>
                    <img
                      :src="`http://127.0.0.1:8000/${item.image}`"
                      alt="iamge"
                      style="height: 70px; width: 100px; object-fit: cover"
                    />
                  </td>
                  <td>{{ item.name }}</td>
                  <td>{{ item.price }}$</td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex align-items-center justify-content-end">
              <div
                class="mt-4 me-5 d-flex flex-column align-items-center justify-content-center"
              >
                <h3>Total Price: {{ totalPrice }}$</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="card">
        <div class="card-body">
          <form @submit.prevent="handleOrder()" class="forms-sample">
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input
                v-model="address"
                type="text"
                class="form-control"
                id="address"
                autocomplete="off"
                placeholder="Address"
              />
            </div>
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input
                v-model="city"
                type="text"
                class="form-control"
                id="city"
                autocomplete="off"
                placeholder="City"
              />
            </div>
            <div class="mb-3">
              <label for="Country" class="form-label">Country</label>
              <input
                v-model="country"
                type="text"
                class="form-control"
                id="Country"
                autocomplete="off"
                placeholder="Country"
              />
            </div>
            <div class="mb-3">
              <label for="Postcode" class="form-label">Postal Code</label>
              <input
                v-model="postal_code"
                type="text"
                class="form-control"
                id="Postcode"
                autocomplete="off"
                placeholder="Postal code"
              />
            </div>
            <div class="mb-3">
              <label for="Phone" class="form-label">Phone</label>
              <input
                v-model="phone"
                type="text"
                class="form-control"
                id="Phone"
                autocomplete="off"
                placeholder="Phone"
              />
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input
                v-model="email"
                type="text"
                class="form-control"
                id="Email"
                autocomplete="off"
                placeholder="Email"
              />
            </div>
            <button
              type="submit"
              class="btn btn-outline-primary me-2 mt-4 px-5"
            >
              Order Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { RiArrowRightSLine } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
export default {
  components: {
    RiArrowRightSLine,
  },
  data() {
    return {
      address: "",
      city: "",
      country: "",
      phone: "",
      email: "",
      postal_code: "",
      products: [],
    };
  },
  mounted() {
    this.getCart();
  },
  computed: {
    totalPrice() {
      const totalPrice = this.products.reduce(
        (total, item) => total + parseFloat(item.price),
        0
      );
      return totalPrice.toFixed(2);
    },
  },
  methods: {
    async getCart() {
      try {
        this.products = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/cart/cart",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async handleOrder() {
      try {
        const productsArray = Array.isArray(this.products) ? this.products : [];
        const productArrayToSend = productsArray.map((product) => ({
          product_id: product.product_id,
        }));
        this.products = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/order",
          {
            address: this.address,
            city: this.city,
            country: this.country,
            phone: this.phone,
            email: this.email,
            postal_code: this.postal_code,
            product: productArrayToSend,
          }
        );
        this.$router.push({ name: "home_page" });
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

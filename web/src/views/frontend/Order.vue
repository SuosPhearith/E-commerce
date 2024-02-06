<template>
  <div>
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
    <div class="container my-5">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample">
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
                v-model="Phone"
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
            <button type="submit" class="btn btn-primary me-2">Order</button>
            <button class="btn btn-secondary">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { RiArrowRightSLine } from "vue-remix-icons";
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
    };
  },
  methods: {},
};
</script>

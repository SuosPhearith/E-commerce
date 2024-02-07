<script>
import { RiAddCircleLine } from "vue-remix-icons";
import { ref } from "vue";
import axios from "axios";
export default {
  components: {
    RiAddCircleLine,
  },
  setup() {
    const data = ref(null);

    // Fetch data from the API
    axios
      .get("http://127.0.0.1:8000/api/v2/product")
      .then((response) => {
        // Assign the response data to the reactive variable
        data.value = response.data;
        console.log(response.data);
      })
      .catch((error) => {
        // Handle any errors
        console.error("Error fetching data:", error);
      });

    // Return the reactive variable to be used in the template
    return {
      data,
    };
  },
};
</script>
<template>
  <div class="d-flex justify-content-between align-items-center">
    <ol class="breadcrumb pt-2">
      <li class="breadcrumb-item"><a href="#">Product</a></li>
      <li class="breadcrumb-item active" aria-current="page">Product Table</li>
    </ol>
    <button
      type="button"
      class="btn btn-primary btn-icon-text d-flex justify-content-center align-items-center mb-2"
    >
      <RiAddCircleLine class="me-icon" />
      Create New
    </button>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              {{
                data
              }}
              <th>#</th>
              <th>First Name</th>
              <th>LAST NAME</th>
              <th>USERNAME</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th>2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th>3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr>
              <th>4</th>
              <td>Larry</td>
              <td>Jellybean</td>
              <td>@lajelly</td>
            </tr>
            <tr>
              <th>5</th>
              <td>Larry</td>
              <td>Kikat</td>
              <td>@lakitkat</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

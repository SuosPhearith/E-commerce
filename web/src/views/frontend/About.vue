<template>
  <div>
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">About</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">About</a>
        </div>
      </div>
    </div>
    <h1>About page</h1>
  </div>
</template>

<script>
import { RiArrowRightSLine } from "vue-remix-icons";
export default {
  components: {
    RiArrowRightSLine,
  },
};
</script>

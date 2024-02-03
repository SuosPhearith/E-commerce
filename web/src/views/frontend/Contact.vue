<template>
  <div>
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Contact</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Contact</a>
        </div>
      </div>
    </div>
    <h1>Contact page</h1>
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

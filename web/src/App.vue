<script setup>
import Layout from "./components/layout/Layout.vue";
import Menu from "./components/layout/Menu.vue";
</script>

<template>
  <!-- <Layout>
    <router-view></router-view>
  </Layout> -->
  <Menu>
    <router-view></router-view>
  </Menu>
</template>

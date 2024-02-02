import { createRouter, createWebHistory } from "vue-router";
import ProductViewVue from "./views/product/ProductView.vue";
import categoryViewVue from "./views/category/categoryView.vue";
import categoryCreateViewVue from "./views/category/categoryCreateView.vue";
import categoryUpdateViewVue from "./views/category/categoryUpdateView.vue";
import LoginViewVue from "./views/login/LoginView.vue";

const routes = [
  { path: "/backend/product", component: ProductViewVue },
  {
    path: "/backend/category",
    name: "category_index",
    component: categoryViewVue,
  },
  {
    path: "/backend/category/create",
    name: "category_create",
    component: categoryCreateViewVue,
  },
  {
    path: "/backend/category/:id",
    name: "category_update",
    component: categoryUpdateViewVue,
  },
  { path: "/backend/login", component: LoginViewVue },
  // Add more routes here if needed
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

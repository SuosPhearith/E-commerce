import { createRouter, createWebHistory } from "vue-router";
import ProductViewVue from "./views/product/ProductView.vue";
import categoryViewVue from "./views/category/categoryView.vue";
import categoryCreateViewVue from "./views/category/categoryCreateView.vue";
import categoryUpdateViewVue from "./views/category/categoryUpdateView.vue";
import HomeVue from "./views/frontend/Home.vue";
import ShopVue from "./views/frontend/Shop.vue";
import LoginView from "./views/frontend/Login.vue";
import RegisterView from "./views/frontend/Register.vue";
import ProductDetailView from "./views/frontend/ProductDetail.vue";
import AboutVue from "./views/frontend/About.vue";
import ContactVue from "./views/frontend/Contact.vue";
import CartVue from "./views/frontend/Cart.vue";
import WishlistVue from "./views/frontend/Wishlist.vue";
import ProfileVue from "./views/frontend/Profile.vue";
import OwnVue from "./views/frontend/Own.vue";
import OrderVue from "./views/frontend/Order.vue";

const routes = [
  {
    path: "/auth/login",
    name: "login_page",
    component: LoginView,
  },
  {
    path: "/auth/register",
    name: "register_page",
    component: RegisterView,
  },
  {
    path: "/backend/product",
    name: "product_index",
    component: ProductViewVue,
  },
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
  {
    path: "/en/home",
    name: "home_page",
    component: HomeVue,
  },
  {
    path: "/en/shop",
    name: "shop_page",
    component: ShopVue,
  },
  {
    path: "/en/product/:id",
    name: "product_detail_page",
    component: ProductDetailView,
  },
  {
    path: "/en/about",
    name: "about_page",
    component: AboutVue,
  },
  {
    path: "/en/contact",
    name: "contact_page",
    component: ContactVue,
  },
  {
    path: "/en/cart",
    name: "cart_page",
    component: CartVue,
  },
  {
    path: "/en/wishlist",
    name: "wishlist_page",
    component: WishlistVue,
  },
  {
    path: "/en/own",
    name: "own_page",
    component: OwnVue,
  },
  {
    path: "/en/profile",
    name: "profile_page",
    component: ProfileVue,
  },
  {
    path: "/en/order",
    name: "order_page",
    component: OrderVue,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

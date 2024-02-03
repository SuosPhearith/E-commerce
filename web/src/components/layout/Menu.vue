<template>
  <div>
    <header class="header-container custome-z-index" id="navbar">
      <div class="header-wrap">
        <div class="header-top">
          <div class="header-top-left">
            <a href="#" class="header-top-left-item">
              <RiPhoneLine
                style="width: 18px; margin-right: 3px"
              />+855-069-265-958
            </a>
            <a href="#" class="header-top-left-item-center">
              <RiMailLine
                style="width: 18px; margin-right: 3px"
              />suosphearith@gmail.com
            </a>
            <a href="#" class="header-top-left-item">
              <RiMapPinLine style="width: 18px; margin-right: 3px" />Phnom Penh,
              Cambodia
            </a>
          </div>
          <div class="header-top-right">
            <div class="header-top-right-item">
              <div class="header-top-right-item-child">
                <RiFacebookLine style="width: 18px" />
              </div>
              <div class="header-top-right-item-child">
                <RiInstagramLine style="width: 18px" />
              </div>
              <div class="header-top-right-item-child">
                <RiTwitterLine style="width: 18px" />
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom">
          <div class="header-bottom-left">
            <div class="logo">
              <img :src="logo" alt="" />
            </div>
          </div>
          <div class="header-bottom-right">
            <router-link to="/en/home" :class="{ active: isActive('/en/home') }"
              >Home</router-link
            >
            <router-link to="/en/shop" :class="{ active: isActive('/en/shop') }"
              >Shop</router-link
            >
            <router-link
              to="/en/about"
              :class="{ active: isActive('/en/about') }"
              >About</router-link
            >
            <router-link
              to="/en/contact"
              :class="{ active: isActive('/en/contact') }"
              >Contact</router-link
            >
            <router-link
              to="/en/profile"
              :class="{ active: isActive('/en/profile') }"
            >
              <RiUserLine class="my-icon" style="width: 18px"
            /></router-link>
            <router-link
              to="/en/wishlist"
              :class="{ active: isActive('/en/wishlist') }"
            >
              <RiHeart3Line class="my-icon" style="width: 18px"
            /></router-link>
            <router-link
              to="/en/cart"
              :class="{ active: isActive('/en/cart') }"
            >
              <RiShoppingCartLine class="my-icon" style="width: 18px" />
            </router-link>
          </div>
          <div class="dropdown header-bottom-right-icon">
            <div
              type="button"
              id="dropdownMenu2"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="ri-menu-line" style="font-size: 25px"></i>
              hello
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-shopping-cart-line me-2"></i>Cart</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-heart-3-line me-2"></i>Wishlist</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-user-line me-2"></i>Profile</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-home-line me-2"></i>Home</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-store-2-line me-2"></i>Shop</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-group-line me-2"></i>About</a
                >
              </li>
              <li>
                <a href="#" class="dropdown-item"
                  ><i class="ri-phone-line me-2"></i>Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <slot></slot>
    </div>
    <section style="background-color: #f0ebca">
      <footer class="container py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Shop</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Contact</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Help</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Payment Options</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Returns</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Privacy Policies</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">More Information</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Account</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Wishlist</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Cart</a>
              </li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"
                  >Email address</label
                >
                <input
                  id="newsletter1"
                  type="text"
                  class="form-control"
                  placeholder="Email address"
                />
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </footer>
    </section>
  </div>
</template>

<script>
import {
  RiFacebookLine,
  RiInstagramLine,
  RiTwitterLine,
  RiPhoneLine,
  RiMailLine,
  RiMapPinLine,
  RiUserLine,
  RiHeart3Line,
  RiShoppingCartLine,
} from "vue-remix-icons";
import logo from "../../assets/img/logo.png";
import { RouterLink } from "vue-router";
export default {
  components: {
    RiFacebookLine,
    RiInstagramLine,
    RiTwitterLine,
    RiPhoneLine,
    RiMailLine,
    RiMapPinLine,
    RiUserLine,
    RiHeart3Line,
    RiShoppingCartLine,
    RouterLink,
  },
  data() {
    return {
      logo: logo,
    };
  },
  methods: {
    isActive(path) {
      return this.$route.path === path;
    },
  },
};
</script>

<style scoped>
.my-icon:hover {
  color: #cc9c00;
}
.custome-z-index {
  z-index: 999;
}
</style>

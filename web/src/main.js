import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import { createPinia } from "pinia";

// =====> Defind app and pinia
const app = createApp(App);
const pinia = createPinia();
// =====> Use app and pinia
app.use(router);
// app.use(pinia);

// =====> Mount the app id
app.mount("#app");

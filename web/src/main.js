import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import { message } from "ant-design-vue";

const app = createApp(App);
app.use(router);
app.use(message);
app.mount("#app");

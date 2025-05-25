import './bootstrap';
import { createApp } from "vue";
import FipeModels from "./components/FipeModels.vue";

const app = createApp({});
app.component("fipe-models", FipeModels);
app.mount("#app");

require("./bootstrap");

// Import modules...
import { createApp } from "vue";
import { plugin as InertiaPlugin } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

// import app modules
import Root from "./root";
import Filters from "./filters";

// create app
const app = createApp(Root);

// mixins
app.mixin({ methods: { route } });

// plugins
app.use(InertiaPlugin);

// filters
app.config.globalProperties.$filters = Filters;

// mount app
app.mount("#app");

// initial inertia progress
InertiaProgress.init({
    color: "#4179f5",
});

app.config.globalProperties.app_url = process.env.MIX_APP_URL
app.config.globalProperties.app_name = process.env.MIX_APP_NAME
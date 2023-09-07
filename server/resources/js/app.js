// import './bootstrap';
// import { createApp } from "vue";
// import Example from "./components/Example.vue"

// const app = createApp({
//     components: {
//         Example,
//     },
// })
// app.mount("#app")

//////////

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/*.vue")),
    setup({el,app, props, plugin}){
        createApp({render: () =>h(App, props) })
        .use(plugin)
        .mount(el)
    }
})
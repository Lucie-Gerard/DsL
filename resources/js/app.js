import './bootstrap';

// 5. Update your main JavaScript file to boot your Inertia app.

import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
// 15a. Pinia
import { createPinia } from 'pinia';
// 23a. Import persistant Layout
import Layout from './Shared/Layout.vue';

// 15b. Pinia
const pinia = createPinia();

createInertiaApp({
    // 12a. id:'app' passes to Inertia (@inertia) the initial page data (app.blade.php here)
    id: 'app',
    resolve: name => {
        // 6. Create a folder Pages in >resources>js
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        // 23b. Use a variable page
        let page = pages[`./Pages/${name}.vue`]
        // 23c. It will automatically set the page layout to Layout if 
        //      a layout has not already been set for that page
        page.default.layout = page.default.layout || Layout
        // 23d. Return page
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // 15c. Pinia
            .use(pinia)
            // 15d. Pinia
            .mount('#app')
    },
})
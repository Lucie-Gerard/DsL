import './bootstrap';

// 5. Update your main JavaScript file to boot your Inertia app.

import { createApp, h } from 'vue';
// 27a. Component Link
// 28a. Component Head
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
// 15a. Pinia
import { createPinia } from 'pinia';
// 23a. Import persistant Layout
import Layout from './Shared/Layout.vue';

// 15b. Pinia
const pinia = createPinia();

createInertiaApp({
    // 12a. Works without id app because of @inertia
    // id: 'app',
    resolve: name => {
        // 6. Create a folder Pages in >resources>js
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        // 23b. Use a variable page
        let page = pages[`./Pages/${name}.vue`]
        // 23c. It will automatically set the page layout to Layout if 
        //      a layout has not already been set for that page
        //      (The Layout is the parent, not the child anymore)
        page.default.layout = page.default.layout || Layout
        // 23d. Return page
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // 15c. Pinia
            .use(pinia)
            // 27b. Component Link
            .component("Link", Link)
            // 28b. Component Head
            .component("Head", Head)
            // 15d. Pinia
            .mount('#app')
    },

    // 32. "DsL" + the title variable will appear for each Head component 
    title: title => `DsL - ${title}`
        
});
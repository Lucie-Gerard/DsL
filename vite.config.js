import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// 10. Vite for vue
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        // 10. Vite for vue
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

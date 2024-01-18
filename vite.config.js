import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/fontawesome-all.min.css',
                'resources/js/app.js',
                'resources/js/jquery.min.js',
                'resources/js/breakpoints.min.js',
                'resources/js/utilis.js',
            ],
            refresh: true,
        }),
    ],
});

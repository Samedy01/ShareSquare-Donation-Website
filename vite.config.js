import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/panha.css',
                'resources/js/app.js',
                'resources/js/panha.js',
                'resources/js/jquery-3.6.1.min.js',
            ],
            refresh: true,
        }),
    ],
});

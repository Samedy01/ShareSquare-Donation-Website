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
                'node_modules/flowbite/dist/flowbite.min.js',
                'node_modules/select2/dist/css/select2.min.css',
                'resources/js/datepicker.js',
            ],
            refresh: true,
        }),
    ],

    // @import "select2/dist/css/select2.min.css";
});

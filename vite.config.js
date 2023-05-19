import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/bootstrap.js',
                'resources/js/corporate-ui-dashboard.js',
                'resources/js/corporate-ui-dashboard.js.map',
                'resources/js/corporate-ui-dashboard.min.js',
                'resources/js/core/bootstrap.bundle.min.js',
                'resources/js/core/bootstrap.min.js',
                'resources/js/core/popper.min.js',

                'resources/js/plugins/bootstrap-notify.js',
                'resources/js/plugins/Chart.extension.jss',
                'resources/js/plugins/chartjs.min.js',
                'resources/js/plugins/perfect-scrollbar.min.jss',
                'resources/js/plugins/smooth-scrollbar.min.js',
                'resources/js/plugins/swiper-bundle.min.js',

                'resources/css/corporate-ui-dashboard.css',
                'resources/css/corporate-ui-dashboard.css.map',
                'resources/css/corporate-ui-dashboard.min.css',
                'resources/css/nucleo-icons.css',
                'resources/css/nucleo-svg.css',

            ],
            refresh: true,
        }),
    ],
});

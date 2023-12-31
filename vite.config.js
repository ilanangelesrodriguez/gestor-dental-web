import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/main.css',
                'resources/css/about.css',
                'resources/css/contact.css',
                'resources/css/home.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.min.css',
                'resources/css/responsive.css',
                'resources/css/swiper-bundle.min.css',
                'resources/css/testimonials.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/slider.js',
                'resources/js/about-slider.js',
                'resources/js/testimonials-slider.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/swiper-bundle.min.js',
            ],
            refresh: true,
        }),
    ],
});

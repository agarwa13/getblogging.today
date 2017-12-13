let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/assets/js/app.js','resources/assets/js/masonry.pkgd.min.js'], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/css/top-banner.css',
        'resources/assets/css/bottom-banner.css',
        'resources/assets/css/guide-navbar.css',
        'resources/assets/css/footer-basic-centered.css',
        'resources/assets/css/navbar.css',
        'resources/assets/css/domain-availability.css',
        'resources/assets/css/typography.css',
        'public/css/app.css'
    ],'public/css/all.css');

const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js');
mix.scripts([
    'public/js/jquery.easing.1.3.js',
    'public/js/jquery.waypoints.min.js',
    'public/js/owl.carousel.min.js',
    'public/js/aos.js',
    'public/js/jquery.animateNumber.min.js',
], 'public/js/vendor.js');

mix.sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/css/open-iconic-bootstrap.min.css',
    'resources/css/animate.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/aos.css',
    'resources/css/ionicons.css',
    'resources/css/flaticon.css',
    'resources/css/icomoon.css',
], 'public/css/vendor.css');

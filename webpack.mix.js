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

mix.js('resources/js/app.js',      'public/js');
mix.js('resources/js/particles/*', 'public/js/particles');
mix.js('resources/js/pages/*',     'public/js/pages');

mix.scripts([
    'resources/js/jquery.easing.1.3.js',
    'resources/js/jquery.waypoints.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/aos.js',
    'resources/js/jquery.animateNumber.min.js',
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

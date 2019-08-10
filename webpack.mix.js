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
 
mix.scripts([
    'public/dist/js/jquery.min.js',
    'public/dist/js/bootstrap.min.js',
    'public/dist/js/main.js'
], 'public/js/app.js')
.styles([
    'public/dist/css/font-awesome.css',
    'public/dist/css/bootstrap.min.css',
    'public/dist/css/index.css'
], 'public/css/app.css');

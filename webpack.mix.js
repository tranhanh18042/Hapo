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

mix.js('resources/js/feed_back.js', 'public/app/js')
    .js('resources/js/login_register.js','public/app/js')
    .vue()
    .sass('resources/sass/homePage/app.scss', 'public/app/css')
    .copy('resources/asset/img','public/app/img')
    .version();

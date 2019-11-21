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

mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin/items/create.scss', 'public/css/admin/items')
    .sass('resources/sass/admin/items/index.scss', 'public/css/admin/items')
    .sass('resources/sass/user/orders/index.scss', 'public/css/user/orders')

.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/items/index.js', 'public/js/admin/items')
    .js('resources/js/user/home.js', 'public/js/user');
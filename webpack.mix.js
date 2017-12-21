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

mix.js('resources/assets/vendor/voyager/js/app.js', 'vendor/tcg/voyager/assets/js')
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        '/home/vortgo/web/projects/phptoday.local/node_modules/bootstrap/dist/css/bootstrap-theme.css',
        'resources/assets/css/style.css'
    ], 'public/css/all.css');
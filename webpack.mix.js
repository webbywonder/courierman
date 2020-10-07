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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('resources/assets/admin', 'public/assets/admin')
   .copy('resources/assets/css', 'public/assets/css')
   .copy('resources/assets/frontend', 'public/assets/frontend')
   .copy('resources/assets/js', 'public/assets/js')
   .copy('resources/assets/staff', 'public/assets/staff')
   .copy('resources/assets/user', 'public/assets/user');

if (mix.config.inProduction) {
   mix.version();
   mix.minify();
}

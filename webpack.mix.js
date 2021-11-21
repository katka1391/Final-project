const mix = require('laravel-mix');
require('dotenv').config();
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

mix.options({
    processCssUrls: false
});

if (!mix.inProduction()) {
    mix.webpackConfig({
            devtool: 'source-map'
        })
        .sourceMaps()
}

// ADD YOUR COMPILED ASSETS HERE
//             source file          resulting file
//                SCSS                  CSS
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/Scss/app.scss', 'public/css')
    .js('resources/js/Recipes/index.js', 'public/js/recipes.js').react()

mix.browserSync({
    host: 'localhost',
    port: 3000,
    proxy: {
        target: process.env.APP_URL // Yay! Using APP_URL from the .env file!
    }
});

// add versions to the compiled assets when they are being loaded with mix()
mix.version();
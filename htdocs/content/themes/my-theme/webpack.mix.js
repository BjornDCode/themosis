let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */
mix.setPublicPath('dist');

mix.js('assets/js/theme.js', 'dist/js/theme.min.js')
    .postCss('assets/css/style.css', 'dist/css/theme.css', [
        require('tailwindcss')(),
        require('autoprefixer')(),
        require('@fullhuman/postcss-purgecss')({
            content: ['./**/*.php'],
            defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
        }),
    ]);

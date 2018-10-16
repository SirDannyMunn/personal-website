let mix = require('laravel-mix');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .tailwind()
   .purgeCss();

// mix.copy('node_modules/animate.css/animate.css', 'public/css/vendor.css');
// mix.copyDirectory('resources/views/svgs/background', 'public/svgs');

mix.browserSync('portfolio.test:8000');

if (mix.inProduction()) {
    mix.version();
}

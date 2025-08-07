const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
   ])
   .options({
        processCssUrls: false
   });

// Enable versioning in production
if (mix.inProduction()) {
    mix.version();
}

// Enable BrowserSync for development
mix.browserSync('localhost/violet-website/public');
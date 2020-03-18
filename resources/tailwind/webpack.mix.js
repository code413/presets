const mix = require('laravel-mix')
require('laravel-mix-purgecss')

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss')('./tailwind.config.js'),
    require('postcss-nested'),
    require('postcss-custom-properties'),
  ])
  .version()
  .options({
    processCssUrls: false
  }).purgeCss({enabled: mix.inProduction()})

var elixir = require('laravel-elixir');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
 
elixir.config.sourcemaps = false;

//Sass
elixir(function(mix) {
    mix.sass('**/*.scss');
});

//Css
elixir(function(mix) {
    mix.styles([
        "**/*.css"
    ], 'public/css/all.css');
});


//Scripts
elixir(function(mix) {
    mix.scripts('**/*.js', 'public/js/main.js')
  
});


//Imagem
require('laravel-elixir-imagemin');
elixir(function(mix) {
   mix.imagemin("**/*.{png,jpg,gif,svg}", "public/img", { optimizationLevel: 3, progressive: true, interlaced: true });
});
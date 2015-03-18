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

elixir(function(mix) {

     // Default Theme
     mix.scripts([
     '../assets/bower/jquery/dist/jquery.js',
     '../assets/bower/bootstrap/dist/js/bootstrap.js'
     ], 'public/js/vendor.js');

     mix.less('app.less');

     mix.version([
          'css/app.css',
          'js/vendor.js',
          'js/laroute.js'
     ]);

     // Edmin Theme

     //mix.less('../../themes/edmin/assets/less/edmin.less','public/themes/edmin/css');
});

elixir(function(mix) {

     // Edmin Theme
     mix.less('../../themes/edmin/assets/less/edmin.less','public/themes/edmin/css');

     mix.scripts([
          '../assets/bower/jquery/dist/jquery.js',
          '../assets/bower/bootstrap/dist/js/bootstrap.js'
     ], 'public/js/vendor.js');
});

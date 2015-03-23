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
     '../assets/bower/bootstrap/dist/js/bootstrap.js',
     '../assets/bower/datatables/media/js/jquery.dataTables.js'
     ], 'public/js/vendor.js');
     mix.copy('resources/assets/js/common.js', 'public/js/common.js');
     mix.less('app.less');

});

elixir(function(mix) {

     // Edmin Theme
     mix.less('../../themes/edmin/assets/less/edmin.less','public/themes/edmin/css');

     mix.scripts([
          '../assets/bower/jquery/dist/jquery.js',
          '../assets/bower/jquery-ui/jquery-ui.js',
          '../assets/bower/bootstrap/dist/js/bootstrap.js',
          '../assets/bower/flot/jquery.flot.js',
          '../assets/bower/flot/jquery.flot.resize.js',
          '../assets/bower/datatables/media/js/jquery.dataTables.js',
     ], 'public/themes/edmin/js/edmin-vendor.js');
     mix.copy('resources/themes/edmin/assets/js/edmin-common.js', 'public/themes/edmin/js/edmin-common.js');
     mix.copy('resources/themes/edmin/assets/images', 'public/themes/edmin/images');

});


elixir(function(mix) {
     mix.version([
          'css/app.css',
          'js/vendor.js',
          'js/laroute.js',
          'public/js/common.js',
          'themes/edmin/css/edmin.css',
          'themes/edmin/js/edmin-vendor.js',
          'themes/edmin/js/edmin-common.js'
     ]);
});
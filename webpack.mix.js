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
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        'resources/assets/js/library/node-waves/waves.js',
        'resources/assets/js/library/jquery-countto/jquery.countTo.js',
        'resources/assets/js/library/jquery-slimscroll/jquery.slimscroll.js',
        'resources/assets/js/library/bootstrap-notify/bootstrap-notify.js',
        'resources/assets/js/library/notifications.js',
        'resources/assets/js/library/bootstrap-select/js/bootstrap-select.js',
        'resources/assets/js/library/moment.js',
        'resources/assets/js/library/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
        'resources/assets/js/library/jquery-ui.js',
        'resources/assets/js/library/sweetalert.min.js',
        'resources/assets/js/library/ajaxform.js'
    ], 'public/js/librarys.js')
    .combine([
        'resources/assets/js/frontend/admin.js',
        'resources/assets/js/frontend/main.js',
        'resources/assets/js/frontend/ajax.js'
    ], 'public/js/frontend.js');
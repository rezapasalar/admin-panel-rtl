const mixAdminPanelRtl = require('laravel-mix');

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

mixAdminPanelRtl.sass('resources/sass/admin/scss/style-rtl.scss', 'public/css/admin/');

mixAdminPanelRtl.combine([
    'resources/js/admin/js/app/vendor.min.js',
    'resources/js/admin/js/jquery-knob/jquery.knob.min.js',
    'resources/js/admin/js/chart-js/Chart.bundle.min.js',
    'resources/js/admin/js/jqvmap/jquery.vmap.min.js',
    'resources/js/admin/js/jqvmap/jquery.vmap.usa.js',
    'resources/js/admin/js/datatables/jquery.dataTables.min.js',
    'resources/js/admin/js/datatables/dataTables.bootstrap4.min.js',
    'resources/js/admin/js/datatables/dataTables.responsive.min.js',
    'resources/js/admin/js/datatables/responsive.bootstrap4.min.js',
    'resources/js/admin/js/select2/select2.min.js',
    'resources/js/admin/js/sweetalert2/sweetalert2.min.js',
    'resources/js/admin/js/datepicker/datepicker.js',
    'resources/js/admin/js/datepicker/datepicker-fa.js',
    'resources/js/admin/js/app/app.min.js'
   ], 'public/js/admin/script.js');



export default mixAdminPanelRtl;
   
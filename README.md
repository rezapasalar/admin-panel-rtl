# admin-panel-rtl
This is the admin panel for Persian websites.

## Install Package
composer require rezapasalar/admin-panel-rtl

## Import Provider
Rezapasalar\AdminPanelRtl\AdminPanelRtlServiceProvider::class

## Publishes
php artisan vendor:publish --tag=rezapasalar/admin-panel-rtl --force

## Add require to package.mix.js file
require("./resources/js/mixAdminPanelRtl");

## Compile JS and CSS
npm i
npm run dev

# Use and enjoy

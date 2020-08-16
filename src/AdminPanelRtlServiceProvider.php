<?php

namespace Rezapasalar\AdminPanelRtl;

use Illuminate\Support\ServiceProvider;

class AdminPanelRtlServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . "/public/images" => public_path("images"),
            __DIR__ . "/resources/js" => resource_path("js"),
            __DIR__ . "/resources/scss" => resource_path("sass"),
            __DIR__ . "/resources/views" => resource_path("views/layouts"),
        ], "rezapasalar/admin-panel-rtl");
    }
}
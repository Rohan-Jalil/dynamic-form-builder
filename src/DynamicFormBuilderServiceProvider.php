<?php

namespace Rohan\DynamicFormBuilder;

use Illuminate\Support\ServiceProvider;

class DynamicFormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'dynamic-form-builder');

        $this->publishes([
          __DIR__.'/views' => resource_path('views/vendor/dynamic-form-builder'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

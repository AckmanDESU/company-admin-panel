<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFormProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('blText', 'form.text', ['name', 'value' => null, 'attributes']);
        \Form::component('blEmail', 'form.email', ['name', 'value' => null, 'attributes']);
        \Form::component('blSelect', 'form.select', ['name', 'options', 'value' => null, 'attributes']);
    }
}

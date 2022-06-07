<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $rule = Password::min(8);

        return app()->isProduction()
                ? $rule->mixedCase()
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()
                : $rule;
    }
}

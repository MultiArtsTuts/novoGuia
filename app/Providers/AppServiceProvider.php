<?php

namespace guiasbn\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Para chamar ClientRepositoryEloquent
        $this->app->bind(
            'guiasbn\Repositories\Contracts\ClientRepositoryInterface',
            'guiasbn\Repositories\ClientRepository'
        );

        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('pt_BR');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

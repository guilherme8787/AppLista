<?php

namespace App\Providers;

use App\Models\Convidados;
use App\Repository\Convidados\{ConvidadosRepositoryInterface, ConvidadosRepositoryEloquent};
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
        $this->app->bind(ConvidadosRepositoryInterface::class, function () {
            return new ConvidadosRepositoryEloquent(new Convidados);
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

<?php

namespace App\Providers;

use App\Models\Convidados;
use App\Services\Mail\Contracts\SendInvitationServiceContract;
use App\Services\Mail\SendInvitationService;
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

        $this->app->bind(SendInvitationServiceContract::class, SendInvitationService::class);
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

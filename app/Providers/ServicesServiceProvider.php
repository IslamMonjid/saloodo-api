<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\SenderAuthServiceInterface;
use App\Services\SenderAuthService;
use App\Services\Interfaces\BikerAuthServiceInterface;
use App\Services\BikerAuthService;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SenderAuthServiceInterface::class, SenderAuthService::class);
        $this->app->bind(BikerAuthServiceInterface::class, BikerAuthService::class);
    }
}

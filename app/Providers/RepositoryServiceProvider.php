<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ParcelRepositoryInterface;
use App\Repositories\Eloquent\ParcelRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ParcelRepositoryInterface::class, ParcelRepository::class);
    }

}

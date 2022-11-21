<?php

namespace App\Providers;

use App\Http\Controllers\AlbumController;
use Core\Gallery\Gallery;
use Core\Interfaces\AlbumReboInterface;
use Core\Repositories\AlbumRepository;
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
        $this->app->when(Gallery::class)
          ->needs(AlbumReboInterface::class)
          ->give(function () {
              return new AlbumRepository();
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

<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 15/01/2019
 * Time: 10:47
 */

namespace App\QHOnline\Providers;

use Illuminate\Support\ServiceProvider;
use App\QHOnline\ToolFactory;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ToolFactory::class, function () {
            return new ToolFactory();
        });
    }
}

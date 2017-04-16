<?php
namespace RMoore\Builders;

use Illuminate\Support\ServiceProvider;

use RMoore\Builders\Console\{ModelBuildCommand, ControllerBuildCommand};

class BuildersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
	        $this->commands([
	            ModelBuildCommand::class,
	            ControllerBuildCommand::class,
	        ]);
	    }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
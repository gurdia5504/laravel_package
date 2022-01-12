<?php
namespace Package\Adduser;

use Illuminate\Support\ServiceProvider;

class AdduserServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'adduser');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/adduser')
            ]);
    }

    public function register(){
        
    }

}
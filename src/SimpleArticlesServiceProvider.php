<?php

namespace Freebizbot\SimpleArticles;

use Illuminate\Support\ServiceProvider;

class SimpleArticlesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/database/seeders' => database_path('seeders'),
        ]);
    }
}

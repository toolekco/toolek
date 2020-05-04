<?php

namespace Toolek\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'./routes/web.php');
        $this->publishes([
            __DIR__.'./config/apitoolek.php' => config_path('apitoolek.php'),
        ]);
    }

    public function register()
    {

    }
}

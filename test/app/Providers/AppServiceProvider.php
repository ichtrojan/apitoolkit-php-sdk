<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use APIToolkit\SDKs\PHPSDK;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $client = new PHPSDK();
        $data = $client->Client("YOUR_API_KEY_HERE");
        config(["client"=>$data]);
    }
}
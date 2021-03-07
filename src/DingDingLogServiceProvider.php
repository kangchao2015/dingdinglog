<?php


namespace KangChao\dingDingLog;

use Closure;
use Illuminate\Support\ServiceProvider;

class DingDingLogServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/DingDingLog.php' => config_path('DingDingLog.php'),
        ]);
    }

}
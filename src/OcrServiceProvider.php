<?php
namespace Ydalbj\Ocr;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class OcrServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('OcrManager', OcrManager::class);

        $this->mergeConfigFrom(__DIR__.'/../config/baidu.php', 'baidu');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // vendor:publish 生成配置文件
        $config_path = __DIR__ . '/../config/baidu.php';
        $publish_path = config_path('baidu.php');
        $this->publishes([$config_path => $publish_path], 'orc');
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['OcrManager'];
    }
}

<?php

namespace Lchhieu\PushView\Providers;

use Illuminate\Support\ServiceProvider;
use Lchhieu\PushView\Transformers\Transformer;
use Lchhieu\PushView\ViewBinder\LchhieuViewBinder;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PushViewJS', function ($app) {
            return new Transformer(
                new LchhieuViewBinder($app['events'], config('push_view.bind_js_vars_to_this_view')),
                config('push_view.js_namespace')
            );
        });

        $this->publishes([
            __DIR__ . '/../../config/push_view.php' => config_path('push_view.php'),
        ]);
    }
}

<?php

namespace AVD\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }

        $models = array(
            'ConfigSubjectContact',
            'ConfigProfileClient',
            'ConfigImageProduct',
            'ConfigProduct',
            'ConfigKeyword',
            'ConfigSite',
            'ImageColor',
            'UserAddress',
            'UserNote',
            'Newsletter',
            'Wishlist',
            'Category',
            'Product',
            'Section',
            'Contact',
            'State',
            'User'
        );

        foreach ($models as $model) {
            $this->app->bind("AVD\Interfaces\\{$model}Interface", "AVD\Repositories\\{$model}Repository");
        }

    }
}

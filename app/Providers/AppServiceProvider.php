<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        View::share('the', 'App\Helpers\WebsiteSettings');
        View::share('core', 'App\Helpers\Core');

        View::share('Post', 'App\Models\Post');
        View::share('category', 'App\Models\Category');
        View::share('postfield', 'App\Models\PostField');
        View::share('term', 'App\Models\Term');
        View::share('frontendAssets', asset('/public/frontend'));
        View::share('publicDir', asset('/public'));
        View::share('homeUrl', url('/'));
        View::share('Model', function ($modelName) {
            $modelPath = '\App\Models' . '\\' . $modelName;
            return $modelPath;
        });
        View::share('Query', '\App\Helpers\Query');
    }
}

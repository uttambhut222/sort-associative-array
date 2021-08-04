<?php

namespace TheOpenEyes\SortAssociativeArray;

use Illuminate\Support\ServiceProvider;

class SortAssociativeArrayServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(SortAssociativeArray::class, function () {
            return new SortAssociativeArray();
        });
    }
}

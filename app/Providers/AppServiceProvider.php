<?php

namespace App\Providers;

use App\Models\Material;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('products') && Schema::hasTable('materials')) {
            $materials = Material::all();
            $products = Product::all();
            View::share(['products' => $products]);
            View::share(['materials' => $materials]);

        }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductService extends ServiceProvider
{

    public static function getInputProduct()
    {
        $inputs = [
            'id' => request()->input('id'),
            'name' => request()->input('name'),
            'price' => request()->input('price'),
        ];


        return $inputs;
    }

    public static function updateImageProduct($image)
    {
        var_dump($image);
        die();
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

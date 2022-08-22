<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NewService extends ServiceProvider
{

    public static function getInputNew()
    {
        $inputs = [
            'id' => request()->input('id'),
            'title' => request()->input('title'),
            'sub_title' => request()->input('sub_title'), 
            'content' => request()->input('content'),
        ];
        return $inputs;
    }

    public static function updateImageNew($image)
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

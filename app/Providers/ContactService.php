<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContactService extends ServiceProvider
{
    public static function getInputContact()
    {
        $inputs = [
            'id' => request()->input('id'),
            'address' => request()->input('address'),
            'phone' => request()->input('phone'),
            'email' => request()->input('email'),
        ];
        return $inputs;
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

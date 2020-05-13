<?php

namespace App\Providers;

use Razorpay\Api\Api as Razorpay;
use Illuminate\Support\ServiceProvider;

class RazorPayProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('razorpay', function ($app) {
            $razorPayConfig = config('services.razorpay');

            return new Razorpay(
                $razorPayConfig['key'],
                $razorPayConfig['secret']
            );
        });
    }
}

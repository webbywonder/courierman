<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Model\GeneralSetting;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $data = [];
        $genset = new GeneralSetting;
        if ($genset->exists) {
            $data['gs'] = GeneralSetting::firstOrFail();
        }
        
        Schema::defaultStringLength(191);

        view::share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}

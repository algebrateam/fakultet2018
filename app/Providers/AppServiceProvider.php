<?php

namespace App\Providers;

use App\Observers\TrgovinaObserver;
use App\Trgovina;
use Illuminate\Support\Facades\Schema;
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
        /*
         * Migration table created successfully.
         * Migrating: 2014_10_12_000000_create_users_table
         * PDOException::("SQLSTATE[42000]: Syntax error or access violation:
         * 1071 Specified key was too long; max key length is 767 bytes")
         */
        Schema::defaultStringLength(191);
        
        /**
         * Registriramo observer nad Modelom Trgovina
         * Kada se dogodi update nad modelom, svojstvo drzava pretvori se u prvo
         * veliko pocetno slovo (ucfirst())
         */
        Trgovina::observe(TrgovinaObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

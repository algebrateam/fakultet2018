<?php

namespace App\Providers;

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
        /**
         * Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
   Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
  at /home/travis/build/algebrateam/fakultet2018/vendor/laravel/framework/src/Illuminate/Database/Connection.php:664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668| 
  Exception trace:
  1   PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes")
      /home/travis/build/algebrateam/fakultet2018/vendor/laravel/framework/src/Illuminate/Database/Connection.php:458
  2   PDOStatement::execute()
      /home/travis/build/algebrateam/fakultet2018/vendor/laravel/framework/src/Illuminate/Database/Connection.php:458
         */
        Schema::defaultStringLength(191);
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

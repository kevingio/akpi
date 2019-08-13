<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Rainwater\Active\Active;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $onlineUsers = sizeof(DB::table('sessions')->selectRaw('count(*)')
                                            ->where('last_activity', '<=', strtotime('-3 minutes'))
                                            ->groupBy('ip_address')
                                            ->get());
        $visitors = DB::table('sessions')->selectRaw('count(*) as total')->count();
        view()->share ('onlineUsers', $onlineUsers);
        view()->share ('visitors', $visitors);
    }
}

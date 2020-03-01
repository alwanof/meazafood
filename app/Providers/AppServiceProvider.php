<?php

namespace App\Providers;

use App\Bill;
use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        view()->composer('widgets.notifications',function($view){

            $data=[
                'allNoti'=>auth()->user()->notifications,
                'newNoti'=>auth()->user()->unreadNotifications,
                'oldNoti'=>auth()->user()->readNotifications,
                'trans'=>Bill::where('user_id',auth()->user()->id)->latest()->get(),
                'balance'=>auth()->user()->balance()
            ];
            $view->with('notifications', $data);

        });
        User::observe(UserObserver::class);

    }
}

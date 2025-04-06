<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            // mengirimkan data role yang sedang login ke semua view
            $view->with('role', Auth::check() ? Auth::user()->role : null);
            
            // $view->with('users', User::where('role', 'Customer')->get());
            // $view->with('urlslug', url()->current());
            // $view->with('urlslug', url()->current());
        });
    }
}

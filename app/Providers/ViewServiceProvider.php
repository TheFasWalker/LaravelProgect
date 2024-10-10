<?php

namespace App\Providers;

use App\View\Composers\AdminComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::defaultView('vendor.pagination.tailwind');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('Pages.Admin.HomePage', AdminComposer::class);
    }
}

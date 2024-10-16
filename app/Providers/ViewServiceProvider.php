<?php

namespace App\Providers;

use App\Models\Category;
use App\View\Composers\AdminComposer;
use App\View\Composers\CategoryComposer;
use App\View\Composers\FirmComposer;
use App\View\Composers\PostComposer;
use App\View\Composers\TagComposer;
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
        View::composer(['Pages.Admin.posts.create','Pages.Admin.tags.index'], TagComposer::class );
        View::composer(['Pages.Admin.posts.create','Pages.Admin.category.index'], CategoryComposer::class );
        View::composer('Pages.Admin.posts.index',PostComposer::class);
        View::composer('Pages.Admin.firms.index',FirmComposer::class);
    }
}

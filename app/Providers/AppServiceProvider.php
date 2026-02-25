<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\View;

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
        $this->configureDefaults();
        // Share services array with the header view
        View::composer(['components.frontend.header', 'components.frontend.footer'], function ($view) {
            $services = [
                ['name' => 'Performance Marketing', 'slug' => 'performance-marketing'],
                ['name' => 'Social Media Growth', 'slug' => 'social-media-growth'],
                ['name' => 'Content Marketing', 'slug' => 'content-marketing'],
                ['name' => 'PPC & Paid Ads', 'slug' => 'ppc-paid-ads'],
                ['name' => 'Brand Strategy', 'slug' => 'brand-strategy'],
                ['name' => 'Conversion Optimization', 'slug' => 'conversion-optimization'],
            ];
            $view->with('services', $services);
        });
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(
            fn(): ?Password => app()->isProduction()
                ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
                : null
        );
    }

}

<?php

namespace Boyprakasa\FilamentPrkTheme;

use Boyprakasa\FilamentPrkTheme\Console\FilamentPrkThemeInstall;
use Illuminate\Support\ServiceProvider;

class FilamentPrkThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([
            FilamentPrkThemeInstall::class,
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../config/filament-prk-theme.php', 'filament-prk-theme');

        $this->publishes([
            __DIR__ . '/../config/filament-prk-theme.php' => config_path('filament-prk-theme.php'),
        ], 'filament-prk-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-prk-theme'),
        ], 'filament-prk-theme-views');
    }

    public function boot(): void
    {
        //
    }
}

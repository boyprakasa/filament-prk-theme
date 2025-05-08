<?php

namespace Boyprakasa\FilamentPrkTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class FilamentPrkThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'filament-prk-theme';
    }

    public function register(Panel $panel): void
    {
        // FilamentColor::register([
        //     'red' => [
        //         50 => '#e01e37',
        //         100 => '#c71f37',
        //         200 => '#bd1f36',
        //         300 => '#b21e35',
        //         400 => '#a71e34',
        //         500 => '#a11d33',
        //         600 => '#85182a',
        //         700 => '#6e1423',
        //         800 => '#641220',
        //         900 => '#6e0013',
        //         950 => '#5b000f',
        //     ],
        // ]);

        $panel
            ->colors([
                'danger' => Color::hex('#d90429'),
                'info' => Color::hex('#0039ff'),
                'primary' => Color::hex('#ff7900'),
                'secondary' => Color::hex('#979dac'),
                'success' => Color::hex('#38b000'),
                'warning' => Color::hex('#ffb703'),
            ])
            ->viteTheme('vendor/boyprakasa/filament-prk-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

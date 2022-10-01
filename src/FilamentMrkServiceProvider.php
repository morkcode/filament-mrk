<?php

namespace FilamentMrk;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

// use Filament\Facades\Filament;

class FilamentMrkServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-mrk';

    // protected array $resources = [
    //     // CustomResource::class,
    // ];

    // protected array $pages = [
    //     // CustomPage::class,
    // ];

    // protected array $widgets = [
    //     // CustomWidget::class,
    // ];

    // protected array $styles = [
    //     'plugin-filament-mrk' => __DIR__ . '/../resources/dist/filament-mrk.css',
    // ];

    // protected array $scripts = [
    //     'plugin-filament-mrk' => __DIR__ . '/../resources/dist/filament-mrk.js',
    // ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-mrk' => __DIR__ . '/../resources/dist/filament-mrk.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}

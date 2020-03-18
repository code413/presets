<?php

namespace Code413\Presets;

use Laravel\Ui\Presets\Preset as LaravelPreset;
use Illuminate\Support\Facades\File;

class Tailwind extends LaravelPreset
{
    public static function install()
    {
        Blade::install();

        static::updateViews();

        static::removeSass();

        static::updateCss();

        static::updateMix();

        static::updateTailwindConfig();

        static::updatePackages();
    }

    protected static function updateViews()
    {
        File::copyDirectory(__DIR__ . '/../resources/tailwind/views', resource_path('views'));
    }

    protected static function removeSass()
    {
        File::deleteDirectory(resource_path('sass'));
    }

    protected static function updateCss()
    {
        File::copyDirectory(__DIR__ . '/../resources/tailwind/css', resource_path('css'));
    }

    protected static function updateMix()
    {
        File::copy(__DIR__ . '/../resources/tailwind/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function updateTailwindConfig()
    {
        File::copy(__DIR__ . '/../resources/tailwind/tailwind.config.js', base_path('tailwind.config.js'));
    }

    protected static function updatePackageArray(array $packages)
    {
        $packages['tailwindcss'] = '^1.2.0';
        $packages['laravel-mix-purgecss'] = '^4.1.0';
        $packages['postcss-custom-properties'] = '^9.1.1';
        $packages['postcss-import'] = '^12.0.1';
        $packages['postcss-nested'] = '^4.2.1';

        return $packages;
    }
}
<?php

namespace Code413\Presets;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Facades\File;

class Tabler extends LaravelPreset
{
    public static function install()
    {
        static::updatePackages();
        
        Blade::install();
        
        Bootstrap::install();
        
        static::updateSass();
    }

    protected static function updateSass()
    {
        File::copyDirectory(__DIR__ . '/../resources/tabler/sass', resource_path('sass'));
    }

    protected static function updatePackageArray(array $packages)
    {
        $packages['tabler-ui'] = '0.0.34';
        
        return $packages;
    }
}
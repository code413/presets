<?php

namespace Code413\Presets;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Facades\File;

class Blade extends LaravelPreset
{
    public static function install()
    {
        static::cleanViewsDirectory();
        
        static::copyViewBoilerplates();
        
        static::updateMix();
    }

    protected static function cleanViewsDirectory()
    {
        File::cleanDirectory(resource_path('views'));
    }

    protected static function copyViewBoilerplates()
    {
        File::copyDirectory(__DIR__ . '/../resources/blade/views', resource_path('views'));
    }

    protected static function updateMix()
    {
        File::copy(__DIR__ . '/../resources/blade/webpack.mix.js', base_path('webpack.mix.js'));
    }
}
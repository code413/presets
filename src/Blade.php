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
    }

    protected static function cleanViewsDirectory()
    {
        File::cleanDirectory(resource_path('views'));
    }

    protected static function copyViewBoilerplates()
    {
        File::copyDirectory(__DIR__ . '/../resources/views', resource_path('views'));
    }
}
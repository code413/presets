<?php

namespace Code413\Presets;

use Illuminate\Foundation\Console\Presets\Bootstrap as BasePreset;
use Illuminate\Support\Facades\File;

class Bootstrap extends BasePreset
{
    public static function install()
    {
        parent::install();
        
        static::updateScripts();
    }

    protected static function updateScripts()
    {
        File::cleanDirectory(resource_path('js'));

        File::copyDirectory(__DIR__ . '/../resources/bootstrap/js', resource_path('js'));
    }

    protected static function updateSass()
    {
        File::cleanDirectory(resource_path('sass'));

        File::copyDirectory(__DIR__ . '/../resources/bootstrap/sass', resource_path('sass'));
    }
}
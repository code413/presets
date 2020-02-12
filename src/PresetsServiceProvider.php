<?php

namespace Code413\Presets;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class PresetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('blade', function ($command)
        {
            Blade::install();
            
            $command->info('Code413\'s blade preset is successfully installed!');
        });
    }
}   

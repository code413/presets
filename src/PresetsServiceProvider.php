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

        PresetCommand::macro('bootstrap', function ($command)
        {
            Bootstrap::install();

            $command->info('Code413\'s bootstrap preset is successfully installed!');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('tabler', function ($command)
        {
            Tabler::install();

            $command->info('Code413\'s tabler preset is successfully installed!');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}   

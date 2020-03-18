<?php

namespace Code413\Presets;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class PresetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('blade', function ($command)
        {
            Blade::install();
            
            $command->info('Code413\'s blade preset is successfully installed!');
        });

        UiCommand::macro('bootstrap', function ($command)
        {
            Bootstrap::install();

            $command->info('Code413\'s bootstrap preset is successfully installed!');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('tabler', function ($command)
        {
            Tabler::install();

            $command->info('Code413\'s tabler preset is successfully installed!');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('tailwind', function ($command)
        {
            Tailwind::install();

            $command->info('Code413\'s tailwind preset is successfully installed!');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}   

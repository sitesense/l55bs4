<?php
namespace Sitesense\Bootstrap4Scaffold;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
class Bootstrap4ScaffoldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('l55bs4', function ($command) {
            Bootstrap4Scaffold::install(false);
            $command->info('Bootstrap 4 scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
        PresetCommand::macro('l55bs4-auth', function ($command) {
            Bootstrap4Scaffold::install(true);
            $command->info('Bootstrap 4 scaffolding with Auth views installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
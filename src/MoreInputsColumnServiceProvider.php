<?php

namespace Traineratwot\MoreInputsColumn;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Traineratwot\MoreInputsColumn\Commands\MoreInputsColumnCommand;

class MoreInputsColumnServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('more-inputs-column')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_more-inputs-column_table')
            ->hasCommand(MoreInputsColumnCommand::class);
    }
}

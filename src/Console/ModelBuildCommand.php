<?php

namespace RMoore\Builders\Console;

use Illuminate\Support\Str;
use Illuminate\Foundation\Console\ModelMakeCommand;

class ModelBuildCommand extends ModelMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'build:model';

    /**
     * Create a controller for the model.
     *
     * @return void
     */
    protected function createController()
    {
        $controller = Str::studly(class_basename($this->argument('name')));

        $modelName = $this->qualifyClass($this->getNameInput());

        $this->call('build:controller', [
            'name' => "{$controller}Controller",
            '--model' => $this->option('resource') ? $modelName : null,
        ]);
    }

}

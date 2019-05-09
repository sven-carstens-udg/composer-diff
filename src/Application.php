<?php

namespace Sminnee\ComposerDiff;

use Symfony\Component\Console\Input\InputOption;

class Application extends \Symfony\Component\Console\Application
{
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();

        $commands[] = new DiffCommand();
        $commands[] = new LogCommand();

        return $commands;
    }

    protected function getDefaultInputDefinition()
    {
        $definition = parent::getDefaultInputDefinition();
        $definition->addOption(new InputOption('composer-lock', 'c', InputOption::VALUE_OPTIONAL, 'Path to composer.lock', 'composer.lock'));

        return $definition;
    }
}

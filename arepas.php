#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';
//import console application stack
use Symfony\Component\Console\Application;
//import commands
use ArepasApp\CLI\Version\VersionCommand;

$application = new Application();
$application->add(new VersionCommand());
$application->run();
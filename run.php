<?php

require_once __DIR__ . '/vendor/autoload.php';

use ClosestPoints\Console;
use ClosestPoints\Strategy;
use ClosestPoints\PointGenerator;
use ClosestPoints\Application;

$strategy = new Strategy\LanguageDefault();

$application = new Application(new Console(), new PointGenerator(), $strategy);
$application->run();
<?php

require_once __DIR__ . '/vendor/autoload.php';

use ClosestPoints\Console;
use ClosestPoints\Strategy;
use ClosestPoints\PointGenerator;
use ClosestPoints\Application;

$application = new Application(new Console(), new PointGenerator(), new Strategy\Example());
$application->run();

$application = new Application(new Console(), new PointGenerator(), new Strategy\QuickSort());
$application->run();
<?php

require_once __DIR__ . '/vendor/autoload.php';

$application = new Application(new Console(), new PointGenerator());
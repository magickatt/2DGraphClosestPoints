<?php

class Application
{
    /** @var Console */
    private $console;

    /** @var array */
    private $points = [];

    /**
     * @param Console $console
     * @param PointGenerator $pointGenerator
     */
    public function __construct(Console $console, PointGenerator $pointGenerator)
    {
        $this->console = $console;
        $this->points = $pointGenerator->generatePoints();
    }

    /**
     * Run the application
     */
    public function run()
    {
        $this->console->writeLine('Hello World');
    }
}
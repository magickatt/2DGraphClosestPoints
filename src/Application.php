<?php

namespace ClosestPoints;

class Application
{
    /** @var Console */
    private $console;

    /** @var StrategyInterface */
    private $strategy;

    /** @var array */
    private $points = [];

    /**
     * @param Console $console
     * @param PointGenerator $pointGenerator
     */
    public function __construct(Console $console, PointGenerator $pointGenerator, StrategyInterface $strategy)
    {
        $this->console = $console;
        $this->strategy = $strategy;
        $this->points = $pointGenerator->generatePoints();
    }

    /**
     * Run the application
     */
    public function run()
    {
        $points = $this->strategy->sort($this->points);
        for ($x = 0; $x < 100; $x++) {
            /** @var Point $point */
            $point = $points[$x];
            $this->log($point, $x);
        }
    }

    /**
     * @param Point $point
     * @param $x
     */
    private function log(Point $point, $x)
    {
        $this->console->writeLine('Closest '.$x.': '.$point->x().', '.$point->y());
    }
}
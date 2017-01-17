<?php

namespace ClosestPoints\Strategy;

use ClosestPoints\Point;
use ClosestPoints\StrategyInterface;

class QuickSort implements StrategyInterface
{
    public function sort(array $points)
    {
        $length = count($points);
        if ($length <= 1) {
            return $points;
        }

        $pivotPoint = $points[0];
        $leftPoints = $rightPoints = [];

        for ($x = 1; $x < $length; $x++) {
            $point = $points[$x];
            if ($this->calculateDistanceToOrigin($point) < $this->calculateDistanceToOrigin($pivotPoint)) {
                $leftPoints[] = $points[$x];
            } else {
                $rightPoints[] = $points[$x];
            }
        }

        return array_merge($this->sort($leftPoints), [$pivotPoint], $this->sort($rightPoints));
    }

    private function calculateDistanceToOrigin(Point $point)
    {
        $hypotenuse = sqrt(pow($point->x(), 2) + pow($point->y(), 2));
        return $hypotenuse;
    }
}
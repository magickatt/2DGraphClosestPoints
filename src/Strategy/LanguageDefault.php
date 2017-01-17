<?php

namespace ClosestPoints\Strategy;

use ClosestPoints\Point;
use ClosestPoints\StrategyInterface;

class LanguageDefault implements StrategyInterface
{
    public function sort(array $points)
    {
        usort($points, function (Point $pointA, Point $pointB) {
            $distanceA = $this->calculateDistanceToOrigin($pointA);
            $distanceB = $this->calculateDistanceToOrigin($pointB);
            if ($distanceA > $distanceB) {
                return 1;
            } elseif ($distanceA < $distanceB) {
                return -1;
            }
            return 0;
        });

        return $points;
    }

    private function calculateDistanceToOrigin(Point $point)
    {
        $hypotenuse = sqrt(pow($point->x(), 2) + pow($point->y(), 2));
        return $hypotenuse;
    }
}
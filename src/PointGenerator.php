<?php

class PointGenerator
{
    /**
     * @param int $n How many points to generate
     * @return array $n number of Point object
     */
    public function generatePoints($n = 1000)
    {
        $points = [];
        for ($x = 0; $x < 1000; $x++) {
            $points[] = new Point(rand(1, $n), rand(1, $n));
        }
        return $points;
    }
}
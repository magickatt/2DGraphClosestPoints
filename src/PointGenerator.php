<?php

class PointGenerator
{
    public function generatePoints($n = 1000)
    {
        $points = [];
        for ($x = 0; $x < 1000; $x++) {
            $points[] = new Point(rand(1, $n), rand(1, $n));
        }
        return $points;
    }
}
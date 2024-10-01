<?php

class TrafficLight
{
    /**
     * @param int $metersFromStart distance of the traffic light from the starting point (in meters)
     * @param int $periodSec period of duration seconds in green and then duration seconds in red
     */
    public function __construct(public int $metersFromStart, public int $periodSec) {}

    /**
     * @param array $lightsList
     * @return array
     * @throws Exception
     */
    public static function collectFromArray(array $lightsList)
    {
        if (empty($lightsList)) {
            throw new \Exception("Number of traffic lights can not be < 1");
        }
        if (!is_array($lightsList[0])) {
            throw new \Exception("Incorrect data structure, allowed format is [[X, Y], [X1, Y1], ..., [Xn, Yn]]");
        }
        $lightsCollection = [];
        foreach($lightsList as $i => $light) {
            if (count($light) !== 2) {
                throw new \Exception(($i+1) . " element of input array has incorrect value" );
            }
            $distance = (int)$light[0];
            $period = (int)$light[1];

            $lightsCollection[] = new self($distance, $period);
        }

        return $lightsCollection;
    }

    /**
     * @param int $sec
     * @return bool
     */
    public function willBeGreenAfterPeriod(int $sec): bool
    {
        if ($sec % $this->periodSec === 0) {
            return ($sec / $this->periodSec) % 2 === 0;
        }
        return ceil($sec / $this->periodSec) % 2 === 1;
    }
}
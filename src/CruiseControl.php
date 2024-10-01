<?php

class CruiseControl
{

    public function __construct(private int $maxSpeed = 200, private int $maxLightsCount = 9999) {}

    /**
     * @param int $maxSpeed
     * @param array $lightsList
     * @return int
     * @throws Exception
     */
    public function findMaxGreenWaveSpeed(int $maxSpeed, array $lightsList)
    {
        if ($maxSpeed > $this->maxSpeed) {
            throw new \Exception("Vehicle can not drive faster than " . $this->maxSpeed . ' km/h');
        }

        $lights = TrafficLight::collectFromArray($lightsList);
        if (count($lights) > $this->maxLightsCount) {
            throw new \Exception("Max traffic lights number is " . $this->maxLightsCount);
        }
        for($currentSpeed = $maxSpeed; $currentSpeed > 0; $currentSpeed--) {
            if ($this->allLightsAreGreenUsingSpeed($currentSpeed, $lights)) {
                return $currentSpeed;
            }
        }
        throw new Exception("It is impossible to pass all traffic lights on green with provided configuration");
    }

    /**
     * @param $speed
     * @param array $lights
     * @return bool
     * @throws Exception
     */
    public function allLightsAreGreenUsingSpeed($speed, array $lights)
    {
        /** @var TrafficLight $light */
        foreach($lights as $light) {
            if (!$light->willBeGreenAfterPeriod(
                PhysicsUtils::findTimeFromSpeedAndDistance($speed, $light->metersFromStart))
            ) {
                return false;
            }
        }
        return true;
    }

}
<?php

class PhysicsUtils
{
    /**
     * @param int $speed km/h
     * @param int $distance m
     * @return int
     * @throws Exception
     */
    public static function findTimeFromSpeedAndDistance(int $speed, int $distance): int
    {
        if ($speed <= 0) {
            throw new Exception('You\'ll never reach this distance');
        }
        return ceil($distance / 1000 / $speed * 60 * 60);
    }
}
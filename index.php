<?php

Class Speedometer {

    public const SPEED_CONVERTER = 0.621;

    public static function convertKmToMiles($speed)
    {
        return $speed * self::SPEED_CONVERTER;
    }
}

echo Speedometer::convertKmToMiles(10);
<?php


Class Speedometer
{

    public const KM = 0.621371;
    public const MI = 1.609343502101154;


    public static function convertToMiles(int $km): ?float
    {   
        return $km * self::KM;
    }

    public static function convertToKms(int $mi): ?float
    {   
        return $mi * self::MI;
    }
}
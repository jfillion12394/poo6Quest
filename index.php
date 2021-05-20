<?php

include "Speedometer.php";

//distance à convertir
calculTest(9);


function calculTest(float $valeurTest)
{
    //convertir miles en kilomètres
    echo ($valeurTest . " miles  = " . getKms($valeurTest) .  " kilometers") . PHP_EOL;

    //convertir kilomètres en miles
    echo ($valeurTest . " kilometers  = "  . getMiles($valeurTest) .  " miles") . PHP_EOL;
}



function getKms(int $unit): float
{
    return round(Speedometer::convertToKms($unit),4);
}

function getMiles(int $unit): float
{
    return round(Speedometer::convertToMiles($unit),4);
}
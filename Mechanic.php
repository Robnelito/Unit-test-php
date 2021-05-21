<?php
require_once("Car.php");

class Mechanic
{
    public function __construct()
    {
        
    }

    public function getAnomalies(\Car $car)
    {
        return $car->checkAnomalies();
    }

    public function fix(\Car $car, $anomalies)
    {
        $car->setState(10);
        return true;
    }
}
<?php
/**
 * @property int state
 */
class Car
{
    private $state;
    /**
     * 
     */
    public function __construct(int $state)
    {
        $this->state = $state;
    }

    /**
     * state getter
     * this function return the value of the car's state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * state setter
     * for modification 
     */
    public function setState(int $state)
    {
        $this->state = $state;
    }

    public function isBroken()
    {
        if ($this->state < 5) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkAnomalies()
    {
        if ($this->isBroken()) {
            $carAnomalies = ["Wheel", "Motor"];
            return $carAnomalies;
        } else {
            $carAnomalies = [];
            return $carAnomalies;
        }
    }
}
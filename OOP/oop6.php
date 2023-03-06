<?php

class Truck {

    public $fuelInTank;
    private $gallon;
    private $miles;

    function __construct($gallon,$miles){
        $this->gallon=$gallon;
        $this->miles=$miles;
        $this->fuel();
        $this->totalRide();
    }

    public function fuel()
    {
        return $this->fuelInTank += $this->gallon;
    }
    public function totalRide()
    {
        $gallons = $this->miles / 60;
        return $this->fuelInTank -= $gallons;
        
    }

}

$truck = new Truck(10,50);

echo "Fuel left: {$truck->fuelInTank} gallons";






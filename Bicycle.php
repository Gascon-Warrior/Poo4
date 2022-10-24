<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function __construct($color, $nbSeats){
        parent::__construct($color, $nbSeats);
               
     }
     public function changeWheel(): string{
        return 'Changed ! <br>';
    }
}
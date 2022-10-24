<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay{


    public function __construct(int $nbLanes, int $maxSpeed){
        parent::__construct($nbLanes, $maxSpeed);
    }
    public function addVehicles($vehicles){
      
        $currentVehicles [] = $vehicles;
        $this->setCurrentVehicles($currentVehicles);
        return 'Vehicule ajouté au tableau!!<br>' .  PHP_EOL;
    }
}
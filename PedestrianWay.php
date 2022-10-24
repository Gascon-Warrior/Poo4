<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay{

    public function __construct(int $nbLanes, int $maxSpeed){
        parent::__construct($nbLanes, $maxSpeed);
    }
            public function addVehicles($vehicles):string {
            if ($vehicles instanceof Truck) {          
                return 'Les camions sont interdits sur la voie pedestre <br>' .  PHP_EOL;
                
            }else if($vehicles instanceof Car){
                return 'Les voitures sont interdits sur la voie pedestre <br>' .  PHP_EOL;
            }else{
                $currentVehicles [] = $vehicles;
                $this->setCurrentVehicles($currentVehicles);
                return 'Vehicule ajouté!<br>' .  PHP_EOL;
            }
       
    }
}
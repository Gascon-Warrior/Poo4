<?php
require_once 'Bicycle.php';
require_once 'HighWay.php';
require_once 'Skateboard.php';



final class MotorWay extends HighWay{

    public string $owner;

    public function __construct(int $nbLanes, int $maxSpeed, string $owner){
        parent::__construct($nbLanes, $maxSpeed);
        $this->owner = $owner;
    }
    public function addVehicles($vehicles):string {
        if ($vehicles instanceof Bicycle) {          
            return 'Les vélos sont interdits sur l\'autoroute <br>' .  PHP_EOL;
            
        }else if($vehicles instanceof Skateboard){
            return 'Les skateboard sont interdits sur l\'autoroute <br>' .  PHP_EOL;
        }else{
            $currentVehicles [] = $vehicles;
            $this->setCurrentVehicles($currentVehicles);
            return 'Vehicule ajouté! <br>' .  PHP_EOL;
        }
    }
    public function getOwner():string {
        return $this->owner;
    }

    public function setOwner($owner):void{
        $this->owner = $owner;
    }
}
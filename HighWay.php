<?php
// require_once 'Vehicle.php';
abstract class HighWay{

    protected array $currentVehicles;
    protected int $nbLanes;
    protected int $maxSpeed;

    public function __construct(int $nbLanes, int $maxSpeed ){
        $this->nbLanes= $nbLanes;
        $this->maxSpeed= $maxSpeed;
    }

    abstract function addVehicles(Vehicle $vehicle);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
       $this->currentVehicles = $currentVehicles;
    }

    public function getnbLanes(): int
    {
        return $this->nbLanes;
    }

    public function setnbLanes($nbLanes): void
    {
       $this->$nbLanes = $nbLanes;
    }

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setmaxSpeed($maxSpeed): void
    {
       $this->$maxSpeed = $maxSpeed;
    }

}
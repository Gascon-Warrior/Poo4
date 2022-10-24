<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{

    private string $energy;

    private bool $hasParkBrake = true;

    private int $energyLevel = 40;
    // peut etre definie comme finale  en ajoutant le mot clef "final" au debut de la declaration de la constante de classe.
    // ainsi la constant ne pourra pas etre redefinie par les calsse enfant.
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function changeWheel(): string
    {
        return 'Changed !<br>' .  PHP_EOL;
    }

    public function start():string
    {

        try {
            if ($this->hasParkBrake == true) {
                throw new Exception("Attention le frein a main est enclenché");
            }
            $this->hasParkBrake = false;
            echo 'Start !' .  PHP_EOL;
        } catch (Exception $e) {
            echo 'Exception attrapée!! : ' . $e->getMessage() .PHP_EOL;    
            $this->setHasParkBrake(false);
        } finally {
            return 'Ma voiture roule comme un donut';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}

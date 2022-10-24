<?php

class Truck extends Vehicle{
    private int $capacity;

    private int $loading = 0;

    private string $energy;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'eclectric',
    ];

    public function __construct($color, $energy, $capacity, $nbSeats){
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function loadingLevel(): string{
        // si le chargement n'est pas complet la methode retourne in filling
        if($this->loading < $this->getCapacity()){
            return 'in filling !';
        }else{
            // si le chargement est complet  la methode retourne full
            return 'full !';
        }
    }

    public function getEnergy(): string{
        return $this->energy;
    }
    public function setEnergy(string $energy): string{
        return $this->energy = $energy;
    }

    public function getCapacity(): int{
        return $this->capacity;
    }
    public function setCapacity(int $capacity): int{
        return $this->capacity = $capacity;
    }

    public function getLoading(): int{
        return $this->loading;
    }
    public function setLoading(int $loading): int{
        // si le chargement est superieur a la capcité de chargement, definir le chargement a 0;
        if( $loading > $this->getCapacity()){        
            return 0;
        }else{       
            return $this->loading = $loading;
        }
    }
}
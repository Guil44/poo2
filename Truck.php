<?php
require_once 'Vehicule.php';

class Truck extends Vehicle
{

    private $StorageCapacity;
    private $Energy;
    private $charging = 0;




    public function setEnergy(string $Energy)
        {
            $this->energy = $Energy;
        }
        

    public function __construct(string $color, int $nbSeats, string $energy, int $StorageCapacity )
    {
        parent::__construct($color,$nbSeats);
    }


public function Chargement()
{
    if ($this->charging < $this->StorageCapacity)
    {
        return 'in filling';
    }
    else 
    {
        return 'full';
    }

}

public function getcharging(): int
    {
        return $this-> charging;
    }

    public function setcharging(int $charging): void
    {
        $this->charging = $charging;
    }


}

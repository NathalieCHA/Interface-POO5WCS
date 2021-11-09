<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Camion extends Vehicule implements LightableInterface

{
    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }

    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }


    public function getStorageCapacity(): int {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int {
        return $this->loading;
    }

    public function setLoading(int $loading): void {
        $this->loading = $loading;
    }

    public function isLoad(): string { 

        if ($this->storageCapacity > ($this->loading))
        {
            return "Is filling"; 
        }

        return "Is full";
    }
}
<?php

class PumpkinSpice_Decorator implements Component_Coffee
{
    protected $coffee;
    public function __construct(Component_Coffee $coffee)
    {
        $this->coffee = $coffee;
    }
    public function getCost(): float
    {
        return $this->coffee->getCost() + 1.0;
    }

    public function getDesc(): string
    {
        return $this->coffee->getDesc() . ", Pumpkin Spice Syrup";
    }
}
<?php

class SimpleCoffee_Concrete implements Component_Coffee
{

    public function getCost(): float
    {
        return 2.0;
    }

    public function getDesc(): string
    {
        return "Simple Coffee";
    }
}
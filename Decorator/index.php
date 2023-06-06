<?php
include ("Component_Coffee.php");
include ("SimpleCoffee_Concrete.php");
include ("PumpkinSpice_Decorator.php");
include ("ExtraShot_Decorator.php");

$coffee = new SimpleCoffee_Concrete();

$coffee = new PumpkinSpice_Decorator($coffee);
$coffee = new ExtraShot_Decorator($coffee);

echo "Coffee: " . $coffee->getDesc() . "<br>";
echo "Cost: " . $coffee->getCost() . "<br>";
?>
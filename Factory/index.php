<?php
include "Pizza_Factory.php";
//include "Pizza.php";
$factory = new Pizza_Factory();
$pizza = $factory->createPizza("Cheese");
$pizza->prepare();

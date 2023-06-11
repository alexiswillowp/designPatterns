<?php
include "CheesePizza.php";
include "VegiePizza.php";
//include "Pizza.php";
class Pizza_Factory {
    public function createPizza($type) {
        if($type === "Cheese") {
            return new CheesePizza();
        }
        elseif($type === "Vegie"){
            return new VegiePizza();
        }
    }
}
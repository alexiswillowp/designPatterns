<?php
include "Pizza.php";
class CheesePizza implements Pizza {
    public function prepare() {
        print("Preparing (etc) Cheese Pizza... <br>");
    }
    public function bake()
    {
        // TODO: Implement bake() method.
    }

    public function cut()
    {
        // TODO: Implement cut() method.
    }

    public function box()
    {
        // TODO: Implement box() method.
    }
}
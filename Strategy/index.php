<?php
//namespace Spacecraft\Swindon\CategoryStyling;
//
//use Spacecraft\Collections\IncidentalContent;
include("SortStrategyInterface.php");
include("SortByName.php");
include("SortByPrice.php");
$product = array(
    array('name' => 'Carrot', 'id' => 'V_001', 'cat' => 'Vegetable', 'price' => '0.59'),
    array('name' => 'Potato', 'id' => 'V_002', 'cat' => 'Vegetable', 'price' => '0.69'),
    array('name' => 'Onion', 'id' => 'V_003', 'cat' => 'Vegetable', 'price' => '0.45'),
    array('name' => 'Beet', 'id' => 'V_004', 'cat' => 'Vegetable', 'price' => '0.39'));
//    array('name' => 'Radish', 'id' => 'V_005', 'cat' => 'Vegetable', 'price' => '0.14'),
//    array('name' => 'Apple', 'id' => 'F_001', 'cat' => 'Fruit', 'price' => '1.19'),
//    array('name' => 'Pear', 'id' => 'F_002', 'cat' => 'Fruit', 'price' => '0.89'),
//    array('name' => 'Orange', 'id' => 'F_003', 'cat' => 'Fruit', 'price' => '1.05'),
//    array('name' => 'Bananna', 'id' => 'F_004', 'cat' => 'Fruit', 'price' => '0.59'),
//    array('name' => 'Peach', 'id' => 'F_0015', 'cat' => 'Fruit', 'price' => '1.33'),
//    array('name' => 'Oats', 'id' => 'G_001', 'cat' => 'Grain', 'price' => '0.49'),
//    array('name' => 'Rice', 'id' => 'G_002', 'cat' => 'Grain', 'price' => '0.74'),
//    array('name' => 'Quinoa', 'id' => 'G_003', 'cat' => 'Grain', 'price' => '0.89'));

function pr($data)
{
    echo "<pre>";
    print_r($data); // or var_dump($data);
    echo "</pre>";
}

pr($product);
$sorter = new SortByName();
$product = $sorter->sort($product);
pr($product);
$sorter = new SortByPrice();
$product = $sorter->sort($product);
pr($product);
?>
<?php
//include("SortStrategyInterface.php");
class SortByName implements SortStrategyInterface
{
    protected function sortName($i, $j) {
        $a = $i['name'];
        $b = $j['name'];
        if ($a == $b){
            return 0;
        }
    return ($a < $b) ? -1 : 1;
    }

    public function sort($product) {
        uasort($product, array($this, 'sortName'));
        //uasort - php function that sorts an array with a user defined comparison function
        //          and maintains the original index association
        return $product;
    }
}
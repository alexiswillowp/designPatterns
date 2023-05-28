<?php
//include("SortStrategyInterface.php");
//If I leave this in, php complains tha tthere's already an instance of it? but says its fine if not?
class SortByPrice implements SortStrategyInterface
{
    protected function sortPrice($i, $j){
        $a = $i['price'];
        $b = $j['price'];
        if ($a == $b){
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    public function sort(array $product)
    {
        uasort($product, array($this, 'sortPrice'));
        //uasort - php function that sorts an array with a user defined comparison function
        //          and maintains the original index association
        return $product;
    }
}
<?php
class TestClass
{
    public function filterPrices($minPrice,$maxPrice, $items){
        $result =[];
        foreach ($items as $item){
            if(isset($item->price) && $item->price <= $maxPrice && $item->price >= $minPrice ){
               $result[$item->price][] = $item;
            }
            if(isset($item->prices)){
                foreach ($item->prices as $item_prices){
                    if($item_prices->price <= $maxPrice && $item_prices->price >= $minPrice){
                        $result[$item_prices->price][] = $item;
                    }
                }
            }
        }
        ksort($result);
        return $result;
    }
}

$obj = new TestClass();
print_r($obj->filterPrices(100,200, $items));


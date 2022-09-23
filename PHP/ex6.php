<?php
global $item;
getMinPrice($item);
function getMinPrice($item) {
    $mass = (array)$item->prices;
    return formatprice(min($mass));
}
function formatPrice($price) {
    return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',',$price);
}
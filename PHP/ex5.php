<?php
global $items;
var_export(test($items));
function test($items) {
	$sites = [];
	foreach($items as $item) {
		preg_match('/(site1\.ru)/', $item->site, $matches);
        $matches ? $sites[] = 'site1.ru' : $sites[] = 'site2.ru';
	}
	return $sites;
}
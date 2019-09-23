<?php

$cipele = array();
$cipele[0] = 'Gucci';
$cipele[1] = 'Adidas';
$cipele[2] = 'Nike';
$cipele[3] = 'Puma';
$cipele[4] = 'Vans';

$cipele5 = [1 => 'Gucci', 12 => 'Adidas', 23 => 'Nike', 34 => 'Puma', 45 => 'Vans'];

echo '<pre>';
print_r($cipele5);
echo '</pre>';

echo 'Element polja $cipele sa na drugom mjestu je '. $cipele[1].'.<br>';

echo 'Polje $cipele sastoji se od ' . count($cipele) . ' elemenata.<br><br>';

$cipele2 = array();
$cipele2[] = 'Gucci';
$cipele2[] = 'Adidas';
$cipele2[] = 'Nike';
$cipele2[] = 'Puma';
$cipele2[] = 'Vans';

$cipele3 = array('Gucci', 'Adidas', 'Nike', 'Puma', 'Vans');

$cipele4 = ['Gucci', 'Adidas', 'Nike', 'Puma', 'Vans'];

for ($i=0; $i < count($cipele4); $i++) { 
    echo $cipele4[$i].'<br>';
}

echo '<br>';

foreach ($cipele5 as $key => $value) {
    echo $key . ' - ' . $value.'<br>';
}
<?php

$lista = file('https://www.hnb.hr/tecajn/htecajn.htm');

echo '<pre>';
//print_r($lista);
echo '</pre>';

array_shift($lista);

foreach ($lista as $key => $value) {
    
    if(strpos($value, 'USD')){
        $dolar = explode('       ', $value);
        print_r($dolar);
    }

    $value_array = explode('       ', $value);
    $valuta = substr($value_array[0], 3, 3);
    $srednji_tecaj = str_replace(',','.',$value_array[2]);

    echo "$valuta - " . round($srednji_tecaj,3) . "<br>";
}




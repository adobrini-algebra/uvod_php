<?php

$lista = file_get_contents('https://www.hnb.hr/tecajn/htecajn.htm');

$lista_json = file_get_contents('http://api.hnb.hr/tecajn/v1');

$lista_json = json_decode($lista_json);

echo '<pre>';
var_dump($lista_json);
echo '</pre>';

echo $lista_json[0]->Država;
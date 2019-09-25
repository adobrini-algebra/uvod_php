<?php

function autor($autor){

    $autor_array = explode(',', $autor);
    //print_r($autor_array);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    $ime_slovo = strtoupper(substr($ime, 0, 1));
    $prezime = ucfirst(strtolower($prezime));

    return $ime_slovo . '. ' . $prezime;
}

echo autor('pEric,pEro');
// P. Peric
echo '<br>';
echo autor('markic,MARKO');
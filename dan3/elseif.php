<?php

$naziv = 'Algebra';

$duljina = strlen($naziv);

echo $duljina;

echo '<br>';

if (strlen($naziv) > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina >= 5 && $duljina <= 10){
    echo 'Naziv je u zadanom nizu između 5 i 10 znakova';
}else{
    echo 'naziv je pre kratak';
}

echo '<br>';

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina == 9 ){
    echo 'Naziv ima 9 znakova';
}elseif($duljina == 8){
    echo 'Naziv ima 8 znakova';
}elseif($duljina == 7){
    echo 'Naziv ima 7 znakova';
}elseif($duljina == 6){
    echo 'Naziv ima 6 znakova';
}else{
    echo 'naziv je pre kratak';
}

echo '<br>';
echo '<br>';

$a = '';
$b = '';

if (empty($a)) {
    if (empty($b)) {
        echo 'Varijabka B je prazna<br>';
        echo 'Varijabka A je prazna<br>';
    }else{
        echo 'Varijabka B NIJE prazna<br>';
        echo 'Varijabka A je prazna<br>';
    }
}else{
    if (empty($b)) {
        echo 'Varijabka B je prazna<br>';
        echo 'Varijabka A NIJE prazna<br>';
    } else {
        echo 'Varijabka A NIJE prazna<br>';
        echo 'Varijabka B NIJE prazna<br>';
    }
}

if (empty($a) && empty($b)) {
    echo 'Varijabka B je prazna<br>';
    echo 'Varijabka A je prazna<br>';
}elseif(empty($a) && !empty($b)){
    echo 'Varijabka B NIJE prazna<br>';
    echo 'Varijabka A je prazna<br>';
}
elseif(!empty($a) && empty($b)){
    echo 'Varijabka B je prazna<br>';
    echo 'Varijabka A NIJE prazna<br>';
}elseif(!empty($a) && !empty($b)) {
    echo 'Varijabka A NIJE prazna<br>';
    echo 'Varijabka B NIJE prazna<br>';
}
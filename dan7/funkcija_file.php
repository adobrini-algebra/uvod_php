<?php

$file = file('podaci.txt');

foreach ($file as $broj_retka => $redak) {
    echo $broj_retka+1 . ' - ' . $redak;
}
<?php

$a = 1;
$b = 1;

while ($a <= 10) {
    while ($b <= 10) {
        echo 'b='.$b;
        $b++;
    }
    $a++;
    echo '<br>';
    $b = 1;
}
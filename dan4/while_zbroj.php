<?php

$i = 1;
$result = 0;

// zbraja sve brojeve od 1 do 10
while ($i <= 10) {

    echo $result .' + ' . $i . ' = ';
    $result += $i;
    echo $result.'<br>';
    $i++;
}

// Tablica množenja
$a = 1;
$b = 1;
echo '<table border="1">';
while ($a <= 10) {
    echo '<tr>';
    while ($b <= 10) {
        echo '<td>'.$a*$b.'</td>';
        $b++;
    }
    echo '</tr>';
    $a++;
    $b = 1;
}
echo '</table>';
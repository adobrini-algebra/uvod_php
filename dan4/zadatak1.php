<?php

// ispisati brojeve između 1 i 100 koji su djeljivi sa 3

// 1. Ispišite brojeve od 1 do 100 pomoću neke petlje

// 2. Pomoću If statementa i operatora modulo ispišite samo ond dijeljive sa 3

for ($i=3; $i < 100; $i+=3) {
    echo $i.'<br>';
}

echo '<p>Drugi primjer</p>';

for ($i=1; $i < 100; $i++) { 
    if ($i % 3 == 0) {
        echo $i.'<br>';
    }
}
<?php

function hr_dan(){

    $dan = date('N');

    switch($dan) {
        case 1:
            echo '<p>Danas je ponedjeljak</p>';
        break;
        case 2:
            echo '<p>Danas je utorak</p>';
        break;
        case 3:
            echo '<p>Danas je srijeda</p>';
        break;
        case 4:
            echo '<p>Danas je četvrtak</p>';
        break;
        case 5:
            echo '<p>Danas je petak</p>';
        break;
        case 6:
            echo '<p>Danas je subota</p>';
        break;
        case 7:
            echo '<p>Danas je nedelja</p>';
        break;
    }
}

hr_dan();
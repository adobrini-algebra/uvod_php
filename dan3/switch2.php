<?php

$vrijeme = time();


echo date('d.m.Y H:i:s', $vrijeme);




// Zad 1.
// Napraviti kod da kada se pokrene ispiše u
// kojem smo kvartalu godine na temelju trenutnog vremena

$mjesec = date('n');

switch($mjesec) {
	case 1:// fall through
	case 2:
	case 3:
		echo '<p>1. kvartal</p>';
	break;
	case 4:// propadanje
	case 5:
	case 6:
		echo '<p>2. kvartal</p>';
	break;
	case 7:// propadanje
	case 8:
	case 9:
		echo '<p>3. kvartal</p>';
	break;
	case 10:// propadanje
	case 11:
	case 12:
		echo '<p>4. kvartal</p>';
	break;
	default:
		echo '<p>Mjesec ne postoji</p>';
	break;
}
// isto kao case 1-3 i switch statementu iznad
if ($mjesec == 1 || $mjesec == 2 || $mjesec == 3) {
    echo '<p>1. kvartal</p>';
}

# Rjesenje 2

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

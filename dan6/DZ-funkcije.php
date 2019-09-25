// Napraviti funkciju koja ima 3 ulazna parametra
// autor (npr. peric,pero), prikaz i veličina slova
// Prikaz ima dvije opcije (1.Samo početno slovo imena + prezime 2. Puno ime)
// inicijalna veličina velika slova - zadani parametar
// Ispisati imena 3 autora

1. p. peric
2. pero peric
3. P. PERIC
4. PERO PERIC

<?php

function autor($ime_autora, $prikaz, $velicina = 'V'){
	 
	$autor_array = explode(',', $ime_autora);
    $ime = $autor_array[1];
	$prezime = $autor_array[0];
	
	switch ($prikaz) {
		case 'inicijal':
			$autor_ispis = substr($ime, 0, 1) . '. ' . $prezime;
			break;
		case 'puno_ime':
			$autor_ispis = $ime . ' ' . $prezime;
			break;
		default:
			$autor_ispis = '';
			break;
	}
/*
	if ($prikaz == 'inicijal') {
		$autor_ispis = substr($ime, 0, 1) . '. ' . $prezime;
	}elseif($prikaz == 'puno_ime'){
		$autor_ispis = $ime . ' ' . $prezime;
	}
*/
	switch ($velicina) {
		case 'V':
			$autor_ispis = strtoupper($autor_ispis);
			break;
		case 'M':
			$autor_ispis = strtolower($autor_ispis);
			break;
		default:
			$autor_ispis = '';
			break;
	}
	return $autor_ispis;
}

echo autor('perić,pero', 'inicijal', 'M');
echo autor('perić,pero', 'puno_ime', 'V');

/*
function ispisAutora($author, $display, $case){

	$author_array = explode(',',$author);
  
	if ($case === 0) {
	  $ime = strtolower($author_array[1]);
	  $prezime = strtolower($author_array[0]);
	}else {
	  $ime = strtoupper($author_array[1]);
	  $prezime = strtoupper($author_array[0]);
	}
	if ($display === 0) {
	  return '<p>'.substr($ime,0,1).'. '.$prezime.'</p>';
	}else {
	  return '<p>'.$ime.' '.$prezime.'</p>';
	}
}

echo ispisAutora('PERIC,PERO',0,0);
echo ispisAutora('PERIC,PERO',0,1);
echo ispisAutora('PERIC,PERO',1,0);
echo ispisAutora('PERIC,PERO',1,1);
*/

// Napuniti polje s 10 elemenata
// Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
// Izbrisati prvi i zadnji element polja
// Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
// Sortirati polje uzlazno
// Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez

<?php 

$a = array();
$a[] = 'Pero';
$a[] = 'Ana';
$a[] = 'Marko';
$a[] = 'Iva';
$a[] = 'Ivan';
$a[] = 'Kruno';
$a[] = 'Božica';
$a[] = 'Davor';
$a[] = 'Filip';
$a[] = 'Kristina';

$counter = 1;

foreach ($a as $key => $value) {

    if ($counter < count($a) ) {
        $value .= ', ';
    }
    $counter++;
    echo $value;
}

array_pop($a);
array_shift($a);

$counter = 1;
foreach ($a as $key => $value) {

    if ($counter < count($a) ) {
        $value .= ', ';
    }
    $counter++;
    echo $value;
}

sort($a);

$imena = implode(',', $a);
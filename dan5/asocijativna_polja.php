<?php

$korisnik1 = array('ime' => 'Ivo','prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik2 = array('ime' => 'Pero','prezime' => 'Perić', 'dob' => 28, 'mjesto' => 'Zagreb');

$korisnik3 = array();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';


foreach ($korisnik2 as $kljuc => $podatak_o_korisniku) {
    if ($kljuc == 'prezime') {
        echo $podatak_o_korisniku;
    }
}

echo '<pre>';
print_r($korisnik1);
echo '</pre>';

?>

<table width="50" border="1">
    <!-- ZAGLAVLJE TABLICE -->
    <tr>
        <?php
            foreach ($korisnik3 as $key => $value):
        ?>
            <th><?php echo $key ?></th>
        <?php
            endforeach;
        ?>
    </tr>
    <!-- PODATCI O KORISNIKU -->
    <tr>
        <td><?php echo $korisnik3['ime'] ?></td>
        <td><?php echo $korisnik3['prezime'] ?></td>
        <td><?php echo $korisnik3['dob'] ?></td>
        <td><?php echo $korisnik3['mjesto'] ?></td>
    </tr>
</table>
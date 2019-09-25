<?php

$polaznici[1]['ime'] = 'Ana';
$polaznici[1]['prezime'] = 'Anić';
$polaznici[1]['placa'] = '5687.45';

$polaznici[2]['ime'] = 'Pero';
$polaznici[2]['prezime'] = 'Perić';
$polaznici[2]['placa'] = '3687.45';

$polaznici[3]['ime'] = 'Marko';
$polaznici[3]['prezime'] = 'Markić';
$polaznici[3]['placa'] = '4687.45';

/*
$polaznik1 = array('ime' => 'Ana', 'prezime' => 'Anić', 'placa' => '5,687.45');
$polaznici = array($polaznik1, $polaznik2, $polaznik2):
*/

function pp($array){
    if (is_array($array)) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }else{
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }
}

function format_hr_placa($placa){
    $placa_hr = str_replace('.',',', $placa) . ' HRK';
    return $placa_hr;
}

?>

<table width="500" border="1">
    <tr>
        <td>R.B.</td>
        <td>Ime</td>
        <td>Prezime</td>
        <td>Plaća</td>
    </tr>
    <?php
    foreach ($polaznici as $key => $polaznik) {
    ?>
    <tr>
        <td><?php echo $key.'.' ?></td>
        <td><?php echo $polaznik['ime'] ?></td>
        <td><?php echo $polaznik['prezime'] ?></td>
        <td><?php echo format_hr_placa($polaznik['placa']) ?></td>
    </tr>
    <?php
    }
    ?>
</table>



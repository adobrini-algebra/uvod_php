<form method="POST">
    <p>
        <label for="ime">Ime:</label>
        <input type="text" name="ime" >
    </p>
    <p>
        <label for="prezime">Prezime:</label>
        <input type="text" name="prezime" >
    </p>
    <p>
        <input type="submit" name="submit" value="Pošalji">
    </p>
</form>

<?php

if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    if (!empty($_POST['ime']) && !empty($_POST['prezime'])){
        echo "Ime: $_POST[ime]<br>";
        echo "Prezime: $_POST[prezime]<br>";
    }else{
        echo 'Popunite sva polja!';
    }
}
<?php

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

//pp($_POST);

if (isset($_POST['submit'])) {
    $rezultat = $_POST['djeljenik'] / $_POST['djelitelj'];
}



?>

<form action="" method="POST">
    <p>
        <label for="djeljenik">Djeljenik</label>
        <input type="text" name="djeljenik" id="djeljenik" placeholder="<?php isset($_POST['djeljenik']) ? print $_POST['djeljenik'] : '' ?>">
        <!--
        <select name="" id="">
            <option value="zbrajanje">+</option>
            <option value="oduzimanje">-</option>
        </select>
        -->
        :
        <input type="text" name="djelitelj" id="djelitelj" placeholder="<?php echo $_POST['djelitelj'] ?>">
        <label for="djelitelj">Djelitelj</label>
    </p>
    <p>
        <label for="rezultat">Rezultat:</label>
        <input type="text" name="rezultat" id="rezultat" value="<?php echo $rezultat ?>">
    </p>
    <p>
        <input type="submit" name="submit" value="Podjeli">
    </p>
</form>


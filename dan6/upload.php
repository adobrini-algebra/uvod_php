<form action="" method="POST" enctype="multipart/form-data">
    <h4>Upload</h4>
    <input type="file" name="datoteka" id="datoteka">
    <br>
    <br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php

    echo '<pre>';
    //print_r($_FILES);
    echo '</pre>';

if (isset($_REQUEST['upload'])) {
    
    $upload_path = 'uploads/';

    $filename = $_FILES['datoteka']['name'];
    $tmpname = $_FILES['datoteka']['tmp_name'];
    $error = $_FILES['datoteka']['error'];
    $size = $_FILES['datoteka']['size'];

    if ($error == UPLOAD_ERR_OK && $size != 0) {
        
        $path = pathinfo($filename);
        //print_r($path);
        $ext = $path['extension'];
        $new_name = time().rand(10000, 10000000) .'.'. $ext;
        $destfile = $upload_path.$new_name;

        if(move_uploaded_file($tmpname, $destfile)){
            echo 'Upload je uspješan! <br>';
            echo "<a href=$destfile>Prikaži originalnu sliku</a>";
            echo "<p><img src=$destfile width=200></p>";
        }else{
            echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
        }

    }else{
        echo 'Došlo je do pogreške prilikom Upload-a!';
    }
}

<?php

$file = 'podaci.txt';

$handle = fopen($file, 'r');
$fsize = filesize($file);

$contents = fread($handle, $fsize);

fclose($handle);

echo $contents;
<?php

$handle = fopen('podaci.txt', 'a');
fwrite($handle, "\nJasna Jasnić");
fwrite($handle, "\nZorana Zoranić");
fclose($handle);
<?php

for ($i=0; $i < 10; $i++) {  
    echo '<br>';
    for ($j=1; $j <= 10; $j++) { 
        
        if ($j == 8) {
            continue 2;
        }
        echo '  '.$j;
    }
   
}
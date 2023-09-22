<?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    foreach ($array as $x){
        if ($x >= 100 && $x <=200 && $x%5 ==0){
            echo $x;
            echo '<br>';
        }
        
    }
?>
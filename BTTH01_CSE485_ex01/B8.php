<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $length_array = [];
    foreach($array as $x){
        array_push($length_array,strlen($x)) ;
    }
    // var_dump($length_array);
    // foreach($length_array as $x){
    //     echo $x. " " ;
    // }
    for ($i =0; $i < count($length_array); $i++){
        if ($length_array[$i] == max($length_array))
            echo "Chuỗi lớn nhất là <span style = 'font-style : italic'>".$array[$i]."</span>, độ dài = ".$length_array[$i];
        else if ($length_array[$i] == min($length_array))
            echo "Chuỗi nhỏ nhất là <span style = 'font-style : italic'>".$array[$i].", độ dài = ".$length_array[$i]."<br>";
    }

?>
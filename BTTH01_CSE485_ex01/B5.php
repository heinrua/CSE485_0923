<?php 
    $a = [
        'a' => ['b' => 0,'c' => 1],
        'b' => ['e' => 2,'o' => ['b' => 3]]];

    echo "Giá trị 3 có key là b: <br>";
    echo "Giá trị 3 có key là b: <br>";
    echo "Thông tin phần tử có key là a: ";
    foreach ($a as $key => $value){
        if ($key == 'a') echo strval($value);
    }
?>
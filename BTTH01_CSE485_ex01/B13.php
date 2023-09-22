<?php 
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $sum = array_sum($numbers);
    $count = count($numbers);
    $trungbinh = $sum / $count;
    echo "Giá trị trung bình của mảng là: ". $trungbinh;
    echo "<br> Các số có giá trị lớn hơn giá trị trung bình: ";
    foreach ($numbers as $x){
        if ($x > $trungbinh){
            echo $x." ";
        }
    }
    echo "<br> Các số có giá trị nhỏ hơn giá trị trung bình: ";
    foreach ($numbers as $x){
        if ($x > $trungbinh){
            echo $x." ";
        }
    }

?>
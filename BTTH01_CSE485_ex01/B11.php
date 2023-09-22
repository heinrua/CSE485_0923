<?php 
    $array = [1,2,3,4,5];

// Xóa phần tử thứ ba
    array_splice($array, 2, 1);

// Đảm bảo key của mảng tuần tự
    $array = array_values($array);
    echo'<pre>';
    print_r($array);
    echo'<pre>';
?>
<?php 
    $arr1 = ['1','b','c','d'];
    $arr2 = ['a',0,null,false];
    function convertToToupper($arr){
    for ($i =0 ; $i < count($arr); $i++){
        if (is_string($arr[$i])){
            $arr[$i] = strtoupper($arr[$i]);}
        
    } return $arr;
    }
    echo '<pre>';
    print_r(convertToToupper($arr1));
    echo '<pre>';
    print_r(convertToToupper($arr2));
?>
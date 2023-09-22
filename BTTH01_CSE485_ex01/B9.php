<?php 
    $arr1 = ['1','B','C','D'];
    $arr2 = ['A',0,null,false];
    function convertTolower($arr){
    for ($i =0 ; $i < count($arr); $i++){
        if (is_string($arr[$i])){
            $arr[$i] = strtolower($arr[$i]);}
        
    } return $arr;
    }
    echo '<pre>';
    print_r(convertTolower($arr1));
    echo '<pre>';
    print_r(convertTolower($arr2));
?>
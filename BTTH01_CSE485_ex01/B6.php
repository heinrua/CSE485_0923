<?php 
    $keys = [
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    ];

    echo "<br>";
    $values = [
        "field1value"=>"dinosaur", 
        "field2value"=>"pig",
        "field3value"=>"platypus"
    ];
    $keysAndValues = [];
    foreach ($keys as $key => $value) {
        $keysAndValues[$value] = $values[$key . 'value'];
    }
    
    echo '<pre>';
    print_r($keysAndValues);
    echo '<pre>';
    
?>
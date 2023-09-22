<?php 
    $arrs = ["Italy" => "Rome",
            "Luxembourg" => "Luxembourg",
            "Belgium" =>"Brussels", 
            "Denmark" => "Copenhagen", 
            "Finland" => "Helsinki", 
            "France" => "Paris", 
            "Slovakia" => "Bratislava", 
            "Slovenia" => "Ljubljana", 
            "Germany" => "Berlin",
            "Greece" => "Athens", 
            "Ireland" => "Dublin", 
            "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon",    
            "Spain" => " Madrid", 
            "Sweden" => "Stockholm", 
            "United Kingdom" => "London", 
            "Cyprus" => "Nicosia", 
            "Lithuania" => "Vilnius", 
            "Czech Republic" => "Prague", 
            "Estonia" => "Tallin", 
            "Hungary" => "Budapest", 
            "Latvia" => "Riga", 
            "Malta" => "Valetta", 
            "Austria" => "Vienna", 
            "Poland " => "Warsaw"];
    foreach ($arrs as $country => $capital){    //$arrs là mảng hoặc đối tượng muốn lặp qua, $country là biến để lưu trữ giá trị của key, $capital là biến lưu trữ giá trị của phần tử trong mảng
        echo "Thủ đô của ".$country." là ".$capital ."<br>";
    }
?>

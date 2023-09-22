<?php 
        $numbers = [
            'key1' => 12,
            'key2' => 30,
            'key3' => 4,
            'key4' => -123,
            'key5' => 1234,
            'key6' => -12565,
        ];

        echo "Phần tử đầu tiên: " . reset($numbers) . "<br>";
        echo "Phần tử cuối cùng: " . end($numbers) . "<br>";

        echo "Số lớn nhất: " . max($numbers) . "<br>";
        echo "Số nhỏ nhất: " . min($numbers) . "<br>";
        echo "Tổng các giá trị: " . array_sum($numbers) . "<br>";

        echo "Sắp xếp mảng theo chiều tăng value: <br>";
        asort($numbers); // Sắp xếp tăng dần
        foreach ($numbers as $key => $value) {
            echo "[{$key}] => {$value}<br>";
        }

        echo "Sắp xếp mảng theo chiều giảm value: <br>";
        arsort($numbers); // Sắp xếp giảm dần
        foreach ($numbers as $key => $value) {
            echo "[{$key}] => {$value}<br>";
        }

        echo "Sắp xếp mảng theo chiều tăng key: <br>";
        ksort($numbers); // Sắp xếp tăng dần theo key
        foreach ($numbers as $key => $value) {
            echo "[{$key}] => {$value}<br>";
        }

        echo "Sắp xếp mảng theo chiều giảm key: <br>";
        krsort($numbers); // Sắp xếp giảm dần theo key
        foreach ($numbers as $key => $value) {
            echo "[{$key}] => {$value}<br>";
        }
?>
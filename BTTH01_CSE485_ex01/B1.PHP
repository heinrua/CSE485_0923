<?php 

    $arrs = [2,5,6,9,2,5,6,12,5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
        <table style="border: none;">
            <tr>
                <td>Tổng các phần tử</td>
                <td>= 
                    <?php 
                        echo $arrs[0];
                        for ($i=1; $i < count($arrs);$i++){
                            echo " + ".$arrs[$i];
                        }
                        echo " = ". array_sum($arrs);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tích các phần tử</td>
                <td>=
                <?php 
                        echo $arrs[0];
                        for ($i=1; $i < count($arrs);$i++){
                            echo " * ".$arrs[$i];
                        }
                        echo " = ". array_product($arrs);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Hiệu các phần tử</td>
                <td>=
                <?php   
                        $hieu = $arrs[0];
                        echo $arrs[0];
                        for ($i=1; $i < count($arrs);$i++){
                            echo " - ".$arrs[$i];
                            $hieu = $hieu - $arrs[$i];
                        }
                        echo " = ". $hieu;
                    ?>
                </td>
            
            </tr>
            <tr>
                <td>Thương các phần tử</td>
                <td>=
                <?php   
                        $thuong = $arrs[0];
                        echo $arrs[0];
                        for ($i=1; $i < count($arrs);$i++){
                            echo " / ".$arrs[$i];
                            $thuong = $thuong / $arrs[$i];
                        }
                        echo " = ". $thuong;
                    ?>
                </td>
            </tr>
        </table>
</body>
</html>
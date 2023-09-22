<?php 
    $arrs = ['PHP', 'HTML', 'CSS', 'JS']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border-collapse:collapse ;">
        <tr style="border: 2px solid black;"><td style="font-weight:bold;">Tên khóa học</td></tr>
        <?php 
            foreach ($arrs as $arr){
        ?>
        <tr style="border: 2px solid black;">
            <td ><?php echo $arr; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
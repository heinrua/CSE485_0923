<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
        include "layer_admin/header_ad.php";
        $ma_tloai = $_GET['id'];
        try{
            $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
            $sql = "SELECT * FROM theloai_data WHERE theloai_data.ma_tloai = $ma_tloai";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            $theloai_data = $stmt ->fetch();

        }
        catch(PDOException $e){
            $e ->getMessage();
        }
        ?>
    <div class="container">
        <center><b>SỬA THÔNG TIN THỂ LOẠI</b></center>
        <form action="process_edit.php" method="post">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text">Mã thể loại</span>
                <input type="text" class="form-control"  value="<?php echo $theloai_data['ma_tloai']; ?>" readonly>
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text">Tên thể loại</span>
                <input type="text" class="form-control" name="ten_tloai" value="<?php echo $theloai_data['ten_tloai'];?>">
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-success" name="submit">Lưu</button> 
                <a href="category.php" class="btn btn-warning text-body">Quay lại</a>
            </div>
        </form>
    </div>

    <?php
        include "layer_admin/footer_ad.php";
        ?>
</body>
</html>

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
        $tieude= "THÊM TÁC GIẢ";
        include "../Views/menu.php";
        ?>
    <div class="container">
        <center><b class="text-success">THÊM TÁC GIẢ MỚI</b></center>
        <form action="../controllers/TacGiaController.php?" method="post">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text">Tên Tác Giả</span>
                <input type="text" class="form-control" name="tenTacGia">
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-success" name="submit">Thêm</button> 
                <a href="GDQuanLyTacGia.php" class="btn btn-warning text-body">Quay lại</a>
            </div>
        </form>
    </div>
   


</body>
</html>
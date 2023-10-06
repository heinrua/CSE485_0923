
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sách</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
        $tieude = 'SÁCH';
        include "menu.php"; 
    
        ?>
     <div class="container">
    <a href="GDAddSach.php"> <button type="submit" class="btn btn-success mt-5">Thêm mới</button></a>
    <table class="table mt-4">
        <thead>
            <tr>
            <th scope="col">Mã sách</th>
            <th scope="col">Tên sách</th>
            <th scope="col">Năm xuất bản</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($Sachs as $sach){
            ?>
            <tr>
            <th scope="row"><?php echo $sach->getIdSach();?></th>
            <td><?php echo $sach->getTenSach();?></td>
            <td><?php echo $sach->getNamXuatBan();?></td>
            <td><?php echo $sach->getIdTG();?></td>
            <td><a href="../publics/GDEditSach.php?id=<?php $id=$sach->getIdSach(); echo $id;?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
            </tr>
            <?php }
             ?>
        </tbody>
        </table>
    </div>
</body>
</html>
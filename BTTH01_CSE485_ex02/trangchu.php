<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        include "layer/tieude.php";
    ?>
    <div class="row">
        <img class="col-12" src="image/poster.png" alt="">
    </div>
    <div>
        <center class="text-primary mt-3">TOP BÀI HÁT YÊU THÍCH</center>
        <div class="container-fluid">
            <ul class="navbar list-unstyled">
                <li class="col-md-3">
                    <img src="image/cay_la_gio.png" alt="" class= "w-100">
                    <a href="detail.php"><center class="text-primary mt-3">Cây, lá và gió</center></a>
                </li>
                <li class="col-md-3">
                    <img src="image/cuoc_song_men_thuong.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Cuộc sống mến thương</center></a>
                </li>
                <li class="col-md-3">
                    <img src="image/long_me.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Lòng mẹ</center></a>
                </li>
                
                <li class="col-md-3">
                    <img src="image/Phôi_pha.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Phôi pha</center></a>
                </li>
                <li class="col-md-3">
                    <img src="image/love_start.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Nơi tình yêu bắt đầu</center></a>
                </li>
            </ul> 
        </div>
    </div>
    <?php 
        include "layer/tieude2.php";
    ?>
</body>
</html>

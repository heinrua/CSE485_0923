<?php

    $conn = mysqli_connect("localhost","root","","user");
    //hostname, username, pass, database
    // truy cập vào database: có thể thay bằng đc ip nếu database nằm ở máy khác, root là username quản trị csdl có thể thay đổi 
    if(!$conn){
        die('Connection Failed'. mysqli_connect_error());
    }
    // nếu kết nối thất bại thì dừng thực thi và báo lỗi 
    // !$conn tương đương vs $conn== false hoặc $conn= !=true

 
?>

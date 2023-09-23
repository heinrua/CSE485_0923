<?php

    $conn = mysqli_connect("localhost","root","","user");
    //hostname, username, pass, database
    // truy cập vào database: có thể thay bằng đc ip nếu database nằm ở máy khác, root là username quản trị csdl có thể thay đổi 
    if(!$conn){
        die('Connection Failed'. mysqli_connect_error());
    }
    // nếu kết nối thất bại thì dừng thực thi và báo lỗi 
    // !$conn tương đương vs $conn== false hoặc $conn= !=true

    session_start();
    //require 'conn.php';

    if(isset($_POST['edit_user'])){

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

        $f_name = mysqli_real_escape_string($conn,$_POST['f_name']);
        $l_name = mysqli_real_escape_string($conn,$_POST['l_name']);
        $u_name = mysqli_real_escape_string($conn,$_POST['u_name']);
        $e_mail = mysqli_real_escape_string($conn,$_POST['e_mail']);
        $p_number= mysqli_real_escape_string($conn,$_POST['p_number']);
        $p_ostion = mysqli_real_escape_string($conn,$_POST['p_ostion']);
        $gen_der = mysqli_real_escape_string($conn,$_POST['gen_der']);
        $d_time = mysqli_real_escape_string($conn,$_POST['d_time']);
        $f_url = mysqli_real_escape_string($conn,$_POST['f_url']);
        $t_url = mysqli_real_escape_string($conn,$_POST['t_url']);
        $l_url = mysqli_real_escape_string($conn,$_POST['l_url']);
        $about_y= mysqli_real_escape_string($conn,$_POST['about_y']);
        $pass= mysqli_real_escape_string($conn,$_POST['pass']);

        $query = "Update set users first_name = '$f_name',first_name = '$f_name',last_name = '$l_name',user_name = '$u_name',email = '$e_mail',phone_number = '$p_number',rule = '$p_ostion',gender = '$gen_der',
        date_of_time = '$d_time',facebook_url = '$f_name',twitter_url = '$t_url',likedin_url = '$l_url',about_self = '$about_y',password = '$pass' where id= '$user_id' ";
        
        

    }


    if(isset ($_POST['add_user'])){
        $f_name = mysqli_real_escape_string($conn,$_POST['f_name']);
        $l_name = mysqli_real_escape_string($conn,$_POST['l_name']);
        $u_name = mysqli_real_escape_string($conn,$_POST['u_name']);
        $e_mail = mysqli_real_escape_string($conn,$_POST['e_mail']);
        $p_number= mysqli_real_escape_string($conn,$_POST['p_number']);
        $p_ostion = mysqli_real_escape_string($conn,$_POST['p_ostion']);
        $gen_der = mysqli_real_escape_string($conn,$_POST['gen_der']);
        $d_time = mysqli_real_escape_string($conn,$_POST['d_time']);
        $f_url = mysqli_real_escape_string($conn,$_POST['f_url']);
        $t_url = mysqli_real_escape_string($conn,$_POST['t_url']);
        $l_url = mysqli_real_escape_string($conn,$_POST['l_url']);
        $about_y= mysqli_real_escape_string($conn,$_POST['about_y']);
        $pass= mysqli_real_escape_string($conn,$_POST['pass']);

        $query = "Insert into users (first_name, last_name, username, email, phone_number, role, gender, date_of_birth, facebook_url, twitter_url, linkedin_url, about_self, password) values
            ('$f_name','$l_name','$u_name','$e_mail','$p_number','$p_ostion','$gen_der','$d_time','$f_url','$t_url','$l_url','$about_y','$pass')";
        
        $query_run = mysqli_query($conn, $query);
        if ($query_run){
            $_SESSION['message']= "Thêm người dùng mới thành công";
            header("Location: AddUser.php");
            exit(0);
        }
        else{
            $_SESSION['message']= "Thêm người dùng mới không thành công";
            header("Location: AddUser.php");
            exit(0); 
        };
    }
?>

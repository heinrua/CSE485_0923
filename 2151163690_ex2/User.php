<?php 
    require 'add_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    
    <?php
        $title= 'Users';
    ?>
    <?php include "Layer/header.php"?>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light rounded p-3" style="height: fit-content; margin-top:70px;" >
                <?php include "Layer/Menu.php";?>
            </div>
            <div class="col-md-9 pt-0" style="margin-top:75px;">
                <div class="container">
                
                <div class="rounded bg-light w-100 p-2 mt-5 ">
                    <div class=" d-flex justify-content-between align-items-center"style="border-bottom: 1px solid black;">
                        <span class="text-danger" style="font-weight: bold;">
                            User
                        </span>
                        <div class="row d-flex align-items-center mb-4">
                                <div class="col-md-4"><button class="bg-light border border-danger text-danger rounded ">Delete</button></div>    
                                <div class="col-md-8">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="/Program/2151163690_ex2/AddUser.php" target="_blank"><button type="button" class="btn btn-primary bg-danger text-light">Add User</button></a>
                                        <button type="button" class="btn btn-primary bg-danger text-light">+</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="mt-5 bg-light">
                    <table class="table bg-light">
                        <thead>
                            <tr>
                            <th scope="col"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php 
                                    $query = "Select id,first_name, last_name, username, gender from users";
                                    $query_run = mysqli_query($conn, $query); //trả về một object 

                                    if(mysqli_num_rows($query_run)>0){
                                        foreach($query_run as $users){           //duyệt mảng query_run để lấy từng mảng 1 
                                           ?> 
                            <tr>
                                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                                    <th><?php echo $users["id"];?></th>
                                    <th><?php echo $users["first_name"];?></th>
                                    <th><?php echo $users["last_name"];?></th>
                                    <th><?php echo $users["username"];?></th>
                                    <th><?php echo $users["gender"];?></th>
                                    <th>
                                        <a href="Edit_user.php?id=<?php echo $users['id'];?>"><i class="bi bi-pencil"></i></a>
                                        <a href="" data-bs-toggle="modal" data-bs-target="<?php echo $users['id'];?>"><i class="bi bi-trash"></i></a>
                                    </th>
                                </tr>
                                        <?php
                                        }
                                    }
                                    else {
                                        echo "<h5> No record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                    </table>
                    
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
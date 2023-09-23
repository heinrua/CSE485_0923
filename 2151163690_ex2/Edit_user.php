<?php
    session_start();
    require 'conn.php';
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
        $title= 'Edit User ';
    ?> 
    <?php include "Layer/header.php"?> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light rounded p-3" style="height: fit-content; margin-top:75px;" >
                <?php include "Layer/Menu.php";?>
            </div>
            <div class="col-md-9 pt-0" id="content" style="margin-top: 75px;">
                <div class="container">
                    
                <div class="rounded bg-light w-100 p-4 mt-5 ">
                    <div class=" d-flex justify-content-between align-items-center"style="border-bottom: 1px solid gray;">
                        <span class="text-danger h3" style="font-weight: bold;">
                            New User Form
                        </span>   
                    </div>
                    <?php 
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($conn,$_GET['id']);
                            $query = "select * from users where id= '$user_id'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>



                    <form action="add_db.php" method="post" class="text-secondary ">
                        <div class="row mt-4">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="">First Name <span class="text-danger">*</span></label> <br>
                                        <input type="text" name="f_name" id="" value="<?php echo $user['first_name']; ?>" class="form-control " placeholder="First Name">
        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name <span class="text-danger">*</span></label> <br>
                                        <input type="text" name="l_name" id="" value="<?php echo $user['last_name']; ?>" class="form-control " placeholder="Last Name">
                                        
                                    </div>
                            </div> 
                                <label for="" class="mt-4">User Name <span class="text-danger">*</span></label> <br>
                                <input type="text" name="u_name" id="" value="<?php echo $user['username']; ?>" class="form-control " placeholder="User Name" required>
                                
                                <label for=""class="mt-4">Email <span class="text-danger">*</span></label> <br>
                                <input type="email" name="e_mail" id="" value="<?php echo $user['email']; ?>" class="form-control " placeholder="Email" required>
                               
                                <label for=""class="mt-4">Phone Number <span class="text-danger">*</span></label> <br>
                                <input type="number" name="p_number" id="" value="<?php echo $user['phone_number']; ?>" class="form-control " placeholder="Phone Number" required>
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <label for="">Role <span class="text-danger">*</span></label> <br>
                                <select class="custom-select form-control " value="<?php echo $user['role']; ?>" name="p_ostion" required>
                                    <option selected>Select the Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Manager">Mangager</option>
                                    <option value="Customer">Customer</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                <label for="">Gender <span class="text-danger">*</span></label> <br>
                                <select class="form-control "  name="gen_der" required>
                                    <option selected value="<?php echo $user['gender']; ?>">Choose gender</option>
                                    <option value="M">Male</option>
                                    <option value="L">Female</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                <label for="">Date of Birth <span class="text-danger">*</span></label> <br>
                                <input type="datetime" name="d_time" id="" value="<?php echo $user['date_of_birth']; ?>" class="form-control" required>
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <label for="">Facebook Url</label> <br>
                                <input type="text" name="f_url" id="" value="<?php echo $user['facebook_url']; ?>" class="form-control" placeholder="Facebook Url">
                            </div>
                            <div class="col-md-4">
                                <label for="">Twitter Url</label> <br>
                                <input type="text" name="t_url" id="" value="<?php echo $user['twitter_url']; ?>" class="form-control" placeholder="Twitter Url">
                            </div>
                            <div class="col-md-4">
                                <label for="">Linkedin Url</label> <br>
                                <input type="text" name="l_url" value="<?php echo $user['linkedin_url']; ?>" id="" class="form-control" placeholder="Linkedin Url">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="">About</label> <br>
                            <textarea class="form-control" value="<?php echo $user['about_self']; ?>" name="about_y" id="exampleFormControlTextarea1" rows="5" placeholder="Write About Yourself..."></textarea>
                        </div>
                        <label for="">Password</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Password" name="pass" value="<?php echo $user['password']; ?>">
                                <span class="input-group-text"><i class="bi bi-eye-slash"></i></span>
                            </div>
                     
                        <button type="submit" name="edit_user" class="btn btn-success mt-4 mb-5">Save</button>
                        <a href="User.php"><button type="button" class="btn btn-danger mt-4 mb-5">Cancel</button></a>
                    </form>
                    <?php
                            }
                            else{
                                echo "<h4>No such ID Found </h4";
                            }
                        }
                    ?>
                </div>

</body>
</html>
<?php
require_once'../dbcom.php';
session_start();
if(isset($_SESSION['student_login'])){
     header('location:index.php');
 }
 if(isset($_POST['stu_reg'])){

    $fname = $_POST['fname'] ;
    $lname  = $_POST['lname'];
    $email  = $_POST['email']; 
    $password = $_POST['password'] ;
    $confirm_password = $_POST['confirm_password'] ;
    $username = $_POST['username'];
    $roll = $_POST['roll'] ;
    $reg = $_POST['reg']; 
    $phone = $_POST['phone'] ;
    $stu_reg = $_POST['stu_reg'] ;

    $email_query = "SELECT * FROM `students_reg` WHERE `email` = '$email' ";
    $email_check = mysqli_query($con,$email_query);
    $email_check_row = mysqli_num_rows($email_check);
    
    if($email_check_row == 0){
         $user_query = "SELECT * FROM `students_reg` WHERE `username` = '$username' ";
         $user_check = mysqli_query($con, $user_query);
         $user_check_row = mysqli_num_rows($user_check);

         if($user_check_row == 0){

            if(strlen($password) >= 7){
                  if($password == $confirm_password){
                       //$password_hash = password_hash($password, PASSWORD_DEFAULT);
                        $query="INSERT INTO students_reg(`fname`, `lname`, `roll`, `reg`, `email`, `username`, `password`, `phone`,`status`) value('$fname','$lname','$roll','$reg','$email','$username','$password','$phone',0)";
                        $createquery= mysqli_query($con,$query);
                         if($createquery){
                             $success="Registration Successfully";
                          }else{
                          $error ="Data not Save";
                          }

                  }
                  else{
                     $passError="password and confirmpassword not matching";
                  }
                       
                }
            else {
                $passlen = "password more than 8 characters";
            }
         }
         else
          {   
              $user_exists = "user name already exists";
          }

    }
    else{
        $email_exists = "This email already exists";
        
    }

   
    /*
     echo '<pre>';
     print_r($_POST);
     echo '</pre>';
     */
 }

?>



<!doctype html>
<html lang="en" class="fixed accounts sign-in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Library Management System</title>
    <link rel="apple-touch-icon" sizes="120x120" href="../asserts/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../asserts/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asserts/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asserts/favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../asserts/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../asserts/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../asserts/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../asserts/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="../asserts/images/logo-dark.png" />
              <?php
                if(isset($success)){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong><?= $success ?></strong> 
                   </div>
                <?php
                }
              
           ?>
           <?php
                if(isset($error)){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong><?= $error ?></strong> 
                   </div>
                <?php
                }
              
           ?>
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="post"  action="<?= $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                             <?php
                                   if(isset($email_exists)){
                                    ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $email_exists ?></strong> 
                                        </div>
                                   <?php
                                    }    
                                ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <i class="fa fa-key"></i>       
                            </span>
                             <?php
                                   if(isset($passlen)){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $passlen ?></strong> 
                                        </div>
                                   <?php
                                    }    
                                ?>
                            
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                <i class="fa fa-key"></i>
                            </span>
                             <?php
                                   if(isset($passError)){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $passError ?></strong> 
                                        </div>
                                   <?php
                                    }    
                                ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                            <?php
                                   if(isset($user_exists)){
                                    ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $user_exists ?></strong> 
                                        </div>
                                   <?php
                                    }    
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="roll"  pattern="[0-9]{6}"  placeholder="roll" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="reg"  pattern="[0-9]{6}" placeholder="Reg. No " required>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="phone"  pattern="01[5|7|8|9|6][0-9]{8}" placeholder="01*******" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="terms" value="option1">
                                <label class="check" for="terms">I agree </label>  to the <a href="#">Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="stu_reg" value="Register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="pages_sign-in.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="../asserts/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="../asserts/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../asserts/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="../asserts/javascripts/template-script.min.js"></script>
<script src="../asserts/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>



</html>

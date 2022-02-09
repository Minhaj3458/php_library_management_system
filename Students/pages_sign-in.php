

<?php
require_once'../dbcom.php';
session_start();
if(isset($_SESSION['student_login'])){
     header('location:index.php');
 }
 if(isset($_POST['Sign_in'])){
    $email  = $_POST['email']; 
    $password = $_POST['password'] ;
    $text_query = "SELECT * FROM `students_reg` WHERE `email` = '$email' or `username` = '$email' ";
    $text_check = mysqli_query($con,$text_query);
    $text_check_row = mysqli_num_rows($text_check);
    if($text_check_row == 1){
        $row = mysqli_fetch_assoc($text_check);
        if($password == $row['password']){
             if($row['status'] == 1){
                 $success = "login successfully";
                 $_SESSION['student_login'] = $email ;
                 $_SESSION['student_id'] = $row['id'];
                 header('location: index.php');
             }
             else{
                 $status_error = "contact authority";
             }
         }
         else{
            $pass_error = "password not matching";
        }
         /*
        if( password_verify($password, $row['password'])){
            echo "ok";
        }
        else{
            $pass_error = "password not matching";
        }
        */
    }
    else{
         $text_error = "email and username not matching";
    }
 }
?>


<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Library Management System</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
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
                if(isset($status_error)){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong><?= $status_error ?></strong> 
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
                                <input type="text" class="form-control" name="email" placeholder="Email or UserName" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                             <?php
                                   if(isset($text_error)){
                                    ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $text_error ?></strong> 
                                        </div>
                                   <?php
                                    }    
                                ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <i class="fa fa-key"></i>
                            </span>
                            <?php
                                   if(isset($pass_error)){
                                    ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong><?= $pass_error ?></strong> 
                                        </div>
                                   <?php
                                    }    
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                             <input type="submit" name="Sign_in" value="Sign in" class="btn btn-primary btn-block">
                        </div>
                        <div class="form-group text-center">
                            <a href="pages_forgot-password.html">Forgot password?</a>
                            <hr/>
                             <span>Don't have an account?</span>
                            <a href="pages_register.php" class="btn btn-block mt-sm">Register</a>
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

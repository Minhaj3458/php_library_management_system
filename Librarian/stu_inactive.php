<?php
require_once'../dbcom.php';
 
$id_No = base64_decode( $_GET['id_']);

$text_query = "UPDATE `students_reg` SET `status`= '0' WHERE `id` = '$id_No' ";
$text_check = mysqli_query($con,$text_query);
header('location:students.php');

  
?>
<?php
require_once'../dbcom.php';


 if(isset($_GET['book_id_'])){
    $id_No = base64_decode($_GET['book_id_']);
    $query = "DELETE FROM books WHERE id={$id_No}";
    $delete_data= mysqli_query($con,$query);
    header('location:Manage_Book.php');


 }

?>
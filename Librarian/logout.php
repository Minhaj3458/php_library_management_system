<?php
session_start();
session_destroy();
header('location:Librarian_sign-in.php');
?>
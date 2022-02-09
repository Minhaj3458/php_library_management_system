<?php
require_once'../dbcom.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print </title>
    <style type="text/css">
         body{
             margin:0;
             font-family:kalpurush;
         }
         .print_area{
            width:755px;
            height:1050px;
            margin:auto;
            box-sizing: border-box;
            page-break-after: always;
         }
         .header, .page_info{
               text-align: center;
         }
         .header h3{
               margin:0;
         }
         .data-info{

         }
         .data-info table{
            width:100%;
            border-collapse: collapse;
         }
        .data-info table th,
        .data-info table td
        { 
            border: 1px solid #555;
            padding:4px;
            Line-height: 1em;

         }

    </style>
</head>
<!-- onload="window.print()" -->
<body  onload="window.print()" >
    <div class="print_area">
        <?php
         $sl=1;
         $page=1;
         $par_page =3;
         $text_query = "SELECT * FROM `students_reg`";
         $text_check = mysqli_query($con,$text_query);
         $total = mysqli_num_rows($text_check);
       
           while ($row = mysqli_fetch_assoc($text_check)){
               if($sl % $par_page == 1){
                    echo page_header();
               }
                                        ?>
                                   <tr>
                                       <td><?=$sl ?></td>
                                     <td><?=ucwords($row['fname'].'   '.$row['lname'])?></td>
                                            <td><?= $row['roll']?></td>
                                            <td><?= $row['reg']?></td>
                                            <td><?= $row['email']?></td>
                                            <td><?= $row['username']?></td>
                                            <td><img src="../Upload_Images/Books_image/<?= $row['img']?>" alt=""> </td>
                                 </tr>
                                 <?php
                                 if($sl % $par_page == 0 or $total == $par_page){
                                     echo page_footer($page++);
                                 }

                                 $sl++;
           }                
                                            
          ?>
        
                
        </div>

    </div>
</body>
</html>

<?php

 function page_header(){
     $data='<div class="header">
            <h3>Minhaj IT, Chittagong</h3>
            <h3>Bangladesh</h3>
        </div>
        <div class="data-info">
            <table>
                <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Reg. No</th>
                    <th>Email</th>
                    <th>UserName</th>
                    <th>Image</th>
                </tr> ';
     return $data;
 }
 function page_footer($page){
     $data='  </table>
     <div class="page_info">
             <p>page :-'.$page.'</p>
            </div>' ;
      
     return $data;
 }

?>

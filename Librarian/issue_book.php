<?php
require_once'header.php';

if(isset($_POST['save_issue_book'])){
    //$student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $book_issue_date = $_POST['book_issue_date'];
    $text_query = "INSERT INTO `issue_book`(`student_id`, `book_id`, `book_issue_date`) VALUES ('$student_id','$book_id','$book_issue_date')";
    $text_check = mysqli_query($con,$text_query);
    $Book_qty_query = "UPDATE `books` SET `available_qty`= available_qty - 1 WHERE `id` = $book_id ";
    $Book_qty_update = mysqli_query($con, $Book_qty_query);
    if($text_check){
         ?>
            <script type="text/javascript">
                alert('Book Issued Successully!');
            </script>
         <?php 
    }else{
     ?>
          <script type="text/javascript">
                alert('Book Not Issue!');
            </script>
   <?php
    }
}
?>
    <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                             <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Issue Book</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                 <!--INLINE-->
                <div class="col-sm-6 col-md-6 col-sm-offset-3">
                    <h4 class="section-subtitle"><b></b> </h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-inline" action="" method="POST" >
                                        <h5 class="mb-lg "></h5>
                                        <div class="form-group">
                                        
                                           <select class="form-control" name="student_id">
                                               <option value=""> select</option>
                                                    <?php
                                                       $text_query = "SELECT * FROM `students_reg`";
                                                       $text_check = mysqli_query($con,$text_query);
                                                      while ($row = mysqli_fetch_assoc($text_check)){
                                                        ?>
                                                         <option  value="<?= $row['id'] ?>"> <?=
                                                         ucwords($row['fname']." ".$row['lname']."-(".$row['roll'].")" ) ?>  </option>
                                                        <?php
                                                        }
                                                     ?>
                                               

                                           </select>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="search" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                               if(isset($_POST['search'])){
                                    $id = $_POST['student_id'];
                                    $text_query = "SELECT * FROM `students_reg` WHERE `id`= {$id} ";
                                    $text_check = mysqli_query($con,$text_query);
                                    $row = mysqli_fetch_assoc($text_check);
                                    ?>
                                      <div class="row animated fadeInUp">
                <!--BASIC-->
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="email">Student Name</label>
                                            <input type="taxt" class="form-control" id="email" name="student_name" value="<?=  ucwords($row['fname']." ".$row['lname'] ) ?>" readonly>
                                            <input type="hidden" class="form-control" id="email" name="student_id" value="<?=  $row['id'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                             <label for="">Book Name</label>
                                            <select class="form-control" name="book_id" required>
                                               <option value=""> select</option>
                                                    <?php
                                                       $text_query = "SELECT * FROM `books` WHERE `available_qty` > 0";
                                                       $text_check = mysqli_query($con,$text_query);
                                                      while ($row = mysqli_fetch_assoc($text_check)){
                                                        ?>
                                                         <option  value="<?= $row['id'] ?>"> <?=
                                                         ucwords($row['book_name'])?>  </option>
                                                        <?php
                                                        
                                                        }
                                                        
                                                     ?>
                                               

                                           </select>
                                             
                                        </div>
                                        <div class="form-group">
                                            <label for="">Book Issue Date</label>
                                            <input type="taxt" class="form-control" id="email" name="book_issue_date" value="<?= date('m-D-Y H:i A:s') ?>" readonly>
                                           
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="save_issue_book" class="">Save Issue Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                    <?php                                  
                               }
                            ?>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>


<?php
require_once'footer.php';

?>
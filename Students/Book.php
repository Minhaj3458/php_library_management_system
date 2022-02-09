<?php
require_once'header.php';
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
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Tast</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                  
            <div class="animated fadeInUp">
                <!--SEARCH-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-content">
                                <form class="" action="" method="POST">
                                    <div class="row pt-md">
                                        <div class="form-group col-sm-9 col-lg-10">
                                                <span class="input-with-icon">
                                            <input type="text" class="form-control" id="lefticon" placeholder="Search" name="search_value" required>
                                            <i class="fa fa-search"></i>
                                        </span>
                                        </div>
                                        <div class="form-group col-sm-3  col-lg-2 ">
                                            <button type="submit" class="btn btn-primary btn-block" name="search">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                 <!--RESULTS-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php
                                   if(isset($_POST['search'])){
                                      $search_value = $_POST['search_value'];
                                      $text_query = "SELECT * FROM `books` WHERE `book_name`
                                       LIKE '$search_value' ";
                                      $text_check = mysqli_query($con,$text_query);
                                      $temp = mysqli_num_rows($text_check);
                                      if($temp > 0){?>
                                       <?php
                                        while ($row = mysqli_fetch_assoc($text_check)){
                                        ?>
                                         <div class="col-lg-3">
                                        <img style="width:200px; height:250px;"
                                             src="../Upload_Images/Books_image/<?= $row['book_image']?>" alt="img">
                                        <h2 class="p-10"><?= $row['book_name']?></h2>
                                        <h5><?= $row['available_qty']?></h5>
                                       </div>
                                       <?php
                                         }
                                       
                                         ?>
                                    
                                       <?php
                                       }else{
                                            echo "<h1> Data not Found </h1>";
                                           
                                       }
                                      
                                   }
                                   else{
                                      $text_query = "SELECT * FROM `books`";
                                      $text_check = mysqli_query($con,$text_query);
                                      while ($row = mysqli_fetch_assoc($text_check)){
                                          ?>
                                        <div class="col-lg-3">
                                       <img style="width:200px; height:250px;"
                                             src="../Upload_Images/Books_image/<?= $row['book_image']?>" alt="img">
                                       <h2 class="p-10"><?= $row['book_name']?></h2>
                                        <h5><?= $row['available_qty']?></h5>
                                       </div>
                                     <?php
                                      }

                                   }
                                
                                ?>
                               
                              
                                


                            </div>
                        </div>
                    </div>

                </div>
<?php
require_once'footer.php';
?>
<?php
require_once'header.php';
?>
 

         <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                       <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
          
        <!-- RIGHT SIDEBAR -->
        <!-- ========================================================= -->
           
            <div class="row animated fadeInRight">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Return Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Phone </th>
                                        <th>Book Name</th>
                                        <th>Book Image </th>
                                        <th>Book Issue Date</th>
                                        <th>Return Book</th>

                
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                          <?php
                                      $text_query = "SELECT `issue_book`.`book_id`,`issue_book`.`id`,`issue_book`.`book_issue_date`, `students_reg`.`fname`, `students_reg`.`lname`,`students_reg`.`phone`, `students_reg`.`roll`, `books`.`book_name`,`books`.`book_image` FROM `issue_book` INNER JOIN `students_reg` ON `students_reg`.`id` = `issue_book`.`student_id` INNER JOIN `books` ON `books`.`id` = `issue_book`.`book_id` WHERE `issue_book`.`book_return_date` = '' ";

                                      $text_check = mysqli_query($con,$text_query);
                                      while ($row = mysqli_fetch_assoc($text_check)){
                                          ?>
                                          <tr>
                                            <th><?=ucwords($row['fname'].'   '.$row['lname'])?></th>
                                            <th><?= $row['roll']?></th>
                                            <th><?= $row['phone']?></th>
                                            <th><?= $row['book_name']?></th>
                                           <th><img style="width:100px; height:100px;" src="../Upload_Images/Books_image/<?= $row['book_image']?>" alt=""> </th>
                                            <th><?= $row['book_issue_date']?></th>
                                             <th><a href="return_book.php?id=<?= $row['id'] ?>&book_id=<?= $row['book_id']?>  ">Return</a></th>
                                         </tr>    
                                      <?php
                                      }
                                    ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
              if(isset($_GET['id'])){
                  $id = $_GET['id'];
                  $book_id = $_GET['book_id'];
                  $date = date('d-M-Y');
                  $text_query = "UPDATE `issue_book` SET `book_return_date`='$date' WHERE `id`=$id
                  ";
                  $text_check = mysqli_query($con,$text_query);
                
                  if($text_check){
                        $Book_qty_query = "UPDATE `books` SET `available_qty`= available_qty + 1 WHERE `id` =   $book_id ";
                        $Book_qty_update = mysqli_query($con, $Book_qty_query);
                       ?> 
                       
                         <script>
                             javascript:history.go(-1);
                         </script>
                      <?php
                  }
                  else{
                     ?>
                         <script>
                             alert("something wrong");
                         </script>
                      <?php
                      
                    
                  }
              }
            
            ?>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>
                <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                    <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                </div>
                <div id="right-nav" class="nano">
                    <div class="nano-content">
                        <div class="template-settings">
                            <h4 class="text-center">Template Settings</h4>
                            <ul class="toggle-settings pv-xlg">
                                <li>
                                    <h6 class="text">Header fixed</h6>
                                    <label class="switch">
                                        <input id="header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Content header fixed</h6>
                                    <label class="switch">
                                        <input id="content-header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar collapsed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-collapsed" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar Top</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-top" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar fixed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar over</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-over" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar nav left-lines</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-left-lines" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                            </ul>
                            <h4 class="text-center">Template Colors</h4>

                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_green.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_green-light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_green.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_dark/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_white.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_dark.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_blue-dark/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_blue.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_blue-light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_blue.png" /></a>
                                </div>
                            </div>
                            <div class="row mt-lg">
                                <div class="col-sm-12 text-center">
                                    <a  target="_blank" href="http://myiideveloper.com/helsinki/last-version/documentation/index.html"><h5> <i class="fa fa-book mr-sm"></i>Online Documentation</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php
require_once'footer.php';

?>
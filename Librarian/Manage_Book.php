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
                              <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Manage Books</a></li>
                        </ul>
                    </div>
                </div>
                       <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
          
        <!-- RIGHT SIDEBAR -->
        <!-- ========================================================= -->
           
            <div class="row animated fadeInRight">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Manage Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Book Name</th>
                                        <th>Book Image</th>
                                        <th>Book Author Name</th>
                                        <th>Book Publication Name</th>
                                        <th>Book Purchase Date</th>
                                        <th>Book Price</th>
                                        <th>Book Quantity</th>
                                        <th>Available Quantity</th>
                                        <th>Libraian Username</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                          <?php
                                      $text_query = "SELECT * FROM `books`";
                                      $text_check = mysqli_query($con,$text_query);
                                      while ($row = mysqli_fetch_assoc($text_check)){
                                          ?>
                                          <tr>
                                            <td><?= $row['id']?></td>
                                            <td><?=ucwords($row['book_name'])?></td>
                                            <td> <img style="width:150px;"
                                             src="../Upload_Images/Books_image/<?= $row['book_image']?>" alt="img"></td>
                                            <td><?= $row['book_author_name']?></td>
                                            <td><?= $row['book_publication_name']?></td>
                                            <td><?= date('d-M-Y', strtotime($row['book_purchase_date']))    ?></td>
                                            <td><?= $row['book_price']?></td>
                                            <td><?= $row['book_qty']?></td>
                                            <td><?= $row['available_qty']?></td>
                                            <td><?= $row['libraian_username']?></td>
                                            <td>
                                                 <a href="javascript:avoid(0)" class="btn btn-info" data-toggle="modal" data-target="#book-<?= $row['id']?>" ><i class="fa fa-eye"></i></a>
                                                <a href="javascript:avoid(0)"
                                                data-toggle="modal" data-target="#book-update<?= $row['id']?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                 <a href="delete_book.php? book_id =<?=   base64_encode($row['id'])  ?> " class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                              
                                             
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
                 $text_query = "SELECT * FROM `books`";
                 $text_check = mysqli_query($con,$text_query);
                 while ($row = mysqli_fetch_assoc($text_check)){

                 ?>
                 
             <!-- Modal -->
                            <div class="modal fade" id="book-<?= $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-info">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Book Info</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-bordered">
                                              <tr>
                                                <th>id</th>
                                                <td><?= $row['id']?></td>
                                              </tr>
                                              <tr>
                                                <th>Book Name</th>
                                                <td><?=ucwords($row['book_name'])?></td>
                                              </tr>
                                               <tr>
                                                 <th>Book Image</th>
                                                   <td> <img style="width:50px;"
                                                  src="../Upload_Images/Books_image/<?= $row['book_image']?>" alt="img"></td>
                                           
                                              </tr>
                                              <tr>
                                                  <th>Book Author Name</th>
                                                   <td><?= $row['book_author_name']?></td>      
                                              </tr>
                                               <tr>
                                                  <th>Book Publication Name</th>
                                                  <td><?= $row['book_publication_name']?></td>
                                              </tr>
                                               <tr>
                                                 <th>Book Purchase Date</th>
                                                 <td><?= date('d-M-Y', strtotime($row['book_purchase_date']))    ?></td>
                                              </tr>
                                               <tr>
                                                  <th>Book Price</th>
                                                   <td><?= $row['book_price']?></td>
                                              </tr>
                                               <tr>
                                                 <th>Book Quantity</th>
                                                  <td><?= $row['book_qty']?></td>
                                              </tr>
                                              <tr>
                                                  <th>Available Quantity</th>
                                                   <td><?= $row['available_qty']?></td>                                       
                                              </tr>
                                               <tr>
                                                  <th>Libraian Username</th>
                                                  <td><?= $row['libraian_username']?></td>
                                              </tr>        
                                                                       
                                          </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
              <?php
                 }
                 ?>






            <?php
                 $text_query = "SELECT * FROM `books`";
                 $text_check = mysqli_query($con,$text_query);
                 while ($row = mysqli_fetch_assoc($text_check)){
                     $book_id = $row['id'];
                     $query = "SELECT * FROM `books` WHERE id={$book_id}";
                     $updata = mysqli_query($con, $query);
                     $Book_row = mysqli_fetch_assoc($updata);
                 ?>
                
                  
             <!-- Modal -->
                            <div class="modal fade" id="book-update<?= $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-info">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title " id="modal-info-label"><i class="fa fa-book"></i>Book Info</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                          <form class="form-horizontal" method="post"   action="<?= $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
                                          <h5 class="mb-lg ms-20">Update Books</h5>
                                           <div class="form-group">
                                            <label for="book_name" class="col-sm-4 control-label">Book Name</label>
                                             <div class="col-sm-6">
                                                <input type="taxt" class="form-control" id="book_name" name="book_name" value="<?= $Book_row ['book_name']?>"  required>
                                             </div>
                                           </div>
                                           <input type="hidden" class="form-control" name="book_id" value="<?= $Book_row ['id']?>" required>
                                           <div class="form-group">
                                            <label for="book_image" class="col-sm-4 control-label">Book Image</label>
                                            <div class="col-sm-6">
                                                <input type="file" class="form-control" id="book_image" name="new_image" value="<?= $Book_row ['book_image']?>" >
                                                <img name="old_image" style="width:200px"src="../Upload_Images/Books_image/<?=  $Book_row ['book_image']?>" alt="">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="book_author_name" class="col-sm-4 control-label">Book Author Name</label>
                                                <div class="col-sm-6">
                                                    <input type="taxt" class="form-control" id="book_author_name" name="book_author_name" value="<?=  $Book_row ['book_author_name']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="book_publication_name" class="col-sm-4 control-label">Book Publication Name</label>
                                                <div class="col-sm-6">
                                                    <input type="taxt" class="form-control" id="book_publication_name" name="book_publication_name" value="<?=  $Book_row ['book_publication_name']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="book_purchase_date" class="col-sm-4 control-label">Book Purchase Date</label>
                                                <div class="col-sm-6">
                                                    <input type="date" class="form-control" id="book_purchase_date" name="book_purchase_date" value="<?=  $Book_row ['book_purchase_date']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="book_price" class="col-sm-4 control-label">Book Price</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" id="book_price" name="book_price" value="<?=  $Book_row ['book_price']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="book_qty" class="col-sm-4 control-label">Book Quantity</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" id="book_qty" name="book_qty" value="<?= $Book_row ['book_qty']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="available_qty" class="col-sm-4 control-label">Available Quantity</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" id="available_qty" name="available_qty" value="<?=  $Book_row ['available_qty']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="libraian_username" class="col-sm-4 control-label">Libraian Username</label>
                                                <div class="col-sm-6">
                                                    <input type="taxt" class="form-control" id="libraian_username" name="libraian_username" value="<?= $Book_row ['libraian_username']?>" readonly >
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-10">
                                                    <button type="submit" class="btn btn-primary" name="update_Book"> Update Book</button>
                                                </div>
                                            </div>

                                         </form>
                                        </div>
                                     </div>
                                </div>
                            </div>
              <?php
                 }
                 if(isset($_POST['update_Book'])){
                        $book_id = $_POST['book_id'];
                        $book_name = $_POST['book_name'];
                        $old_image =  $_FILES['old_image'];
                        $new_image = $_FILES['new_image'];
                       
                        $book_author_name = $_POST['book_author_name'];
                        $book_publication_name = $_POST['book_publication_name'];
                        $book_purchase_date = $_POST['book_purchase_date'];
                        $book_price = $_POST['book_price'];
                        $book_qty = $_POST['book_qty'];
                        $available_qty = $_POST['available_qty'];
                        $libraian_username = $_POST['libraian_username'];
                      
                       /* if($new_image != ''){
                             $file_name = $new_image['tmp_name'];
                             $destination = $new_image['name'];                          
                        }
                        else{
                            $destination = $old_image ;
                        }
                        if(file_exists('../Upload_Images/Books_image/'.$destination)){

                        }
                        else{    
                        }*/
                        $query="UPDATE `books` SET `book_name`='$book_name',`book_image`='$destination',`book_author_name`='$book_author_name',`book_publication_name`='$book_publication_name',`book_purchase_date`='$book_purchase_date',`book_price`='$book_price',`book_qty`='$book_qty',`available_qty`='$available_qty',`libraian_username`='$libraian_username' WHERE `id`= $book_id ";
                         $createquery= mysqli_query($con,$query);
                                if($createquery){      
                                    move_uploaded_file($file_name,'../Upload_Images/Books_image/'.$destination);                    
                                    $success_alt = "Data Successfully Save";
                                }else{
                                    $error_alt = "Data not Save";
                                }
                       
                    }
                 ?>

           
             
<?php
require_once'footer.php';

?>
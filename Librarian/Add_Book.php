<?php
require_once'header.php';
require_once'../dbcom.php';
if(isset($_POST['Save_Book'])){
    $book_name = $_POST['book_name'];
    $book_image = $_FILES['book_image'];
    $file_name = $book_image['tmp_name'];
    $destination = $book_image['name'];
    
   // $_POST['book_image'];
    $book_author_name = $_POST['book_author_name'];
    $book_publication_name = $_POST['book_publication_name'];
    $book_purchase_date = $_POST['book_purchase_date'];
    $book_price = $_POST['book_price'];
    $book_qty = $_POST['book_qty'];
    $available_qty = $_POST['available_qty'];
    $libraian_username =  $_SESSION['librarian_username'];

    $query="INSERT INTO `books`(`book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_qty`, `available_qty`,`libraian_username`) value('$book_name','$destination','$book_author_name','$book_publication_name','$book_purchase_date','$book_price','$book_qty','$available_qty','$libraian_username')";
     $createquery= mysqli_query($con,$query);
     if($createquery){
        move_uploaded_file($file_name,'../Upload_Images/Books_image/'.$destination);
        $success_alt = "Data Successfully Save";
     }else{
        $error_alt = "Data not Save";
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
                             <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Add Book</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--HORIZONTAL-->
                <div class="col-sm-12 col-md-8
                 col-sm-offset-3" >
                    <h4 class="section-subtitle"><b></b> </h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post"  action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                                        <h5 class="mb-lg">Add Books</h5>
                                       <?php
                                        if(isset($success_alt)){
                                            ?>
                                            <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong><?= $success_alt ?></strong> 
                                        </div>
                                        <?php
                                        }
                                    
                                ?>
                                <?php
                                        if(isset($error_alt)){
                                            ?>
                                            <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong><?= $error_alt ?></strong> 
                                        </div>
                                        <?php
                                        }
                                    
                                ?>
               
                                        <div class="form-group">
                                            <label for="book_name" class="col-sm-3 control-label">Book Name</label>
                                            <div class="col-sm-6">
                                                <input type="taxt" class="form-control" id="book_name" name="book_name" placeholder="Book Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_image" class="col-sm-3 control-label">Book Image</label>
                                            <div class="col-sm-6">
                                                <input type="file" class="form-control" id="book_image" name="book_image" placeholder="Book Image" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="book_author_name" class="col-sm-3 control-label">Book Author Name</label>
                                            <div class="col-sm-6">
                                                <input type="taxt" class="form-control" id="book_author_name" name="book_author_name" placeholder="Book Author Name" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="book_publication_name" class="col-sm-3 control-label">Book Publication Name</label>
                                            <div class="col-sm-6">
                                                <input type="taxt" class="form-control" id="book_publication_name" name="book_publication_name" placeholder="Book Publication Name" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="book_purchase_date" class="col-sm-3 control-label">Book Purchase Date</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="book_purchase_date" name="book_purchase_date" placeholder="Book Purchase Date" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="book_price" class="col-sm-3 control-label">Book Price</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="book_price" name="book_price" placeholder="Book Price" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="book_qty" class="col-sm-3 control-label">Book Quantity</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="book_qty" name="book_qty" placeholder="Book Qty" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="available_qty" class="col-sm-3 control-label">Available Quantity</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="available_qty" name="available_qty" placeholder="Available Qty" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="libraian_username" class="col-sm-3 control-label">Libraian Username</label>
                                            <div class="col-sm-6">
                                                <input type="taxt" class="form-control" id="libraian_username" name="libraian_username" value="<?=  $_SESSION['librarian_username']?>" readonly >
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="Save_Book"> Save Book</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php
require_once'footer.php';
?>
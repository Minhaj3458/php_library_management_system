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
                    <h4 class="section-subtitle"><b>All Students</b></h4>
                    <div class="pull-right"><a href="print_all_student.php" target="_blank"  class="btn btn-primary"><i class="fa fa-print"></i>Print</a></div>
                    <div class="clearfix"></div>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Reg. No</th>
                                        <th>Email</th>
                                        <th>UserName</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                          <?php
                                      $text_query = "SELECT * FROM `students_reg`";
                                      $text_check = mysqli_query($con,$text_query);
                                      while ($row = mysqli_fetch_assoc($text_check)){
                                          ?>
                                          <tr>
                                            <th><?=ucwords($row['fname'].'   '.$row['lname'])?></th>
                                            <th><?= $row['roll']?></th>
                                            <th><?= $row['reg']?></th>
                                            <th><?= $row['email']?></th>
                                            <th><?= $row['username']?></th>
                                            <th><img src="../Upload_Images/Books_image/<?= $row['img']?>" alt=""> </th>
                                            <th><?= $row['status']==1 ? 'Active' : 'Inactive'?></th>
                                              
                                             <th>
                                                <?php
                                                  if( $row['status'] == 1){
                                                      ?>
                                                    <a href="stu_inactive.php? id =<?=   base64_encode($row['id'])  ?> " class="btn btn-primary" ><i class="fa fa-arrow-up"> </i> </a>
                                                      <?php 
                                                     
                                                  }
                                                  else{
                                                     ?>
                                                      <a href="stu_active.php? id =<?=   base64_encode($row['id'])  ?> " class="btn btn-warning " ><i class="fa fa-arrow-down"> </i> </a>
                                                     <?php
                                                  }
                                                ?>
                                           
                                            
                                             </th>
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
require_once'footer.php';

?>
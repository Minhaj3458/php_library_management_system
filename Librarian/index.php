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
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                         
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-lg-9">
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--WIDGETBOX-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel widgetbox wbox-2 bg-scale-0">
                                    <a href="students.php">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-users color-darker-1"></span>
                                                </div>
                                                <?php
                                                 $text_query = "SELECT * FROM `students_reg`";
                                                 $text_check = mysqli_query($con,$text_query);
                                                 $total_stu = mysqli_num_rows($text_check);
                                                
                                                ?>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-1">Students</h4>
                                                    <h1 class="title color-primary"><?=
                                                     $total_stu
                                                    ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-users color-darker-2"></span>
                                                </div>
                                                <?php
                                                 $text_query = "SELECT * FROM `librarian`";
                                                 $text_check = mysqli_query($con,$text_query);
                                                 $total_lab  = mysqli_num_rows($text_check);
                                                
                                                ?>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">Librarian</h4>
                                                    <h1 class="title color-w"><?= $total_lab ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-envelope color-lighter-1"></span>
                                                </div>
                                                <?php
                                                 $text_query = "SELECT * FROM `books`";
                                                 $text_check = mysqli_query($con,$text_query);
                                                 $total_book  = mysqli_num_rows($text_check);

                                                 $text_query = "SELECT SUM(`book_qty`) as total FROM `books`";
                                                 $text_check = mysqli_query($con,$text_query);
                                                 $book_qty  =  mysqli_fetch_assoc($text_check);

                                                $text_query = "SELECT SUM(`available_qty`) as total_var FROM `books`";
                                                 $text_check = mysqli_query($con,$text_query);
                                                 $book_avail  =  mysqli_fetch_assoc($text_check);
                                                ?>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-1">Books</h4>
                                                    <h1 class="title color-light"><?= $total_book.
                                                    '('.$book_qty['total'].'-'.$book_avail['total_var'].')' ?>
                                                </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--AREA CHART-->
                            <div class="col-sm-12 col-md-8">
                                <div class="panel">
                                    <div class="panel-content">
                                        <h5><b>First semester</b> Sells</h5>
                                        <p class="section-text">Lorem ipsum <span class="highlight">dolor sit amet</span> consectetur adipisicing elit. Assumenda fugit inventore ipsam nam, qui voluptatibus</p>
                                        <canvas id="area-chart" width="400" height="160"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--TO DO LIST-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel b-primary bt-md">
                                    <div class="panel-content p-none">
                                        <div class="widget-list list-to-do">
                                            <h4 class="list-title">To do List</h4>
                                            <button class="add-item btn btn-o btn-primary btn-xs"><i class="fa fa-plus"></i></button>
                                            <ul>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h1" value="option1">
                                                        <label class="check" for="check-h1">Accusantium eveniet ipsam neque</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h2" value="option1" checked>
                                                        <label class="check" for="check-h2">Lorem ipsum dolor sit</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h3" value="option1">
                                                        <label class="check" for="check-h3">Dolor eligendi in ipsum sapiente</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h4" value="option1">
                                                        <label class="check" for="check-h4">Natus recusandae vel</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h5" value="option1">
                                                        <label class="check" for="check-h5">Adipisci amet officia tempore ut</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h6" value="option1">
                                                        <label class="check" for="check-h6">Possimus repellat repellendus</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--TABS WITH TABLET-->
                            <div class="col-sm-12 col-md-8">
                                <div class="tabs mt-none">
                                    <!-- Tabs Header -->
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#home" data-toggle="tab">Employees</a></li>
                                        <li><a href="#profile" data-toggle="tab">Sells</a></li>
                                        <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                        <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                                    </ul>
                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>34</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <p><b>Profile</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="messages">
                                            <p><b>Message</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <p><b>Settings</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--PIE CHART-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel">
                                    <div class="panel-content">
                                        <h5><b>Lorem ipsum dolor sit</b></h5>
                                        <p>Dolor sit amet <span class="highlight">consectetur</span> erte</p>
                                        <canvas id="pie-chart" width="400" height="260"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--GALLERY-->
                            <div class="col-sm-12 col-md-8">
                                <div class=" gallery-wrap">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="first photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="second photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="third photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="fourth photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="fifth photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="sixth photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="seventh photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="eighth photo" src="../asserts/images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--TIMELINE left-->
                    <div class="col-sm-12 col-lg-3">
                        <div class="timeline">
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Ello impedit iusto</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 14:25</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-tasks"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">consectetur adipisicing </h4> Lorem ipsum dolor sit amet. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 10:55</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Impedit iusto minima nisi</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 9:20</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Lorem ipsum dolor sit</h4> Lorem ipsum dolor sit amet Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Yesteday. 16:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
            <!-- RIGHT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="right-sidebar">
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
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
                        <li><i class="fa fa-copy" aria-hidden="true"></i><a href="#">Pages</a></li>
                        <li><a>User profile</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--PROFILE-->
                    <div>
                        <div class="profile-photo">
                            <img alt="User photo" src="images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-header-info">
                            <h2 class="user-name"><?= ucwords($row['username']) ?></h2>
                            <h5 class="user-position">UI Designer</h5>
                            <div class="user-social-media">
                                <span class="text-lg"><a href="#" class="fa fa-twitter-square"></a> <a href="#" class="fa fa-facebook-square"></a> <a href="#" class="fa fa-linkedin-square"></a> <a href="#" class="fa fa-google-plus-square"></a></span>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--CONTACT INFO-->
                    <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
                        <div class="panel-content">
                            <h4 class=""><b>Contact Information</b></h4>
                            <ul class="user-contact-info ph-sm">
                                <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> <?= $row['email']?></li>
                                <li><b><i class="color-primary mr-sm fa fa-phone"></i></b>  <?= $row['phone']?></li>
                                <li><b><i class="color-primary mr-sm fa fa-globe"></i></b> Helsinki, Finland</li>
                                <li class="mt-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorem error itaque maxime minus saepe similique voluptatibus. Beatae cumque dolore doloribus impedit omnis porro tempore tenetur. Aperiam dolorum odio quo?</li>
                            </ul>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--LIST-->
                    <div class="panel  b-primary bt-sm ">
                        <div class="panel-content">
                            <div class="widget-list list-sm list-left-element ">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-check color-success"></i></div>
                                            <div class="text">
                                                <span class="title">95 Jobs</span>
                                                <span class="subtitle">Completed</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-clock-o color-warning"></i></div>
                                            <div class="text">
                                                <span class="title">3 Proyects</span>
                                                <span class="subtitle">working on</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                            <div class="text">
                                                <span class="title">Leave a Menssage</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--TIMELINE-->
                    <div class="timeline animated fadeInUp">
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
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--GALLERY-->
                    <div class=" gallery-wrap">
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="first photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="second photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="third photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="fourth photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="fifth photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="sixth photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="seventh photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="eighth photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
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
            </div>>



<?php
require_once'footer.php';

?>
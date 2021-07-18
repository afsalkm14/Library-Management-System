<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>LMS - Search Student</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />


        <!-- Styles -->
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="assets/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="compact-menu">



        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.php" class="logo-text"><span>Library MS</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">

                            <!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                      <li><a href="index.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Dashboard</p></a></li>
                      <li><a href="SearchBooks.php" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Search Books</p></a></li>
                      <li><a href="EnterBooks.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Add Book</p></a></li>
                      <li><a href="SearchStudents.php" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Search Student</p></a></li>
                      <li><a href="EnterStudents.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Add Student</p></a></li>
                      <li><a href="IssueBooks.php" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Issue Books</p></a></li>
                      <li><a href="ReturnBooks.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Return Books</p></a></li>
                      <li><a href="overdue.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Over Due</p></a></li>
                      <li><a href="RESTAPI.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>API</p></a></li>

                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
              <div class="page-title">
                                  <h3 class="breadcrumb-header"> Search a Student</h3>
                                  <div class="page-breadcrumb">
                                      <ol class="breadcrumb breadcrumb-with-header">
                                          <li><a href="index.php">Stydent</a></li>
                                          <li><a href="#">Search by RegNo</a></li>

                                      </ol>
                                  </div>
                              </div>

<!-- Page Content Starts -->



<div class="page-title" style="width: 500px">

  <form action="DisplayStudents.php" method="get">

    <div class="form-group">
      <label for="">
        Enter Student RegNo</label>
       <input type="text" class="form-control" name="search" size="50">
    </div>


    <input type="submit" class="btn btn-danger" value="Search">
    <input type="reset" class="btn btn-primary" value="Clear">

  </form>
</div>












<!-- Page Content Ends -->

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">

                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <div class="cd-overlay"></div>


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/js/meteor.min.js"></script>

    </body>
</html>

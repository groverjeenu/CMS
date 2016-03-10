
<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Learning</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="<?php echo base_url(); ?>public/css/vendor/all.css" rel="stylesheet">
    <style>
                .disable-select {
  -webkit-user-select: none;  
  -moz-user-select: none;    
  -ms-user-select: none;      
  user-select: none;
  highlight:none;
}
                </style>

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.countdown.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "html" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/html/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="<?php echo base_url(); ?>public/css/app/app.css" rel="stylesheet">
  <!-- CORE CSS-->    
    <link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url(); ?>public/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">    
    <link href="<?php echo base_url(); ?>public/css/app/app.css" type="text/css" rel="stylesheet" media="screen,projection">    


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/material.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/messages.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type ="text/javascript">
$(document).ready(function(
  {
    var v = <?php echo $error;?>;
    if(v == 1)
      alert ('Submission not successful');
    else alert('Submission successful');
  }));
</script>

</head>

<body>
<?php $this->view('addons/header.php'); ?>
    <?php $this->view('addons/sidebar.php'); ?>
    
  <!-- Wrapper required for sidebar transitions -->
  <!--div class="st-container"-->

    <!-- Fixed navbar -->
    <!--div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand   navbar-brand-logo navbar-nav-padding-left">
            <a class="svg" href="app-student-dashboard.html">
              <svg viewBox="0 0 106 64" height="100%" width="100%" preserveAspectRatio="xMidYMid meet">
                <path d="M4.731,36.187h8.234v3.414H0.279V20.481h4.452V36.187z" />
                <path d="M21.094,39.878c-2.093,0-3.763-0.658-5.01-1.971c-1.248-1.313-1.872-2.959-1.872-4.938v-0.498
  c0-2.163,0.567-3.929,1.7-5.3c1.134-1.37,2.756-2.05,4.866-2.042c1.926,0,3.436,0.578,4.531,1.733
  c1.095,1.156,1.642,2.723,1.642,4.701v2.325h-8.116l-0.026,0.078c0.096,0.727,0.394,1.325,0.893,1.793s1.164,0.703,1.996,0.703
  c0.84,0,1.513-0.066,2.016-0.198c0.504-0.131,1.141-0.359,1.911-0.683l1.051,2.705c-0.622,0.456-1.425,0.834-2.41,1.136
  C23.281,39.726,22.223,39.878,21.094,39.878z M20.779,28.544c-0.639,0-1.119,0.228-1.438,0.683c-0.32,0.455-0.514,1.064-0.585,1.825
  l0.039,0.066h3.822v-0.341c0-0.718-0.149-1.269-0.446-1.655C21.873,28.737,21.409,28.544,20.779,28.544z" />
                <path d="M36.997,39.588c-0.123-0.227-0.234-0.481-0.335-0.761c-0.101-0.281-0.186-0.57-0.256-0.868
  c-0.42,0.587-0.928,1.053-1.523,1.399c-0.596,0.346-1.318,0.52-2.167,0.52c-1.348,0-2.445-0.391-3.29-1.169
  c-0.844-0.779-1.267-1.817-1.267-3.113c0-1.409,0.528-2.496,1.582-3.263c1.055-0.766,2.66-1.149,4.813-1.149h1.615v-1.011
  c0-0.604-0.142-1.068-0.427-1.392c-0.285-0.324-0.725-0.486-1.32-0.486c-0.508,0-0.886,0.12-1.136,0.361
  c-0.249,0.24-0.374,0.615-0.374,1.123l-4.294-0.013l-0.026-0.079c-0.061-1.296,0.477-2.379,1.615-3.251
  c1.138-0.871,2.644-1.306,4.518-1.306c1.751,0,3.172,0.438,4.261,1.313c1.091,0.875,1.635,2.127,1.635,3.756v5.358
  c0,0.762,0.063,1.466,0.191,2.115c0.127,0.647,0.317,1.29,0.571,1.93L36.997,39.588z M34.069,36.712c0.438,0,0.84-0.088,1.208-0.263
  c0.368-0.175,0.665-0.403,0.893-0.683v-2.22h-1.576c-0.701,0-1.21,0.171-1.53,0.513c-0.32,0.341-0.48,0.775-0.48,1.301
  c0,0.402,0.138,0.729,0.413,0.978C33.275,36.588,33.631,36.712,34.069,36.712z" />
                <path d="M51.115,29.306l-1.615-0.013c-0.508,0-0.924,0.085-1.248,0.256c-0.324,0.17-0.565,0.413-0.722,0.729
  v9.324h-4.439V25.392h4.176l0.158,2.088c0.297-0.744,0.691-1.322,1.182-1.733c0.49-0.412,1.064-0.617,1.72-0.617
  c0.21,0,0.425,0.015,0.643,0.046c0.219,0.031,0.412,0.068,0.578,0.112L51.115,29.306z" />
                <path d="M57.116,25.392l0.171,1.996c0.464-0.709,1.037-1.263,1.72-1.662c0.683-0.398,1.445-0.597,2.285-0.597
  c1.392,0,2.48,0.451,3.263,1.353c0.784,0.902,1.176,2.338,1.176,4.307v8.812h-4.439v-8.825c0-0.814-0.168-1.39-0.505-1.727
  c-0.337-0.337-0.834-0.506-1.491-0.506c-0.412,0-0.777,0.074-1.097,0.223c-0.319,0.149-0.593,0.355-0.82,0.617v10.217h-4.426V25.392
  H57.116z" />
                <path d="M72.796,39.602h-4.452V25.392h4.452V39.602z" />
                <path d="M79.599,25.392l0.171,1.996c0.464-0.709,1.037-1.263,1.72-1.662c0.683-0.398,1.446-0.597,2.286-0.597
  c1.391,0,2.479,0.451,3.263,1.353c0.783,0.902,1.175,2.338,1.175,4.307v8.812h-4.438v-8.825c0-0.814-0.169-1.39-0.506-1.727
  c-0.337-0.337-0.835-0.506-1.49-0.506c-0.412,0-0.778,0.074-1.097,0.223c-0.32,0.149-0.593,0.355-0.821,0.617v10.217h-4.425V25.392
  H79.599z" />
                <path d="M90.038,33.7c0-2.568,0.559-4.638,1.676-6.211c1.116-1.573,2.694-2.359,4.733-2.359
  c0.872,0,1.639,0.205,2.298,0.617c0.66,0.41,1.228,0.997,1.705,1.758l0.351-2.07h4.506v15.831c0,2.203-0.756,3.968-2.267,5.297
  c-1.513,1.329-3.547,1.995-6.105,1.995c-0.852,0-2.679-0.351-2.679-0.351s-1.821-0.548-2.663-0.944l0.837-3.805
  c0.751,0.324,1.467,0.565,2.147,0.723c0.679,0.158,1.456,0.237,2.328,0.237c1.055,0,1.862-0.285,2.421-0.852
  c0.557-0.569,0.837-1.345,0.837-2.33v-0.837c-0.467,0.598-1.01,1.052-1.628,1.362c-0.619,0.31-1.325,0.465-2.116,0.465
  c-2.029,0-3.6-0.752-4.711-2.253c-1.112-1.502-1.668-3.486-1.668-5.952V33.7z M95.169,34.019c0,1.34,0.196,2.383,0.586,3.128
  c0.39,0.747,1.047,1.12,1.971,1.12c0.559,0,1.038-0.087,1.439-0.259c0.401-0.172,0.733-0.437,0.997-0.792v-6.911
  c-0.254-0.386-0.581-0.685-0.982-0.898c-0.401-0.213-0.875-0.32-1.423-0.32c-0.913,0-1.572,0.421-1.979,1.263
  c-0.406,0.842-0.609,1.958-0.609,3.349V34.019z" />
                <path d="M89.645,42.239c-3.935-1.997-5.801-1.022-8.698-0.365c-2.523,0.572-11.7,3.366-23.909,3.575
  c-12.162,0.208-20.212-3.108-20.212-3.108s9.737,6.215,20.023,6.215c7.745,0,10.823-0.699,24.614-2.958
  c4.857-0.796,10.591,1.859,10.591,1.859l0.757-3.843L89.645,42.239z" />
                <circle cx="70.688" cy="19.042" r="3.167" />
              </svg>
            </a>
          </div>
        </div-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-forum.html">Forum Home</a></li>
                <li><a href="app-forum-category.html">Forum Category</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-directory-grid.html">Courses Grid</a></li>
                <li><a href="app-directory-list.html">Courses List</a></li>
                <li class="active"><a href="app-student-course.html">Course Details</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-student-dashboard.html">Dashboard</a></li>
                <li><a href="app-student-courses.html">My Courses</a></li>
                <li><a href="app-take-course.html">Take Course</a></li>
                <li><a href="app-course-forums.html">Course Forums</a></li>
                <li><a href="app-take-quiz.html">Take Quiz</a></li>
                <li><a href="app-student-profile.html">Edit Profile</a></li>
                <li><a href="app-student-billing.html">Edit Billing</a></li>
                <li><a href="app-student-messages.html">Messages</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-instructor-dashboard.html">Dashboard</a></li>
                <li><a href="app-instructor-courses.html">My Courses</a></li>
                <li><a href="app-instructor-course-edit-course.html">Edit Course</a></li>
                <li><a href="app-instructor-earnings.html">Earnings</a></li>
                <li><a href="app-instructor-statement.html">Statement</a></li>
                <li><a href="app-instructor-profile.html">Edit Profile</a></li>
                <li><a href="app-instructor-billing.html">Edit Billing</a></li>
                <li><a href="app-instructor-messages.html">Messages</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-nav-bordered navbar-right"-->
            <!-- notifications -->
            <!--li class="dropdown notifications updates">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="badge badge-primary">4</span>
              </a>
              <ul class="dropdown-menu" role="notification">
                <li class="dropdown-header">Notifications</li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                    <br/>
                    <span class="text-caption text-muted">5 mins ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                    <br/>
                    <span class="text-caption text-muted">3 hrs ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                  </div>
                  <div class="media-body">
                    <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                    <p>
                      <span class="text-caption text-muted">1 day ago</span>
                    </p>
                    <a href="">
                      <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                    </a>
                    <a href="">
                      <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                    </a>
                  </div>
                </li>
              </ul>
            </li-->
            <!-- // END notifications -->
            <!-- User -->
            <!--li class="dropdown">
              <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="app-student-profile.html">Account</a></li>
                <li><a href="app-student-billing.html">Billing</a></li>
                <li><a href="login.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div-->
        <!-- /.navbar-collapse -->

      <!--/div>
    </div-->

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <!--div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
      <div data-scrollable>

        <ul class="sidebar-menu sm-icons-right">
          <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
          <li class="hasSubmenu active open">
            <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Courses</span></a>
            <ul id="course-menu" class="in">
              <li><a href="app-directory-grid.html"><span>Courses Grid</span></a></li>
              <li><a href="app-directory-list.html"><span>Courses List</span></a></li>
              <li class="active"><a href="app-student-course.html"><span>Course Page</span></a></li>
              <li><a href="app-student-courses.html"><span>My Courses</span></a></li>
              <li><a href="app-take-course.html"><span>Take Course</span></a></li>
              <li><a href="app-course-forums.html"><span>Course Forums</span></a></li>
              <li><a href="app-course-forum-thread.html"><span>Course Forum Thread</span></a></li>
              <li><a href="app-take-quiz.html"><span>Take Quiz</span></a></li>
            </ul>
          </li>
          <li class="hasSubmenu">
            <a href="#forum-menu"><i class="fa fa-file-text-o"></i><span>Forum</span></a>
            <ul id="forum-menu">
              <li><a href="app-forum.html"><span>Forum Home</span></a></li>
              <li><a href="app-forum-category.html"><span>Forum Category</span></a></li>
              <li><a href="app-forum-thread.html"><span>Forum Thread</span></a></li>
            </ul>
          </li>
          <li class="hasSubmenu">
            <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
            <ul id="account-menu">
              <li><a href="app-student-profile.html"><span>Edit Profile</span></a></li>
              <li><a href="app-student-billing.html"><span>Edit Billing</span></a></li>
            </ul>
          </li>
          <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li>
          <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
      </div>
    </div-->

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <section id = "content">
      <div class = "container">
                    <div class="card-panel">
                      <span class="icon-block s60 bg-lightred"><i class="fa fa-github"></i></span>
                    <div class="media-body">
                      <h1 class="text-display-1 margin-none"><?php echo $ass['title']; ?></h1>
                      <!--p class="small margin-none">
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      </p-->
                   
                <div class="page-section">
                  

                  <div class="page-section">
                  <h2 class="text-headline margin-none">Assignment Description</h2>
                  <p class="text-subhead text-light">A brief description.</p>
                  <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-red-300 text-white img-circle">
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          <?php echo $ass['description']; ?>
                           <a href = "<?php echo base_url();?>contents/assignments/<?php echo $ass['filename']?>"> 
                              <label  id = "enroll_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated="" style="margin-left:400px">
                            <i class="fa fa-download fa-lg fa-pull-left"></i>
                          <span style="display:inline-block; width: 20px;"></span>
                      Download Assignment
                      <span style="display:inline-block; width: 20px;"></span>
                      </label>
                    </a>
                        </div>
                      </div>
                      
                    </li>
                    
                  </ul>
                </div>
              
                 <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-heading">
                      <h2 class="text-headline">Course Description</h2>
                    </div>
                    <div class="panel-body">
                      <p class="text-caption margin-none">
                        <!--
                        <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                        <i class="fa fa-calendar fa-fw"></i> 21/10/14
                        <br/>
                      -->
                      <i class="fa fa-calendar-o fa-fw"></i> Floating Date : <?php echo $ass['start_date'] ;?>
                        <br/>
                        <i class="fa fa-check fa-fw"></i> Last Submitted: <?php if($sub['submiss_time'] == NULL)echo "Not yet submitted" ; else echo $sub['submiss_time'] ;?>
                        <br/>
                        <!--
                        <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                        <br/>
                      -->
                        <i class="fa fa-close fa-fw"></i> Deadline: <?php echo $ass['deadline'];?>
                      </p>
                    </div>
                    <hr class="margin-none" />
                    <!--
                    <div class="panel-body text-center">
                      <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="app-take-course.html">Start Course</a></p>
                      <p class="text-body-2">or <a href="#">buy course for $1</a></p>
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                      </li>
                    </ul>
                  -->
                  </div>
                  <!--
                  <p class="margin-none">
                    <span class="label bg-gray-dark">New</span>
                    <span class="label label-grey-200">WordPress</span>
                    <span class="label label-grey-200">Beginner</span>
                  </p>
                -->
                
                
                <div class="page-section">
                  

                  <div class="page-section">
                <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        
                        <div class="media-body text-body-2">
                         <?php echo form_open_multipart('assignments/submission/'.$ass['assignment_id']);?>
                           
                              <input type="file" name="userfile" id = "enroll_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated="" style="margin-left:0px">
                            
                      </input>
                    
                        
                      <label  id = "enroll_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated="" style="margin-left:0px ; padding-top = 0px;">
                            <i class="fa fa-upload fa-fw fa-pull-left"></i>
                          <span style="display:inline-block; width: 20px;"></span>
                      <input type="submit" value = "Upload Assignment" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated=""> </input>
                      
                      </label>
                   
                    </div>

                    </form>

                    
                        </div>
                      </div>
                      
                    </li>
                    
                  </ul>
                </div></div>
                </br></br></br>
                <!--div class="page-section">
                  <h2 class="text-headline margin-none">What you'll learn</h2>
                  <p class="text-subhead text-light">A brief description.</p>
                  <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-red-300 text-white img-circle">
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          <?php echo $query['syllabus']; ?>
                        </div>
                      </div>
                      
                    </li-->
                    <!--
                    <li class="list-group-item paper-shadow">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-green-300 text-white img-circle">
                            <i class="fa fa-database"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          Database connections & some other nice features.
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item paper-shadow">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-indigo-300 text-white img-circle">
                            <i class="fa fa-trophy"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          Eaque ex exercitationem quia reprehenderit?
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item paper-shadow">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-orange-300 text-white img-circle">
                            <i class="fa fa-code-fork"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          Ab distinctio nemo, provident quia quibusdam ullam.
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item paper-shadow">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="icon-block s30 bg-grey-500 text-white img-circle">
                            <i class="fa fa-check"></i>
                          </div>
                        </div>
                        <div class="media-body text-body-2">
                          Conclusion & Notes.
                        </div>
                      </div>
                    </li>
                  -->
                  <!--/ul>
                </div-->


               
               

                <!--
                <div class="pull-right">
                  <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
                </div>
              -->
                <!--
                <h2 class="text-headline margin-none">Testimonials</h2>
                <p class="text-subhead text-light">A few words from our past students</p>
                <br/>

                <div class="row">
                  <div class="col-md-6">
                    <div class="testimonial">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                        </div>
                      </div>
                      <div class="media v-middle">
                        <div class="media-left">
                          <img src="images/people/50/guy-2.jpg" alt="People" class="img-circle width-40" />
                        </div>
                        <div class="media-body">
                          <p class="text-subhead margin-v-5-0">
                            <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                          </p>
                          <p class="small">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="testimonial">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                        </div>
                      </div>
                      <div class="media v-middle">
                        <div class="media-left">
                          <img src="images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
                        </div>
                        <div class="media-body">
                          <p class="text-subhead margin-v-5-0">
                            <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                          </p>
                          <p class="small">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              -->
            
              </div>
              <div class="media-right">

                <div class="page-section width-270 width-auto-xs">

                  <!-- .panel -->
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-heading">
                      <h4 class="text-headline">Course Description</h4>
                    </div>
                    <div class="panel-body">
                      <p class="text-caption margin-none">
                        <!--
                        <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                        <i class="fa fa-calendar fa-fw"></i> 21/10/14
                        <br/>
                      -->
                      <i class="fa fa-user fa-book"></i> Course : <?php echo $query['course_name'] ;?>
                        <br/>
                        <i class="fa fa-user fa-fw"></i> Instructors: <?php echo $query['names'] ;?>
                        <br/>
                        <!--
                        <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                        <br/>
                      -->
                        <i class="fa fa-check fa-fw"></i> Attending: <?php echo $query['attending'];?>
                      </p>
                    </div>
                    <hr class="margin-none" />
                    <!--
                    <div class="panel-body text-center">
                      <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="app-take-course.html">Start Course</a></p>
                      <p class="text-body-2">or <a href="#">buy course for $1</a></p>
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                      </li>
                    </ul>
                  -->
                  </div>
                  <!-- // END .panel -->

                  <!-- .panel -->
                  

                  <?php if($val == 0){?>

                  <script type = "text/javascript" language = "javascript">
                  $('document').ready(function()
                    {
                      $('#enroll_btn').onclick(function(event)
                        {
                          $('document').load("<?php echo base_url();?>display_view/enroll/<?php echo $query['cid'];?>");
                        });
                    });

                  </script>
                  <div  class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media v-middle">
                        
                        <div class="media-body media-right">
                          <!--<a href = "<?php echo base_url();?>display_view/enroll/<?php echo $query['cid'];?>"> -->
                          <label  id = "enroll_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated="">
                            <i class="fa fa-flag fa-lg fa-pull-left"></i>
                          <span style="display:inline-block; width: 20px;"></span>
                      Enroll for Course
                      <span style="display:inline-block; width: 20px;"></span>
                      </label>
                    <!-- </a> -->
                    
                        </div>
                      </div>
              
                     
                    </div>
                  </div>
                  <?php }?>
                
                  <!-- // END .panel -->

                  <!-- .panel -->
                  <!--
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <h4 class="text-headline">Other Courses</h4>
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="media v-middle">
                          <div class="media-left">
                            <div class="icon-block s30 bg-grey-400 text-white">
                              <i class="fa fa-mortar-board"></i>
                            </div>
                          </div>
                          <div class="media-body">
                            <a href="#" class="link-text-color">Dolores explicabo mollitia nisi perspiciatis quas. Itaque.</a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle">
                          <div class="media-left">
                            <div class="icon-block s30 bg-grey-400 text-white">
                              <i class="fa fa-mortar-board"></i>
                            </div>
                          </div>
                          <div class="media-body">
                            <a href="#" class="link-text-color">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle">
                          <div class="media-left">
                            <div class="icon-block s30 bg-grey-400 text-white">
                              <i class="fa fa-mortar-board"></i>
                            </div>
                          </div>
                          <div class="media-body">
                            <a href="#" class="link-text-color">A aliquam dolore et explicabo possimus vitae?</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                -->
                  <!-- // END .panel -->

                </div>
                <!-- // END .page-section -->

              </div>
           <!-- /st-content-inner -->
      <!-- /st-content -->

    </section>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
      <strong>Learning</strong> v1.1.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->

  </div>
  <!-- /st-container -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "html",
      skins: {
        "default": {
          "primary-color": "#42a5f5"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="<?php echo base_url(); ?>public/js/vendor/all.js"></script>
  <?php $this->view('addons/footer.php'); ?>

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/vectormap-script.js"></script>    

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/core/modernizr.js"></script> -->
  <!-- <script src="js/vendor/core/velocity.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/slick.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/countdown/all.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="<?php echo base_url(); ?>public/js/app/app.js"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/material.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/messages.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts.js"></script> -->

  <!-- App Scripts CORE [html]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <!-- <script src="js/app/main.js"></script> -->

</body>

</html>
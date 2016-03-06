<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1 sidebar-r3" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Learning</title>

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Dashboard</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->  
    <link href="<?php echo base_url(); ?>public/css/vendor/all.css" rel="stylesheet">  
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

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  

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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

 $(document).ready(function() {


    $("#ajax_srch").on("keyup keydown keypress",function() {                

          $.ajax({
        type: 'POST',
        url: '<?php echo base_url()?>display_view/get_query_courses',
        dataType: 'json',
        data: { 'qry' : $('#ajax_srch').val()},
        success: function(response) {
            //alert(response['5']['names']);
            $('#courses_section').empty();
            var flag = 0;
            $.each(response['data'],function(key,val)
            {
              flag = 1;
            $('#courses_section').append(

                  '<div class="panel panel-default paper-shadow" data-z="0.5"><div class="panel-body"><div class="media media-clearfix-xs"><div class="media-left text-center"><div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10"><span class="img icon-block height-130 bg-default"></span><span class="overlay overlay-full padding-none icon-block bg-default"><span class="v-center"><i class="fa fa-github"></i></span></span><a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white"><span class="v-center"><span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span></span></a></div></div><div class="media-body">'+'<h4 class="text-headline margin-v-5-0"><a href="'+response['base_url']+'/display_view/course/'+key+'">'+ val['course_name']+'</a></h4>'+'<p class="small"><span class="fa fa-fw fa-star text-yellow-800"></span><span class="fa fa-fw fa-star text-yellow-800"></span><span class="fa fa-fw fa-star text-yellow-800"></span><span class="fa fa-fw fa-star-o text-yellow-800"></span><span class="fa fa-fw fa-star-o text-yellow-800"></span></p><p>'+val['description']+'</p>'+'</p><hr class="margin-v-8" /><div class="media v-middle"><div class="media-left"><img src="'+response['base_url']+'public/images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" /></div><div class="media-body">'+val['names']+'<br/>Instructor</div></div></div></div></div></div>'
              );
            });
          if(flag == 0)
            $('#courses_section').append('<h3>No matching courses found</h3>');
                    
        },
        error: function(response) {
            alert('Error Here');
        }
    });
});
});

</script>


<script type="text/javascript">
 var sf = '<div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-default"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="'+response['base_url']+'/display_view/course/'+key+'">'+ val['course_name']+' </a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
              <p>'+val['description']+'</p><hr class="margin-v-8" /><div class="media v-middle"><div class="media-left"><img src="'+response['base_url']+'public/images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" /></div><div class="media-body">'+val['names']+'<br/>Instructor</div></div></div></div></div></div>';
            </script>

</head>

<body>
<header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                                            

                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h4 style="color:white">Incourse</h4></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input id = "ajax_srch" type="text" name="Search" class="header-search-input z-depth-2" placeholder="Enter the course to search"/>
                    </div>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
</header>
  <!-- Wrapper required for sidebar transitions -->
  <!--div class="st-container"-->

<?php $this->view('addons/sidebar.php');?>
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
                <li class="active"><a href="app-directory-list.html">Courses List</a></li>
                <li><a href="app-student-course.html">Course Details</a></li>
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
          </ul-->
          <!--ul class="nav navbar-nav navbar-nav-bordered navbar-right"-->
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
              <li class="active"><a href="app-directory-list.html"><span>Courses List</span></a></li>
              <li><a href="app-student-course.html"><span>Course Page</span></a></li>
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
    </div>

   
    <div class="sidebar right sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-skin-white" id="sidebar-library">
      <div data-scrollable>
        <h4 class="category">Category</h4>
        <ul class="sidebar-block list-group list-group-menu list-group-minimal">
          <li class="list-group-item"><a href="#"><span class="badge pull-right">120+</span> Design</a></li>
          <li class="list-group-item active"><a href="#"><span class="badge pull-right">30+</span> Programming</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">40+</span> WordPress</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">60+</span> Workflow</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">15+</span> HTML</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">25+</span> CSS</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">35+</span> iOS</a></li>
          <li class="list-group-item"><a href="#"><span class="badge pull-right">20+</span> Free</a></li>
        </ul>

        <h4 class="category">View</h4>
        <div class="sidebar-block">
          <div class="form-group">
            <select class="selectpicker">
              <option>List</option>
              <option>Grid</option>
            </select>
          </div>
        </div>

        <h4 class="category">Price</h4>
        <div class="sidebar-block">
          <div class="form-group input-group">
            <div class="row margin-none">
              <div class="col-xs-6 padding-none">
                <input class="form-control" type="text" placeholder="Min .." />
              </div>
              <div class="col-xs-6 padding-none">
                <input class="form-control" type="text" placeholder="Max .." />
              </div>
            </div>
            <div class="input-group-btn">
              <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div-->



    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class = "container">
      <div class = "card-panel">
    
          <div s class="col s12">

            <div class="page-section">
              <div class="media v-middle">
                <div class="media-body">
                  <h1 class="text-display-1 margin-none">Library</h1>
                   <p class="text-subhead">Browse through thousands of lessons.</p>

                </div>
                <!-- <div class="media-right">
                  <div class="width-100 text-right">
                    <div class="btn-group">
                      <a class="btn btn-white" href="app-directory-grid.html"><i class="fa fa-th"></i></a>
                      <a class="btn btn-grey-800" href="app-directory-list.html"><i class="fa fa-list"></i></a>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
    <div id = "courses_section" class="col s12">
            <?php foreach($query as $key=> $i) { ?>
            <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <img src="<?php echo base_url();?>/contents/images/course_icons/<?php echo $i['imagename']?>">
                      <!--span class="img icon-block height-130 bg-default"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                      </span-->
                      <!--a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a-->
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="<?php echo base_url(); ?>display_view/course/<?php echo $key; ?>"> <?php echo $i['course_name']; ?></a></h4>
                    <!--p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p-->
                    <p><?php echo $i['description']; ?></p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="<?php echo base_url()?>public/images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <?php echo $i['names']; ?>
                          <br/>
                         
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <?php } ?>

           <!-- <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-primary"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="app-student-course.html">CSS Awesomeness with LESS Processing</a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-2.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div> 

            <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-lightred"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="app-student-course.html">Portable Environments with Vagrant</a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-4.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

            <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-brown"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="app-student-course.html">WordPress Theme Development</a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-7.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

            <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-purple"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="app-student-course.html">Writing Modular JavaScript with Browserify</a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-9.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

            <div class="panel panel-default paper-shadow" data-z="0.5">
              <div class="panel-body">

                <div class="media media-clearfix-xs">
                  <div class="media-left text-center">
                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                      <span class="img icon-block height-130 bg-default"></span>
                      <span class="overlay overlay-full padding-none icon-block bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                      </span>
                      <a href="app-student-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                        <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="text-headline margin-v-5-0"><a href="app-student-course.html">Super Easy Online Payments with Stripe</a></h4>
                    <p class="small">
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                      <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class="margin-v-8" />
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-6.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div> -->

            

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
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
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<?php echo  $this->session->flashdata();?>', 1500);
        }, 1500);
        
    });


    $(function() {
      // Google Maps  
      $('#map-canvas').addClass('loading');    
      var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
      var settings = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},            
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

      google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
          $('#map-canvas').removeClass('loading');
      });

      var contentString =
          '<div id="info-window">'+
          '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
          '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var companyImage = new google.maps.MarkerImage('http://demo.geekslabs.com/ashoka/images/map-marker.png',
          new google.maps.Size(36,62),// Width and height of the marker
          new google.maps.Point(0,0),
          new google.maps.Point(18,52)// Position of the marker 
      );

      var companyPos = new google.maps.LatLng(40.6700, -73.9400);

      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Shapeshift Interactive",
          zIndex: 3});

      google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
          pageView('/#address');
      });
    });


    
    </script>

</body>

</html>
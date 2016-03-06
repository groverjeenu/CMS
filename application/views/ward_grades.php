<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Ward's Grades</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    
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
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
          
          

</head>

<body>
    <div id="loader-wrapper">
    <div id="loader"></div>        
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                                            

                     <!--  <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu" ></i></a></li> -->
                      <li><h4 style="color:white">Incourse</h4></li>
                    </ul>
                    
                    
                    <!--div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder=""/>
                    </div-->
                    <ul class="right hide-on-med-and-down">    

                        <li class="pull-right">
                            <?php echo $user['first_name']." &nbsp;".$user['last_name']." &nbsp; &nbsp; &nbsp; &nbsp;".$user['email']; ?>
                        <li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
</header>
    <div id="main">
        <!-- START WRAPPER -->
        
        <div class="wrapper">
          
            <section id = "content">
            <div class = "container">
                <section id = "work-collections">
                <div class = "row">
                    <div class= "col s12">
                        <div class = "card-panel hoverable">
                            <div class="row">
                                <div class= "col s2 offset-s5 center-align cyan-text"><h4>Grades</h4>
                                </div>
                            </div>
                            <ul class="collapsible popout" data-collapsible="accordion">
                                <?php foreach($data as $cid=>$ciddata) { ?>
                                <li>
                                    <div class="collapsible-header"> <?php echo $ciddata['course']['course_name'];?>
                                            <i class = "material-icons">assessment</i>   
                                    </div>
                                    <div class = "collapsible-body">
                                        <table class = "striped bordered centered">
                                            <thead>
                                              <tr>
                                                  <th data-field="id">Assignment</th>
                                                  <th data-field="name">Marks</th>
                                                  <th data-field="price">Weightage</th>
                                                  <th data-field="price">Penality</th>
                                                  <th data-field="price">Weight %</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($ciddata['grades_course'] as $gg) {?>
                                                <tr>
                                                    <td>
                                                        <?php echo $gg['title'];?>
                                                    </td>  
                                                    <td>
                                                         <?php echo $gg['grade'] ;?>/100 
                                                    </td> 
                                                    <td>
                                                        <?php echo $gg['weightage'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $gg['penalty'];?>
                                                    </td>
                                                    <td>
                                                        <?php $wt = $ciddata['wt'] ;if($wt != 0)echo $gg['weightage']/$wt*100 ;?>%
                                                    </td>
                                                    

                                                
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                                <?php $sum = 0;
                                                foreach($ciddata['grades_course'] as $gg)
                                                {
                                                  $sum = $sum + $gg['grade']*(1 - $gg['penalty']/100)*$gg['weightage']/100 ;
                                                }  


                                                ?>
                                        <table class = "striped bordered centered">
                                            <thead>
                                              <tr>
                                                  <th>Total</th>
                                                  <th><?php $wt = $ciddata['wt'] ; echo $sum ;?>/<?php echo $wt ;?></th>
                                                  <th><?php if($wt != 0)echo $sum/$wt*100 ;else echo "0";?>%</th>
                                                  

                                              </tr>
                                            </thead>
                                        </table>    
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </section>
    </div>

    <?php $this->view('addons/footer.php'); ?>

    
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
    
</body>
</html>
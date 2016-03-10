
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.3
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
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


</head>

<body>

	 <?php $this->view('addons/header.php'); ?>
    <?php $this->view('addons/sidebar.php'); ?>
   
<?php
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
?>
<div id="main">
        <!-- START WRAPPER -->
    <div class="wrapper">

		<section id = "content">
                <div class = "container">
                    <div class="card-panel">
                        <div class = "col s12">
                            <div class="row">
                            	    <div class=" col s6">
			                          <label for="first_name"><b><font size="5">Quiz Name</font></b></label>
			                        </div>
			                        <div class="col s6">
			                          <h4 class="header2"><?php echo $result->quiz_name;?></h4>
			                        </div>
			                        </div>
				                    </div>
				                    
				                    <!--div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Submitted by</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo $query['first_name']?></h4>
				                        </div>
				                    </div-->
				                    <div class="row">
				                    	<h4 class="header2">Description / Instructions<h4>
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Duration</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo $result->duration;?> Minutes<h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Start time</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo date("Y-m-d",$result->start_time);?> Minutes<h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">End time</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo date("Y-m-d",$result->end_time);?> Minutes<h4>
				                        </div>   
				                    </div>
				                     <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Percentage required to pass</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2">><?php echo $result->pass_percentage;?>%<h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Maximum Attempts</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo $result->max_attempts;?> <h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Correct Answer Score</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo $result->correct_score;?> <h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                        <div class=" col s6">
				                          <label for="first_name"><b><font size="5">Correct Answer Score</font></b></label>
				                        </div>
				                        <div class="col s6">
				                          <h4 class="header2"><?php echo $result->incorrect_score;?> <h4>
				                        </div>   
				                    </div>
				                    <div class="row">
				                    	<div class="input-field login-text col s6">
				                    		<input type="checkbox" name="agree" id="agree"/>
				                    		<label for="agree">Tick this checkbox , if you have read all instructions <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and ready to attempt quiz / test.</label>
				                    		
				                    	</div>
				                    	<div id="warning_checkbox"  class="arrow_box" style="display:none;color:#ffffff;background:#D03800;padding:2px; width:150px;">Tick above check box ! </div>
				                    	<div>
				                    		<input type="button" id="starttestbtn" value="Start Test" onClick="javascript:checkbox_validate();"   class="btn btn-success" style="cursor:pointer;">
				                    	</div>
				                    </div>

					            <!--div class="panel panel-default">
								<div class="panel-heading">
									<?php if($title){ echo $title; } ?>
								</div-->
								<!-- .panel-heading -->
								<!--div class="panel-body">
									<div class="panel-group" id="accordion">
										<table class="table table-hover">
											<tbody>
												<tr><th >Quiz Name</th><td><b><?php echo $result->quiz_name;?></b></td></tr>
												<tr><td valign="top" colspan="2"><b>Description / Instructions</b> <?php echo $result->description;?></td></tr>
												<tr><th valign="top">Duration</th><td><?php echo $result->duration;?> Minutes</td></tr>
												<tr><th valign="top">Start time</th><td><?php echo date("Y-m-d",$result->start_time);?></td></tr>
												<tr><th valign="top">End time</th><td><?php echo date("Y-m-d",$result->end_time);?></td></tr>
												<tr><th valign="top">Percentage required to pass</td><td><?php echo $result->pass_percentage;?>%</td></tr>
												<tr><th valign="top">Maximum Attempts</th><td><?php echo $result->max_attempts;?> </td></tr>
												<tr><th valign="top">Correct answer score</th><td><?php echo $result->correct_score;?> </td></tr>
												<tr><th valign="top">Incorrect answer score</th><td><?php echo $result->incorrect_score;?> </td></tr>
												
												<tr>
													<td valign="top">
														<div class="input-field login-text">
														<input type="checkbox" name="agree" id="agree"> Tick this checkbox , if you have read all instructions <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and ready to attempt quiz / test.
														</div>
														<div id="warning_checkbox"  class="arrow_box" style="display:none;color:#ffffff;background:#D03800;padding:2px; width:150px;">Tick above check box ! </div>
													</td>
													<td>
														<input type="button" id="starttestbtn" value="Start Test" onClick="javascript:checkbox_validate();"   class="btn btn-success" style="cursor:pointer;">
													</td>
												</tr>
												
											</tbody>
										</table>
										
										
									</div>
								</div-->
								<!-- .panel-body -->
							<!--/div-->
		<!-- /.panel -->
						</div>
					</div>
				</div>
			</div>
						<!-- /.col-lg-12 -->
		</section>
	</div>
<script>
	function checkbox_validate(){
	if(document.getElementById('agree').checked==true){
window.location="<?php echo site_url('quiz/quiz/access_test/'.$result->quid);?>";
}else{
document.getElementById('warning_checkbox').style.display="block";
}
}
</script>

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

</body>
</html>
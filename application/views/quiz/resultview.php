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
					<div class='container'>
						<div class = "card">
							Score  : <?php echo $score;?>
							<br>
							Percentage : <?php echo $percentage?>
						</div>
					</div>
				
		
	<!-- /.col-lg-12 -->
				</section>
			<div>
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
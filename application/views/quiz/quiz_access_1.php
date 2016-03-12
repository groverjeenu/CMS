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
		<title>Quiz</title>
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
		<link href="<?php echo base_url();?>bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- MetisMenu CSS -->
		<link href="<?php echo base_url();?>bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="<?php echo base_url();?>bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="<?php echo base_url();?>bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- MetisMenu CSS -->
		<link href="<?php echo base_url();?>bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"/>
	</head>
	<body>
		<?php $this->view('addons/header.php'); ?>
		<?php $this->view('addons/sidebar.php'); ?>
		<style>
		.button-success, .button-error {
		background:#3a78b8;
		color:#ffffff;
		padding:5px;
		padding-left:4px;
		padding-right:4px;
		font-size:15px;
		font-family:'arial';
		border-radius:4px;
		border:1px solid #87b0d9;
		margin-bottom:4px;
		line-height:34px;
		}
		</style>
		<div id="content" class="testd"  oncontextmenu="return false">
			<script>
				var Timer;
				var TotalSeconds;
				function CreateTimer(TimerID, Time) {
					Timer = document.getElementById(TimerID);
					TotalSeconds = Time;
					UpdateTimer()
					window.setTimeout("Tick()", 1000);
				}
				function Tick() {
					if (TotalSeconds <= 0) {
						alert("Time's up!")
						return;
					}
					TotalSeconds -= 1;
					UpdateTimer()
					window.setTimeout("Tick()", 1000);
				}
				function UpdateTimer() {
					var Seconds = TotalSeconds;
					var Days = Math.floor(Seconds / 86400);
					Seconds -= Days * 86400;
					var Hours = Math.floor(Seconds / 3600);
					Seconds -= Hours * (3600);
					var Minutes = Math.floor(Seconds / 60);
					Seconds -= Minutes * (60);
					var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
					Timer.innerHTML = TimeStr;
				}
				function LeadingZero(Time) {
					return (Time < 10) ? "0" + Time : + Time;
				}
			//var myCountdown1 = new Countdown({time:<?php echo $seconds;?>, rangeHi:"hour", rangeLo:"second"});
			setTimeout(submitform, '<?php echo $seconds * 1000;?>');
			function submitform() {
			alert('Time Over');
			<?php if ($result->pract_test == "0") {
			?>
			document.getElementById('testform').submit();
			<?php
			} ?>
			}
			setInterval(setqtime, 1000);
			function setqtime() {
			qtime += 1;
			}
			
			</script>
			<div class="wite">
				<div style="float:left; ">
					Time left: <div id='timer' style="display:inline;"/>
						<script type="text/javascript">window.onload = CreateTimer("timer", <?php echo $seconds;?>);</script>
					</div>
				</div>
				<div style="float:right;">
					<a href="javascript:fontsize();" title="Change Font Size"><img src="<?php echo base_url();?>images/font-size.gif"></a>
				</div>
				<div style="clear:both;"></div>
				<div  id="left_div" style="width:70%;">
					<?php
					$category_name=explode(",",$time_info['category_name']);
					$cate_range=array();
					$startnextcate=array();
					$qids_range=explode(",",$time_info['qids_range']);
					foreach($qids_range as $key => $rangeval){
					$rangeval_arr=explode("-",$rangeval);
					$gen_range=array();
					$startnextcate[]=$rangeval_arr['1'];
					for($x=$rangeval_arr['0']; $x<=$rangeval_arr['1']; $x++){
					$gen_range[]=$x;
					}
					$cate_range[]=$gen_range;
					}
					?>
					<input type="hidden"  id="json_category_range" value='<?php echo json_encode($cate_range);?>'>
					<?php
					foreach($category_name as $key=> $cvalue){
					?>
					<?php if($key=='0'){ ?>
					<input type="hidden" value="0" id="current_cate">
					<?php
					}
					?>
					<div class="category_box" id="cate-<?php echo $key;?>" <?php if($key=="0"){ echo "style='background:#2f72b7;color:#ffffff;'"; }?> onClick="changecategory('<?php echo $key;?>');"><?php echo $cvalue; ?></div>
					<?php
					}
					?>
					<input type="hidden" value="<?php echo $key;?>" id="total_cate">
					<div style="clear:both;"></div>
					<form action="<?php echo site_url('quiz/quiz/submit_quiz/'.$quiz_id);?>" method="post" id="testform" onsubmit="showquestion('0');">
						<?php
						$category_number=0;
						$selected_oids=explode(",",$time_info['oids']);
						foreach($assigned_question[0] as $key => $question){
						?>
						<?php if($key=='0'){ ?>
						<input type="hidden" value="0" id="current_question">
						<?php
						}
						if($question['q_type']=="0"){
							
						?>
						<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
						<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
							<tr><td >Question <?php echo $key+1; ?></td></tr>
							<tr><td> <?php echo $question['question'];?></td></tr>
							<?php
							$opcount=0;
							// shuffle options
							shuffle($assigned_question[1]);
							foreach($assigned_question[1] as $keys => $option){
							if($option['qid']==$question['qid']){
							?>
							<tr><td><table>
								<tr><td style="width:10px; border:0px;"> <input type="radio"  id="op-<?php echo $key;?>-<?php echo $opcount;?>" name="answers<?php echo $key;?>" value="<?php if ($result->pract_test=="0"){echo $option['oid'];}else{echo $option['oid']."-".$option['score'];}?>" onClick="" <?php if($selected_oids[$key] == $option['oid']){ echo "checked"; } ?> > </td>
								<td style="border:0px;width:750px;"><?php echo $option['option_value'];?></td></tr></table>
							</td></tr>
							<?php
							$opcount+=1;
							}
							}
							if ($result->pract_test=="1"){
							?>
							<tr>
								<td>
									<div class="div_exp_corr" id="div_exp_id<?php echo $key; ?>">
										<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/tick.png"></span>
										<?php echo $question['description']?>
									</div>
									<div class="div_exp_wrong" id="div_exp_id_wrong<?php echo $key; ?>">
										<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/RidqqzKi9.png"> Wrong Answer</span><br><br>
										<?php echo $question['description']?>
									</div>
								</td>
							</tr>
							<?php } ?>
							<tr  style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;">
								<td>
									<?php
									if ($result->pract_test=="1"){
									?>
									<a href="#"   class="button-success pure-button" style="cursor:pointer;"  onClick="check_question('<?php echo $key;?>');" > Check</a>
									<?php
									}
									if($key >="1"){
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');" >Back</a>
									<?php
									}
									if($key!=(count($assigned_question['0'])-1)){
									if(in_array($key,$startnextcate)){
									$category_number+=1;
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>');" > Save & Next</a>
									<?php
									}else{
									?>
									<a href="#"   class="btn btn-success" style="cursor:pointer;"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>');" > Save & Next</a>
									<?php
									}
									}
									?>
									&nbsp;
									<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
									&nbsp;
									<a href="#"   class="btn btn-info"  onClick="clearresponse('<?php echo $key;?>');" > Clear-Response </a>
									&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
								</td></tr>
							</table>
							<?php
							}else if($question['q_type']=="1"){
							?>
							<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
							<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
								<tr><td >Question <?php echo $key+1; ?></td></tr>
								<tr><td> <?php echo $question['question'];?></td></tr>
								<?php
								$opcount=0;
								foreach($assigned_question[1] as $keys => $option){
								if($option['qid']==$question['qid']){
								?>
								<tr><td><table>
									<tr><td style="width:10px; border:0px;"> <input type="checkbox"  id="op-<?php echo $key;?>-<?php echo $opcount;?>" name="answers<?php echo $key;?>[]" value="<?php if ($result->pract_test=="0"){echo $option['oid'];}else{echo $option['oid']."-".$option['score'];}?>" onClick="" <?php if(in_array($option['oid'],explode("-",$selected_oids[$key]))){ echo "checked"; } ?> > </td>
									<td style="border:0px;width:750px;"> <?php echo $option['option_value'];?></td></tr></table>
								</td></tr>
								<?php
								$opcount+=1;
								}
								}
								?>
								<!-- Explanation-->
								<?php
								if ($result->pract_test=="1"){
								?>
								<tr>
									<td>
										<div class="div_exp_corr" id="div_exp_id<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/tick.png"></span>
											<?php echo $question['description']?>
										</div>
										<div class="div_exp_wrong" id="div_exp_id_wrong<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/RidqqzKi9.png"> Wrong Answer</span><br><br>
											<?php echo $question['description']?>
										</div>
									</td>
								</tr>
								<?php } ?>
								<!-- Explanation end-->
								<tr style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;"><td>
									<?php
									if ($result->pract_test=="1"){
									?>
									<a href="#"   class="button-success pure-button" style="cursor:pointer;"  onClick="check_question_chekbox('<?php echo $key;?>');" >Check</a>
									<?php
									}
									if($key >="1"){
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');" >Back</a>
									<?php
									}
									if($key!=(count($assigned_question['0'])-1)){
									if(in_array($key,$startnextcate)){
									$category_number+=1;
									?>
									<a href="#"   class="btn btn-success" style="cursor:pointer;"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>')update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>');" >Save & Next</a>
									<?php
									}else{
									?>
									<a href="#"   class="btn btn-success" style="cursor:pointer;" onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>');" >Save & Next</a>
									<?php
									}
									}
									?>
									&nbsp;
									<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
									&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
								</td></tr>
							</table>
							<?php
							}else if($question['q_type']=="2"){
							foreach($assigned_question[1] as $keys => $option){
							if($option['qid']==$question['qid']){
							?>
							<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
							<input type="hidden" name="fill_blank<?php echo $key;?>" value="<?php if ($result->pract_test=="0"){echo $option['oid'];}else{echo $option['oid']."-".$option['option_value'];}?>" >
							<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
								<tr><td >Question <?php echo $key+1; ?></td></tr>
								<tr><td> <?php $value = "";
											if(isset($question_user_ans[$question['qid']])) $value = $question_user_ans[$question['qid']];
										$fill_replace="<input type='text'  autocomplete='off' name='answers".$key."' value=".$value.">";
								echo str_replace('_____',$fill_replace,$question['question']);?></td></tr>
								<?php
								$opcount=0;
								}
								}
								?>
								<!-- Explanation-->
								<?php
								if ($result->pract_test=="1"){
								?>
								<tr>
									<td>
										<div class="div_exp_corr" id="div_exp_id<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/tick.png"></span>
											<?php echo $question['description']?>
										</div>
										<div class="div_exp_wrong" id="div_exp_id_wrong<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/RidqqzKi9.png"> Wrong Answer</span><br><br>
											<?php echo $question['description']?>
										</div>
									</td>
								</tr>
								<?php } ?>
								<!-- Explanation end-->
								<tr  style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;"><td>
									<?php
									if ($result->pract_test=="1"){
									?>
									<a href="#"   class="button-success pure-button" style="cursor:pointer;" onClick="check_question_fill('<?php echo $key;?>','<?php echo $question['q_type'];?>');" >Check</a>
									<?php
									}
									if($key >="1"){
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');" >Back</a>
									<?php
									}
									if($key!=(count($assigned_question['0'])-1)){
									if(in_array($key,$startnextcate)){
									$category_number+=1;
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" >Save & Next</a>
									<?php
									}else{
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" >Save & Next</a>
									<?php
									}
									}
									?>
									&nbsp;
									<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
									&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
								</td></tr>
							</table>
							<?php
							}else if($question['q_type']=="3"){
							foreach($assigned_question[1] as $keys => $option){
							if($option['qid']==$question['qid']){
							?>
							<input type="hidden" name="fill_blank<?php echo $key;?>" value="<?php if ($result->pract_test=="0"){echo $option['oid'];}else{echo $option['oid']."-".$option['option_value'];}?>" >
							<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
							<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
								<tr><td >Question <?php echo $key+1; ?></td></tr>
								<tr><td> <?php echo $question['question'];?></td></tr>
								<?php $value = "";
								if(isset($question_user_ans[$question['qid']])) $value = $question_user_ans[$question['qid']];?>
								<tr><td> <input type='text' autocomplete='off' name="answers<?php echo $key;?>" value="<?php echo $value?>"></td></tr>
								<?php
								}
								}
								?>
								<!-- Explanation-->
								<?php
								if ($result->pract_test=="1"){
								?>
								<tr >
									<td>
										<div class="div_exp_corr" id="div_exp_id<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/tick.png"></span>
											<?php echo $question['description']?>
										</div>
										<div class="div_exp_wrong" id="div_exp_id_wrong<?php echo $key; ?>">
											<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/RidqqzKi9.png"> Wrong Answer</span><br><br>
											<?php echo $question['description']?>
										</div>
									</td>
								</tr>
								<?php } ?>
								<!-- Explanation end-->
								<tr  style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;"><td>
									<?php
									if ($result->pract_test=="1"){
									?>
									<a href="#"   class="button-success pure-button" style="cursor:pointer;"  onClick="check_question_fill('<?php echo $key;?>','<?php echo $question['q_type'];?>');" >Check</a>
									<?php
									}
									if($key >="1"){
									?>
									<a href="#"   class="btn btn-success" onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');">Back</a>
									<?php
									}
									if($key!=(count($assigned_question['0'])-1)){
									if(in_array($key,$startnextcate)){
									$category_number+=1;
									?>
									<a href="#"   class="btn btn-success" onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');">Save & Next </a>
									<?php
									}else{
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" > Save & Next </a>
									<?php
									}
									}
									?>
									&nbsp;
									<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
									&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
								</td></tr>
							</table>
							<?php
							}else if($question['q_type']=="4"){
							?>
							<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
							<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
								<tr><td >Question <?php echo $key+1; ?></td></tr>
								<tr><td> <?php echo $question['question'];?></td></tr>
								<tr><td>
									<?php $value = "";
									if(isset($question_user_ans[$question['qid']])) $value = $question_user_ans[$question['qid']];?>
									<textarea  style="width:100%;height:300px" name="answers<?php echo $key;?>" ><?php echo $value?></textarea>
								</td></tr>
								<?php
								$opcount=0;
								foreach($assigned_question[1] as $keys => $option){
								if($option['qid']==$question['qid']){
								?>
								<tr><td><table>
									<tr><td style="width:10px; border:0px;"> <input type="checkbox" autocomplete='off'  id="op-<?php echo $key;?>-<?php echo $opcount;?>" name="answers<?php echo $key;?>[]" value="<?php echo $option['oid'];?>" onClick="answered_color();" <?php if($selected_oids[$key] == $option['oid']){ echo "checked"; } ?> > </td>
									<td style="border:0px;width:750px;"> <?php echo $option['option_value'];?></td></tr></table>
								</td></tr>
								<?php
								$opcount+=1;
								}
								}
								?>
								<tr  style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;"><td>
									<?php
									if($key >="1"){
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');" > Back </a>
									<?php
									}
									if($key!=(count($assigned_question['0'])-1)){
									if(in_array($key,$startnextcate)){
									$category_number+=1;
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" > Save & Next </a>
									<?php
									}else{
									?>
									<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" >Save & Next </a>
									<?php
									}
									}
									?>
									&nbsp;
									<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
									&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
								</td></tr>
							</table>
							<?php
							}else if($question['q_type']=="5"){
							?>
							<input type="hidden" name="q_type<?php echo $key;?>" value="<?php echo $question['q_type'];?>" id="question_type<?php echo $key;?>">
							<table id="ques<?php echo $key;?>" class="<?php if($key=='0'){ echo 'showquestion'; }else{ echo 'hidequestion'; } ?>">
								<tr><td >Question <?php echo $key+1; ?></td></tr>
								<tr><td> <?php echo $question['question'];?></td></tr>
								<?php
								$opcount=0;
								$q_op=array();
								$q_ans=array();
								$option_id=array();
								foreach($assigned_question[1] as $keys => $option){
								if($option['qid']==$question['qid']){
								$correct_optn=$option['option_value'];?>
								<input type="hidden" name="question_correct<?php echo $key;?>[]" value="<?php echo $correct_optn;?>" id="">
								<?php
								$match=explode('=',$option['option_value']);
								$option_id[]=$option['oid'];
								$q_op[]=$match[0];
								$q_ans[]=$match[1]
								?>
								<?php
								$opcount+=1;
								}
								}
								?>
								<?php
								$new_answered_op=array();
								$new_answered_op_f=array();
								$value = "";
								if(isset($question_user_ans[$question['qid']])) $value = $question_user_ans[$question['qid']];
								$selected_option_by_user=explode(",",$value);
								$q_op_flip=array_flip($q_op);
								foreach($selected_option_by_user as $vvv){
								$vvvv=explode("=",$vvv);
								$new_answered_op[]=$vvvv['0'];
								}
								$selected_option_by_user_flip=array_flip($new_answered_op);
								foreach($q_op_flip as $keymf => $valf){
								$new_answered_op_f[]=$selected_option_by_user[$selected_option_by_user_flip[$keymf]];
								}
								$selected_option_by_user=$new_answered_op_f;
								?>
								<?php
								foreach($q_op as $keym => $val){
								?>
								<input type="hidden" name="question_option<?php echo $key;?>[]" value="<?php echo $option_id[$keym];?>" id="">
								<input type="hidden" name="question_option_val<?php echo $key;?>[]" value="<?php echo $val;?>" id="">
								<tr><td><table>
									<tr><td style="width:200px; border:0px;"> <?php echo $val; ?>
									</td>
									<td style="border:0px;width:750px;"><select name="answers<?php echo $key;?>[]">
										<option value="">Select your option</option>
										
										<?php
										shuffle($q_ans);
										foreach($q_ans as $key8 => $val2){ ?>
										<option value="<?php echo $val2;?>"  <?php $oppp=explode("=",$selected_option_by_user[$keym]);  if($oppp['1']==$val2){ echo "selected"; } ?> ><?php echo $val2;?></option>
										
										<?php
										}?>
									</select>
								</td></tr></table>
							</td></tr>
							<?php
							}
							?>
							
							<!-- Explanation-->
							<?php
							if ($result->pract_test=="1"){
							?>
							<tr>
								<td>
									<div class="div_exp_corr" id="div_exp_id<?php echo $key; ?>">
										<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/tick.png"></span>
										<?php echo $question['description']?>
									</div>
									<div class="div_exp_wrong" id="div_exp_id_wrong<?php echo $key; ?>">
										<span><img style="height:20px;" src="<?php echo base_url(); ?>/images/RidqqzKi9.png"> Wrong Answer</span><br><br>
										<?php echo $question['description']?>
									</div>
								</td>
							</tr>
							<?php } ?>
							<!-- Explanation end-->
							<tr  style="position:fixed; bottom:0px;left:0px;padding:5px;background:#ffffff;border-top:1px solid #ddd;width:100%;max-height:65px;"><td>
								<?php
								if ($result->pract_test=="1"){
								?>
								<a href="#"   class="button-success pure-button" style="cursor:pointer;" onClick="check_question_match('<?php echo $key;?>');" >Check</a>
								
								<?php
								}
								if($key >="1"){
								?>
								<a href="#"   class="btn btn-success" onClick="showquestion('<?php echo $key-1;?>','<?php echo $question['q_type'];?>');" >Back</a>
								<?php
								}
								if($key!=(count($assigned_question['0'])-1)){
								if(in_array($key,$startnextcate)){
								$category_number+=1;
								?>
								<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');changecategory('<?php echo $category_number;?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" > Save & Next </a>
								<?php
								}else{
								?>
								<a href="#"   class="btn btn-success"  onClick="showquestion('<?php echo $key+1;?>','<?php echo $question['q_type'];?>');update_curr_ans('<?php echo $key;?>','<?php echo $question['q_type'];?>','<?php echo $question['qid'];?>');" >Save & Next </a>
								<?php
								}
								}
								?>
								&nbsp;
								<a href="#"   class="btn btn-warning"  onClick="reviewlater('<?php echo $question['q_type'];?>');"> Review later </a>
								&nbsp; <?php if ($result->pract_test=="0"){ ?><a href="javascript:pre_sbtform();"   class="btn btn-danger">Submit Test</a><?php }else{ ?> <a href="javascript:close_practice();"   class="button-error pure-button" style="cursor:pointer;">Close</a> <?php } ?>
							</td></tr>
						</table>
						<?php
						}
						}
						?>
					</div>
					<div id="left_div" style="padding:10px; width:22%;height:480px; border:1px solid #eeeeee;margin-left:5px;margin-top:40px;">
						<div id="category_name_view"></div>
						<b>Questions</b><br>
						<div style="overflow-y:scroll;height:280px; width:100%;">
							<?php
							foreach($assigned_question[0] as $key => $question){
							?>
							<div class="count_btn" id="nq<?php echo $key;?>" onClick="showquestion('<?php echo $key;?>');"><?php echo $key+1;?></div>
							<?php
							}
							?>
						</div>
						
						<input type="hidden" name="noq" id="noq" value="<?php echo $key;?>">
						<br> <table>
							<tr><td style="font-size:12px;"><div class="count_btn" style="background:#267B02;width:10px;height:10px;">&nbsp;</div> Answered</td></tr>
							<tr><td style="font-size:12px;"><div class="count_btn" style="background:#D03800;width:10px;height:10px;">&nbsp;</div> UnAnswered</td></tr>
							<tr><td style="font-size:12px;"><div class="count_btn" style="background:#FFD800;width:10px;height:10px;">&nbsp;</div> Review-Later</td></tr>
							<tr><td style="font-size:12px;"><div class="count_btn" style="background:#212121;width:10px;height:10px;">&nbsp;</div> Not-visited</td></tr>
						</table>
						<br><br>
					</div>
					<div style="clear:both"></div>
				</div>
				<br><br>
			</div>
			<div  id="warning_div" style="padding:10px; position:fixed;z-index:100;display:none;width:100%;border-radius:5px;height:200px; border:1px solid #dddddd;left:4px;top:70px;background:#ffffff;" >
				<center><b>Do you really want to submit Quiz? </b><br><br>
				<a href="javascript:pre_sbtform();"   class="btn btn-danger"  style="cursor:pointer;" >Cancel</a> &nbsp; &nbsp; &nbsp; &nbsp;
				<a href="javascript:sbtform();"   class="btn btn-info" style="cursor:pointer;">Submit Quiz</a>
				</center>
			</div>
		</form>
		<script language="javascript">
		document.onmousedown=disableclick;
		status="Right Click Disabled";
		Function disableclick(event)
		{
		if(event.button==2)
		{
		alert(status);
		return false;
		}
		}
		</script>
		<script language="javascript">
		function pre_sbtform(){
		if((document.getElementById('warning_div').style.display)=="block"){
		document.getElementById('warning_div').style.display="none";
		}else{
		document.getElementById('warning_div').style.display="block";
		}
		}
		function sbtform(){
		document.getElementById('testform').submit();
		}
		</script>
		<!--
		<script type="text/javascript">
			tinyMCE.init({
			
		mode : "textareas",
				theme : "advanced",
				relative_urls:false,
			plugins: "jbimages",
			height:"500",
			width:"700",
			
		// ===========================================
		// PUT PLUGIN'S BUTTON on the toolbar
		// ===========================================
			
			
				theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
				theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
				theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
				
				
			});
		</script>
		-->
		<script>
		function close_practice(){
		window.location="<?php echo site_url();?>quiz/quiz/close_practice/";
		}
		hideqnobycate();
		$(document).ready(function(){
		var dheight=$(window).height();
		var qsheight=(parseInt(dheight)-parseInt(200))+"px";
		$('.showquestion').css('height',qsheight);
		$('.hidequestion').css('height',qsheight);
		$('#page-wrapper').css('margin','0px');
		$('#page-wrapper').css('padding','10px');
		});
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
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url();?>bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?php echo base_url();?>bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url();?>bootstrap/dist/js/sb-admin-2.js"></script>
		<!-- Toast Notification -->
		<script type="text/javascript">
	</body>
</html>
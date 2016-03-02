<?php
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
?>
<div class="row" style="margin-top:10px;">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php if($title){ echo $title; } ?>
			</div>
			<!-- .panel-heading -->
			<div class="panel-body">
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
									<input type="checkbox" name="agree" id="agree"> Tick this checkbox , if you have read all instructions <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and ready to attempt quiz / test.
									<div id="warning_checkbox"  class="arrow_box" style="display:none;color:#ffffff;background:#D03800;padding:2px; width:150px;">Tick above check box ! </div>
								</td>
								<td>
									<input type="button" id="starttestbtn" value="Start Test" onClick="javascript:checkbox_validate();"   class="btn btn-success" style="cursor:pointer;">
								</td>
							</tr>
							
						</tbody>
					</table>
					
					
				</div>
			</div>
			<!-- .panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<script>
	function checkbox_validate(){
	if(document.getElementById('agree').checked==true){
window.location="<?php echo site_url('quiz/access_test/'.$result->quid);?>";
}else{
document.getElementById('warning_checkbox').style.display="block";
}
}
</script>
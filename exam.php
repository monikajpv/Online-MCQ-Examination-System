<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
?>
<div class="main">
	<h1>Welcome to Online Exam - Start Now</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
		<h2>Start Exam</h2>
		<ul>
			
			<div class="select">
				<select name="slct" id="slct">
					<option selected disabled value="0">Choose an Exam</option>
					<option value="1">Exam 1</option>
				</select>
			</div>
			<br>
			<li><a href="starttest.php">Start Now...</a></li>
		</ul>
	</div>
	
</div>
<?php include 'inc/footer.php'; ?>
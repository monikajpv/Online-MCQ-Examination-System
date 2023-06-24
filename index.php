<?php include 'inc/header.php'; ?>
<?php
	Session::checkLogin();
?>
<div class="main">
	<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
		<form action="" method="post">
			<table class="tbl">    
				<tr>
					<td>Email  </td>
					<td><input name="email" type="text" id="email"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input name="password" type="password" id="password"></td>
				</tr>
				
				<tr>
					<td></td>
					<td class="text-center"><input type="submit" id="loginsubmit" value="Login" class="btn btn-success">
					</td>
				</tr>
			</table>
		</form>
		
		<span class="empty" style="display: none;">Field must not be empty !</span>
		<span class="error" style="display: none;">Email or Password not matched !</span>
		<span class="disable" style="display: none;">User Id disabled !</span>
		
	</div>
	
</div>
<div class="clearfix col-md-12 text-center">
	
	<p><br>Don't Have Account <a href="register.php">Register Now</a></p>
</div>
<?php include 'inc/footer.php'; ?>
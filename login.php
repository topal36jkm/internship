<?php include('template_top.php');
echo "<div style='height: 70px'></div>";
?>
	<?php
		// session_start();
		$_SESSION['frmAction'] = md5('itoffside.com' . rand(1,9999));
	?>
	<div align="center">
	<form class="form-inline"  method="post" action="signin-action.php">
	  	<div class="form-group">
	    	<label>User: </label>
	    	<input type="text" class="form-control" id="username" name="username">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Password:</label>
	    	<input type="password" class="form-control" id="password" name="password">
	  	</div>
	  	<div class="form-group">
	  		<button type="submit" class="btn btn-default">Login</button>
	  	</div>
	  	<input type="hidden" name="frmAction" value="<?php echo $_SESSION['frmAction']; ?>" />
	</form>
 	<br><span class="label label-danger" id="login_alert"></span>
	<!-- <a href="register.php">สมัครสมาชิก</a> -->
	</div>

<?php //check the account
	// include('template_buttom.php');
	echo '<script language="JavaScript">';
		if(isset($_SESSION['login_alert']))
		{
			echo 'document.getElementById("login_alert").innerHTML = "'.$_SESSION['login_alert'].'"';
		}
		$_SESSION['login_alert'] = "";
	echo '</script>';
?>

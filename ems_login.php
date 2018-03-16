<?php
	require('login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style type="text/css">
		body{
			background: linear-gradient(90deg, rgba(0,0,0,0.6), rgba(0,0,0,0.5)), url(campaign-bg.jpg);
            background-position: right;
            background-size: cover;
            color:#fff;
}
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="ems_login.php" method="post">
			<h1 class="form-title">Log In to EMS</h1>
			<div class="login-form">
			<?php
				if(!empty($response))
				{
					echo "<div class='form-group'><span>".$response."</span> </div>";
				}
			?>
			<div class="form-group">
				<label class="form-label">Username / Email:</label><br/>
				<input class="form-control" placeholder="username/email" name="email">
			</div>
			<div class="form-group">
				<label class="form-label">Password :</label><br/>
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
			<button class="btn" type="submit">Sign In</button><br/>
            </div>

		</form>
		<div class="form-ques">
			Not have an account?<a href="index.php"> Create Account</a>
		</div>
	</div>


</body>
</html>
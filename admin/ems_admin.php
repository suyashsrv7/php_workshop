<?php
	require('create_event.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style type="text/css">
		body{
			background: linear-gradient(90deg, rgba(0,0,0,0.6), rgba(0,0,0,0.5)), url(../campaign-bg.jpg);
            background-position: right;
            background-size: cover;
            color:#fff;
}
		}
	</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href=",,/logout.php"><h3>Logout</h3></a> </div>
		<div class="nav-link"><a href="ems_admin_events.php"><h3>Your Events</h3></a></div>
	</div>
	<div class="container">
		<form action="ems_admin.php" method="post" >
			<h1 class="form-title">Welcome Admin</h1>
			<div class="login-form">
			<?php
				if(isset($response))
				{
					echo "<div class='form-group'>
					<span>".$response."</span>
					</div>";
				}
			?>
			<div class="form-group">
				<label class="form-label">Title:</label><br/>
				<input type="text" class="form-control" placeholder="Enter Title" name="title">
			</div>
			<div class="form-group">
				<label class="form-label">Date:</label><br/>
				<input class="form-control" type="date" name="date">
			</div>
			<div class="form-group">
				<label class="form-label">Description:</label><br/>
				<textarea name="description" style="resize: none;"  class="form-control" placeholder="Description" ></textarea>
			</div>

			<button type="submit" class="btn">Add</button><br/>
            </div>

		</form>
	</div>


</body>
</html>
<?php


?>
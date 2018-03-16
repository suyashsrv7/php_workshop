<?php
	require('user_panel11.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Event management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style type="text/css">
		body{
			background: linear-gradient(90deg, rgba(0,0,0,0.6), rgba(0,0,0,0.5)), url(campaign-bg.jpg);
            background-position: right;
            background-size: cover;
            color:#fff;

		}
	</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="logout.php"><h3>Log Out</h3></a> </div>
		<div class="nav-link"><a href="#">
			<?php if(isset($_SESSION['user'])){
				echo "<h3>Welcome: ".$_SESSION['user']."</h3>";
			}
			?>
		</a></div>
	</div>
	<div style="margin-left:10%;margin-right:10%;" class="container">
	<br>
		<h1>Events</h1>
		<hr>
		<br><br>
		<?php
		for($k=0;$k<$i;$k++)
		{
			echo "<div class='details'>
			<h1 class='name'>".$events[$k]['title']."</h1>
			<p class='desc'>".$events[$k]['description']."</p>
			<button class='btn' style='margin-left: 0;' value=".$events[$k]['id'].">Participate</button>
		</div>";
		}
		?>
		

	</div>

</body>
</html>
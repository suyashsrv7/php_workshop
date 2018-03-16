<?php require('../user_panel11.php');?>
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
	hr{
		border: 0px;
		border-top: 1px solid #fff;
	}
</style>
<style>
.btn-update{
	border:none;
	color:white;
	padding:10px 28px;
	cursor:pointer;
	
	margin-top:10px;
	border-radius: 5px;
	border: 2px solid #4286f4;
	width:100px;
}
.btn-del{
	border:none;
	color:white;
	padding:10px 28px;
	cursor:pointer;
	margin-top:10px;
	border-radius: 5px;
	border: 2px solid #f44336;
	width:100px;
}
</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>EVENT MANAGEMENT SYSTEM</h3> </div>
		<div class="nav-link logIn"><a href="../logout.php"><h3>Logout</h3></a> </div>
		<div class="nav-link"><a href="ems_admin.php"><h3>Add Event</h3></a></div>
	</div>
	<div style="margin-left: 10%;margin-right: 10%;" class="container">
		<br>
		<h1>Events</h1>
		<hr>
		<br><br>
		<!-- repeate the below div -->
		<?php
		for($k=0;$k<$i;$k++)
		{
			$id = $events[$k]['id'];
			$title = $events[$k]['title'];
			$description = $events[$k]['description'];
			$date = $events[$k]['date'];
			
			echo "<div>
			<h2>".$title."</h2>
			<p>".$description."</p>
			<p>".$date."</p>
			<br>
			<div style='text-align: right;'>
				<a href='ems_admin_update.php?id=$id&title=$title&description=$description&date=$date' class='btn-update'>Update</a>
				<a class='btn-del' href='delete.php?id=$id'>Delete</a>	
			</div>
			<br><br>
			<hr>
			</div>";
		}
		?>
	</div>


</body>
</html>
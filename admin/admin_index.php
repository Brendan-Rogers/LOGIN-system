<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	require_once('scripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ADMINISTRATOR PANEL</title>
	<link rel="stylesheet" href="../css/main.css">
</head>

<body>
	<?php 
		// retrieve 24hour Time
		$i = date("H");
		// load message
		if ($i < 10) {
			$x = 'Good morning ';
			echo "<main class='night'>";
		} elseif ($i > 10 && i < 17) {
			$x = 'Good afternoon ';
			echo "<main class='afternoon'>";
		} else {
			$x = 'Good evening ';
			echo "<main class='night'>";
		}
	 ?>
	<div id="stuff">
		<h2>
			<?php
			// greet user with time appropriate message
			echo $x.ucwords($_SESSION['user_name']).'!';

			?>
		</h2>
		<h3>

			<?php 
			// information about the time of day, and last successful login
			echo 'Today is '.date("l").', '.date("F").' the '.date("jS").'<br>';
			echo "The time is ".date("h:ia");
			echo "<br><br>Last Successfull login: ".$_SESSION['last_login'];

			?>

		</h3>
		<a href="admin_createuser.php">Create User</a>
		<a href="admin_edituser.php">Edit User</a>
		<a href="scripts/caller.php?caller_id=logout">Sign Out</a>
	</div>

</main>

</body>

</html>
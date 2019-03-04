<?php
	require_once('scripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	$time = date("Y/m/d");
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip, $time);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ADMIN PANEL LOGIN</title>
</head>

<body>
	<?php if(!empty($message)){ echo $message;} ?>
	
	<h2>ENTER YOUR LOGIN INFORMATION BELOW:</h2>

	<form action="admin_login.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" value="">
		<br>
		<label>Password</label>
		<input type="password" name="password" value="">
		<br><br>
		<input type="submit" name="submit" value="Show me the money">
	</form>

	<?php 

	$get_all_usernames = 'SELECT user_name FROM tbl_users';
	$usernames = $pdo->query($get_all_usernames);

	$users = array();

	while ($user = $usernames->fetch(PDO::FETCH_ASSOC)) {
		$users[] = $user['user_name'];
	}	

	echo $users;


	?>

</body>

</html>
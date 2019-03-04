<?php 
	require_once('scripts/config.php');
	include('connect.php');


	$get_all_usernames = 'SELECT user_name FROM tbl_users';
	$usernames = $pdo->query($get_all_usernames);

	$users = array();

	while ($user = $usernames->fetch(PDO::FETCH_ASSOC)) {
		$users[] = $user['user_name'];
	}	

	header('Content-Type: application/json');
	echo json_encode($users);

 ?>
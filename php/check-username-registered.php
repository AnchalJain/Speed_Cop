<?php session_start();

	require('db_con.php');

	$username 	= mysqli_real_escape_string($link, $_POST['username']);
	if($username != ''){
		$sql = "select email from user_info where username = '$username'";
		$qry = mysqli_query($link, $sql);

		$numrows  = mysqli_num_rows($qry);

		if($numrows > 0){
			echo "bad";
		}
	}
?>

<?php session_start();
	
	require('db_con.php');
	
	$email 		= mysqli_real_escape_string($con, $_POST['email']);
	$username 	= mysqli_real_escape_string($con, $_POST['username']);
	
	if($email != ''){
		$sql = "select email from user_info where email = '$email'";
		$qry = mysqli_query($link, $sql);

		$numrows  = mysqli_num_rows($qry);

		if($numrows > 0){
			//print message for jquery
			echo "<p style='color:red'>Email is registered already!!</p>";
		}else{
			echo "<p style='color:green'>Good! New Email address!!</p>";
		}
	}
	
	if($username != ''){
		$sql = "select email from user_info where username = '$username'";
		$qry = mysqli_query($link, $sql);

		$numrows  = mysqli_num_rows($qry);

		if($numrows > 0){
			echo "<p style='color:red'>Username not available!!</p>";			
		}else{
			echo "<p style='color:green'>Username available!</p>";
		}
	}
	

?>
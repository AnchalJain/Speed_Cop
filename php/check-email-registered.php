<?php 
	
	require('db_con.php');
	
	$email = mysqli_real_escape_string($link, $_POST['email']);
	
	$sql = "select email from user_info where email = '$email'";
	$qry = mysqli_query($link, $sql);

	$numrows  = mysqli_num_rows($qry);

	if($numrows > 0){
		echo "bad";
	}
	
?>
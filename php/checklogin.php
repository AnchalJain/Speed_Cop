<?php session_start();

	require('db_con.php');
	
	$email 		= mysqli_real_escape_string($link, $_POST['email']);
	$password 	= mysqli_real_escape_string($link, $_POST['password']);
	
	//convert string to md5
	$password 	= md5($password);
	
	$sql = "SELECT * FROM `user_info` WHERE `email`='$email' and password = '$password'";
       
	$qry = mysqli_query($link, $sql);
        $result = mysqli_fetch_array($qry);
	$numrows  = mysqli_num_rows($qry);
	
	if($numrows > 0 && $result['active'] == 1) {
		$_SESSION['email'] = $email;
		echo "cool";
	}
        elseif($numrows > 0 && $result['active'] == 0) {
             echo "not_activated";
        }
	else {
          echo "invalid";
        }

?>
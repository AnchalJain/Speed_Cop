 	<?php

	require('./db_con.php');

  $firstname 		= mysqli_real_escape_string($link, $_POST['firstname']);
  $lastname 		= mysqli_real_escape_string($link, $_POST['lastname']);
	$email 		= mysqli_real_escape_string($link, $_POST['email']);
	$password	= mysqli_real_escape_string($link, $_POST['password']);
  $contact 		= mysqli_real_escape_string($link, $_POST['contact']);
	$vechicle = mysqli_real_escape_string($link, $_POST['vechicle']);
  $pan 		= mysqli_real_escape_string($link, $_POST['pan']);

	//convert password to md5 for security
	$password 	= md5($password);
      echo ($email);
// 	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
// 		echo 'The email you have entered is invalid, please try again.';
// 	}
// else

$sql = "insert into user_info (firstname, lastname, email, password, contact, vechicle, pan) values ('$firstname', '$lastname', '$email','$password', '$contact','$vechicle','$pan');";
	$qry = mysqli_query($link, $sql);


// $headers = 'From:no-reply@ajayastromoneygur.com' . "\r\n";
// mail($to, $subject, $message, $headers);

	if($qry){
		echo "done";
	}
	else {
		echo "not done";
	}


?>

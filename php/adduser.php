<?php
session_start();

//echo "jai mata di";
	//require('db_con.php');

	//$link = mysqli_connect('localhost', 'root', 'forceofnature', 'analysis');
	//$db = mysqli_select_db($link, 'analysis');


	//if(mysqli_connect_errno()){echo "failed";}

	$email 		= $_GET['first_name'];
	//$password	= mysqli_real_escape_string($link, $_POST['password']);
    //    $fname 		= mysqli_real_escape_string($link, $_POST['first_name']);
      //  $lname 		= mysqli_real_escape_string($link, $_POST['last_name']);
        //$contact 		= mysqli_real_escape_string($link, $_POST['contact']);
        //$dob 		= mysqli_real_escape_string($link, $_POST['dob']);
        //$aadhar 		= mysqli_real_escape_string($link, $_POST['aadhar']);
        //$pan 		= mysqli_real_escape_string($link, $_POST['pan']);
echo $fname ;


	//convert password to md5 for security
	//$password 	= md5($password);
        // $hash = md5( rand(0,1000) );
// 	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
// 		echo 'The email you have entered is invalid, please try again.';
// 	}
// else
// {
/*$sql = " insert into user_info (email,password,firstname,lastname,contact,vechicle,pan) values ('anchalj109@gmail.com','2123','Ancahl', 'jain', 123456789,'cuiipcabcu',287437463);";
	$qry = mysqli_query($link, $sql);
        $to      = $email;
        $subject = 'Signup | Verification';
        $message = '

        Thanks for signing up!
        Your account has been created, you can login with the following credentials after you have activated your account by pressing
        the url below.


Please click this link to activate your account:
https://ajayastromoneyguru.com/php/verify.php?email='.$email.'&hash='.$hash.'';

// $headers = 'From:no-reply@ajayastromoneygur.com' . "\r\n";
// mail($to, $subject, $message, $headers);

	if($qry){
		echo "done";
	}

*/
?>

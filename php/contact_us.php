<?php 
	
	require('db_con.php');
	
	$email = $_POST['email'];
        $name= $_POST['name'];
$subject= $_POST['subject'];
$msg= $_POST['msg'];

	
	   $to      = 'astromoneyguru@gmail.com';
           $subject = $subject; 
           $message = 'Name : '.$name.', Email : '.$email.', '.$msg; 
                     
           $headers = 'From:no-reply@ajayastromoneyguru.com' . "\r\n";
           mail($to, $subject, $message, $headers); 
           echo "You mail has been sent. We will get back to you soon.";	
	


        

	
	
?>
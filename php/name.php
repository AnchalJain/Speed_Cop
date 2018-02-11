<?php 
	  
	session_start();
        $email = $_SESSION['email']; $name = $_SESSION['name'];
        include 'db_con.php';

        if (!$link) {
          echo "Error: Unable to connect to MySQL." . PHP_EOL;
          echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
          echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
          exit;
        }

    if(empty($name)) {
        $sql = mysqli_query($link, "SELECT * FROM `user_info` WHERE `email`='$email'");
        $result = mysqli_fetch_array($sql);
          echo $result['fname'];
    }
   else
         echo $name; 

?>
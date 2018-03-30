<?php

	//connect database and select db
	$link = mysqli_connect('localhost', 'root', 'forceofnature', 'analysis');
	$db = mysqli_select_db($link, 'analysis');

?>

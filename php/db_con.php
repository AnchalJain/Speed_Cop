<?php
	
	//connect database and select db
	$link = mysqli_connect('182.50.133.92:3306', 'ajayastr_admin', 'FINANCEastro@000', 'ajayastr_new');
	$db = mysqli_select_db($link, 'ajayastr_new'); 
      
?>
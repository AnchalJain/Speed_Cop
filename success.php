<?php
	header('Access-Control-Allow-Origin: *');
include 'php/db_con.php';

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

     

   session_start();
        $email = $_SESSION['email']; 

	
	$sub_type =  $_GET['sub_type'];

   if(empty($email))
   {
       header("Location: https://ajayastromoneyguru.com/login_signup2.php?sub_type=".$sub_type );
   } 

$array = str_split($sub_type);
$durr = $array[0];

list($a, $b) = explode($durr, $sub_type);


if(($durr =="d" or $durr == "w" or $durr =="m" or $durr =="q" or $durr == "h" or $durr == "y") and $sub_type!="ypr" ){ 

//echo $durr;

switch($durr){
       case "d":
       $durr  = "Daily";
       break;
       case "w":
       $durr  = "Weekly";
       break;
       case "m":
       $durr  = "Monthly";
       break;
       case "q":
       $durr  = "Quarterly";
       break;
       case "h":
       $durr  = "Half-yearly";
       break;
       case "y":
       $durr  = "Yearly";
       break;
        default:
        echo "  ";

}

switch($b){
       case "ism":
       $b  = "Indian Stock Market";
       break;

       case "is":
       $b  = "Indian Stock Market";
       break;
        
       case "gs":
       $b  = "Global Stock Market";
       break;
       
       case "gsm":
       $b  = "Global Stock Market";
       break;
       
       case "b":
       $b  = "Base Metals";
       break;

       case "bm":
       $b  = "Base Metals";
       break;

       case "bul":
       $b  = "Bullion";
       break;
       
       case "ap":
       $b  = "Astro Prediction";
       break;
       case "oil":
       $b  = "Energy Crude Oil Ngt Gas";
       break;
       case "ac":
       $b  = "Agro Commodities";
       break;
       case "curr":
       $b  = "Currency";
       break;
       
       case "nift":
       $b  = "Nifty Index";
       break;

       case "nifty":
       $b  = "Nifty Index";
       break;


       case "sports":
       $b  = "Sports Analysis";
       break;

       case "tmv":
       $b  = "Tushar Market View";
       break;


       case "t":
       $b  = "Tushar Market View";
       break;
              
       case "ig":
       $b  = "Newsletter for Global & Indian Stock Market";
       break;       

       case "oc":
       $b  = "Newsletter for Commodities & Currency";
       break;

       case "so":
       $b  = "Option Strategy For Stock Market";
       break;

       case "so":
       $b  = "Option Strategy For Commodities";
       break;

       case "pgism":
       $b  = "Premium Service For Indian & Global Stock Market";
       break;

       case "pgis":
       $b  = "Premium Service For Indian & Global Stock Market";
       break;

       case "pc":
       $b  = "Premium Service For Commodities";
       break;

       case "eb":
       $b  = "Webinar";
       break;



       
        default:
        echo "  ";

}


$cd = date("y-m-d");

switch($durr){
       case "Daily":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m,$d+1,$y));
       break;
       case "Weekly":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m,$d+7,$y));
       break;
       case "Monthly":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m+1,$d,$y));
       break;
       case "Quarterly":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m+3,$d,$y));
       break;
       case "Half-yearly":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m+6,$d,$y));
       break;
       case "Yearly":
       list($y,$m,$d)=explode('-',$cd);
       $ed = Date("Y-m-d", mktime(0,0,0,$m,$d,$y+1));
       break;
        default:
        echo "  ";

}



$sql = "INSERT INTO `ajayastr_new`.`subscription` (`id`, `email`, `sub_type`, `sub_title`, `st_date`, `exp_date`, `sub_duration`) VALUES ('', '$email', '$sub_type', '$b', '$cd', '$ed', '$durr');";
	$qry = mysqli_query($link, $sql);

}else{

$cd = date("y-m-d");
switch($durr){
       case "g":
       $durr  = "Gold Astrology";
       break;
       case "b":
       $durr  = "Base Metal Astrology";
       break;
       case "c":
       $durr  = "Crude Oil Astrology";
       break;
       case "s":
       $durr  = "Silver Astrology";
       break;
       case "n":
       $durr  = "Nifty Index Astrology";
       break;
       case "l":
       $durr  = "Long/Short/Mid term";
       break;
        default:
        echo "  ";
}

switch($b){
       case "a":
       $b  = "Financial Astrology Course";
       break;

       case "ma":
       $b  = "Financial Astrology Course";
       break;

       case "oa":
       $b  = "Financial Astrology Course";
       break;

       case "ia":
       $b  = "Financial Astrology Course";
       break;

       case "smt":
       $b  = "Financial Astrology Course";
       break;
       
        default:
        echo "  ";

}




$sql = "INSERT INTO `ajayastr_new`.`subscription` (`id`, `email`, `sub_type`, `sub_title`, `st_date`, `exp_date`, `sub_duration`) VALUES ('', '$email', '$sub_type', '$b', '$cd', '-', '$durr');";
	$qry = mysqli_query($link, $sql);


}


if($sub_type=="smc" or $sub_type=="cmc" or $sub_type=="aq" or $sub_type=="tq" or $sub_type=="car" or $sub_type=="ypr"){


switch($sub_type){
       case "smc":
       $b  = "Phone Consultancy";
       $durr = "Stock Market Consultancy";
       break;

       case "cmc":
             $b  = "Phone Consultancy";
       $durr  = "Commodity Market Consultancy";
       break;

       case "aq":
      $b  = "Phone Consultancy";
       $durr  = "Ask Que";
       break;

       case "tq":
      $b  = "Phone Consultancy";
       $durr  = "Three Question";
       break;

       case "car":
      $b  = "Phone Consultancy";
      $durr  = "Company Astro Report";
       break;

       case "ypr":
      $b  = "Phone Consultancy";
       $durr  = "Yearly Personal Report";
       break;
       
        default:
        echo "  ";

}




$sql = "INSERT INTO `ajayastr_new`.`subscription` (`id`, `email`, `sub_type`, `sub_title`, `st_date`, `exp_date`, `sub_duration`) VALUES ('', '$email', '$sub_type', '$b', '$cd', '-', '$durr');";
	$qry = mysqli_query($link, $sql);


} 

if($sub_type=="uby" or $sub_type=="ald" or $sub_type=="lue" or $sub_type=="low" or $sub_type=="othi"){


switch($sub_type){
       case "uby":
       $b  = "Astro Shop Purchases";
       $durr = "Ruby(Manek)";
       break;

       case "ald":
             $b  = "Astro Shop Purchases";
       $durr  = "Emerald(Panna)";
       break;

       case "lue":
      $b  = "Astro Shop Purchases";
       $durr  = "Blue Sapphire(Neelam)";
       break;

       case "low":
      $b  = "Astro Shop Purchases";
       $durr  = "Yellow sapphire(Pukraj)";
       break;

       case "othi":
      $b  = "Astro Shop Purchases";
      $durr  = "Mothi";
       break;

       
        default:
        echo "  ";

}




$sql = "INSERT INTO `ajayastr_new`.`subscription` (`id`, `email`, `sub_type`, `sub_title`, `st_date`, `exp_date`, `sub_duration`) VALUES ('', '$email', '$sub_type', '$b', '$cd', '-', '$durr');";
	$qry = mysqli_query($link, $sql);


}

if($sub_type=="kett" or $sub_type=="art"){


switch($sub_type){
       case "kett":
       $b  = "Purchased Book";
       $durr = "Ajay Market Theory 2014-15";
       break;

       case "art":
             $b  = "Purchased Book";
       $durr  = "Ajay Market Theory 2015-16";
       break;



       
        default:
        echo "  ";

}




$sql = "INSERT INTO `ajayastr_new`.`subscription` (`id`, `email`, `sub_type`, `sub_title`, `st_date`, `exp_date`, `sub_duration`) VALUES ('', '$email', '$sub_type', '$b', '$cd', '-', '$durr');";
	$qry = mysqli_query($link, $sql);


}





                       
?>

<!DOCTYPE html>
  <html>
    <head>
          <title>Ajayastromoneyguru | Financial Astrology Services</title>
          <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <link href="css/GlobalStockMarket.css" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize_css/css/materialize.min.css"  media="screen,projection"/>
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <link rel="stylesheet" href="mdl_css/material.min.css">
          <script src="mdl_css/material.min.js"></script> 

          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta http-equiv="refresh" content="2;url=index.html">
	</head>
<!-------------------------------------------html body--------------------------------------------------------->
<body>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize_css/js/materialize.min.js"></script>
	  
  
<!---------------------------------------------------menu bar-------------------------------------------------->		
<div class="navbar-fixed">
    <nav class="white">
        <div class="nav-wrapper valign-wrapper" id="navbarAP" >
         <h5><a href="index.html" id="photo" class="margin-left"><i class="material-icons black-text">chevron_left</i></a></h5>
	         <h5 class="black-text"><b>Payment</b></h5>
        </div>
    </nav>
</div>

<div class="container center-align"><br><br><br>
  <i class="material-icons">check</i> 
  <h5>SUCCESS</h5>
  <h6>Your transaction has been completed successfully.</h6> 
<br><br><br><br>
<h3>You are Being Redirected to to the home page......</h3>
</div> 

</body>
</html>

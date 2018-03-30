<?php session_start(); ?>
 <!DOCTYPE html>
  <html lang="en-US">
    <head>

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <title>Tracking Assistent</title>
          <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">

          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize_css/css/materialize.min.css"  media="screen,projection"/>
          <link rel="stylesheet" href="mdl_css/material.min.css">
          <script src="mdl_css/material.min.js"></script>

          <meta charset="utf-8" />
          <meta name="format-detection" content="telephone=no" />
          <meta name="msapplication-tap-highlight" content="no" />
          <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />


      <script type="text/javascript" src="materialize_css/js/materialize.min.js"></script>



    </head>
    <body>



<!-------------------------------------------Translator --------------------------------------------------------->

<div class="fixed-action-btn click-to-toggle">
   <a id="google_translate_element"></a>
</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<!---------------------------------------------------menu bar-------------------------------------------------->
    <div class="navbar-fixed">
    <nav class="white">

      <div style="margin-right:15px;" class="right">


        <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
        { ?>
            <a href="php/logout.php" class="right black-text" style="margin-right:13px;">Logout</a>
          <?php }else{ ?>
            <a href="login_signup1.php" id="login" class="right black-text" style="margin-right:13px;">Login</a>
          <?php } ?>

		    <a href="tel:123456789" class="right" ><i class="material-icons black-text" style="margin-right:10px; margin-top:2px;">call</i></a>
		</div>

        <div class="nav-wrapper valign-wrapper" id="navbar">
    <a href="" ><i data-activates="slide-out" class="button-collapse material-icons black-text">menu</i></a>
      <img src="images/logo.png" id="logo" style="width: 60px; height: 60px;">
        </div>
    </nav>

    </div>




<!-- ---------------------------------------side nevigation bar-------------------------------------------->

    <ul id="slide-out" class="side-nav">


         <li><div align="center" style="height: 200px; background-color: white;"><img src="images/logo.png" style="width: 200px; height: 200px;"></div></li>

           <li><a class="wave effect" href="demo.html"><b>speed analysis</b></a></li>
           <li><div class="divider"></div></li>
           <li><a class="wave effect" href="aboutus.html">About Us</a></li>
           <li><a class="wave effect" href="ContactUs.html">Contact Us</a></li>
           <li><div class="divider"></div></li>
           <br><br><br><br><br>

    </ul>



<!--------------------------------------------carousel slider---------------------------------------------->


<div id="posters_container" class="carousel carousel-slider">
  <img class="carousel-item" id="posters" src="images/image.jpg">
  <img class="carousel-item" id="posters" src="images/poster2.jpg">

</div>



<!-----------------------------------------ICON SECTION---------------------------------------------- -->


<div class="lime lighten-5 row"><br><br>
<div class="col s12 l6 m12">

  <div class="container"><h5 class="center-align"><b>SERVICES</b></h5></div>


<div class="row">
<div class="col s6 m6 l6 " >
         <div class="center-align"><br><br>
         <a href = "niftyindex.html">
         <img src="images/profile.png" id="icon-s"></a>
         <div><p class="center-align" id="service">Profile</p>

           </div>
         </div>
    </div>

            <div class="col s6 m6 l6 " >
         <div class="center-align"><br><br>
       <a href="php/analysis.php"> <img src="images/speeds.png" id="icon-s"></a>
         <div><p class="center-align" id="service">Speed Analysis</p>
     <b><br></b></p></div>
         </div>
    </div>
    <div class="col s6 m6 l6 " >
         <div class="center-align"><br><br>
        <a href="chart.html"> <img src="images/charts.png" id="icon-s"></a>
         <div><p class="center-align" id="service">Chart</p></div>
         </div>
    </div>
    <div class="col s6 m6 l6 " >
         <div class="center-align"><br><br>
         <a href = "option_strategy.html"><img src="images/vechicle.png" id="icon-s"></a>
         <div><p class="center-align" id="service">Vehicle Details</p>
            <p class="center-align" id="Market"><b><br></b></p></div>
         </div>
    </div>



</div>


<div class="row">

    <div class="col s6 m6 l6 " >
         <div class="center-align">
         <a href = "bill.html"><img src="images/challan.png" id="icon-s"></a>
         <div><p class="center-align" id="service">E-challan</p>
            <p class="center-align" id="Market"><b><br></b></p></div>
         </div>
    </div>


        <div class="col s6 m6 l6 " >
         <div class="center-align">
         <a href="financial_astrology_subs.html">
         <img src="images/fastag.png" id="icon-s"></a>
         <div><p class="center-align" id="service">Fast Tag</p>
            <p class="center-align" id="Market"><b><br></b></p></div>
         </div>
    </div>


</div>

    </div>




    <div class="col s12 m12 l6">

      <div class="container"><h5 class="center-align"><b>NOTIFICATIONS</b></h5></div>
           <div class="row" style="height: 800px;">
                    <div class="col s12 m8 offset-m2 l6 offset-l3" style="width:350px;height: 800px;overflow: auto"> <br>

                        <div class="card-panel grey lighten-5 module" style="height:800px;overflow: auto; ">
                          <marquee direction="up" behavior="alternate" onmousedown="this.stop();" onmouseup="this.start();" scrolldelay="150" style="height:700px;">


  <ol style="list-style-type:disc;height:800px;overflow: hidden">
    <li><a class="wave effect blacktext;" href = >New Transport Policy Date</li>
    <li><a class="wave effect" href = >DRAFT TRANSPORT SCHEME-2017 APPENDIX-1(containing the list of routes,highways and roads)</li>
    <li><a class="wave effect" href = >Abolition of post</li>
    <li><a class="wave effect" href = >Road Safety Policy 1</li>
    <li><a class="wave effect" href = >New Transport policy</li>
    <li><a class="wave effect" href = >Motor Vehicle Tax Notification 21082017</li>
    <li><a class="wave effect" href = >NOTIFICATION ON DATED 16.06.2017</li>
    <li><a class="wave effect" href = >Red Light on Dated 15.04.2017</li>
    <li><a class="wave effect" href = >ORDER OF EXEMPTION AREARS OF TAX WITH IN TWO MONTHS</li>
    <li><a class="wave effect" href = >Information About RTA ACT 4 (1)(b) 2005</li>
    <li><a class="wave effect" href = >TAX NOTIFICATION DATED 28.06.2016</li>
    <li><a class="wave effect" href = >TAX NOTIFICATION ON DATED 15.06.2016</li>
    <li><a class="wave effect" href = >Moter Bike Tax Policy on Dated 12.06.2017</li>
    <li><a class="wave effect" href = >TAX NOTIFICATION DATED 19.01.2015</li>
    <li><a class="wave effect" href = >TAX NOTIFICATION ON DATED 15.06.2016</li>
    <li><a class="wave effect" href = >IMPORTANT NOTICE FOR BIDS DATED 17.12.2015</li>
                                       Fancy Number Notification dated 30.09.2015

  <li> <a class="wave effect" href = > Advertisement 1</li>
  <li> <a class="wave effect" href = > Bathinda address</li>
  <li> <a class="wave effect" href = > Advertisement 2</li>
  <li> <a class="wave effect" href = > Learner course for LMV Drivers</li>
  <li> <a class="wave effect" href = > Advertisement 3</li>
  <li> <a class="wave effect" href = > Fixation Of Rate Of Fare and Freights</li>
  <li> <a class="wave effect" href = > The Punjab Motor Vehicle Taxation Rules</li>
  <li> <a class="wave effect" href = > Amber Light May 2015</li>
  <li> <a class="wave effect" href = > Blue Light</li>
  <li> <a class="wave effect" href = > Compound the Offences Mentioned by Police</li>
  <li> <a class="wave effect" href = > Compound The Offences Mentioned By STC, DTO,ADTO, RTA</li>
  <li> <a class="wave effect" href = > Motor Vehicle Tax Notification</li>
  <li> <a class="wave effect" href = > Motor Vehicles Accident Clam (M.A.C.T) Rules</li>
  <li> <a class="wave effect" href = > Prohibit Restrict The Entry of 15 Years old Vehicles in Amritsar</li>
  <li> <a class="wave effect" href = > Speed Limit</li>
  <li> <a class="wave effect" href = > Road Safety Rules 2008</li>
  <li> <a class="wave effect" href = > Transport Commissioner(Punjab),Transport Department Wing,
  Non Commercial Wing,Departmental Service Rules dated 13-05-2015</li>
  <li> <a class="wave effect" href = > Socity Memorandum dated 13-05-2015</li>
  <li> <a class="wave effect" href = > Transport Policy1 dated 06-05-2015</li>
  <li> <a class="wave effect" href = > Transport Policy2 dated 06-05-2015</li>
  <li> <a class="wave effect" href = > Road Safety Policy</li>
  <li> <a class="wave effect" href = > Revision in Taxi rates dated 29-01-15</li>
  <li> <a class="wave effect" href = > Order on Hiring of Taxi dated 29-01-15</li>
  <li> <a class="wave effect" href = > Tax Revision Notification</li>
  <li> <a class="wave effect" href = > Order Provisional RC</li>
  <li> <a class="wave effect" href = > Tax Revision Notification,Dated 07.10.2014</li>
  <li> <a class="wave effect" href = > Stage Carriage Buses Rates Dated 09.07.2014</li>
  <li> <a class="wave effect" href = > Notification for Tax Barriers Dated 09.07.2014</li>
  <li> <a class="wave effect" href = > PUNJAB MOTORS ACCIDENTS CLAIMS TRIBUNAL RULES</li>
  <li> <a class="wave effect" href = > Notificaion Regarding RedLight (Latest)</li>
  <li> <a class="wave effect" href = > Notificaion Regarding RedLight</li>
  <li> <a class="wave effect" href = > Safe School Vahan Scheme</li>
  <li> <a class="wave effect" href = > Levy user charges Notification to Conduct LL Test</li>
  <li> <a class="wave effect" href = > Transfer of Ownership Tax</li>
  <li> <a class="wave effect" href = > Tax Notification 1</li>
  <li> <a class="wave effect" href = > Tax Notification 2</li>
  <li> <a class="wave effect" href = > Value Added Tax</li>
  <li> <a class="wave effect" href = > HELD UP ORDER OF AUTO DIPPER</li>
  <li> <a class="wave effect" href = > AUTO DIPPER NOTIFICATION DETAILS</li>
  <li> <a class="wave effect" href = > AUTO DIPPER REGISRATION DETAILS</li>
  <li> <a class="wave effect" href = > Order On Iinstallation Of Auto Dipper</li>
  <li> <a class="wave effect" href = > Notification Permit, fitness</li>
  <li> <a class="wave effect" href = > Notification No-2/8/2012-2T2/183</li>
  <li> <a class="wave effect" href = > Levy Motor Vehicle Tax</li>
  <li> <a class="wave effect" href = > Levy User Charges</li>
  <li> <a class="wave effect" href = > Order Scanning Documents</li>
  <li> <a class="wave effect" href = > Notification No. 21607-2T(2)1803</li>
  <li> <a class="wave effect" href = > Revised Notification Dated 31.08.2012 Regarding Motor Vehicles Tax</li>
  <li> <a class="wave effect" href = > Notifications Regarding Motor Vehicles Tax</li>
  <li> <a class="wave effect" href = > Punjab Motor Vehicles Taxation Act, 1924</li>
  <li> <a class="wave effect" href = > Punjab Motor Vehicles Taxation Act. (Amendments)</li>
  <li> <a class="wave effect" href = > Notification speed governor</li>
  <li> <a class="wave effect" href = > Notification no S.O.3/P.M.V.R. 1989/R.170-B/2002</li>
  <li> <a class="wave effect" href = > Notification no S.O.102/C.A.59/1988/Ss. 99 and 100/2011 dated 20/12/2011</li>

  </ol>

                        </marquee>

            </div>
          </div>
        </div>

    </div>


  </div>


  </div>

<!-----------------------------------------SLOGONS------------------------------------------------>

<div class="row yellow lighten-2" id="yello-row">
      <div class="col s12 l6"><br><br><br><br><br><h3 class="center-align"><b>What people have said about us?      </b></h3></div>
        <div class="col s12 l6">
              <div class="carousel carousel-slider yellow lighten-2" id="c2">
                  <div class="row carousel-item">
                        <div class="col s12 m8 l6 offset-m2 9 offset-9"> <br><br><br><br>
                            <div class="yellow lighten-3 black-text">
                                <div class="row valign-wrapper" >
                                    <div class="col s12"><br><br>
                              <p>that is a best site for e-challan
                              </p>
                              <p class="right-align">- Freddie Mercury</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                     <div class="row carousel-item">
                        <div class="col s12 m8 l6 offset-m2 9 offset-9"> <br><br><br><br>
                            <div class="yellow lighten-3 black-text">
                                <div class="row valign-wrapper" >
                                    <div class="col s12"><br><br>
                              <p>This is the best app for speed detection</p>
                              <p class="right-align">- Bhavek</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>






                      <div class="row carousel-item">
                        <div class="col s12 m8 l6 offset-m2 9 offset-9"> <br><br><br><br>
                            <div class="yellow lighten-3 black-text">
                                <div class="row valign-wrapper" >
                                    <div class="col s12"><br><br>
                              <p>Easy to pay bills.
</p>
                              <p class="right-align">- aditya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

</div>
</div>
</div>


</div>
</div>
<br><br>
</div>

 <script type="text/javascript" src="js/index.js"></script>

?>

</body>
  </html>

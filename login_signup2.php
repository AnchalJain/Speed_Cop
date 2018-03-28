<!DOCTYPE html>
  <html>
    <head>
          <title>Ajayastromoneyguru | Financial Astrology Services</title>
          <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize_css/css/materialize.min.css"  media="screen,projection"/>
          <link rel="stylesheet" href="mdl_css/material.min.css">
          <script src="mdl_css/material.min.js"></script>

          <meta charset="utf-8" />
          <meta name="format-detection" content="telephone=no" />
          <meta name="msapplication-tap-highlight" content="no" />
          <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize_css/js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('ul.tabs').tabs();
          $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 80, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
        });


 var if_record_exist = false;

  $(function(){
    //toggle forms

    $('#login').click(function(){
      //get the values
      var email = $('#email').val();
      var password = $('#password').val();

      if(!validateEmail(email)){
				$('.msg').text('Invalid email');
				return;
			}

      //validate the form
      if(email == '' || password == ''){
        $('.msg').text('Please fill the form');
      }else{
        $('.msg').html("<div class='preloader-wrapper small active'><div class='spinner-layer spinner-green-only'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div>");
        //jQuery ajax post method with
        $.post('php/checklogin.php', {email:email, password:password}, function(resp){
          if(resp == "cool"){
            var x = window.location.search.substr(1);
            location.href = 'index.html';
          }
          else if(resp == "not_activated"){
            $('.msg').html('Please activate your account first and then try to login.');
          }
          else{
            $('.msg').html('Invalid Email or Password');
          }
        });

      }
    });

    //check if the email is already registered!!
    $('#email-new').blur(function(){
      var email    = $('#email-new').val();

      $('.msg').html('');

      //checking email
      $.post('php/check-email-registered.php', {email:email}, function(resp){
        if(resp == 'bad'){
          $('.email_err').text('Email is already registered.');
          if_record_exist = true;
        }else{
          $('.email_err').text('');
          if_record_exist = false;
        }
      });
    });

    //when click Signup button
    $('#signup').click(function(){
      //get the values
      var email    = $('#email-new').val();
      var password = $('#password-new').val();
      var first_name= $('#first_name').val();
      var last_name= $('#last_name').val();
      var contact= $('#contact').val();
      var dob= $('.datepicker').val();
      var aadhar= $('#aadhar').val();
      var pan= $('#pan').val();
      var vechicle= $('#vechicle').val();
      //validate the form
      if(first_name == '' || last_name == '' || email == '' || password == '' || contact == ''){
        $('.msg').text('Please fill the form');
      }else{
        if(if_record_exist == false){
        $('.msg').html("<div class='preloader-wrapper small active'><div class='spinner-layer spinner-green-only'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div>");
        //jQuery ajax post method with
        $.post('php/adduser.php', {email:email, password:password, first_name:first_name, last_name:last_name, contact:contact, vechicle:vechicle, pan:pan}, function(resp){
          if(resp == "done"){
            $(document).ready(function(){
              $('ul.tabs').tabs('select_tab', 'login_form');
            });
            $('.msg').html('GREAT!! Signed up. Activate your account and login.');
            $('#email-new').val('');
            $('#password-new').val('');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#contact').val('');
           // $('.datepicker').val('');
            //$('#aadhar').val('');
            $('#pan').val('');
          }else{
            $('.msg').html('Something is wrong!' + resp);
          }
        });
        }else{
          $('.msg').html('Please fix the above error!');
        }
      }
    });

  });

   function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

 </script>



	</head>
<!-------------------------------------------html body--------------------------------------------------------->
<body>
       <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';

    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1439970782705901',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', {fields:'id,name,email'},  function(response) {
      console.log('Successful login for: ' + response.email);
      //document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.email+ '!';
       $.post("php/session.php",
    {
        email: response.email,
        name: response.name
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
       var x = window.location.search.substr(1);
            location.href = 'success.php?'+x;
    });
    });
  }


</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize_css/js/materialize.min.js"></script>


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
        <div class="nav-wrapper valign-wrapper" id="navbarAP" >
         <h5><a href="index.html" id="photo" class="margin-left"><i class="material-icons black-text">chevron_left</i></a></h5>
	         <h5 class="black-text"><b>Login/Signup</b></h5>
        </div>
    </nav>
</div>





	<div class="row">
     <div class="col s12 m8 offset-m2 l6 offset-l3"> <br>
		  <div class="card-panel grey lighten-5 z-depth-1">
               <div class="row valign-wrapper">
                    <div class="col s12">
<div class="container center-align">
       <div class="center-align">
	   <ul class="tabs" class = "center-align">
		   <li class="tab col s3"><a class="active" href="#login_form"><b>Login</b></a></li>
		   <li class="tab col s3"><a href="#signup_form"><b>Signup</b></a></li>
		   </ul></div>
</div>

      <div id="login_form" class="col s12">
        <div class="row"><br><br>
        <div class="msg center-align">&nbsp;</div><br>
          <form class="col s12">

            <div class="row">
      <h5>You need to login/signup to activate your subscription.</h5>
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>

           <div class="row">
            <div class="col s6">
                   <a href="forgot_password.html" style="color:blue">Forgot password ?</a>
              </div>
            </div>

          </form>
          <a class="waves-effect waves-light btn green" id="login">Login</a>
        </div>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
      </div>

      <div id="signup_form" class="col s12">
        <div class="row"><br><br>
        <div class="msg center-align">&nbsp;</div><br>

          <form class="col s12" >

            <div class="row">
              <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name (required)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name (required)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="email-new" type="email" class="validate"><span class="email_err red-text"></span>
                <label for="email">E-mail (required)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="password-new" type="password" class="validate">
                <label for="password">Password (required)</label>
              </div>
            </div>

             <div class="row">
              <div class="input-field col s12">
                <input id="contact" type="text" class="validate">
                <label for="contact">Contact (required)</label>
              </div>
            </div>



        <!--    <div class="row">
              <div class="input-field col s12">
                <input type="text" class="datepicker">
                <label for="dob">Date-of-Birth (required)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="aadhar" type="text" class="validate">
                <label for="aadhar">Aadhar Number (optional)</label>
              </div>
            </div>  -->

            <div class="row">
              <div class="input-field col s12">
                <input id="pan" type="text" class="validate">
                <label for="pan" class="blue-text">PAN Card No. (OPTIONAL)</label>
              </div>
            </div>

		<div class="row">


			  <div class="col s12">
				  <br>By clicking on signup I agree to the <a style="color:blue;" href="disclaimer.html">Terms & Conditions and Disclaimer</a>
              </div>

			  </div>



 <a class="waves-effect waves-light btn green" id="signup">Signup</a>




</form>

        </div>
      </div>

                    </div>
               </div>
        </div>
    </div>
</div>

	  </body>
</html>

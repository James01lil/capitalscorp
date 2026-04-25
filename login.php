<?php 
if (isset($_POST["name"])) {
	require "recaptcha.php";
	echo $error==""
	  ? "<div id='notify'>OK</div>"
	  : "<div id='notify'>$error</div>";
  }

  
  session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
	  //something was posted
	  $email = $_POST['email'];
	  $password = $_POST['password'];

	  if(!empty($email) && !empty($password) && !is_numeric($email))
	  {

		  //read from database
		  $query = "select * from myuser where email = '$email' limit 1";
		  $result = mysqli_query($con, $query);

		  if($result)
		  {
			  if($result && mysqli_num_rows($result) > 0)
			  {

				  $user_data = mysqli_fetch_assoc($result);
				  
				  if($user_data['password'] === $password)
				  {

					  $_SESSION['user_id'] = $user_data['user_id'];
					  header("Location: dashboard.php");
					  die;
				  }
			  }
		  }
		  
		  echo "wrong username or password!";
	  }else
	  {
		  echo "wrong username or password!";
	  }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>capitalCORP</title>
        <!-- FAVIVON -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link rel="stylesheet" href="csss/incorpEX.css" />
        <link rel="stylesheet" href="csss/aos.cs" />
          <link rel="stylesheet" href="csss/stylle.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>

    </style>
  </head>
  <body>


<!-- Login Form -->
<form method="POST">
    

  <!-- Welcome Video-->
  <div class="video-container" data-aos="fade-up">
    <video autoplay muted playsinline loop>
      <source src="imgg/vid.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
   
          <div class="video-content">
            <ul style="">
              <a href="index.html" style="">HOME</a>
              <a href="login.php" style="">LOGIN</a>
              <a href="contdsignup.php" style="">REGISTER</a>
            </ul>
                  
            <br><br><br><br>
      <h6 style="font-weight: 800;color:#000000;">capital<span style="background: linear-gradient(to right, #402bca,
        #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CORP</span></h6>
      <h3 style="background: linear-gradient(to right, #402bca,
        #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">WELCOME BACK</h3>
      <h5 style="color:#000000;font-weight:900;">LOGIN BACK TO YOUR ACCOUNT TO START EARNING PROFITS & COMMODITIES NOW!</h5>

      <label>EMAIL</label><br>
      <input type="email" name="email" style=""><br><br>
      <label>PASSWORD</label><br>
      <input type="password" name="password" style=""><br>
   <br><br>

 <!-- Google reCAPTCHA -->
  <div class="g-recaptcha" data-sitekey="6LcrVcosAAAAAGKZgSOS87Q-aLwdfZrODfUh-PE4"></div>
  <br><br>
  
  

  <button type="submit" style="">LOGIN</button>
     
    </div>
          
  </div>
  <!--End-->


</form>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'}, 
        'google_translate_element'
      );
    }
  </script>
  <script>
    function showDiv() {
      var selected = document.getElementById("fruit").value;
    
      // Hide all divs first
      var divs = document.getElementsByClassName("fruit-info");
      for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
      }
    
      // Show the selected one if it exists
      if (selected) {
        var divToShow = document.getElementById(selected);
        if (divToShow) {
          divToShow.style.display = "block";
        }
      }
    }
    </script>
  
  <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>

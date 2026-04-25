<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
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

        <link rel="stylesheet" href="csss/innertto.css" />
        <link rel="stylesheet" href="csss/aos.cs" />
          <link rel="stylesheet" href="csss/stylle.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
      body{
        color:#ddd;
      }

    @media (max-width:500px){
 body{
      height:100%;
 }
    
    }
    @media (max-width:430px){
 body{
      height:120%;
 }
    
    }
        @media (max-width:400px){
 body{
      height:150%;
 }
    
    }
    
    

#spin{
  font-size: 70px;color: #000;text-align:center;
}
@media(max-width: 500px){
  body{
    display: block;
  }
  #myDiv {
  margin-top: px;
}
#myDiv2 {
  margin-top: 90px;
}
#myDiv3 {
  margin-top: 90px;
}
}
@media(max-width: 430px){
  #myDiv {
  margin-top: px;
}
}
  
p{
  text-align: center;
  font-weight: 900;
}
input{
  width: 50%;
  height:30px;
  border: 1px solid #000;
}
button{
  width: 50%;
  height:30px;
  padding-bottom:30px;
  border: 3px solid #042c47;
  border-radius: 3px;
  color: #c7d3db;
  background-color: #042c47;
}
  #loader {
  position: absolute;
  left: 50%;
  top: 20%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #043126;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
.buypage{
  display: none;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}
#loader{
  display: none;
}
 

    </style>
  </head>
  <body>
    <header style="float: ;">&nbsp;&nbsp;
      <ul style="margin-top:0px;">
        <a href=""><h4 style="font-weight: 800;color:#ccccccf1;float: left;">capital<span style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CORP</span></h4></a>
      </ul>
      <ul style="float: right;">
    <i class="fa fa-wifi" style="font-size:15px;font-weight:800;color:#ffffff;"></i>  &nbsp;&nbsp;&nbsp;&nbsp;
      <a href=""><?php echo $user_data['user_name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="logout.php"><i class="fa fa-sign-out" style="font-size:15px;font-weight:800;color:red;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </ul>
  </header>
         
          
  <div class="wrapper">
    <div id="wrap" class="wrap">
          
           <small id="google_translate_element" style="margin-top:0px;"></small>
          
          
      <h3 style="">WELCOME::&nbsp;&nbsp;<?php echo $user_data['user_name']; ?></h3>

       <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500 Index"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100 Cash CFD"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": true,
  "displayMode": "adaptive",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

<div class="info">
  <ul data-aos="fade-down">

    <h5><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:#fff;"><?php echo $user_data['deposited']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">DEPOSITED</p>
  </ul>
  <ul data-aos="fade-down">
    <h5><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:#fff;"><?php echo $user_data['total_balance']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">T.BALANCE</p>
  </ul>
  <ul data-aos="fade-down">
    <h5><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:#fff;"><?php echo $user_data['bonus']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">BONUS</p>
  </ul>
  <ul data-aos="fade-down">
    <h5><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:#fff;"><?php echo $user_data['total_profit']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">TOTAL PROFIT</p>
  </ul>
  </div>
  
</div>
   
  







  <div id="loader"></div>

    <div style="display:;" id="myDiv" class="animate-bottom">
      <p style=""><!--<img src="imgg/glyph_alert_critical_big-2x.png" style="width:50px;">--><br><br><span style="color: yellow;">PROCESSING....</span><br><br>OUR TEAM'S WOULD PROCESS YOUR RECENT DEPOSIT IF CONFIRMED.. <br><br><span style="color:yellowgreen ">KINDLY NOTE THAT WE ARE AVAILABLE ON OUR EMAILS AS WE VALIDATE AND CHECK FOR YOUR DEPOSITED FUNDS.... THANK YOU</span></p>

</div>






 <footer class="footer">
  <ul style="">
    <a href="dashboard.php" style=""><i class="fa fa-home"><p style="font-weight: 800;">HOME</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="deposit.php" style=""><i class="fa fa-wallet"><p style="font-weight: 800;">WALLET</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="upgradeplan.php" style=""><i class="fas fa-chart-line"><p style="font-weight: 800;">UPGRADE PLAN</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="" style=""><i class="fas fa-award"><p style="font-weight: 800;">REWARD</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="profile.php" style=""><i class="fas fa-user-circle"><p style="font-weight: 800;">ACCOUNT</p></i></a>&nbsp;&nbsp;&nbsp;
  </ul>
</footer>


  </div>
    

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'}, 
        'google_translate_element'
      );
    }
  </script>
  
  <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>

<script>
          
        

  setTimeout(function() {
    document.getElementById("loader").style.display = "block";
    document.getElementById("myDiv").style.display = "none";
  },2000);
  setTimeout(function() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  },5000);
  
    </script>
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>

        

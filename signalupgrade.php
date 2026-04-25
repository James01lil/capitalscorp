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
    
    
    @media (max-width:500px){
 body{
      height:250%;
 }
    
    }
      @media only screen 
  and (device-width: 375px) 
  and (device-height: 667px) 
  and (-webkit-device-pixel-ratio: 2) 
  and (orientation: portrait) {
     body{
      height:330vh;
 }
}
 


 #currency-container {
  display:grid;
  margin-left:40px;
  grid-template-columns:repeat(2,1fr);
  grid-gap:20px;
}
@media (max-width:1200px){
  #currency-container {
    grid-template-columns:repeat(2,1fr);
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
  padding:50px 20px;
  height:100%;
  border-radius:0px;
  text-align: left;
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

  <h5 style="color:yellowgreen;text-align: center;font-weight:800;">PURCHASE SIGNALS FROM THE FOLLOWING SELECTED LIST'S TO CONTINUE TRADING ..</h5>
  <br><br>


  <div class="container6">
    <div id="currency-container">
      <ul data-aos="fade-down">
        <a href="depositsignalbtc.php">PURCHASE</a>
        <br><br><br>
        <h5 style="color:#666;font-weight: 800;">PLAN A</h5>
        <h6 style="color:#f0414f;font-weight: 800;">BASIC SIGNAL PLAN</h6>
        <h2 style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">95% BACKTESTED</h2>
        <p style="">&#9989; ASSET, STOCKS & ETF's</p>
          <p style="">&#9989; HOURLY SIGNALS PROGRAMMED ON BOT'S TILL EXPIRED </p>
          <p style="">&#9989; AUTO ENTRY / EXITS PRICES, SETTINGS</p>
          <p style="">&#9989; STOP LOSS / TAKE PROFITS , CUSTOMIZABLE RISK LEVELS PRIORITY SUPPORT...</p>
          <p style="">&#9989; IDEAL FOR BEGINNER INVESTORS SEEKING PASSIVE STRATEGIES...</p>
          <br>
          <p style="">MINIMIUM 500</p>
          <p style="">MAXIMIUM 3,000</p>
      </ul>
      <ul data-aos="fade-down">
        <a href="depositsignalbtc.php">PURCHASE</a>
        <br><br><br>
        <h5 style="color:#666;font-weight: 800;">PLAN B</h5>
        <h6 style="color:#f0414f;font-weight: 800;">PRO SIGNAL PLAN</h6>
        <h2 style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">99% BACKTESTED</h2>
        <p style="">&#9989; ASSET, STOCKS, FOREX & CRYPTO's</p>
          <p style="">&#9989; HOURLY SIGNALS PROGRAMMED ON BOT'S UNLIMITED</p>
          <p style="">&#9989; SCALPING & SWING TRADING</p>
          <p style="">&#9989; STOP LOSS / TAKE PROFITS , CUSTOMIZABLE RISK LEVELS PRIORITY SUPPORT...</p>
          <br>
          <p style="">MINIMIUM 1,000</p>
          <p style="">MAXIMIUM 6,000</p>
      </ul>
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
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>

        

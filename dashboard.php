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
        <!--START CANDLE STICK SCRIPT-->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
  <!--END CANDLE STICK SCRIPT-->
  <link rel="stylesheet" href="csss/innertto.css" />
        <link rel="stylesheet" href="csss/aos.cs" />
          <link rel="stylesheet" href="csss/stylle.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    
  <style>
  
  
    @media (max-width:500px){
 body{
      height:350vh;
 }
    
    }
    
    @media (max-width:390px){
 body{
      height:400vh;
 }
    
    }
    
    
    @media only screen 
  and (device-width: 375px) 
  and (device-height: 667px) 
  and (-webkit-device-pixel-ratio: 2) 
  and (orientation: portrait) {
    body{
      height:500vh;
 }
}


    
    body {width:;}
    canvas { max-width: 100%; height: 300px; }
    .signal { font-size: 1.2em; margin-top: 10px; }
    
  .value {
      font-size: 35px;
      font-weight: 800;
    }
    .rise {
      color: green;
    }
    .fall {
      color: red;
    }
    .pft{
        text-align:center;
        color:#ddd;
        
    }
   #message {
      opacity: 0;
      transition: opacity 1s;
      font-size: 15px;
      margin: 20px;
      font-weight:800;
      text-align:center;
      background:#222222;
      border-radius:10px;
      border:3px solid yellowgreen;
      color:#ddd;
      padding:20px 20px;
    }
    .nosignalstatus {
    display:block;
    Z-index:;
    font-size:14px;
    position:;
    Font-weight:800;
    Background:#222222;
    text-align:center;
    padding:20px 20px;
    Width:90%;
    Margin-top:px;    
    margin-left:15px;
    border-radius:10px;
    border:5px solid red;
                   } 
                      
  @media (max-width:400px){ 
 .nosignalstatus {
  font-size:12px
  } 
  }
    /* Disclaimer overlay */
    #disclaimerOverlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.85);
      color: #ddd;
      display: flex;
      flex-direction: column;
      justify-content: left;
      align-items: left;
      z-index: 9999;
      text-align: left;
      font-weight:700;
      padding: 20px;
    }
    @media (max-width:400px){
 #disclaimerOverlay {
      height:130%;
      Font-size:13px;
       }
       #disclaimerOverlay button {
       Font-size:11px;
       }
    
    }
    @media only screen 
  and (device-width: 375px) 
  and (device-height: 667px) 
  and (-webkit-device-pixel-ratio: 2) 
  and (orientation: portrait) {
    #disclaimerOverlay {
      height:160%;
 }
}
    

    #disclaimerOverlay button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      font-weight:800;
      color:#dddddd;
      background-color: #1877f2;
      border-radius:10px;
      border:1px solid #1877f2;
    }

    #mainContent {
      display: none;
      
    }
    
    
    
     .messages-container {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.messagess {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.messages {
  min-width: 100%;
  padding: 1em;
  box-sizing: border-box;
  background-color: #000000;
  border: 1px solid #000000;
  color:#ddd;
  flex-shrink: 0;
  font-weight:700;
}

  </style>
</head>
<body>

  <!-- Disclaimer modal -->
  <div id="disclaimerOverlay">
    <h2 style="color:#ddd;text-align:center;">Disclaimer</h2>
    <p>
      Disclaimer: 

The information provided on this website is for general informational. We are a fully licensed finiancial advisory, brokers channelled for investment purposes and risk reductions.
</p>
<p>
    We help you secure invested funds through our cloudDB secured hub .. we stand as an intermediary between you,your funds and accreditted profits
</p>
<p>
    We are licenced in 187 countries globally! always choose our trusted agents to guide you through for security reasons .
    </p>
    <p>
    Kindly note that we are always on our emails supportus@capitalscorp.online we would not call you or ask you for any personal credentials 
    the only way to get to us is through our emails stated above 
</p>
<p>
    Kindly note that to enable a more sucured trade... always use our available TRADEBOT.. Always purchase a signal to avoid extortion or losses to funds 
</p>
<p>
    Only invest if your 18yrs and above 
</p>
<p>
By continuing to use this site, you acknowledge and accept that you are solely responsible for your financial decisions and agree to our terms and conditions.
    </p>
    <button onclick="acceptDisclaimer()">I UNDERSTAND & CONTINUE</button>
  </div>

  <!-- Main content -->
  <div id="mainContent">

    
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
  <div class="messages-container">
  <div class="messagess" id="messagess">
    <div class="messages">
        <p>
            <h5>CURRENT PLAN</h5>
            --STARTER--
        <br>
        MIN:: 500 - MAX::5,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:red;">NOT ACTIVE IN THIS PLAN</b>
        </p>
    </div>
  <div class="messages">
        <p>
            <h5>UPCOMING PLAN</h5>
            --PREMIUM--
        <br>
        MIN:: 5,000 - MAX::20,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:green;">FREE ACTIVE SIGNAL IN THIS PLAN</b>
        </p>
    </div>
    <div class="messages">
        <p>
            <h5>CURRENT PLAN</h5>
            --STARTER--
        <br>
        MIN:: 500 - MAX::5,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:red;">NOT ACTIVE IN THIS PLAN</b>
        </p>
    </div>
  <div class="messages">
        <p>
            <h5>UPCOMING PLAN</h5>
            --PREMIUM--
        <br>
        MIN:: 5,000 - MAX::20,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:green;">FREE ACTIVE SIGNAL IN THIS PLAN</b>
        </p>
    </div>
  </div>
</div>

  

          
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
    <h5><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:#ddd;"><?php echo $user_data['bonus']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">BONUS</p>
  </ul>
  <ul data-aos="fade-down">
    <h5 style="color:yellowgreen;"><?php echo $user_data['currency_type']; ?>&nbsp;<small style="font-size:16px;font-weight: 800;color:yellowgreen;"><?php echo $user_data['total_profit']; ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">TOTAL PROFIT</p>
  </ul>
  </div>
  
  <div class="navi" style="">
    <a href="chat.html" style="">CHAT US</a>
    <a href="deposit.php" style="">MAKE DEPOSIT</a>
    <a href="palverify.php" style="">SIGNAL PURCHASE</a>
    <a href="withdraw.php" style="">WITHDRAW FUNDS</a>
    <a href="mailus.php" style="">MAIL US</a>
    <a href="profile.php" style="">SETTINGS</a>
  </div>

  <br><br><br><br><br><br>
  <h3 style="text-align:center;">WATCH YOUR TRADE</h3>
  
  <div class="nosignalstatus" id="nosignalstatus" style="">
    <img src="imgg/glyph_alert_critical_big-2x.png" alt="" style="width:40px;text-align:center;">
    <br><br><br>
    <p style="color:red;">YOU ARE CURRENTLY ON A NO SIGNAL STATUS</p>
    <p style="color:yellowgreen;">PURCHASE A NEW SIGNAL TO GET STARTED OR RESUME TRADE!!</p>
    </div>
  
  
  <h4 style="text-align:center;color:#ddd;">CANDLESTICK TRADEBOT ANALYSIS</h4>
  <canvas id="myChart"></canvas>
  <div class="signal" id="signal">Starting...</div>
  <br>

<h4 style="text-align:center;color:#ddd;">TRADEBOT FIGURES</h4>
  <div class="pft">PROFIT VALUE:&nbsp;&nbsp;<span id="rise" class="value">+00.00</span></div>
  <div class="pft">LOSS VALUE:&nbsp;&nbsp;<span id="low" class="value">-00.00</span></div>
    <br><br>
    
  <div id="message"></div>

    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="technical-analysis-chart-demo"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "container_id": "technical-analysis-chart-demo",
  "width": "97.8%",
  "height": 550,
  "autosize": false,
  "symbol": "AAPL",
  "interval": "D",
  "timezone": "exchange",
  "theme": "dark",
  "style": "1",
  "toolbar_bg": "#f1f3f6",
  "withdateranges": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "save_image": false,
  "studies": [
    "ROC@tv-basicstudies",
    "StochasticRSI@tv-basicstudies",
    "MASimple@tv-basicstudies"
  ],
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "locale": "en"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "isTransparent": true,
  "displayMode": "regular",
  "width": 400,
  "height": 550,
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->


<button><a href="deposit.php">MAKE DEPOSIT</a></button>

 <footer class="footer">
  <ul style="">
    <a href="dashboard.php" style=""><i class="fa fa-home"><p style="font-weight: 800;">HOME</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="deposit.php" style=""><i class="fa fa-wallet"><p style="font-weight: 800;">WALLET</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="upgradeplan.php" style=""><i class="fas fa-chart-line"><p style="font-weight: 800;">UPGRADE PLAN</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="reward.php" style=""><i class="fas fa-award"><p style="font-weight: 800;">REWARD</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="profile.php" style=""><i class="fas fa-user-circle"><p style="font-weight: 800;">ACCOUNT</p></i></a>&nbsp;&nbsp;&nbsp;
  </ul>
</footer>


  </div>



  </div>

  <script>
    function acceptDisclaimer() {
      document.getElementById("disclaimerOverlay").style.display = "none";
      document.getElementById("mainContent").style.display = "block";
    }

    // Optional: prevent scrolling until disclaimer is accepted
    document.body.style.overflow = 'hidden';
    function enableScroll() {
      document.body.style.overflow = 'auto';
    }
    function acceptDisclaimer() {
      document.getElementById("disclaimerOverlay").style.display = "none";
      document.getElementById("mainContent").style.display = "block";
      enableScroll();
    }
  </script>
  
<script>
const messagess = document.getElementById('messagess');
const totalMessagess = messagess.children.length;
let currentIndex = 0;

setInterval(() => {
  currentIndex = (currentIndex + 1) % totalMessagess;
  messagess.style.transform = `translateX(-${currentIndex * 100}%)`;
}, 3000); // Change every 3 seconds
  </script>
  
  <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
  <script src="BUT/buttmsg.js"></script>
  <script src="BUT/butt.js"></script>
  
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>
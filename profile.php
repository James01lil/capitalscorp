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
      height:280vh;
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
      <h3 style="">ACCOUNT SETTINGS | PROFILE</h3>

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

<div class="proid">
    <i class="fa fa-wifi" style="font-size:15px;font-weight:800;color:green;"></i>
    <h2 style="color:#ddd;font-weight: 800;"><?php echo $user_data['user_name']; ?></h2>
    <h5 style="color: #ddd;"><?php echo $user_data['email']; ?></h5>
    <p style="color:green;font-weight: 800;">ACTIVE USER</p>
  </div>
  <div class="pro">
    <ul style="">
    <h5 style="">DEPOSITED</h5>
    <p style=""><?php echo $user_data['currency_type']; ?>&nbsp;<?php echo $user_data['deposited']; ?></p>
    </ul>
    <ul style="">
      <h5 style="">AVAILABLE BALANCE</h5>
      <p style=""><?php echo $user_data['currency_type']; ?>&nbsp;<?php echo $user_data['total_balance']; ?></p>
      </ul>
      <ul style="">
        <h5 style="">TOTAL REWARDS</h5>
        <p style=""><?php echo $user_data['currency_type']; ?>&nbsp;<?php echo $user_data['bonus']; ?></p>
        </ul>
  </div>
  
  <div class="navi" style="">
    <a href="dashboard.php" style="">ACCOUNT</a>
    <a href="deposit.php" style="">MAKE DEPOSIT</a>
    <a href="palverify.php" style="">SIGNAL PURCHASE</a>
    <a href="withdraw.php" style="">WITHDRAW FUNDS</a>
    <a href="mailus.php" style="">MAIL US</a>
    <a href="kyc_verification.html" style="">KYC VERIFICATION</a>
  </div>
<br><br><br><br>
  <div class="proopt" style="">
    <a href="profile.php" style="">PERSONAL RECORD</a>
    <small style="" onclick="showTable()">ACCOUNT RECORDS</small>
    <a href="upgradeplan.php" style="">ACCOUNT UPGRADE</a>
  </div>
<br><br>
<form action="update.php" method="POST">
  <div class="profile" id="profile">
    <div class="inner-profile">
      <ul style="">
        <p style="">First Name&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['first_name']; ?>"></p>
        <p style="">Last Name&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['last_name']; ?>"></p>
        <p style="">UserName&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['user_name']; ?>"></p>
        <p style="">Email&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['email']; ?>"></p>
        <p style="">Phone&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['phone']; ?>"></p>
        <p style="">Country&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['country']; ?>"></p>
        <p style="">State&nbsp;&nbsp;<input type="text" value="<?php echo $user_data['state']; ?>"></p>
        <br>
          <button type="submit">Update</button>
      </ul>

    <ul style="">
      <p style="color:#fff;font-weight: 700;">Account Status<br><span style="color:green;">VERIFIED</span></p>
      <p style="color:#fff;font-weight: 700;">Account Type<br><span style="color: orangered;"><?php echo $user_data['account_type']; ?></span></p>
      <p style="color:#fff;font-weight: 700;">Package Plan<br><span style="color:peru;"><?php echo $user_data['plan_choice']; ?></span></p>
      <p style="color:#fff;font-weight: 700;">Signal Status<br><span style="color:#fff;">NONE</span></p>
    </ul>
  </div>
</div>
</form>

  </div>


          
 

  <table border="1" id="tablehist">
    <thead>
      <tr>
        <th>TYPE</th>
        <th></th>
        <th></th>
        <th>RECORD's</th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TOTAL DEPOSIT</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['deposited']; ?></td>
      </tr>
      <tr>
        <td>TOTAL PROFITS</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['total_profit']; ?></td>
      </tr>
      <tr>
        <td>TOTAL BALANCE</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['total_balance']; ?></td>
      </tr>
      <tr>
        <td>TOTAL REFERRALS</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['referrals']; ?></td>
      </tr>
      <tr>
        <td>TOTAL REWARDS</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['bonus']; ?></td>
      </tr>
      <tr>
        <td>PENDING WITHDRAWALs</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['pending_withdrawal']; ?></td>
      </tr>
      <tr>
        <td>TOTAL WITHDRAWN</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['total_withdrawal']; ?></td>
      </tr>
      <tr>
        <td>LAST DEPOSIT</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['last_deposit']; ?></td>
      </tr>
      <tr>
        <td>LAST WITHDRAWN</td>
        <td></td>
        <td></td>
        <td><?php echo $user_data['currency_type']; ?><?php echo $user_data['last_withdrawal']; ?></td>
      </tr>
    </tbody>
  </table>

  

    
   <footer class="footer">
  <ul style="">
    <a href="dashboard.php" style=""><i class="fa fa-home"><p style="font-weight: 800;">HOME</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="deposit.php" style=""><i class="fa fa-wallet"><p style="font-weight: 800;">WALLET</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="upgradeplan.php" style=""><i class="fas fa-chart-line"><p style="font-weight: 800;">UPGRADE PLAN</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="reward.php" style=""><i class="fas fa-award"><p style="font-weight: 800;">REWARD</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="profile.php" style=""><i class="fas fa-user-circle"><p style="font-weight: 800;">ACCOUNT</p></i></a>&nbsp;&nbsp;&nbsp;
  </ul>
</footer>


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


function copyInput() {
  const input = document.getElementById("myInput");
  input.select();
  input.setSelectionRange(0, 99999); // For mobile devices

  navigator.clipboard.writeText(input.value).then(() => {
    alert("Copied the text: " + input.value);
  });
}


          
          function showTable() {
    document.getElementById("profile").style.display = "none";
    document.getElementById("tablehist").style.display = "block";
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

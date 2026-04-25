<?php
session_start();
require 'db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: adminlogin.php"); // Redirect to login page
    exit();
}

// Now safely fetch your users
$myuser = $pdo->query("SELECT * FROM myuser")->fetchAll();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
     <!-- FAVIVON -->
     <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="csss/incoo.css" rel="stylesheet">
        
    <style>
        body{
            background:#000000;
            color:#ddd;
            font-family: Arial, Helvetica, sans-serif;
            height:200vh;
        }
        table{
                width:100%;
                height:100px;
                font-weight:800;
                border:10px solid #000;
            }
            th{
                font-size:13px;
                font-weight:800;
                color:#000;
                background:#ccccccff;
            }
            td{
                padding:8px 20px;
                background:#111111;
                border:1px solid #111111;
                border-radius:5px;
                font-weight:600;
                font-size:14px;
            }
            a{
                text-decoration:none;
                font-weight:700;
            }
             @media (max-width:500px){
                 table{
                width:100%;
                height:100px;
                font-weight:800;
                border:10px solid #000;
            }
            .management{
                width: 100%;
                max-width: 100%; /* Or fixed width like width: 100% */
                max-height: 350px; /* Or fixed width like width: 100px */
                overflow-x: auto;
                overflow-y: auto;
            }
    
            }
            
            .info {
  display:grid;
  margin-left:30px;
  grid-template-columns:repeat(3,1fr);
  grid-gap:20px;
  }
  @media (max-width:950px){
  .info {
    grid-template-columns:repeat(2,1fr);
    grid-gap:20px;
  }
  }
  @media (max-width:600px){
  .info {
    margin-left:0px;
    grid-template-columns:repeat(1,1fr);
    grid-gap:20px;
  }
  }
  .info ul{
  color:#ddd;
  width:90%;
  background:#02030c;
  padding:15px 10px;
  height:40%;
  border-radius:5px;
  border:2px solid #555;
  text-align:left;
  font-weight: 800;
  font-size: 12px;  
  z-index: ; 
  }
  @media (max-width:410px){
    .info {
      grid-template-columns:repeat(1,1fr);
      grid-gap:20px;
    }
  }
  .info h5{
    float:left; 
    font-weight:800;
    color:#ddd;
  }
  .info p{
    text-align: center;
  }



.footer {
  display:none;
  position: fixed;
        z-index:99;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100px;
  background: radial-gradient(circle, #03032557, #0f000e, #000000);
  text-align: center;
  line-height: 60px; /* vertically center text */
}
@media (max-width:500px){
    .footer{
      display: block;
    }
.footer ul{
  height: 50px;
  margin-top:15px;
  color:#ffffff;
        margin-left:40px;
}
@media (max-width:420px){   
        .footer ul{

       margin-left:40px;

        }

    }
@media (max-width:00px){   

        .footer ul{

       margin-left:px;

        }

    }
.footer i{
 font-size:20px;
 color:orangered;
 text-align:center;
}
.footer p{
  font-size: 10px;
  margin-top:5px;
  color:#ffffff;
}
li{
    color:#000;
    background:yellowgreen;
    border:1px solid yellowgreen;
    padding:10px 10px;
    text-align:center;
    font-weight:900;
}
    </style>
</head>
<body>

         <header data-aos="fade-right">&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-telegram"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-gmail"></i>
        <a href="" style="float:right;" data-aos="fade-down">supportus@capitalsCORP.online</a>
    </header>
     <nav>
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

      <ul style="margin-top:-15px;" data-aos="fade-right">
        <a href=""><h4 style="font-weight: 800;color:#ccccccf1;float: left;">capitals<span style="background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CORP</span></h4></a>
      </ul>
      <ul style="float:right;" class="navskip1" data-aos="fade-left">
        <a href="index.html" style="color:#ddd;font-weight: 700;font-size: 12px;">HOME</a>
        <a href="aboutus.html" style="color:#ddd;font-weight: 700;font-size: 12px;">ABOUT US</a>
        <a href="ourservices.html" style="color:#ddd;font-weight: 700;font-size: 12px;">SERVICES</a>
        <a href="ourpackages.html" style="color:#ddd;font-weight: 700;font-size: 12px;">PACKAGES</a>
        <a href="contactus.html" style="color:#ddd;font-weight: 700;font-size: 12px;">INQUIRIES</a>
        <a href=""><input type="submit" style="" name="REGISTER" style="color:#ddd;font-weight: 700;font-size: 12px;"></a>
        <a href=""><input type="submit" style="" name="LOGIN" style="color:#ddd;font-weight: 700;font-size: 12px;"></a>
        </ul>
        <ul style="float:right;" class="navskip2" data-aos="fade-left">
          <a href="signup.php"><input type="submit" style="" name="REGISTER" style="color:#ddd;font-weight: 700;font-size: 12px;"></a>
          <a href="login.php"><input type="submit" style="" name="LOGIN" style="color:#ddd;font-weight: 700;font-size: 12px;"></a>
          <a href="" style="color:#ddd;font-weight: 700;font-size: 12px;font-size: 30px;padding:2px 10px;">&#9776;</a> &nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
          <ul style="" class="navskip3">
          
         <div id="mediaNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <br><br><br>
                 <div class="overlay-content">
                  <a href="index.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">HOME</a>
                  <br>
                  <a href="aboutus.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">ABOUT US</a>
                  <br>
                  <a href="ourservices.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">OUR SERVICES</a>
                  <br>
                  <a href="ourpackages.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">OUR PACKAGES</a>
                  <br>
                  <a href="ournews.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">NEWS</a>
                  <br>
                  <a href="contactus.html" styl="background: background: linear-gradient(to right, #402bca,
                                      #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CONTACT US</a>
                 </div>
          </div>
          <span class="nav-controller" onclick="openNav()" style="font-weight: 700;">&#9776;</span>
          
          </ul>
          
     </nav>
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
  <h2>User Management</h2>
  
  <div class="info">
  <ul data-aos="fade-down">

    <h5><small style="font-size:16px;font-weight: 800;color:#fff;">UPDATING.....</small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">Total registered users</p>
  </ul>
  <ul data-aos="fade-down">
    <h5><small style="font-size:16px;font-weight: 800;color:#fff;"><?php echo count($myuser); ?></small></h5>
    <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">Total Invested Users</p>
  </ul>
  <ul data-aos="fade-down">
<h5 style="margin-top:-10px;">
EXCELLENT PLATFORM&nbsp;
<small style="font-size:16px;font-weight: 800;color:#fff;">
UPDATING...
</small>
</h5>
	  <i class="fas fa-chart-line" style="float:right;"></i>
    <br><br>
      <p style="color:#666;font-weight: 800;">Clients Sastisfaction</p>
  </ul>
  </div>
  <br>
  <h2>Manage Your Clients</h2>
  <div class="management">
    <table border="2">
        <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Username</th><th>Email</th><th>Password</th><th>Phone</th><th>Country</th><th>State</th><th>Address</th><th>Plan</th><th>Currency</th><th>Account Type</th><th>Deposited</th><th>Total Balance</th><th>Bonus</th><th>Total Profit</th><th>Referrals</th><th>Pending Withdrawals</th><th>Total Withdrawals</th><th>Last Deposit</th><th>Last Withdrawal</th><th>Actions</th></tr>
        
        <?php foreach ($myuser as $capisdlj_capitalscorp): ?>
        <tr>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['id']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['first_name']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['last_name']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['user_name']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['email']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['password']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['phone']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['country']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['state']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['address']) ?></td>

            <td><?= htmlspecialchars($capisdlj_capitalscorp['plan_choice']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['currency_type']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['account_type']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['deposited']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['total_balance']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['bonus']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['total_profit']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['referrals']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['pending_withdrawal']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['total_withdrawal']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['last_deposit']) ?></td>
            <td><?= htmlspecialchars($capisdlj_capitalscorp['last_withdrawal']) ?></td>
            <td>
                <a href="edit_user.php?id=<?= $capisdlj_capitalscorp['id'] ?>" style="color:yellowgreen;background:orangered;padding:5px 20px; background: radial-gradient(circle at top left, #0d0a25, #470136, #3a1b20);">Edit</a> 
                <br><br>
                <a href="delete_user.php?id=<?= $capisdlj_capitalscorp['id'] ?>" onclick="return confirm('Are you sure?')" style="color:red;padding:5px 20px; background: radial-gradient(circle at top left, #0d0a25, #470136, #3a1b20);">Delete</a>
           </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <br>
    <li><a href="chat.html">START A CHAT WITH YOUR CLIENTS</a></li>
    <br>
   <!--<h2>CHECK TODAYS UPDATE</h2>-->
    <!-- TradingView Widget BEGIN -->
<!--<div class="tradingview-widget-container">
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
</div>-->
<!-- TradingView Widget END -->
    
    
   <!--<footer class="footer">
  <ul style="">
    <a href="" style=""><i class="fa fa-home"><p style="font-weight: 800;">HOME</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="" style=""><i class="fa fa-wallet"><p style="font-weight: 800;">WALLET</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="" style=""><i class="fas fa-chart-line"><p style="font-weight: 800;">FINANCE</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="" style=""><i class="fas fa-award"><p style="font-weight: 800;">REWARD</p></i></a>&nbsp;&nbsp;&nbsp;
    <a href="" style=""><i class="fas fa-user-circle"><p style="font-weight: 800;">ACCOUNT</p></i></a>&nbsp;&nbsp;&nbsp;
  </ul>
</footer>-->


</body>
</html>

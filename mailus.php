
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

           <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
    body{
  background:#000000;
  height:150vh;
}
/*
@media (max-width:380px){
  body{
    height:420%;
  }
    }
*/


header{
  background:#01010ff5;
  color:#ddd;
  padding-top:10px;
  padding-bottom:6px;
  box-shadow: 0 4px 6px #111111;
  z-index:99;
  position:fixed;
  width:100%;
        margin-top:-100px;
}
.wrapper{
  padding:50px 50px;
        margin-top:100px;
}
h4{
  color:#ddd;
  font-weight:800;
  font-size:13px;
}
h3{
  color:#ddd;
  font-weight:800;
  font-size:14px;
}

.info {
  display:grid;
  margin-left:30px;
  grid-template-columns:repeat(4,1fr);
  grid-gap:20px;
  }
  @media (max-width:950px){
  .info {
    grid-template-columns:repeat(3,1fr);
    grid-gap:20px;
  }
  .wrapper{
    padding:10px 10px;
  }
  }
  @media (max-width:600px){
  .info {
    margin-left:0px;
    grid-template-columns:repeat(2,1fr);
    grid-gap:5px;
  }
  }
  .info ul{
  color:#ddd;
  width:99%;
  background:#02030c;
  padding:15px 10px;
  height:80%;
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



  .navi{
    float:right;
    display:grid;
  grid-template-columns:repeat(6,1fr);
  grid-gap:0px;
  }
  @media (max-width:850px){
    .navi{
      float:right;
      display:grid;
    grid-template-columns:repeat(4,1fr);
    grid-gap:0px;
    }
    }
    @media (max-width:600px){
      .navi{
        float:left;
        display:grid;
      grid-template-columns:repeat(3,1fr);
      grid-gap:0px;
      }
      }
      @media (max-width:410px){
        .navi{
          display:grid;
        grid-template-columns:repeat(2,1fr);
        grid-gap:0px;
        }
        }
  .navi a{
    border:1px solid #666;
    padding:10px 10px;
    color:#ddd;
    background:#111111;
    font-size:11px;
    font-weight:700;
    border-radius:3px;
  }

  button{
    padding:10px 20px;
    color:#ddd;
    background:rgb(15, 73, 100);
    font-weight:700;
    border:1px solid rgb(15, 73, 100);
    border-radius:3px;
  }

  /**************************DEPOSIT PAGE*******************************/
  .buypage{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  grid-gap:10px;
  }
  @media (max-width:950px){
    .buypage{
      display:grid;
      grid-template-columns:repeat(1,1fr);
      grid-gap:10px;
      margin-top:50px;
      }
      .buypage ul{
        width:100%;
      }
      ol{
        display:grid;
      grid-template-columns:repeat(1,1fr);
      grid-gap:5px;
      float:left;
      }
  }
  @media (max-width:400px){
    .buypage{
      margin-left:0px;
      position:absolute;
      }
      ol{
        display:grid;
      grid-template-columns:repeat(1,1fr);
      grid-gap:5px;
      float:left;
      }
  }
  .buypage ul{
    background:#111111;
    color:#ddd;
  }
  li{
    background:#02030c;
    height:80%;
    padding:10px 10px;
    box-shadow: 0 4px 6px #dddddd;
  }
  li h5{
    color:#fff;
    font-weight:700;
  }
  ol{
    display:grid;
  grid-template-columns:repeat(2,1fr);
  grid-gap:5px;
  float:left;
  }
  ol small{
    background:greenyellow;
    cursor:pointer;
  padding:10px 10px;
  color:#000;
  font-weight:800;
  }
  

/**************************POPUP CLICK**************************************/
.popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  top: -100px;
  left: 0;
  width: 100%;
  height: 100%;
  background-color:rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 1000; /* On top of other elements */
}
@media (max-width:1000px){
  .popup {
    top: 0px;
  }
    }
    @media (max-width:500px){
      .popup {
        top: 100px;
      }
        }

.popup-content {
  background-color: #444469;
  padding: 20px;
  margin: 15% auto;
  text-align: center;
  width: 90%;
  border-radius: 5px;
  position: relative;
}

.close {
  position: absolute;
  right: 10px;
  top: 5px;
  color:#000000;
  font-size: 40px;
  cursor: pointer;
}
.popup-content h5{
  color:greenyellow;
  font-weight:700;
}
.popup-content h2{
  color:red;
  font-weight:700;
}
.popup-content input{
  color:#000;
  font-weight:700;
  background:#fff;
  width:100%;
  height:30px;
  border-radius:3px;
  border:1px solid #fff;
}
.popup-content button{
  color:#000;
  font-weight:700;
  background:rgb(44, 44, 182);
  width:70%;
  height:30px;
  border-radius:3px;
  border:1px solid rgb(44, 44, 182);
}
.popup-content a{
  font-weight:700;
 padding:10px 50px;
  height:30px;
  border-radius:3px;
  border:1px solid rgb(26, 100, 26);
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
    }
.footer ul{
  height: 50px;
  margin-top:15px;
  color:#ffffff;
        margin-left:-10px;
}
@media (max-width:420px){   
        .footer ul{

       margin-left:-30px;

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
}
.footer p{
  font-size: 10px;
  margin-top:5px;
  color:#ffffff;
}



























.proid {
  text-align: center;
  }
  .pro {
    display:grid;
    margin-left:10px;
    grid-template-columns:repeat(3,1fr);
    grid-gap:20px;
    }
    @media (max-width:500px){
      .pro {
        display:grid;
        margin-left:-70px;
        grid-template-columns:repeat(2,1fr);
        grid-gap:20px;
        }
      }
    .pro ul{
      color:#ddd;
      font-size:20px;
      text-align: center;
      font-weight:700;
    }


    .proopt{
      float:right;
      display:grid;
    grid-template-columns:repeat(3,1fr);
    grid-gap:0px;
    
    }

    .proopt a{
      border:1px solid #666;
      padding:10px 10px;
      color:#ddd;
      background:green;
      font-size:11px;
      font-weight:700;
      border-radius:3px;
    }
 .proopt small{
      border:1px solid #666;
      padding:10px 10px;
      color:#ddd;
      background:green;
      font-size:11px;
      font-weight:700;
      border-radius:3px;
    }
.profile{

display:block;
}
 table{
        display:none;
        }
        

    .inner-profile {
      display:grid;
      margin-left:0px;
      grid-template-columns:repeat(2,1fr);
      grid-gap:20px;
      margin-top: 50px;
      }
      @media (max-width:700px){
        .inner-profile {
          display:grid;
          margin-left:0px;
          grid-template-columns:repeat(1,1fr);
          grid-gap:20px;
          margin-top: 50px;
          }
        }
        @media (max-width:400px){
          .inner-profile {
            display:grid;
            margin-left:0px;
            grid-template-columns:repeat(1,1fr);
            grid-gap:20px;
            margin-top: 100px;
            }
          }
      .inner-profile ul{
        border:1px solid #666;
        padding:10px 10px;
        color:#ddd;
        background:#111111;
        border-radius:3px;
      }
      .inner-profile p{
        color:#ddd;
        font-size:13px;
        font-weight:700;
      }
      .inner-profile input{
        width:100%;
        height:30px;
        color:#000;
        font-weight: 800;
        background:;
        outline-color: #ddd;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        color:#ddd;
        background: rgb(12, 2, 17);
        height:300px;
        margin-top: 100px;
              height:700px;
      }
    
      th, td {
        padding: 8px 12px;
        text-align: left;
              background:#1a041a;
               height:100px;
              width:100%;
      }
    
      th {
        background-color: #111111;
      }





  

  .contact-card {
    max-width: 600px;
    margin: auto;
    padding: 2rem;
    background: rgba(0, 0, 0, 0.6); /* transparent glass */
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 255, 0, 0.3);
    border-radius: 20px;
    box-shadow: 0 0 25px rgba(0, 255, 0, 0.2);
    color: #d2ffd2;
    transition: all 0.3s ease;
  }

  .contact-card:hover {
    box-shadow: 0 0 35px rgba(0, 255, 0, 0.4);
  }

  .contact-card h2 {
    text-align: center;
    font-size: 2prem;
    color: #00ff88;
    margin-bottom: 0.5rem;
  }

  .contact-card p {
    text-align: center;
    font-size: 1rem;
    color: #b5ffb5;
    margin-bottom: 2rem;
  }

  .contact-card form label {
    display: block;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
    color: #aaffaa;
  }

  .contact-card input,
  .contact-card textarea {
    width: 100%;
    padding: 1.75rem 1rem;
    background: rgba(20, 20, 20, 0.8);
    color: #00ff88;
    border: 1px solid #00ff88;
    border-radius: 10px;
    font-size: 1.5rem;
    transition: 0.3s;
  }

  .contact-card input::placeholder,
  .contact-card textarea::placeholder {
    color: #88ffaa;
    opacity: 0.6;
  }

  .contact-card input:focus,
  .contact-card textarea:focus {
    background: rgba(0, 0, 0, 0.95);
    outline: none;
    box-shadow: 0 0 10px #00ff88;
  }

  .contact-card textarea {
    resize: vertical;
    min-height: 200px;
    
  }

  .contact-card button {
    width: 100%;
    padding: 2rem;
    border: none;
    background: #00ff88;
    color: #000;
    font-size: 2rem;
    font-weight: bold;
    border-radius: 12px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s;
    box-shadow: 0 0 10px #00ff88;
  }

  .contact-card button:hover {
    background: #00cc66;
    box-shadow: 0 0 15px #00ff88;
    transform: translateY(-2px);
  }

  @media (max-width: 600px) {
    .contact-card {
      padding: 3.5rem;
      margin: 1rem;
      background:transparent;
    }

    .contact-card h2 {
      font-size: 2.6rem;
    }
    .contact-card p {
    text-align: center;
    font-size: 1.5rem;
    color: #b5ffb5;
    margin-bottom: 2rem;
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
      <ul style="float: right;margin-top:0px;">
    <i class="fa fa-wifi" style="font-size:15px;font-weight:800;color:#ffffff;"></i>  &nbsp;&nbsp;&nbsp;&nbsp;
      <a href=""><?php echo $user_data['user_name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="logout.php"><i class="fa fa-sign-out" style="font-size:15px;font-weight:800;color:red;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </ul>
  </header>
         
          
  <div class="wrapper">
          
           <small id="google_translate_element" style="margin-top:0px;"></small>
      <h3 style="">ACCOUNT MAILING | PAGE</h3>

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
  
 



          
 <div class="contact-card">
  <h2>Contact Support</h2>
  <p>Send us your complaints or feedback directly from your dashboard.</p>

 <!-- modify this form HTML and place wherever you want your form --> <form action="https://formspree.io/f/mgvkkkwv" method="POST" > <label> Your email: <input type="email" name="email"> </label> <label> Your message: <textarea name="message"></textarea> </label> <!-- your other form fields go here --> <button type="submit">MAIL US</button> </form>



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

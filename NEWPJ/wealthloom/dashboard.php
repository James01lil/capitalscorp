<?php
session_start();
include 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
        // Redirect to login page
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch full user record
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Check if user is banned
if ($user && $user['status'] === 'banned') {
    header("Location: banned.php");
    exit();
}
?>


<!--NOTIFICATION MESSAGE-->

<?php
$unread = $conn->prepare("SELECT COUNT(*) AS unread FROM notifications WHERE user_id=? AND is_read=0");
$unread->bind_param("i", $user_id);
$unread->execute();
$count_result = $unread->get_result()->fetch_assoc();
$unread_count = $count_result['unread'];
?>         
  <?php if ($unread_count > 0): ?>
  <?php endif; ?> 

<!--END-->

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <title>Trading Dashboard</title>

    <!-- FAVIVON -->

        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  

    <link rel="stylesheet" href="css/inner-style.css" />

  

  <style>

     #notchFooter {

  position: fixed;

  bottom: 30px;

  left: 50%;

  transform: translateX(-50%);

  background: #2d2d2d;

  border-radius: 40px;

  height: 60px;

  width: 100px; /* initial width for 1 icon */

  transition: width 0.5s ease-in-out;

  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);

  z-index: 999;

  overflow: hidden;

  display: flex;

  align-items: center;

  justify-content: center;

  padding: 0;

  animation: zoomPulse 2s ease-in-out infinite;

}

@keyframes zoomPulse {

  0%, 100% {

    transform: translateX(-50%) scale(1);

  }

  50% {

    transform: translateX(-50%) scale(1.1);

  }

}

#notchFooter.expanded {

  width: 370px;

}

.footer-content {

  display: flex;

  gap: 30px;

  justify-content: center;

  align-items: center;

  transition: gap 0.3s ease;

}

.icon {

  font-size: 24px;

  color: white;

  text-decoration: none;

  transition: transform 0.3s;

}

.extra {

  opacity: 0;

  transform: scale(0);

  pointer-events: none;

  transition: opacity 0.3s ease, transform 0.3s ease;

}

#notchFooter.expanded .extra {

  opacity: 1;

  transform: scale(1);

  pointer-events: auto;

}      

  

.sidebar {

  width: 200px;

  background: #161b22;

  position: fixed;

  height: 100vh;

  padding: 20px;

  box-sizing: border-box;

}

@media (max-width: 1000px) {

  .sidebar {

    display:none;

  }

  }

.sidebar h2 {

  color: #58a6ff;

}

.sidebar ul {

  list-style: none;

  padding: 0;

}

.sidebar li {

  margin: 20px 0;

  cursor: pointer;

}

.main {

  margin-left: 200px;

  padding: 0px;

}

@media (max-width: 1000px) {

  .main {

  margin-left: 0px;

}

  }

.header {

  display: flex;

  justify-content: space-between;

  align-items: center;

}

.badge {

  background: red;

  border-radius: 12px;

  padding: 5px 10px;

  color: white;

}

.cards {

  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 15px;

  margin-top: 20px;

}

@media (max-width: 700px) {

 .cards {

  grid-template-columns: repeat(2, 1fr);

  }

  }

  

  @media (max-width: 400px) {

 .cards {

  grid-template-columns: repeat(1, 1fr);

  }

  }

  

.card {

  background: #131313;

  padding: 20px;

  border-radius: 10px;

  text-align: center;

}

table {

  width: 100%;

  margin-top: 20px;

  background: #161b22;

  border-collapse: collapse;

  overflow-x:scroll;

  min-width:600px;

}

 .table_container{

     max-width:100%;

     overflow-x:auto;

 }

th, td {

  padding: 12px;

  text-align: center;

  border-bottom: 1px solid #30363d;

}

.actions {

  margin-top: 20px;

}

button {

  background: #238636;

  color: white;

  padding: 10px 20px;

  margin-right: 10px;

  border: none;

  border-radius: 6px;

  cursor: pointer;

}

.account-summary {

  font-size: 0.9rem;

  margin-top: 5px;

  color: #8b949e;

}

.account-summary p{

  font-weight:800;

  font-size:15px;

}

.status.verified {

  color: #2ea043;

  font-weight: bold;

}

.user-profile {

  display: flex;

  align-items: center;

  gap: 10px;

  position: relative;

}

.avatar {

  width: 45px;

  height: 45px;

  border-radius: 50%;

  border: 2px solid #58a6ff;

}

.dropdown {

  position: relative;

  display: inline-block;

}

.dropbtn {

  background-color: #161b22;

  color: #c9d1d9;

  border: none;

  font-size: 24px;

  cursor: pointer;

}

.dropdown-content {

  display: none;

  position: absolute;

  background-color: #21262d;

  box-shadow: 0px 8px 16px rgba(0,0,0,0.3);

  right: 0;

  min-width: 120px;

  border-radius: 6px;

  z-index: 1;

}

.dropdown-content a {

  color: #c9d1d9;

  padding: 10px 12px;

  text-decoration: none;

  display: block;

}

.dropdown-content a:hover {

  background-color: #30363d;

}

.dropdown:hover .dropdown-content {

  display: block;

}

      

      

      

      

      

      

      

      

      

      

      

      

      

      

      .profile-overview {

  margin-top: 40px;

  background: #131313;

  padding: 20px;

  border-radius: 10px;

}

.profile-overview h2 {

  margin-bottom: 15px;

  color: #58a6ff;

}

.summary-cards {

  display: grid;

  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));

  gap: 15px;

  margin-bottom: 30px;

}

.summary-card {

  background: #000000;

  border:2px solid #21262d;

  padding: 15px 20px;

  border-radius: 8px;

  text-align: center;

  color: #c9d1d9;

  font-weight:800;

}

.summary-card h3 {

  margin: 10px 0 0;

  font-size: 1.4rem;

}

.summary-card .profit {

  color: #ddd;

}

.chart-container {

  background: #000000;

  padding: 20px;

  border-radius: 8px;

}    

  .market-panel {

  margin-top: 30px;

  background: #131313;

  padding: 20px;

  border-radius: 10px;

}

.market-panel h2 {

  margin-bottom: 15px;

  color: #58a6ff;

}

.market-ticker {

  display: flex;

  flex-wrap: wrap;

  gap: 20px;

}

.ticker-item {

  flex: 1 1 200px;

  background: #000000;

  padding: 10px 15px;

  border-radius: 8px;

  color: #c9d1d9;

}

.ticker-item .symbol {

  font-weight: bold;

  font-size: 1rem;

  margin-bottom: 5px;

}

.ticker-item .price {

  font-size: 1.2rem;

  color: #3fb950;

  margin-bottom: 5px;

}

.spark {

  height: 20px !important;

  max-height: 20px;

  width: 100%;

}

@media (max-width: 700px) {

  .spark {

  width: 70%;

}

  }

.watchlist {

  margin-top: 20px;

}

.watchlist h3 {

  margin-bottom: 10px;

  color: #c9d1d9;

}

.watchlist ul {

  list-style: none;

  padding: 0;

  display: flex;

  gap: 15px;

  flex-wrap: wrap;

}

.watchlist li {

  background: #21262d;

  padding: 6px 12px;

  border-radius: 6px;

  color: #c9d1d9;

  font-size: 0.9rem;

}

/* Trade History Table */

.trade-history {

  margin-top: 40px;

  background: #131313;

  padding: 20px;

  border-radius: 10px;

}

.trade-history table {

  width: 100%;

  border-collapse: collapse;

  background:#000000;

}

.trade-history th,

.trade-history td {

  padding: 12px 10px;

  text-align: left;

  border-bottom: 1px solid #30363d;

  color: #c9d1d9;

}

.trade-history th {

  background-color: #000000;

}

.trade-history .open {

  color: #facc15;

}

.trade-history .closed {

  color: #10b981;

}

.trading-tools, .chart-section, .notifications-panel, .support-community {

  background: #131313;

  padding: 20px;

  border-radius: 10px;

  margin-top: 30px;

}

.tools-grid {

  display: flex;

  flex-wrap: wrap;

  gap: 15px;

  align-items: center;

}

.tool-btn {

  background: #238636;

  color: #fff;

  padding: 10px 20px;

  border: none;

  border-radius: 8px;

  font-weight: bold;

  cursor: pointer;

}

.bot-status {

  display: flex;

  align-items: center;

  gap: 10px;

  margin-left: auto;

}

.switch {

  position: relative;

  display: inline-block;

  width: 50px;

  height: 24px;

}

.switch input {display:none;}

.slider {

  position: absolute;

  cursor: pointer;

  top: 0; left: 0; right: 0; bottom: 0;

  background-color: #ccc;

  transition: .4s;

  border-radius: 24px;

}

.slider:before {

  position: absolute;

  content: "";

  height: 18px; width: 18px;

  left: 3px; bottom: 3px;

  background-color: white;

  transition: .4s;

  border-radius: 50%;

}

input:checked + .slider {

  background-color: #3fb950;

}

input:checked + .slider:before {

  transform: translateX(26px);

}

.coupon-entry {

  display: flex;

  gap: 5px;

}

.coupon-entry input {

  padding: 8px;

  border-radius: 6px;

  border: 1px solid #30363d;

  background: #0d1117;

  color: #c9d1d9;

}

.coupon-entry button {

  background: #1f6feb;

  color: white;

  padding: 8px 12px;

  border: none;

  border-radius: 6px;

}

.chart-controls {

  display: flex;

  justify-content: space-between;

  align-items: center;

  margin-bottom: 10px;

}

.chart-controls select, .chart-controls button {

  background: #21262d;

  color: #c9d1d9;

  border: 1px solid #30363d;

  padding: 6px 10px;

  border-radius: 6px;

}

.chart-controls .timeframes button {

  margin-left: 5px;

}

.notification-list {

  list-style: none;

  padding: 0;

}

.notification-list li {

  background: #21262d;

  padding: 10px;

  border-radius: 6px;

  margin-bottom: 10px;

}

.badge {

  background: #facc15;

  color: #000;

  padding: 4px 8px;

  border-radius: 8px;

  font-size: 0.9rem;

  margin-left: 8px;

}

.support-links {

  display: flex;

  gap: 10px;

  flex-wrap: wrap;

}

.support-links button, .support-link {

  background: #238636;

  color: white;

  padding: 10px 16px;

  border: none;

  border-radius: 6px;

  text-decoration: none;

  font-weight: bold;

}

.support-link {

  background: #1f6feb;

}

#news-container {

  display: grid;

  grid-template-columns: repeat(auto-fill, minmax(400px, 2fr));

  gap: 20px;

  margin-left:-15px;

}

  .profile-settings {

    background-color: #131313;

    color: #fff;

    border-radius: 16px;

    padding: 24px;

    max-width: 800px;

    margin: 0 auto;

    box-shadow: 0 0 10px rgba(0,0,0,0.5);

    font-family: 'Segoe UI', sans-serif;

  }

  .profile-settings h2 {

    font-size: 22px;

    margin-bottom: 20px;

    color: #00ffc6;

  }

  .setting-group {

    border-bottom: 1px solid #333;

    padding: 16px 0;

  }

  .setting-group:last-child {

    border-bottom: none;

  }

  .setting-title {

    font-weight: bold;

    font-size: 16px;

    margin-bottom: 8px;

  }

  .setting-desc {

    color: #aaa;

    font-size: 14px;

    margin-bottom: 12px;

  }

  .btn-action {

    background-color: #00ffc6;

    color: #000;

    padding: 8px 14px;

    border: none;

    border-radius: 8px;

    cursor: pointer;

    font-weight: 500;

  }

  .btn-action:hover {

    background-color: #00d6a5;

  }

</style>

  

</head>

<body>

    

    <header style="float: ;">&nbsp;&nbsp;

    <ul style="margin-top:-10px;">

      <a href=""><h5 style="font-weight: 800;color:#ccccccf1;float: left;">&nbsp;&nbsp;&nbsp;&nbsp;wealth<span style="background: linear-gradient(to right, #bfffd5,

                                    #7bff55,#2D9E45, #6affa2); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">LOOM</span>&nbsp;&nbsp;<i class="fa fa-exchange" style=""></i>&nbsp;&nbsp;<b style="font-size:12px;color:peru;">Our trade station</b></h5></a>

    </ul>

    <ul style="float: right;">
            
            
      <a href="notification_page.php" style=""> <i class="fa fa-message" style="font-size:11px;font-weight:800;color:#ffffff;margin-top:-15px;"></i>
    <span class="badge" style="margin-left:0px;margin-top:-10px;"><?= $unread_count ?></span></a>
          

  <i class="fa fa-podcast" style="font-size:15px;font-weight:800;color:#ffffff;"></i>  &nbsp;&nbsp;&nbsp;&nbsp;

    <a href=""></a>&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="logout.php"><i class="fa fa-sign-out" style="font-size:15px;font-weight:800;color:red;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </ul>

</header>

<br><br>

  <div class="sidebar">

    <h2>📈 TradeDesk</h2>

    <ul>

      <li>Dashboard</li>

      <li>New Trade</li>

      <li>Deposit</li>

      <li>Withdraw</li>

      <li>Profile</li>

      <li>Logout</li>

    </ul>

  </div>

<div class="image-header">

    <small id="google_translate_element" style="margin-top:0px;"></small>

      <h3 style="">👋 Welcome,&nbsp;&nbsp;<?= $user['user_name']; ?>!</h3>

      <ul style="margin-top:120px;">

        <div class="dropdown">

      <button class="dropbtn">☰</button>

      <div class="dropdown-content">

        <a href="#">👤 Profile</a>

        <a href="#">⚙️ Settings</a>

        <a href="#">🚪 Logout</a>

      </div>

    </div>

      </ul>         

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

     </div>

    

    

    

    

    <!-- Main content area with curved top -->

  <div class="curved-body">

      

      

    

  

  <div class="main">

    <div class="header">
                      

  <div>

    <div class="account-summary">

      <p><strong style="font-size:10px;">Account No:</strong> <?= $user['acct_id']; ?> </p>

      <p><strong style="font-size:10px;">Account Type:</strong> <?= $user['account']; ?></p>

      <p><strong style="font-size:10px;">Status:</strong> <span class="status verified">✔ Verified &nbsp;<?= $user['status']; ?></span></p>

    </div>

  </div>

  <div class="user-profile">

    <img src="https://i.pravatar.cc/80?img=3" alt="User" class="avatar">

  </div>

</div> 
          
          
          
    

<div class="profile-overview">
        
        
      <a href="notification_page.php" class="notification-link" style="float:right;">

  🔔 Notifications

    <span class="badge"><?= $unread_count ?></span></a>

  
        <br>

  <h2>Account Overview</h2>
        

  <div class="summary-cards">

    <div class="summary-card">

      <p>Total Balance</p>

      <h3> <?= $user['currency']; ?> <?= $user['balance']; ?> </h3>

    </div>

    <div class="summary-card">

      <p>Available Margin</p>

      <h3><?= $user['currency']; ?> <?= $user['margin']; ?></h3>

    </div>

    <div class="summary-card">

      <p>Invested Funds</p>

      <h3><?= $user['currency']; ?> <?= $user['invested']; ?></h3>

    </div>

    <div class="summary-card">

      <p>Profit / Loss</p>

      <h3 class="profit"><?= $user['currency']; ?> <?= $user['PandL']; ?></h3>

    </div>

  </div>

  <div class="chart-container">

    <h3>Asset Allocation</h3>

    <canvas id="assetChart" width="400" height="200"></canvas>

  </div>

</div>

    

    

    

    <div class="cards">

      <div class="card">💰 Balance<br><strong><?= $user['currency']; ?> <?= $user['balance']; ?></strong></div>

      <div class="card">📈 Equity<br><strong><?= $user['currency']; ?> <?= $user['equity']; ?></strong></div>

      <div class="card">🧾 Open Trades<br><strong><?= $user['open_trades']; ?></strong></div>

      <div class="card">🪙 Total P&L<br><strong><?= $user['currency']; ?> <?= $user['PandL']; ?></strong></div>

    </div>

    
          
          
          
          
         <!--  <h2>Trade History</h2>

    <div class="table_container">

    <table>

      <thead>

        <tr>

          <th>Symbol</th><th>Type</th><th>Qty</th><th>Price</th><th>Status</th>

        </tr>

      </thead>

      <tbody>

       // <?php

       // $result = $conn->query("SELECT * FROM trades LIMIT 5");

      //  while ($row = $result->fetch_assoc()) {

        //  echo "<tr>

          //        <td>{$row['symbol']}</td>

           //       <td>{$row['type']}</td>

           //       <td>{$row['qty']}</td>

              //    <td>\${$row['price']}</td>

             //     <td>{$row['status']}</td>

              //  </tr>";

     //   }

       // ?>

      </tbody>

    </table>

    </div>-->
                  
    <div class="actions">

      <button>➕ New Trade</button>

      <button>💸 Withdraw</button>

    </div>

  

  

  

  

  

    

    

    

    

    

    

    

    

    <!-- Live Market Data Panel -->

<div class="market-panel">

  <h2>📊 Live Market Data</h2>

  <div class="market-ticker">

    <div class="ticker-item">

      <div class="symbol">EUR/USD</div>

      <div class="price">1.0852</div>

      <canvas class="spark" id="eurusdChart"></canvas>

    </div>

    <div class="ticker-item">

      <div class="symbol">BTC/USD</div>

      <div class="price">$67,320</div>

      <canvas class="spark" id="btcusdChart"></canvas>

    </div>

    <div class="ticker-item">

      <div class="symbol">AAPL</div>

      <div class="price">$182.45</div>

      <canvas class="spark" id="aaplChart"></canvas>

    </div>

    <div class="ticker-item">

      <div class="symbol">XAU/USD</div>

      <div class="price">$2,345.60</div>

      <canvas class="spark" id="goldChart"></canvas>

    </div>

  </div>

  <div class="watchlist">

    <h3>⭐ Watchlist</h3>

    <ul>

      <li>ETH/USD</li>

      <li>MSFT</li>

      <li>GBP/USD</li>

      <li>TSLA</li>

    </ul>

  </div>

</div>

<!-- Trade History Table -->

<div class="trade-history">

  <h2>🧾 Recent Trades</h2>

  <div class="table_container">

  <table>

    <thead>

      <tr>

        <th>Symbol</th>

        <th>Type</th>

        <th>Qty</th>

        <th>Price</th>

        <th>Date/Time</th>

        <th>Status</th>

      </tr>

    </thead>

    <tbody>

      <tr>

        <td>BTC/USD</td>

        <td>Buy</td>

        <td>0.5</td>

        <td>$66,400</td>

        <td>2025-06-13 14:32</td>

        <td class="open">Open</td>

      </tr>

      <tr>

        <td>EUR/USD</td>

        <td>Sell</td>

        <td>10,000</td>

        <td>1.0830</td>

        <td>2025-06-12 09:50</td>

        <td class="closed">Closed</td>

      </tr>

      <tr>

        <td>AAPL</td>

        <td>Buy</td>

        <td>100</td>

        <td>$179.80</td>

        <td>2025-06-10 11:15</td>

        <td class="closed">Closed</td>

      </tr>

    </tbody>

  </table>

  

  </div>

</div>

  

<div class="trading-tools">

  <h2>🛠️ Trading Tools</h2>

  <div class="tools-grid">

    <button class="tool-btn">➕ New Trade</button>

    <button class="tool-btn">💰 Deposit</button>

    <button class="tool-btn">🏧 Withdraw</button>

    <div class="bot-status">

      <p>Trading Bot:</p>

      <label class="switch">

        <input type="checkbox" id="botToggle" checked>

        <span class="slider round"></span>

      </label>

    </div>

    <div class="coupon-entry">

      <input type="text" placeholder="Enter Promo Code">

      <button>Apply</button>

    </div>

  </div>

</div>

<div class="chart-section">

  <h2>📈 Charts & Analysis</h2>

  <div class="chart-controls">

    <select>

      <option>BTC/USD</option>

      <option>EUR/USD</option>

      <option>AAPL</option>

      <option>XAU/USD</option>

    </select>

    <div class="timeframes">

      <button>1m</button><button>5m</button><button>1h</button><button>1d</button><button>1w</button>

    </div>

  </div>

  <div class="chart-area">

    <iframe src="https://www.tradingview.com/widgetembed/?symbol=BTCUSD" frameborder="0" width="100%" height="400" allowfullscreen></iframe>

  </div>

</div>

<div class="notifications-panel">

  <h2>🔔 Notifications <span class="badge">3</span></h2>

  <ul class="notification-list">

    <li><strong>📢 Admin:</strong> System maintenance scheduled for 2025-06-15</li>

    <li><strong>📰 News:</strong> BTC spikes 5% after ETF announcement</li>

    <li><strong>📬 Message:</strong> Your withdrawal request has been approved.</li>

  </ul>

</div>

<div class="support-community">

  <h2>💬 Support & Community</h2>

  <div class="support-links">

    <button>💬 Live Chat</button>

    <button>🎫 Submit Ticket</button>

    <a href="#" class="support-link">📚 Help Center</a>

    <a href="#" class="support-link">👥 Visit Community Forum</a>

  </div>

</div>

<br><br>

<div class="profile-settings">

  <h2>💼 Profile & Settings</h2>

  <div class="setting-group">

    <div class="setting-title">KYC Status</div>

    <div class="setting-desc">Verify your identity to unlock full features.</div>

    <button class="btn-action">Verify Now</button>

  </div>

  <div class="setting-group">

    <div class="setting-title">Bank/Wallet Details</div>

    <div class="setting-desc">Add or update your preferred withdrawal method.</div>

    <button class="btn-action">Manage Details</button>

  </div>

  <div class="setting-group">

    <div class="setting-title">Email & Password</div>

    <div class="setting-desc">Change your account email or reset your password.</div>

    <button class="btn-action">Update Info</button>

  </div>

  <div class="setting-group">

    <div class="setting-title">Two-Factor Authentication</div>

    <div class="setting-desc">Enhance security by enabling 2FA.</div>

    <button class="btn-action">Set Up 2FA</button>

  </div>

</div>

<!-----------NEWS--------------->

  <div id="news-container"></div>

  

 

</div>

  <br><br><br><br>

</div>

<footer id="notchFooter">

    <div class="footer-content">

      <a href="../vortex.html" class="extra" style="font-family: Arial, Helvetica, sans-serif;color:#ddd;"><i class="fa fa-bank" style="margin-left:5px;font-size:14px;"></i><br><b style="font-size:11px;">HOME</b></a>

       <a href="tradestation.html" class="extra" style="font-family: Arial, Helvetica, sans-serif;color:#ddd;"><i class="fa fa-line-chart" style="margin-left:5px;font-size:14px;"></i><br><b style="font-size:11px;">TRADE</b></a>

        <m onclick="actionMenu();" id="actionMenufooter"><i class="fa fa-exchange" style="background:greenyellow;border:3px solid greenyellow; padding:10px 12px;border-radius:30px;font-size:25px;color:#000;"></i></m>

        <a href="../SIGNAL/signalupdate.html" class="extra" style="font-family: Arial, Helvetica, sans-serif;color:#ddd;"><i class="fa fa-signal" style="margin-left:10px;font-size:14px;"></i><br><b style="font-size:11px;">SIGNAL</b></a>

       <a href="../COMMUNITY/community.html" class="extra" style="font-family: Arial, Helvetica, sans-serif;color:#ddd;"><i class="fa fa-users" style="margin-left:20px;font-size:14px;"></i><br><b style="font-size:11px;">COMMUNITY</b></a>

       

    </div>

  </footer>

  <script src="NEWS/news.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

  const ctx = document.getElementById('assetChart').getContext('2d');

  new Chart(ctx, {

    type: 'bar',

    data: {

      labels: ['Stocks', 'Crypto', 'Forex', 'Commodities', 'Cash'],

      datasets: [{

        label: 'USD Value',

        data: [3000, 2000, 1500, 1200, 800],

        backgroundColor: [

          '#3b82f6', '#8b5cf6', '#10b981', '#f59e0b', '#6b7280'

        ],

        borderRadius: 6

      }]

    },

    options: {

      plugins: {

        legend: { display: false }

      },

      scales: {

        y: {

          beginAtZero: true,

          ticks: { color: '#c9d1d9' },

          grid: { color: '#30363d' }

        },

        x: {

          ticks: { color: '#c9d1d9' },

          grid: { display: false }

        }

      }

    }

  });

</script>

    <script>

    const footer = document.getElementById("notchFooter");

    let scrollTimeout;

  

    function expandFooter() {

      footer.classList.add("expanded");

  

      clearTimeout(scrollTimeout);

      scrollTimeout = setTimeout(() => {

        footer.classList.remove("expanded");

      }, 2000); // Shrink after 2 seconds idle

    }

  

    window.addEventListener("scroll", expandFooter);

</script>

  <script src="dashboard.js"></script>

  

  

  

  

  

  

  

  

  

  

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

function drawSparkline(id, data, color) {

  new Chart(document.getElementById(id), {

    type: 'line',

    data: {

      labels: data.map((_, i) => i + 1),

      datasets: [{

        data: data,

        borderColor: color,

        backgroundColor: 'transparent',

        borderWidth: 2,

        pointRadius: 0

      }]

    },

    options: {

      plugins: { legend: { display: false } },

      scales: {

        x: { display: false },

        y: { display: false }

      },

      elements: { line: { tension: 0.4 } },

      responsive: true,

      maintainAspectRatio: false

    }

  });

}

drawSparkline("eurusdChart", [1.0850, 1.0851, 1.0849, 1.0852, 1.0853], "#3b82f6");

drawSparkline("btcusdChart", [67000, 67200, 67150, 67300, 67280], "#f97316");

drawSparkline("aaplChart", [180, 181, 182, 181.5, 182.45], "#10b981");

drawSparkline("goldChart", [2330, 2340, 2345, 2347, 2345.6], "#f59e0b");

</script>

  

  

  


  

</body>

</html>
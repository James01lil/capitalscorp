<?php
session_start();

require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM myuser WHERE id = ?");
$stmt->execute([$id]);
$capisdlj_capitalscorp = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $plan_choice = $_POST['plan_choice'];
    $currency_type = $_POST['currency_type'];
    $account_type = $_POST['account_type'];
     $deposited = $_POST['deposited'];
    $total_balance = $_POST['total_balance'];
    $bonus = $_POST['bonus'];
    $total_profit = $_POST['total_profit'];
    $referrals = $_POST['referrals'];
     $pending_withdrawal = $_POST['pending_withdrawal'];
    $total_withdrawal = $_POST['total_withdrawal'];
    $last_deposit = $_POST['last_deposit'];
    $last_withdrawal = $_POST['last_withdrawal'];
    $stmt = $pdo->prepare("UPDATE myuser  SET first_name = ?, last_name = ?, user_name = ?, email = ?, password = ?, phone = ?, country = ?, state = ?, address = ?, plan_choice = ?, currency_type = ?, account_type = ?, deposited = ?, total_balance = ?, bonus = ?, total_profit = ?, referrals = ?, pending_withdrawal = ?, total_withdrawal = ?, last_deposit = ?, last_withdrawal = ? WHERE id = ?");
    $stmt->execute([$first_name, $last_name, $user_name, $email, $password, $phone, $country, $state, $address, $plan_choice, $currency_type, $account_type, $deposited, $total_balance, $bonus, $total_profit, $referrals, $pending_withdrawal, $total_withdrawal, $last_deposit, $last_withdrawal, $id]);
    header("Location: adminpanelstmt.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
     <!-- FAVIVON -->
     <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
    <style>
        body{
            background:#000000;
            color:#ddd;
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
        }
        h2{
            color:orangered;
        }
        input{
            width:50%;
            height:30px;
            color: #ddd;
            background:#111111;
            border:1px solid #111111;
            border-radius:5px;
            font-weight:700;
            font-size:13px;
        }
        select{
            width:50%;
            height:30px;
            color: #ddd;
            background:#111111;
            border:1px solid #111111;
            border-radius:5px;
            font-weight:700;
            font-size:13px;
        }
        Label{
        Font-size:11px;
        Font-weight:700;
        Color:orangered;
        }   
             @media (max-width:500px){
                 input{
                width:90%;
                }
                Select{
                Width:90%;
                }
                label{
                Float:left;
                }
    
            }
       


    </style>
</head>
<body>
    
<form method="post">
<label>FIRST NAME </label>
    <input type="text" name="first_name" value="<?= htmlspecialchars($capisdlj_capitalscorp['first_name']) ?>" required><br><br>
    <label>LAST NAME</label>
    <input type="text" name="last_name" value="<?= htmlspecialchars($capisdlj_capitalscorp['last_name']) ?>" required><br><br>  
    <label>USER NAME</label>
    <input type="text" name="user_name" value="<?= htmlspecialchars($capisdlj_capitalscorp['user_name']) ?>" required><br><br>
    <label>EMAIL</label>
    <input type="email" name="email" value="<?= htmlspecialchars($capisdlj_capitalscorp['email']) ?>" required><br><br>
    <label>PASSWORD</label>
    <input type="text" name="password" value="<?= htmlspecialchars($capisdlj_capitalscorp['password']) ?>" required><br><br>
    <label>PHONE</label>
    <input type="text" name="phone" value="<?= htmlspecialchars($capisdlj_capitalscorp['phone']) ?>" required><br><br> 
    <label>COUNTRY</label>
    <input type="text" name="country" value="<?= htmlspecialchars($capisdlj_capitalscorp['country']) ?>" required><br><br>
    <label>STATE</label>
    <input type="text" name="state" value="<?= htmlspecialchars($capisdlj_capitalscorp['state']) ?>" required><br><br>
    <label>ADDRESS</label>
    <input type="text" name="address" value="<?= htmlspecialchars($capisdlj_capitalscorp['address']) ?>" required><br><br>
    <label>PLAN</label> 
    <select name="plan_choice">
        <option value="STARTER PLAN:: min500 - max5,000:: 35% " <?= $capisdlj_capitalscorp['plan_choice'] === 'STARTER PLAN:: min500 - max5,000:: 35% ' ? 'selected' : '' ?>>STARTER PLAN:: min500 - max5,000:: 35% </option>
        <option value="PREMIUM PLAN:: min5,000 - max20,000:: 50% " <?= $capisdlj_capitalscorp['plan_choice'] === 'PREMIUM PLAN:: min5,000 - max20,000:: 50% ' ? 'selected' : '' ?>>PREMIUM PLAN:: min5,000 - max20,000:: 50% </option>
        <option value="DELUXE PLAN:: min10,000 - max100,000:: 70% " <?= $capisdlj_capitalscorp['plan_choice'] === 'DELUXE PLAN:: min10,000 - max100,000:: 70% ' ? 'selected' : '' ?>>DELUXE PLAN:: min10,000 - max100,000:: 70% </option>
        <option value="EXCLUSIVE PLAN:: min100,000 - UNLIMITED:: 85% " <?= $capisdlj_capitalscorp['plan_choice'] === 'EXCLUSIVE PLAN:: min100,000 - UNLIMITED:: 85% ' ? 'selected' : '' ?>>EXCLUSIVE PLAN:: min100,000 - UNLIMITED:: 85% </option>
    </select><br><br>
    <label>CURRENCY </label>
    <select name="currency_type">
        <option value="$" <?= $capisdlj_capitalscorp['currency_type'] === '$' ? 'selected' : '' ?>>USA Dollar $</option>
        <option value="€" <?= $capisdlj_capitalscorp['currency_type'] === '€' ? 'selected' : '' ?>>European Euro €</option>
        <option value="£" <?= $capisdlj_capitalscorp['currency_type'] === '£' ? 'selected' : '' ?>>British Pounds £</option>
        <option value="₹" <?= $capisdlj_capitalscorp['currency_type'] === '₹' ? 'selected' : '' ?>>Indian Rupees ₹</option>
        <option value="R" <?= $capisdlj_capitalscorp['currency_type'] === 'R' ? 'selected' : '' ?>>South Africa R</option>
        <option value="₽" <?= $capisdlj_capitalscorp['currency_type'] === '₽' ? 'selected' : '' ?>>Russian Ruble ₽</option>
    </select><br><br>
    <label>ACCOUNT TYPE</label>
    <select name="account_type">
        <option value="FX Trading" <?= $capisdlj_capitalscorp['account_type'] === 'FX Trading' ? 'selected' : '' ?>>FX Trading</option>
        <option value="Stock Trading" <?= $capisdlj_capitalscorp['account_type'] === 'Stock Trading' ? 'selected' : '' ?>>Stock Trading</option>
        <option value="Binary Option Trading" <?= $capisdlj_capitalscorp['account_type'] === 'Binary Option Trading' ? 'selected' : '' ?>>Binary Option Trading</option>
        <option value="Crypto Currency Investment" <?= $capisdlj_capitalscorp['account_type'] === 'Crypto Currency Investment' ? 'selected' : '' ?>>Crypto Currency Investment</option>
        <option value="Bitcoin Mining" <?= $capisdlj_capitalscorp['account_type'] === 'Bitcoin Mining' ? 'selected' : '' ?>>Bitcoin Mining</option>
        <option value="Finiancial Save" <?= $capisdlj_capitalscorp['account_type'] === 'Finiancial Save' ? 'selected' : '' ?>>Finiancial Save</option>
    </select><br><br>
    <label>DEPOSITED</label>
    <input type="text" name="deposited" value="<?= htmlspecialchars($capisdlj_capitalscorp['deposited']) ?>" required><br><br>
    <label>TOTAL BALANCE</label>
    <input type="text" name="total_balance" value="<?= htmlspecialchars($capisdlj_capitalscorp['total_balance']) ?>" required><br><br> 
    <label>BONUS</label>
    <input type="text" name="bonus" value="<?= htmlspecialchars($capisdlj_capitalscorp['bonus']) ?>" required><br><br>
    <label>TOTAL PROFIT</label>
    <input type="text" name="total_profit" value="<?= htmlspecialchars($capisdlj_capitalscorp['total_profit']) ?>" required><br><br>
    <label>REFERRALS</label>
    <input type="text" name="referrals" value="<?= htmlspecialchars($capisdlj_capitalscorp['referrals']) ?>" required><br><br>
    <label>PENDING WITHDRAWALS</label>
    <input type="text" name="pending_withdrawal" value="<?= htmlspecialchars($capisdlj_capitalscorp['pending_withdrawal']) ?>" required><br><br> 
    <label>TOTAL WITHDRAWALS</label>
    <input type="text" name="total_withdrawal" value="<?= htmlspecialchars($capisdlj_capitalscorp['total_withdrawal']) ?>" required><br><br>
    <label>LAST DEPOSIT</label>
    <input type="text" name="last_deposit" value="<?= htmlspecialchars($capisdlj_capitalscorp['last_deposit']) ?>" required><br><br>
    <label>LAST WITHDRAWAL</label>
    <input type="text" name="last_withdrawal" value="<?= htmlspecialchars($capisdlj_capitalscorp['last_withdrawal']) ?>" required><br><br>
    
    
    
    <input type="submit" value="Update" style="background:blue;color:yellowgreen;border:1px solid blue;border-radius:10px;cursor:pointer;">
</form>

</body>
</html>

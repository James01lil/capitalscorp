<?php
$conn = new mysqli("localhost", "capisdlj_capitalscorp", "THEhybrid3002#", "capisdlj_capitalscorp");

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_ = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
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
$deposited = $_POST['deposited'];
$pending_withdrawal = $_POST['pending_withdrawal'];
$total_withdrawal = $_POST['total_withdrawal'];
$last_deposit = $_POST['last_deposit'];
$last_withdrawal = $_POST['last_withdrawal'];

$stmt = $conn->prepare("UPDATE myuser SET first_name=?, last_name=?, user_name=?, email=?, password=?, confirm_password=?, phone=?, country=?, state=?, address=?, plan_choice=?, currency_type=?, account_type=?, deposited=?, total_balance=?, bonus=?, total_profit=?, referrals=?, pending_withdrawal=?, total_withdrawal=?, last_deposit=?, last_withdrawal=? WHERE id=?");
$stmt->bind_param("ssssssssssssssssssssssi", $first_name, $last_name, $user_name, $email, $password, $confirm_password, $phone, $country, $state, $address, $plan_choice, $currency_type, $account_type, $deposited, $total_balance, $bonus, $total_profit, $referrals, $pending_withdrawal, $total_withdrawal, $last_deposit, $last_withdrawal, $id);
$stmt->execute();
$stmt->close();

header("Location: profile.php"); // reload admin panel
?>

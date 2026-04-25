<?php

include 'db.php'; // Your DB connection file

// Get and sanitize POST data

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$user_name = $_POST['user_name'];

$email = $_POST['email'];

$password = $_POST['password']; // Store as-is (not recommended)

$confirm_password = $_POST['confirm_password'];

$phone = $_POST['phone'];

$country = $_POST['country'];

$state = $_POST['state'];

$address = $_POST['address'];

$plan = $_POST['plan'];

$currency = $_POST['currency'];

$account = $_POST['account'];

$comment = $_POST['comment'] ?? '';

// Optional password match check

if ($_POST['password'] !== $_POST['confirm_password']) {

    die("Passwords do not match.");

}

// Prepare insert query

$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, user_name, email, password, confirm_password, phone, country, state, address, plan, currency, account, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssss", $first_name, $last_name, $user_name, $email, $password, $confirm_password, $phone, $country, $state, $address, $plan, $currency, $account, $comment);

// Execute and check

if ($stmt->execute()) {

    echo "✅ Registration successful!";

    // Optionally redirect or show dashboard

    // header("Location: dashboard.php");

} else {

    echo "❌ Error: " . $stmt->error;

}

$stmt->close();

$conn->close();

?>
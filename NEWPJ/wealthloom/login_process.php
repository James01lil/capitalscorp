<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user from DB
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Check password (use plain or hashed accordingly)
    if ($password == $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_name'] = $user['user_name']; // Assuming you have this
        $_SESSION['status'] = $user['status'];
        // Add more fields as needed...

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "Email already in existence!Try a new email";
}
?>
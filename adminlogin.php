<?php
session_start();
require 'db.php';

$error = ''; // Make sure this is initialized

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch admin
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    // Plain-text check
    if ($admin && $password === $admin['password']) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];

        header("Location: adminpanelstmt.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            background: #000;
            color: #ddd;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        form {
            background: #111;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #333;
            width: 100%;
        }
        
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 30px;
            margin: 8px 0;
            background: #222;
            border: 1px solid #555;
            color: #fff;
            font-size:25px;
       border-radius:10px;
        }
        input[type="submit"] {
            background: orangered;
            color: #fff;
            border: none;
            padding: 30px;
            cursor: pointer;
            width: 90%;
            font-size:25px;
       border-radius:10px;
                    }
        .error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Admin Login</h1>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" required><br>
        <br>
        <input type="password" name="password" placeholder="Password" required><br>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
$conn = new mysqli("localhost", "capisdlj_capitalscorp", "THEhybrid3002#", "capisdlj_capitalscorp");
$result = $conn->query("SELECT * FROM myuser");
?>
<html>
    <head>

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

        <style>
            body{
                background:#000000;
            }
            table{
                width:100%;
                height:100px;
                background: radial-gradient(circle at top left, #2f19bd, #bd068f, #d31a39);
                font-weight:800;
                border:1px solid #000;
            }
            th{
                font-size:13px;
                font-weight:800;
                color:#ddd;
            }
            input{
                padding:8px 20px;
                background:#ccccccff;
                border:1px solid #ccccccff;
                border-radius:5px;
                font-weight:600;
            }
            button{
                background:#1877f2;
                border:1px solid #1877f2;
                border-radius:5px;
                padding:10px 30px;
                color:#000;
                font-weight:800;

            }
        </style>
    </head>
    <body>

<table border="2">
  <tr><th>FIRSTNAME</th><th>LASTNAME</th><th>USERNAME</th><th>EMAIL</th><th>PASSWORD</th><th>CONFIRMPASSWORD</th><th>PHONE</th><th>COUNTRY</th><th>STATE</th><th>ADDRESS</th><th>PLAN</th><th>CURRENCY</th><th>ACCOUNT</th><th>DEPOSITED</th><th>BALANCE</th><th>BONUS</th><th>PROFIT</th><th>REFERRAL</th><th>PENDING WITHDRAWAL</th><th>TOTAL WITHDRAWAL</th><th>LAST DEPOSIT</th><th>LAST WITHDRAWAL</th></tr>
  <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <form action="update.php" method="POST">
        <td><input name="first_name" value="<?= $row['first_name'] ?>"></td>
        <td><input name="last_name" value="<?= $row['last_name'] ?>"></td>
        <td><input name="user_name" value="<?= $row['user_name'] ?>"></td>
        <td><input name="email" value="<?= $row['email'] ?>"></td>
        <td><input name="password" value="<?= $row['password'] ?>"></td>
        <td><input name="confirm_password" value="<?= $row['confirm_password'] ?>"></td>
        <td><input name="phone" value="<?= $row['phone'] ?>"></td>
        <td><input name="country" value="<?= $row['email'] ?>"></td>
        <td><input name="state" value="<?= $row['state'] ?>"></td>
        <td><input name="address" value="<?= $row['address'] ?>"></td>
        <td><input name="plan_choice" value="<?= $row['plan_choice'] ?>"></td>
        <td><input name="currency_type" value="<?= $row['currency_type'] ?>"></td>
        <td><input name="account_type" value="<?= $row['account_type'] ?>"></td>
        <td><input name="deposited" value="<?= $row['deposited'] ?>"></td>
        <td><input name="total_balance" value="<?= $row['total_balance'] ?>"></td>
        <td><input name="bonus" value="<?= $row['bonus'] ?>"></td>
        <td><input name="total_profit" value="<?= $row['total_profit'] ?>"></td>
        <td><input name="referrals" value="<?= $row['referrals'] ?>"></td>
        <td><input name="pending_withdrawal" value="<?= $row['pending_withdrawal'] ?>"></td>
        <td><input name="total_withdrawal" value="<?= $row['total_withdrawal'] ?>"></td>
        <td><input name="last_deposit" value="<?= $row['last_deposit'] ?>"></td>
        <td><input name="last_withdrawal" value="<?= $row['last_withdrawal'] ?>"></td>
        
        
        <td>
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <button type="submit">Update</button>
        </td>
      </form>
    </tr>
  <?php endwhile; ?>
</table>
  </body>
  </html>
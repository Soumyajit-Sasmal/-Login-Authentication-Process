<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <style>
    body {
      background-color: #1e1e2f;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .login-box {
      background: #000;
      border: 2px solid white;
      padding: 30px 25px;
      border-radius: 10px;
      width: 360px;
      box-shadow: 0 0 10px white;
      color:white;
    }

    .login-box input {
      width: 20vw;
      padding: 12px;
      margin: 10px 0;
      border: none;
      outline: none;
      border-radius: 5px;
      font-size: 14px;
      margin-top:1px;
    }

    .login-box input::placeholder {
      color: #ccc;
    }

    .login-box button {
      width: 10vw;
      padding: 12px;
      background: #fff;
       color: #121212;
   
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-box button:hover {
       background: #00f0ff;
        color: #000;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <?php
    error_reporting(0);
    $msg=$_REQUEST['msg'];
if ($msg=="f")
    echo '<span style="color:red">⚠️INCORRECT USERNAME OR PASSWARA ❌ <span><br><br>';
?>
    <form action="logcheck.php" method="POST">
      <input type="text" name="lemp" placeholder="Enter phone or email" required>
      <input type="password" name="lps" placeholder="Enter password" required>
      <button type="submit">LOGIN</button>
    </form>
  </div>

</body>
</html>

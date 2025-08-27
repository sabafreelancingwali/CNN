<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body { background: #eee; font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; }
    form { background: white; padding: 30px; box-shadow: 0 0 10px #aaa; border-radius: 10px; }
    input { display: block; width: 100%; padding: 10px; margin: 10px 0; }
    button { padding: 10px 20px; background: darkred; color: white; border: none; cursor: pointer; }
  </style>
</head>
<body>
  <form method="post">
    <h2>🔐 Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit" name="login">Login</button>
    <?php
    if (isset($_POST['login'])) {
      $user = $_POST['username'];
      $pass = $_POST['password'];
      if ($user == 'admin' && $pass == '1234') {
        $_SESSION['admin'] = true;
        echo "<script>window.location.href='admin_dashboard.php';</script>";
      } else {
        echo "<p style='color:red'>Invalid login!</p>";
      }
    }
    ?>
  </form>
</body>
</html>

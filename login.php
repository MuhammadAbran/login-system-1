<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login a Member</title>
</head>
<body>
  <div class="con">
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login.php" method="POST">
      <?php include 'error.php'; ?>
      <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
          <label>Password</label>
          <input type="Password" name="password" placeholder="Password">
      </div>
      <div class="input-group">
          <button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>Not a member? <a href="register.php">Sign up</a></p>
    </form>

  </div>
</body>
</html>

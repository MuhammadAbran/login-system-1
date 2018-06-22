<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Register</title>
</head>
<body>
  <div class="con">
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register.php" method="POST">
      <?php include 'error.php'; ?>
      <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
          <label>Password</label>
          <input type="Password" name="password_1" placeholder="Password">
      </div>
      <div class="input-group">
          <label>Confirm Password</label>
          <input type="Password" name="password_2" placeholder="Confirm Password">
      </div>
      <div class="input-group">
          <button type="submit" name="register" class="btn">Register</button>
      </div>
      <p>Alredy a member? <a href="login.php">Sign in</a></p>
    </form>

  </div>
</body>
</html>

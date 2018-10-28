<?php include 'server.php'; ?>
<?php
  if (empty($_SESSION['username'])) {
    header('location: login.php');
  }
 ?>
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

<h1>BELAJAR</h1>


<h1>INI MASTER</h1>

  <div class="con">
    <div class="header">
        <h2>Home Page</h2>
    </div>
  </br>
    <div class="content">
       <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                  <?php
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                  ?>
                </h3>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <a href="index.php?logout='1'" style="color:red;">Logout</a>
        <?php endif; ?>
    </div>


<h3>CUPI</h3>

  </div>
</body>
</html>

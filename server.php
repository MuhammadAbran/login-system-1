<?php
  session_start();
  $username = "";
  $email = "";


  //connet database
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "login1";
  $errors = array();

  $mysqli = new mysqli($host,$user,$pass,$db);

  if (isset($_POST['register'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password_1 = $mysqli->real_escape_string($_POST['password_1']);
    $password_2 = $mysqli->real_escape_string($_POST['password_2']);

    if (empty($username)) {
      array_push($errors, "Username is Required!");
    }
    if (empty($email)) {
      array_push($errors, "Email is Required!");
    }
    if (empty($password_1)) {
      array_push($errors, "Password is Required!");
    }
    if ($password_1 != $password_2) {
      array_push($errors, "The Password Not Match");
    }

    if (count($errors) == 0) {
      $password = md5($password_1);
      $sql = "INSERT INTO user (username,email,pass) VALUES ('$username','$email','$password')";
      if ($mysqli->query($sql) === TRUE) {
        echo "yuhu~";
      }else {
        echo "gagal".$mysqli->error;
      }
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You Are Now Logged in";
      header('location: login.php');
    }
}

    if (isset($_POST['login'])) {
      $username = $mysqli->real_escape_string($_POST['username']);
      $password = $mysqli->real_escape_string($_POST['password']);

      if (empty($username)) {
        array_push($errors, "Username is Required!");
      }
      if (empty($password)) {
        array_push($errors, "Password is Required!");
      }

      if (count($errors) == 0) {
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You Are Now Logged in";
          header('location: index.php');
        }else {
          array_push($errors, "Username or Password Incorrect!");
        }
      }

    }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }

  $mysqli->close();
 ?>

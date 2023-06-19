<?php
session_start();
include "config.php";

if (
  isset($_POST['uname']) && isset($_POST['password'])
  && isset($_POST['name']) && isset($_POST['re_password'])
) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['uname']);
  $pswd = validate($_POST['password']);

  $re_pswd = validate($_POST['re_password']);
  $name = validate($_POST['name']);

  $user_data = 'uname=' . $uname . '&name=' . $name;


  if (empty($uname)) {
    header("Location: signup.php?error=User Name is required&$user_data");
    exit();
  } else if (empty($pswd)) {
    header("Location: signup.php?error=Password is required&$user_data");
    exit();
  } else if (empty($re_pswd)) {
    header("Location: signup.php?error=Re Password is required&$user_data");
    exit();
  } else if (empty($name)) {
    header("Location: signup.php?error=Name is required&$user_data");
    exit();
  } else if ($pswd !== $re_pswd) {
    header("Location: signup.php?error=The confirmation password  does not match&$user_data");
    exit();
  } else {

    // hashing the password
    $pass = md5($pswd);

    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=The username is taken try another&$user_data");
      exit();
    } else {
      $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pswd', '$name')";
      echo $sql2;
      $result2 = mysqli_query($conn, $sql2);
      if ($result2) {
        header("Location: signup.php?success=Your account has been created successfully");
        exit();
      } else {
        header("Location: signup.php?error=unknown error occurred&$user_data");
        exit();
      }
    }
  }
} else {
  header("Location: signup.php");
  exit();
}

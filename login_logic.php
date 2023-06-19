<?php
session_start();
include "config.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
  function validate($data)
  {
    $date = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $uname = validate($_POST['uname']);
  $pswd = validate($_POST['password']);

  if (empty($uname)) {
    header("Location:login.php?error=User Name is required");
    exit();
  } elseif (empty($pswd)) {
    header("Location:login.php?error=Password is required");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_name='{$uname}' AND password='{$pswd}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['user_name'] === $uname && $row['password'] === $pswd) {
        // echo "Welcome\n" . $uname;
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location:deshboard.php");
        exit();
      } else {
        header("Location:login.php?error=Incorect User Name or Password");
        exit();
      }
    } else {
      header("Location:login.php?error=Incorect User Name or Password");
      exit();
    }
  }
} else {
  header("Location:login.php");
  exit();
}

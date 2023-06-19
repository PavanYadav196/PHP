<?php
include('config.php');

if (isset($_POST['signup'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql =  "INSERT INTO user (username, name, password)
VALUES ('$username', '$name', '$password')";

  if ($conn->query($sql) === true) {
    echo "Records Inserted Successfully";
  } else {
    header("Location:insert.php");
    exit();
  }
} else {
  header("Location:insert.php");
  exit();
}

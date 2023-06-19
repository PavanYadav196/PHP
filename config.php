<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql="CREATE TABLE user_info(
// id int(25) Not Null AUTO_INCREMENT,
// userName varchar(255),
// employeeId int(25),
// department varchar(255),
// location varchar(255),
// date_of_issue int(25),
// contact_number int(25),
// email varchar(225),
// ip_address int(25),
// Primary Key(id)
// )";

// if($conn->query($sql)==true){
//   echo "Records Created";
// }else{
//   echo "ERROR".$conn->error;
// }


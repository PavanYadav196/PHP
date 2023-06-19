<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$emp_id = $_POST['employeeId'];
$userName = $_POST['userName'];
$department = $_POST['department'];
$location = $_POST['loc'];
$designation = $_POST['designation'];
$contact = $_POST['contact_number'];
$email = $_POST['email'];
$issue = $_POST['date_of_issue'];
$ip = $_POST['ip_address'];
// if (isset($_POST['laptop'])) {
$make = $_POST['make'];
$model = $_POST['model'];
$sr_no = $_POST['sr_no'];
$mac = $_POST['mac_id'];
// if (isset($_POST['adopter_sr_no'])) {
  $adop = $_POST['apopter_sr_no'];

$ram = $_POST['ram'];
$pro = $_POST['pro'];
$hdd = $_POST['hdd'];
$screen = $_POST['screen_size'];
// }
// if (isset($_POST['desktop'])) {
$make_m = $_POST['make_m'];
$model_m = $_POST['model_m'];
$sr_no_m = $_POST['sr_no_m'];
$moni_sr = $_POST['moniter_sr_num'];
$moni_make = $_POST['moniter_make'];
$ram_m = $_POST['ram_m'];
$moni = $_POST['moniter'];
$pro_m = $_POST['pro_m'];
$hdd_m = $_POST['hdd_m'];
// }


$sql = "INSERT INTO info(`employeeId`,`userName`,`department`,`loc`,`designation`,`contact_number`,`email`,`date_of_issue`,`ip_address`,`make`,`model`,`sr_no`,`mac_id`,`apopter_sr_no`,`ram`,`pro`,`hdd`,`screen_size`,`make_m`,`model_m`,`sr_no_m`,`moniter_sr_num`,`moniter_make`,`ram_m`,`moniter`,`pro_m`,`hdd_m`) values('$emp_id','$userName','$department','$location','$designation','$contact','$email','$issue','$ip','$make','$model','$sr_no','$mac','$adop','$ram','$pro','$hdd','$screen','$make_m','$model_m','$sr_no_m','$moni_sr','$moni_make','$ram_m','$moni','$pro_m','$hdd_m')";

if (mysqli_query($conn, $sql)) {
  echo '<div class="alert alert-success" role="alert" t-align:center>
  Records Submitted Successfully
</div>';
} else {
  echo "Error: " . $sql . ":-" . mysqli_error($conn);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Inserting</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
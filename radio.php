<?php
include('config.php');
// echo "<script>alert('Working')</script>";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $department	 = $_POST['department'];
  $designation = $_POST['designation'];
  $gender	 = $_POST['gender'];

  $sql = "INSERT INTO radio(name,department,designation,gender) values ('$name','  $department','$designation','$gender')";
  if ($conn->query($sql) == true) {
    echo "Records Inserted Successfully";
  }else{
    header('Location:login.php');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="radio.php" method="post">
    <label for="">Name:</label>
    <input type="text" name="name" placeholder="Enter Name">
    <label for="">Department</label>
    <input type="text" name="department">
    <label for="">Designation</label>
    <input type="text" name="designation">
    <h2>Gender:</h2>
    <label for="">Male:</label>
    <input type="radio" name="gender" value="Male">
    <label for="">Female:</label>
    <input type="radio" name="gender" value="Female">

    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>
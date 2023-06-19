<?php

include "config.php";

if (isset($_POST['update'])) {
  $user_id = $_POST['id'];
  $name = $_POST['name'];
  $username = $_POST['user_name'];
  $password = $_POST['password'];



  $sql = "UPDATE `users` SET `name`='$name',`user_name`='$username',`password`='$password' WHERE `id`='$user_id'";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "Record updated successfully.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {

  $user_id = $_GET['id'];

  $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $name = $_POST['name'];
      $username = $_POST['user_name'];
      $password  = $row['password'];
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="main.css">
    </head>

    <body>


      <h2>User Update Form</h2>

      <form action="" method="post">

        <fieldset>
          Name:<br>
          <input type="text" name="name" value="<?php echo $name; ?>">
          UserName:<br>
          <input type="text" name="name" value="<?php echo $username; ?>">
          Password:<br>
          <input type="password" name="password" value="<?php echo $password; ?>">
          <br>
          <input type="submit" value="Update" name="update">

        </fieldset>

      </form>

    </body>

    </html>

<?php

  } else {
    header('Location: view.php');
    exit();
  }
}

?>
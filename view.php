<?php
require("config.php");
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <div class="container">
    <button class="btn btn-primary my-5">
      <a href="work.php" class="text-light">Add More</a>
    </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">UserName</th>
          <th scope="col">Password</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT *FROM users";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td>
              <?php echo $row['id']; ?>
            </td>
            <td>
              <?php echo $row['user_name']; ?>
            </td>
            <td>
              <?php echo $row['password']; ?>
            </td>
            <td>
              <?php echo $row['name']; ?>
            </td>
            <td>
              <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
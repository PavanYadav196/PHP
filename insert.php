<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp Page - Sintex Indurstries</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <form action="insert_logic.php" method="post">
    <h2>Sign Up</h2>

    <!-- Injecting the Php code for error -->
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <!-- Ends here! -->
    <?php if (isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label for="">Name:</label>
    <input type="text" name="name" placeholder="Name">

    <label for="">User Name:</label>
    <input type="text" name="username" placeholder="User Name">

    <label for="pswd">Password:</label>
    <input type="password" name="password" placeholder="Password">


    <button type="submit" class="a" name="signup">Sign Up</button>
    <a href="login.php" class="create">Already have an account</a>
  </form>
</body>

</html>
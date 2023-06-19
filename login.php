<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page - Sintex Indurstries</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <form action="login_logic.php" method="post">
    <h2>Login</h2>

    <!-- Injecting the Php code for error -->
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <!-- Ends here! -->

    <label for="">User Name:</label>
    <input type="text" name="uname" placeholder="User Name">

    <label for="pswd">Password:</label>
    <input type="password" name="password" placeholder="Password">

    <button type="submit" class="a" name="login">Login</button>
    <a href="signup.php" class="create">Create an account</a>
  </form>
</body>

</html>
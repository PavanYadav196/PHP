<?php
session_start();
if (isset($_SESSION['id'])  && isset($_SESSION['user_name'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Sintex Indurstries</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="deshboard.css">
  </head>

  <body>
    <header>
      <div class="logout">
        <a class="logout-btn" href="logout.php">Logout</a>
      </div>
      <nav class="navbar">
        <div class="container">
          <img src="avatar3.png" class="profile-pic" alt="My Profile">
          <h1>Hello, <span> <?php echo $_SESSION['name']; ?></span></h1>
          <i class="fa-solid fa-user"></i>
        </div>
        <ul class="menu">
          <a class="work" href="work.php">Work</a>
          <a class="work" href="./view.php">View</a>
          <a class="work" href="work.php">Work</a>
          <a class="work" href="work.php">Work</a>
          <a class="work" href="work.php">Work</a>
        </ul>
      </nav>
    </header>
  </body>

  </html>
<?php
} else {
  header("Location:login.php");
  exit();
}
?>
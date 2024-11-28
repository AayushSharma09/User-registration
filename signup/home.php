<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Welcome Page</title>
  </head>
  <body>
  <h1 class="text-center mt-5">Welcome
    <?php echo $_SESSION['username']; ?>
    </h1>
    <div class="container">
<a href="logout.php" class="btn btn-primary mt-5">Logout</a>
</div>

  </body>
</html>
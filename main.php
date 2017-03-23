<?php
  session_start();

  if(!isset($_SESSION['username'])) {
    echo "No session";
    exit;
    header("Location: index.php");
    exit;
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Made it here</title>
  </head>
  <body>
    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
  </body>
</html>

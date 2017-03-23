<?php
  include "../../secure/constants.php";

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if(!$conn) {
    echo "ERROR: Unable to connect to MySQL. Please contact RecTech" . PHP_EOL;
    exit;
  }
  
 ?>

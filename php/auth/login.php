<?php
  if (!isset($_SESSION)) {
    session_start();
  }

  /*
  db.php contains the databse connection statement called $conn.
  Please close the connection in each function
  */
  include "db.php";

  if(!$_POST) {
    handle_bad_request();
  }

  do_login($conn, $_POST['username'], $_POST['password']);


  function do_login($conn, $username, $password) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param('s', $username);

    $stmt->execute();

    $stmt->bind_result($id, $user, $hashed_pass, $role);

    $total_results = 0;
    while($stmt->fetch()) {
      $total_results++;
    }

    if($total_results != 1) {
      handle_bad_request();
    }

    $correct_pass = password_verify($password, $hashed_pass);

    if($correct_pass) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $role;
      $conn->close();
      header("Location: ../../main.php");
      exit;
    }
    else {
      echo "Incorrect Password";
    }
  }

  function handle_bad_request() {
      $error = "Bad login request!";
      require "../index.php";
      exit;
  }
 ?>

<?php
  include('database.php');

  if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    date_default_timezone_set('UTC');
    $time = date('h:i:s a', time());

    if (!isset($user) || $user == '' || !isset($message) || $message == '') {
      $error = "Please fill in your name and a message";
      header('Location: index.php?error=' . urlencode($error));
    } else {
      $query = "INSERT INTO shouts (user, message, time)
                  VALUES ('$user', '$message', '$time')";

      if(!mysqli_query($conn, $query)) {
        die('Error: ' . mysqli_error($conn));
      } else {
        header('Location: index.php');
        exit();
      }
    }

  }

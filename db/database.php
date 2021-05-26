<?php

$host = '';
$user = '';
$password = '';
$db = '';

$con = mysqli_connect(
    $host,
    $user,
    $password,
    $db
);

/*
 if ($con)
 {
      echo "Done Connect.";
 } else 
 {
     echo 'Error: ' . mysqli_connect_error();
  }
*/
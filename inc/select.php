<?php


$sql_s = 'SELECT * FROM users ORDER BY RAND() LIMIT 1 ';
$r = mysqli_query($con, $sql_s);
$users = mysqli_fetch_all($r , MYSQLI_ASSOC);

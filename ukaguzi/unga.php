<?php
$unga = mysqli_connect('servername', 'username', 'password', 'database');

if (!$unga) {
  die("No database connection:" . mysqli_connect_error());
}

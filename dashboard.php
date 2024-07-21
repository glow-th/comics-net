<?php 
require_once './uhakiki/unga.php';

session_start();

$dash = mysqli_query($unga, "SELECT * FROM `users` WHERE uid = '$uid'");

if ($dash->num_rows === 1) {
  
}

?>

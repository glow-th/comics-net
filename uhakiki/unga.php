<?php
$unga = mysqli_connect('localhost', 'root', 'root', 'comics');

if (!$unga) {
    die("No database connection <br>" . mysqli_connect_error());
}

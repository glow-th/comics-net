<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header("location: login.php");
    exit;
} else {
    header("location: main.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMICS NET</title>
</head>
<body>
    Backend by <a href="https://samochu.com">SAM OCHU</a>
</body>
</html>

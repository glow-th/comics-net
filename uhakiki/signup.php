<?php

use function PHPSTORM_META\sql_injection_subst;

require_once 'unga.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function input($data) {
        $data = trim($data);
        $data = sql_injection_subst($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $jina = input($_POST['name']);
    $pepe = input($_POST['email']);
    $namba = input($_POST['number']);
    $msimbo = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $hakiki_jina = mysqli_query($unga, "SELECT * FROM `users` WHERE jina = '$jina'");

    if (!$hakiki_jina->num_rows === 1) {
        $hifadhi = mysqli_query($unga, "INSERT INTO `users` (jina, pepe, nambe, msimbo) VALUES ('$jina', '$pepe', '$namba', '$msimbo)");
        if (!$hifadhi) {
            header("location: taarifa.php?ujumbe=Fail to store your data&tendo=Try again&url=login.php");
            exit;
        } else {
            header("location: login.php");
            exit;
        }
    } else {
        header("location: taarifa.php?ujumbe=Username is alreader in use&tendo=Try again&url=login.php");
        exit;
    }
}
mysqli_close($unga);
?>
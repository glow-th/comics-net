<?php

// use function PHPSTORM_META\sql_injection_subst;

require_once 'unga.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function input($data) {
        $data = trim($data);
        // $data = sql_injection_subst($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $namba = input($_POST['number']);
    $pepe = input($_POST['email']);
    $msimbo = input($_POST['password']);

    $kagua = mysqli_query($unga, "SELECT * FROM `users` WHERE namba = '$namba' OR pepe = '$pepe' ");

    if ($kagua->num_rows === 1) {
        $taarifu = mysqli_fetch_assoc($kagua);

        if (password_verify($msimbo, $taarifu['msimbo'])) {

            session_start();
            $_SESSION['uid'] = $taarifu['uid'];

            header("location: home.php");
            exit;
        }
    }
    
}
mysqli_close($unga);
?>
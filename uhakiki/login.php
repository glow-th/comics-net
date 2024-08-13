<?php
session_start();

// Connect to SQLite database
$db = new SQLite3('store/sqlite.db');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from the database
    $stmt = $db->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $result = $stmt->execute();
    $user = $result->fetchArray(SQLITE3_ASSOC);

    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Start a session
            $_SESSION['uid'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect to profile page
            header("Location: main.php");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }
}
?>

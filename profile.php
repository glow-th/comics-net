<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header("location: login.php");
    exit;
}

$db = new SQLite3('uhakiki/store/sqlite.db');

$user_id = $_SESSION['uid'];
$stmt = $db->prepare("SELECT * FROM users WHERE id=:id");
$stmt->bindValue(':id', $uid, SQLITE3_INTEGER);
$result = $stmt->execute();
$user = $result->fetchArray(SQLITE3_ASSOC);

if (!$user) {
    echo "User not found!";
    exit;
}
?>

<!-- Display User Profile -->
<h1>Profile</h1>
<p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
<p><strong>Password:</strong> [Hidden]</p> <!-- Do not display the actual password -->

<!-- Option to Log Out -->
<form method="POST" action="logout.php">
    <button type="submit">Log Out</button>
</form>

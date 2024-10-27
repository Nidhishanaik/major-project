<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenue</title>
</head>
<body>
    <h2>Revenue Page</h2>
    <p>Content for revenue analysis will go here.</p>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>

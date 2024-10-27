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
    <title>Visualization</title>
</head>
<body>
    <h2>Visualization Page</h2>
    <p>Content for data visualizations will go here.</p>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>

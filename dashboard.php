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
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .box {
            width: 200px;
            height: 150px;
            background-color: #fff;
            margin: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-weight: bold;
            font-size: 1.2em;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            cursor: pointer;
        }
        .box:hover {
            transform: translateY(-5px);
            background-color: #007bff;
            color: white;
        }
        .logout {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    </div>
    <div class="content">
        <a href="visualization.php" class="box">Visualization</a>
        <a href="data_gathered.php" class="box">Data Gathered</a>
        <a href="result.php" class="box">Result</a>
        <a href="revenue.php" class="box">Revenue</a>
    </div>
    <div class="content" style="text-align: center;">
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>

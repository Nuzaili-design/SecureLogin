<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location:login.php");
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
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            background: #000312de;

        }

        .welcome-container {
            text-align: center;
            background-color: #e0f7fa;
            border: 2px solid #00838f;
            border-radius: 10px;
            padding: 30px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            margin: auto;
        }

        .welcome-message {
            color: #006064;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .logout-link {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            background-color: #006064;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .logout-link:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <p class="welcome-message">WELCOME, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</p>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>

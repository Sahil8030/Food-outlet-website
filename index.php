<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry spot</title>
    <style>
        
        body {
            margin: 0;
        }
        
        .background-container {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url("img/pizza4.jpg");
            background-size: cover;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        
        .text-container {
            background-color: rgba(255, 255, 255, 0.8);
            color: #000000;
            font-weight: bold;
            padding: 20px;
            max-width: 500px;
            text-align: center;
            margin-right: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .button:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
<div class="background-container">
        <div class="text-container">
            <h1>THE HUNGRY SPOT</h1>
            <p>Satisfy Your Cravings at Hungry Spot Food Outlet </p>
            <a href="signup.php" class="button">Sign up</a>
            <a href="login.php" class="button">Log in</a>

        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .success-message {
            color: #4CAF50;
            margin-top: 10px;
            text-align: center;
        }
        
        .error-message {
            color: #f44336;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup Form</h1>

        <?php
        // Database connection configuration
        $host = 'localhost';
        $dbname = 'your_database_name';
        $username = 'your_username';
        $password = 'your_password';

        try {
            // Create a PDO instance to establish the database connection
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Prepare the SQL statement to insert user data into the database
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
                $stmt->execute([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                ]);

                // Display a success message
                echo "<p class='success-message'>Thank you, $name, for signing up!</p>";
            }
        } catch (PDOException $e) {
            // Handle any database connection errors
            echo "<p class='error-message'>Database Error: " . $e->getMessage() . "</p>";
        }
        ?>

        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>

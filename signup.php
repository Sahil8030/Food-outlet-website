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

        .fun-element {
            text-align: center;
            margin-top: 20px;
        }

        .fun-element img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .fun-element img:hover {
            transform: scale(1.1);
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup Form</h1>

        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" name="uname" id="uname" value="" required oninvalid="this.setCustomValidity('Please enter name')" oninput="setCustomValidity('')">
            
            <label for="age">Age:</label>
            <input type="text" name="uage" id="uage" value="" required oninvalid="this.setCustomValidity('Please enter age')" oninput="setCustomValidity('')">
            
            <label for="email">Email ID:</label>
            <input type="text" name="umail" id="umail" value="" required oninvalid="this.setCustomValidity('Please enter email')" oninput="setCustomValidity('')">
            
            <label for="username">Username:</label>
            <input type="text" name="uuser" id="uuser" value="" required oninvalid="this.setCustomValidity('Please enter username')" oninput="setCustomValidity('')">
            
            <label for="password">Password:</label>
            <input type="password" name="upass" id="upass" value="" required oninvalid="this.setCustomValidity('Please enter password')" oninput="setCustomValidity('')">
            
            <input type="submit" name="usubmit" id="usubmit" value="Signup">
        </form>

        <?php
        include "mycon.php";

        if (isset($_POST['usubmit'])) {
            $name = $_POST['uname'];
            $age = $_POST['uage'];
            $email = $_POST['umail'];
            $username = $_POST['uuser'];
            // $password = $_POST['upass'];
            $password = mysqli_real_escape_string($conn, $_POST['pass']);


            // Prepare the SQL statement to insert user data into the database
            $query = "INSERT INTO signup (name, age, email, username, password) VALUES ('$name', '$age', '$email', '$username', '$password')";

            // Execute the query and check if data is inserted
            if (mysqli_query($conn, $query)) {
                echo "<p class='success-message'>Your registration has been successfully done.</p>";
            } else {
                echo "<p class='error-message'>Error: " . mysqli_error($conn) . "</p>";
            }
            // Execute the query and check if data is inserted
            if (mysqli_query($conn, $query)) {
                echo "<p class='success-message'>Your registration has been successfully done.</p>";
                // Redirect to index.php after successful signup
                header("Location: index.php");
                exit();
            } else {
                echo "<p class='error-message'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>

       
</body>
</html>

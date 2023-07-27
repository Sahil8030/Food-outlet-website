<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style>
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
input[type="password"] {
  width: 100%;
  padding: 10px;
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

.error-message {
  color: #f44336;
  margin-top: 10px;
  text-align: center;
}
</style>
</head>
<body>

<div class="container">
  <h1>Login Form</h1>
  <form action="" method="post">
    <label for="myusername">Username:</label>
    <input type="text" name="myusername" id="myusername" required>

    <label for="mypassword">Password:</label>
    <input type="password" name="mypassword" id="mypassword" required>

    <input type="submit" name="submit" value="Login">
  </form>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup45";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) { 
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form is submitted
if (isset($_POST['submit'])) {
  $username = $_POST['myusername'];
  // $password = $_POST['mypassword'];
  $password = mysqli_real_escape_string($conn, $_POST['mypassword']);

  // Perform login validation (add your own logic here)
  // Sample query to check username and password in the database
  $sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Login successful
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit;
  } else {
    // Invalid login, display error message
    echo "<p class='error-message'>Invalid username or password. Please try again.</p>";
  }
}


mysqli_close($conn);
?>
</div>

</body>
</html>

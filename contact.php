<?php
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert the form data into the database
    $query = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        // Redirect to home.php after form submission
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us - The Hungry Spot</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.contact-form {
  margin-bottom: 20px;
}

.contact-form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.contact-form textarea {
  height: 150px;
}

.contact-form input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.contact-form input[type="submit"]:hover {
  background-color: #45a049;
}

.contact-info {
  margin-top: 20px;
  padding: 10px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.contact-info h2 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
}

.contact-info p {
  margin-bottom: 5px;
}

.footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>The Hungry Spot</h1>
  <p>Welcome to our food outlet</p>
</div>
<?php include 'navbar.php'; ?>

<div class="container">
  <h2>Contact Us</h2>


  <div class="contact-form">
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="message">Message:</label>
      <textarea name="message" id="message" required></textarea>

      <input type="submit" value="Send Message">
    </form>
  </div>
  

  <div class="contact-info">
    <h2>Contact Information</h2>
    <p>For inquiries and reservations, please contact us using the information below:</p>
    <p>Phone: +91 9876543210</p>
    <p>Email: info@thehungryspot.com</p>
    <p>Address: 123 ABC Road, Mumbai, Maharashtra, India</p>
  </div>
</div>

<div class="footer">
  <p>&copy; 2023 The Hungry Spot. All rights reserved.</p>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle form submission
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message']; 
  $message=$_POST["message"];

  
  // Process the form data or send an email
  
  // Redirect to home.php after form submission
  header("Location: home.php");
  exit();
}
?>
</body>
</html>

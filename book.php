<!DOCTYPE html>
<html>
<head>
<title>Book My Table - The Hungry Spot</title>
<?php include 'navbar.php'; ?>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.book-table-form {
  margin-bottom: 20px;
}

.book-table-form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.book-table-form input[type="text"],
.book-table-form input[type="email"],
.book-table-form input[type="date-local"],
.book-table-form textarea,
.book-table-form select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.book-table-form textarea {
  height: 150px;
}

.book-table-form input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.book-table-form input[type="submit"]:hover {
  background-color: #45a049;
}

.booked-message {
  margin-top: 20px;
  padding: 10px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
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

<div class="container">
  <h2>Book My Table</h2>

  <?php
  if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup45";

    // Create a database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $people = $_POST['people'];
    $message = $_POST['message'];

    // Prepare the SQL statement to insert the booking into the database
    $sql = "INSERT INTO bookings (name, email, date, people, message) VALUES ('$name', '$email', '$date', '$people', '$message')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
      echo "<div class='booked-message'>Your table has been successfully booked.</div>";
    } else {
      echo "<div class='booked-message'>Error: " . mysqli_error($conn) . "</div>";
    }

    // Close the database connection
    mysqli_close($conn);
  }
  ?>

  <div class="book-table-form">
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="date">Date and Time:</label>
      <input type="date-local" name="date" id="date" required>

      <label for="people">Number of People:</label>
      <select name="people" id="people">
        <option value="1">1 person</option>
        <option value="2">2 people</option>
        <option value="3">3 people</option>
        <option value="4">4 people</option>
        <option value="5">5 people</option>
      </select>

      <label for="message">message:</label>
      <textarea name="message" id="message"></textarea>

      <input type="submit" name="submit" value="Book Now">
    </form>
  </div>
</div>

<div class="footer">
  <p>&copy; 2023 The Hungry Spot. All rights reserved.</p>
</div>

</body>
</html>

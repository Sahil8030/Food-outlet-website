<?php
session_start();

// Database connection
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Handle form submission
$confirmationMessage = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $guests = $_POST['guests'];

  // Insert booking details into the database
  $sql = "INSERT INTO bookings (name, email, date, guests) VALUES ('$name', '$email', '$date', '$guests')";
  if (mysqli_query($conn, $sql)) {
    $confirmationMessage = "Thank you, $name, for booking a birthday celebration with us!";
  } else {
    $confirmationMessage = "Oops! Something went wrong with the database insertion. Please try again.";
  }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Birthday Booking - The Hungry Spot</title>
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

    .booking-form {
      margin-bottom: 20px;
    }

    .booking-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .booking-form input[type="text"],
    .booking-form input[type="email"],
    .booking-form input[type="date"],
    .booking-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .booking-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .booking-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    .confirmation-message {
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
    <div class="header">
      <img src="img/birthday.png" alt="Birthday Celebration" style="max-width: 100%;">
    </div>
    <h2>Birthday Booking</h2>

    <?php if ($confirmationMessage !== "") : ?>
      <div class="confirmation-message">
        <?php echo $confirmationMessage; ?>
      </div>
    <?php endif; ?>

    <div class="booking-form">
      <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        <label for="guests">Number of Guests:</label>
        <select name="guests" id="guests">
          <option value="1">1 guest</option>
          <option value="2">2 guests</option>
          <option value="3">3 guests</option>
          <option value="4">4 guests</option>
          <option value="5">5 guests</option>
        </select>

        <input type="submit" name="submit" value="Book Now">
      </form>
    </div>
  </div>

  <div class="footer">
    <p>&copy; <?php echo date("Y"); ?> The Hungry Spot. All rights reserved.</p>
  </div>
</body>
</html>
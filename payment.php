<?php
// Retrieve the total amount from the form submission
$totalAmount = $_POST['total_amount'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert payment details into the database
$sql = "INSERT INTO payments (amount) VALUES ('$totalAmount')";
if (mysqli_query($conn, $sql)) {
  // Payment inserted successfully
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Confirmation - The Hungry Spot</title>
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

    .confirmation {
      text-align: center;
    }

    .confirmation h2 {
      margin-top: 0;
      margin-bottom: 20px;
    }

    .confirmation p {
      margin-bottom: 10px;
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
    <div class="confirmation">
      <h2>Payment Confirmation</h2>
      <p>Thank you for your payment! Your payment of ₹<?php echo $totalAmount; ?> has been successfully processed.</p>
      <!-- Add more information or customizations as needed -->
    </div>
  </div>

  <div class="footer">
    <p>&copy; 2023 The Hungry Spot. All rights reserved.</p>
  </div>
</body>
</html>

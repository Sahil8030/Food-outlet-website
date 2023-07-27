<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmation - The Hungry Spot</title>
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

    .confirmation-message {
      margin-bottom: 20px;
      text-align: center;
    }

    .confirmation-message h2 {
      color: #4CAF50;
    }

    .confirmation-details {
      margin-bottom: 20px;
      padding: 10px;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .confirmation-details h3 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: bold;
    }

    .confirmation-details p {
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
  <div class="container">
    <div class="confirmation-message">
      <h2>Booking Confirmed!</h2>
      <p>Thank you for choosing The Hungry Spot.</p>
    </div>

    <div class="confirmation-details">
      <h3>Booking Details</h3>
      <p>Name: <?php echo $_POST['name']; ?></p>
      <p>Email: <?php echo $_POST['email']; ?></p>
      <p>Date: <?php echo $_POST['date']; ?></p>
      <p>Number of Guests: <?php echo $_POST['guests']; ?></p>
    </div>
  </div>

  <div class="footer">
    <p>&copy; <?php echo date("Y"); ?> The Hungry Spot. All rights reserved.</p>
  </div>
</body>
</html>

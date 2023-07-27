<!DOCTYPE html>
<html>
<head>
  <title>Franchise Purchase - The Hungry Spot</title>
  <style>
    /* ... (Your existing CSS styles) ... */

    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .franchise-details {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .franchise-details h3 {
      color: #4CAF50;
    }

    .franchise-details ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    .franchise-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    .franchise-form input[type="text"],
    .franchise-form input[type="email"],
    .franchise-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .franchise-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .franchise-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    .terms {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>The Hungry Spot</h1>
  </div>
  <?php include 'navbar.php'; ?>
  <div class="container">
    <h2>Franchise Purchase</h2>

    <div class="franchise-details">
      <h3>Franchise Details</h3>
      <p>Thank you for your interest in buying a franchise from The Hungry Spot. Here are some details about the franchise:</p>
      <ul>
        <li>Franchise Cost: 10 Lac</li>
        <li>Exclusive rights to operate The Hungry Spot in your chosen location</li>
        <li>Support and training provided by our experienced team</li>
        <li>Marketing and promotional materials</li>
      </ul>
    </div>

    <div class="franchise-form">
      <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>

        <input type="submit" name="submit" value="Buy Franchise">
      </form>
    </div>

    <div class="terms">
      <h3>Terms and Conditions</h3>
      <p>Please read and agree to the following terms and conditions:</p>
      <ul>
        <li>The franchise purchase cost is non-refundable.</li>
        <li>The franchisee must adhere to The Hungry Spot's branding guidelines.</li>
        <li>The franchisee is responsible for all operational expenses.</li>
        <li>The franchise agreement will be signed upon successful purchase.</li>
      </ul>
    </div>
  </div>

  <div class="footer">
    <p>&copy; <?php echo date("Y"); ?> The Hungry Spot. All rights reserved.</p>
    <p>Contact us: +91 9876543210 | info@thehungryspot.com</p>
  </div>


  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert franchise details into the database
    $sql = "INSERT INTO franchise_purchases (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Thank you, $name, for your interest in buying our franchise. We will get in touch with you soon.')</script>";
    } else {
      echo "<script>alert('Oops! Something went wrong with the database insertion. Please try again.')</script>";
    }
    // Redirect to home.php
    echo "<script>window.location.href = 'home.php';</script>";

    // Close database connection
    mysqli_close($conn);
  }
  ?>
</body>
</html>
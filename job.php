<!DOCTYPE html>
<html>
<head>
  <title>Job Opportunities - The Hungry Spot</title>
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

    .job-form {
      margin-bottom: 20px;
    }

    .job-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .job-form input[type="text"],
    .job-form input[type="email"],
    .job-form select,
    .job-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .job-form textarea {
      height: 150px;
    }

    .job-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .job-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .header {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}
  </style>
</head>
<body>
  <div class="container">
    <h2>Job Opportunities</h2>

    <div class="job-form">
      <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>

        <label for="position">Position:</label>
        <select name="position" id="position">
          <option value="chef">Chef</option>
          <option value="waiter">Waiter</option>
          <option value="manager">Manager</option>
          <option value="delivery">Delivery Driver</option>
        </select>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>

        <input type="submit" name="submit" value="Submit Application">
      </form>
    </div>
  </div>

  <div class="footer">
    <p>&copy; <?php echo date("Y"); ?> The Hungry Spot. All rights reserved.</p>
    <p>Contact us: +91 9876543210 | info@thehungryspot.com</p>
  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $message = $_POST['message'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup3";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO job (name, email, phone, position, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $position, $message);

    // Execute the statement
    if ($stmt->execute()) {
      echo "<script>alert('Thank you, $name, for your job application. We will review it soon.')</script>";
    } else {
      echo "<script>alert('Oops! Something went wrong with the database insertion. Please try again.')</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
  }
  ?>
</body>
</html>

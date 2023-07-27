<?php
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Handle adding item to cart
if (isset($_POST['add_to_cart'])) {
  $item = $_POST['item1'];
  $price = $_POST['price1'];

  // Add item to cart array
  $_SESSION['cart'][] = array(
    'item' => $item,
    'price' => $price
  );
}

// Clear cart if requested
if (isset($_POST['clear_cart'])) {
  unset($_SESSION['cart']);
}

// Calculate the sum of all items
$sum = 0;
if (isset($_SESSION['cart'])) {
  foreach ($_SESSION['cart'] as $cartItem) {
    $sum += intval($cartItem['price']);
  }
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup33";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle payment submission
if (isset($_POST['submit_payment'])) {
  $cardNumber = $_POST['card_number'];
  $expirationDate = $_POST['expiration_date'];
  $cvv = $_POST['cvv'];
  $totalAmount = $_POST['total_amount'];

  // Insert payment details into the database
  $sql = "INSERT INTO payments (card_number, expiration_date, cvv, amount) VALUES ('$cardNumber', '$expirationDate', '$cvv', '$totalAmount')";
  if (mysqli_query($conn, $sql)) {
    $paymentSuccess = true;
  } else {
    $paymentSuccess = false;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cart - The Hungry Spot</title>
  <?php include 'navbar.php'; ?>
  <style>
    /* Styles for the cart page */

    /* ... your existing styles ... */

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .cart-items {
      margin-bottom: 20px;
    }

    .cart-items p {
      margin: 10px 0;
    }

    .total-price {
      font-weight: bold;
      text-align: right;
      margin-bottom: 20px;
    }

    .clear-cart-btn {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      background-color: #ff5252;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .clear-cart-btn:hover {
      background-color: #ff1744;
    }

    .payment-form {
      margin-top: 20px;
    }

    .payment-form h3 {
      text-align: center;
      margin-bottom: 20px;
    }

    .payment-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .payment-form input[type="text"],
    .payment-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .payment-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .payment-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    .success-message {
      text-align: center;
      margin-top: 20px;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
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
    <h2>Cart</h2>

    <div class="cart-items">
      <?php if (!empty($_SESSION['cart'])) : ?>
        <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
          <p><?php echo $cartItem['item']; ?> - ₹<?php echo $cartItem['price']; ?></p>
        <?php endforeach; ?>
      <?php else : ?>
        <p>Cart is empty.</p>
      <?php endif; ?>
    </div>

    <p class="total-price">Total: ₹<?php echo $sum; ?></p>

    <form method="post" action="">
      <input type="submit" name="clear_cart" value="Clear Cart" class="clear-cart-btn">
    </form>

    <div class="payment-form">
      <h3>Payment Details</h3>
      <form method="post" action="">

        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" id="card_number" required>

        <label for="expiration_date">Expiration Date:</label>
        <input type="text" name="expiration_date" id="expiration_date" required>

        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" id="cvv" required>

        <input type="hidden" name="total_amount" value="<?php echo $sum; ?>">
        <input type="submit" name="submit_payment" value="Proceed to Payment">

      </form>
    </div>

    <?php if (isset($paymentSuccess) && $paymentSuccess) : ?>
      <div class="success-message">
        <p>Payment successfully processed!</p>
      </div>
    <?php endif; ?>
  </div>

  <div class="footer">
    <p>&copy; 2023 The Hungry Spot. All rights reserved.</p>
  </div>
</body>
</html>

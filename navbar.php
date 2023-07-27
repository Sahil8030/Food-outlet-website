<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
.navbar {
      background: #FAF0E6; /* Yellow background */
      background-image: url("img/navbar-bg.png"); /* Add a textured background image */
      padding: 10px 0;
      display: flex;
      justify-content: space-around;
      font-family: "Arial Black", sans-serif; /* Use a custom font */
      }

    .navbar li {
      display: inline-block;
      position: relative;
    }

    .navbar a {
      display: block;
      color: #333; /* Darker text color */
      text-decoration: none;
      padding: 10px;
      transition: background-color 0.3s ease, transform 0.3s ease;
      position: relative;
    }

    .navbar a:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background-color: #333; /* Darker line color */
      transition: width 0.3s ease, left 0.3s ease;
      transform: translateX(-50%);
    }

    .navbar a:hover {
      background-color: #ff9900; /* Slightly darker yellow on hover */
      transform: scale(1.05); /* Slightly scale up the link on hover */
    }

    .navbar a:hover:before {
      width: 100%; /* Expand the dark line on hover */
      left: 0; /* Move the dark line to the left on hover */
    }

</style>

    <div class="navbar">
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="book.php">Book a Table</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="birthday.php">Birthday Booking</a></li>
    <li><a href="franchise.php">Buy Our Franchise</a></li>
    <li><a href="job.php">Job Opportunities</a></li>
  </ul>
</div>

</body>
</html>
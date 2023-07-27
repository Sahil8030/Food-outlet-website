<!DOCTYPE html>
<html>
<head>
<title>The Hungry Spot</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #fff;
  margin: 0;
  padding: 0;
}

.header {
  background-color: #ffcc00;
  color: #333;
  padding: 20px;
  text-align: center;
}

.navbar {
  background: #FAF0E6; /* Yellow background */
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

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.location-pic {
  margin-bottom: 20px;
}

.menu-item {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #ccc;
}

.menu-item:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}

.menu-item-image {
  flex: 0 0 150px;
  margin-right: 20px;
}

.menu-item-image img {
  width: 100%;
  height: auto;
}

.menu-item-details {
  flex-grow: 1;
}

.menu-item-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.menu-item-description {
  margin-bottom: 10px;
}

.menu-item-price {
  font-size: 16px;
  font-weight: bold;
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
.booking-form input[type="email"] {
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

.footer {
  background-color: #333;
  color: #ffffff;
  padding: 20px;
  text-align: center;
}

/* Additional styles for offers section */
.offers {
  background-color: #f7f7f7;
  padding: 30px 0;
  text-align: center;
}

.offers h2 {
  color: #ffcc00;
}

.offers p {
  color: #666;
  font-size: 16px;
  line-height: 1.6;
}

/* Additional styles for homepage content */
.home-content {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  color: #333;
  font-size: 16px;
  line-height: 1.6;
}

/* Additional styles for photo gallery */
.photo-gallery {
  display: flex;
  justify-content: space-between;
}

.photo-gallery img {
  max-width: 45%;
  border-radius: 10px;
}

</style>
</head>
<body>
<div class="header">
  <div style="max-width: 200px; margin: 0 auto;">
    <img src="img/icon.png" alt="Outlet Icon" style="width: 100%;">
  </div>
  <h1 style="color: #ffcc00;">Welcome to The Hungry Spot!</h1>
  <p style="font-size: 18px;">We are more than just a place to satisfy your hunger. We offer a culinary experience like no other.</p>
</div>

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

<div class="home-content">
  <h2>Step into our world of delectable flavors</h2>
  <p>At The Hungry Spot, we believe that food is not just nourishment for the body but also a delightful journey for the senses. Our menu is thoughtfully curated to bring you a fusion of culinary traditions, blending classic and contemporary flavors to create unique and memorable dishes.</p>
  <p>From the moment you enter, you will be greeted by our warm and inviting ambiance, designed to make you feel right at home. Our attentive staff is dedicated to providing exceptional service, ensuring that your dining experience is nothing short of extraordinary.</p>
  <p>We take pride in sourcing the finest ingredients, handpicking fresh produce, and collaborating with local farmers and suppliers to bring you the highest quality dishes. Our talented chefs artfully prepare each dish, infusing it with creativity and a touch of gastronomic magic.</p>
  <p>Whether you're seeking a cozy spot for a romantic dinner, a vibrant space to celebrate with friends and family, or a quick bite to satisfy your cravings, The Hungry Spot has something to offer for every occasion. We also cater to dietary preferences and offer vegetarian, vegan, and gluten-free options.</p>
  <p>Join us on this culinary adventure and indulge in flavors that will tantalize your taste buds and leave you craving for more. At The Hungry Spot, we invite you to savor the moment and create lasting memories with every bite.</p>
</div>

<div class="container">
    <h2> Gallery</h2>
    <div class="photo-gallery">
      <img src="img/hhj.webp" alt="Location" width="60%" height="60%"  >
      <img src="img/poza.jpg" alt="Location" width="50%" height="50%" >
    </div>
    <div>
      <img src="img/frencho.jpg" alt="Location" width="60%" height="60%">
      
    </div>
    
</div>

<div class="offers">
  <div class="container">
    <h2>Offers</h2>
    <p>10% discount on orders over ₹1500</p>
    <p>15% discount on Birthday and a complementary cake</p>
  </div>
</div>

<div class="footer">
  <p>&copy; <?php echo date("Y"); ?> The Hungry Spot. All rights reserved.</p>
  <p>Contact us: +91 9876543210 | info@thehungryspot.com</p>
  <p><a href="terms.php">Terms and Conditions</a></p>
</div>
</body>
</html>

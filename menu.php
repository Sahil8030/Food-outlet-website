<!DOCTYPE html>
<html>
<head>
  <title>The Hungry Spot</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .photo-gallery {
      display: flex;
      justify-content: space-around;
      margin-bottom: 40px;
    }

    .photo-gallery img {
      max-width: 400px;
      height: auto;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .menu-item {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }

    .menu-item img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .menu-item-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .menu-item-description {
      font-size: 14px;
      color: #666666;
      margin-bottom: 10px;
    }

    .menu-item-price {
      font-size: 16px;
      font-weight: bold;
    }

    .menu-item button {
      background-color: #ffcc00;
      color: #333;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .menu-item button:hover {
      background-color: #ff9900;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .footer p {
      margin: 0;
    }

    .footer a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
  <div class="container">
    <h2>Photo Gallery</h2>
    <div class="photo-gallery">
      <img src="img/outlet2.webp" alt="Location">
      <img src="img/outlet22.webp" alt="Location">
    </div>

    <h2 id="menu">Menu</h2>
    <div class="menu">
      <div class="menu-item">
        <img src="img/burger.jpeg" alt="Burger">
        <div class="menu-item-title">Cheeseburger</div>
        <div class="menu-item-description">Delicious cheeseburger with fresh ingredients.</div>
        <div class="menu-item-price">₹100</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 1">
          <input type="hidden" name="price1" value="100">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/pizza2.jpg" alt="Pizza">
        <div class="menu-item-title">Pepperoni Pizza</div>
        <div class="menu-item-description">Classic pepperoni pizza made with hand-tossed dough.</div>
        <div class="menu-item-price">₹350</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 2">
          <input type="hidden" name="price1" value="350">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/fries.jpeg" alt="Fries">
        <div class="menu-item-title">French Fries</div>
        <div class="menu-item-description">Crispy and golden french fries served with ketchup.</div>
        <div class="menu-item-price">₹130</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 3">
          <input type="hidden" name="price1" value="130">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/chickenburger.jpeg" alt="Chicken Burger">
        <div class="menu-item-title">Chicken Burger</div>
        <div class="menu-item-description">Tender chicken patty with lettuce, tomato, and mayo.</div>
        <div class="menu-item-price">₹199</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 4">
          <input type="hidden" name="price1" value="199">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/hotdog.jpeg" alt="Hot Dog">
        <div class="menu-item-title">Hot Dog</div>
        <div class="menu-item-description">Juicy hot dog with your choice of toppings.</div>
        <div class="menu-item-price">₹99</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 5">
          <input type="hidden" name="price1" value="99">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/nugget.jpeg" alt="Chicken Nuggets">
        <div class="menu-item-title">Chicken Nuggets</div>
        <div class="menu-item-description">Crispy and flavorful chicken nuggets with dipping sauce.</div>
        <div class="menu-item-price">₹299</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 6">
          <input type="hidden" name="price1" value="299">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/onion.jpeg" alt="Onion Rings">
        <div class="menu-item-title">Onion Rings</div>
        <div class="menu-item-description">Crunchy and delicious onion rings.</div>
        <div class="menu-item-price">₹249</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 7">
          <input type="hidden" name="price1" value="249">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/milkshake.jpeg" alt="Milkshake">
        <div class="menu-item-title">Milkshake</div>
        <div class="menu-item-description">Creamy and refreshing milkshake in various flavors.</div>
        <div class="menu-item-price">₹249</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 8">
          <input type="hidden" name="price1" value="249">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>

      <div class="menu-item">
        <img src="img/sundae.jpeg" alt="Sundae">
        <div class="menu-item-title">Ice Cream Sundae</div>
        <div class="menu-item-description">Indulge in a delightful ice cream sundae with toppings.</div>
        <div class="menu-item-price">₹299</div>
        <form action="cart.php" method="post">
          <input type="hidden" name="item1" value="Item 9">
          <input type="hidden" name="price1" value="299">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        
      </div>
    </div>
  </div>
  
  <div class="footer">
    <p>&copy; 2023 The Hungry Spot. All rights reserved.</p>
  </div>
  <body>
  </body>
</body>
</html>

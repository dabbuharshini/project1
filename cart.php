<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products--ARTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php include "head.php"; ?>
<section>
    <h2 class="title">SHOPPING CART</h2>
    <div class="cart">
        <div class="cart-content"></div>
        <div class="cart-total">
            <h3>Cart Total: Rs. <span id="cart-total">0</span></h3>
        </div>
        <a href="deliver adress.html"><button type="button" class="btn-buy">Pay Now</button></a>
        <i class="fa-solid fa-xmark" id="close-cart"></i>
    </div>
</section>
<footer>
    <div class="row1">
        <div class="coll">
            <img src="logo.png" class="logo">
            <p><b>ARTEM is used for collecting and showcasing Arts</b>
                <br>where innovation meets inspiration<br>
                Evaluate your experience with Arts</p>
        </div>
        <div class="coll">
            <h3>Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        <div class="coll">
            <h3>Newsletter</h3>
            <form>
                <input type="email" placeholder="Enter your email id" required>
                <button type="submit">&#8594;</button>
            </form>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-snapchat"></i>
            </div>
        </div>
    </div> 
</footer>
<?php include "js.php"; ?>

</body>
</html>

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
<section class="products">
    <div class="container">
        <div class="hero heroes">
            <h2>All Products</h2>
            <select id="sort-options">
                <option value="default">Default Sorting</option>
                <option value="price">Sort by price</option>
                <option value="sale">Sort by sale</option>
                <option value="popularity">Sort by Popularity</option>
            </select>
        </div>
        <div class="product-list">
            <div class="product" data-price="1900">
                <img src="p1.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="2400">
                <img src="p2.jpg">
                <p>Rs.2400</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="2200">
                <img src="p3.jpg">
                <p>Rs.2200</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="2100">
                <img src="p4.jpg">
                <p>Rs.2100</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1000">
                <img src="p5.jpg">
                <p>Rs.1000</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1000">
                <img src="p6.jpg">
                <p>Rs.1000</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1740">
                <img src="p7.jpg">
                <p>Rs.1740</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="2180">
                <img src="p8.jpg">
                <p>Rs.2180</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1490">
                <img src="p9.jpg">
                <p>Rs.1490</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1200">
                <img src="p10.jpg">
                <p>Rs.1200</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1900">
                <img src="p11.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1900">
                <img src="p12.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="product" data-price="1900">
                <img src="p13.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product" data-price="1900">
                <img src="p14.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product" data-price="1900">
                <img src="p15.jpg">
                <p>Rs.1900</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
        </div>
    </div>
</section>
<div class="page-btn">
    <span><a href="products.php">1</a></span>
    <span><a href="products1.html">2</a></span>
    <span><a href="products2.html">3</a></span>
    <span><a href="products.php">&#8594;</a></span>
</div>
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
                <li><a href="">Services</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        <div class="coll">
            <h3>NewsLetter</h3>
            <form>
                <input type="email" placeholder="enter your email id" required>
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
<script src="main.js"></script>
</body>
</html>

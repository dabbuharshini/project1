
<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-form--ARTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
  <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" width="100px"></div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa-solid fa-house"></i></a></li>
                    <li><a href="products.php">Products <i class="fa-solid fa-palette"></i></a></li>
                    <li><a href="about.html">About <i class="fa-regular fa-address-card"></i></a></li>
                    <li><a href="contact.html">Contact <i class="fa-solid fa-phone"></i></a></li>
                    <li><a href="login.php">Account <i class="fa-solid fa-user"></i></a></li>
                    <li><a href="cart.php" id="cart-icon" data-quantity="0"><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
   </div>
   <section>
<div class="cube">
    <div class="form-box">
        <div class="button-box">
            <div class="btn1"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register( )">Register</button>
        </div>
        <form id="login" class="input-group"  method="POST">
            <input type="text" name="username" class="input-field" placeholder="username" required>
            <input type="password"  name="password" class="input-field" placeholder="password" required>
            <input type="checkbox" class="check-box"><span>Remember password</span>
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <form id="register" class="input-group" action="register.php" method="POST">
            <input type="text" name="username" class="input-field" placeholder="username" required>
            <input type="password" name="password" class="input-field" placeholder="password" required>
            <input type="checkbox" class="check-box"><span>I agree terms&conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>
</div>
</section>
<footer>
    <div class="row1">
        <div class="coll">
            <img src="logo.png" class="logo">
            <p><b>ARTEM is used for collecting and showcasing Arts</b>
                <br>where inovation meets inspiration<br>
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
</section>
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn1");
    function register(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
    }
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>
</html>
<?php
// Database connection setup (example using mysqli)
$host = 'localhost';
$user = 'root';  // Replace with your database username
$pass = '';  // Replace with your database password
$db = 'arts';  // Replace with your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];  // In a real application, retrieve hashed password from database

    // Query database to check credentials (example using simple query, not secure)
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username; // Store username in session variable
       echo "<script>
                    Swal.fire({
                        title: 'Login Successful!',
                        text: 'Welcome back, $username!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                </script>";
        // Redirect to login page
        header('Location: index.php');
        // Redirect to logged-in area or homepage
        // header('Location: dashboard.php'); // Example redirection
    } else {
        echo "<script>
            Swal.fire({
                title: 'Login Failed!',
                text: 'Invalid username or password.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}

$conn->close();
?>
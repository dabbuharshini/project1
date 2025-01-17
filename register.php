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

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];  // In a real application, hash the password before storing

    // Insert user into the database (example using simple query, not secure)
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Registration successful!');</script>";
        // Redirect to login page
        header('Location: login.php'); // Example redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

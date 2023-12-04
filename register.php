<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query to insert the new record
$stmt = $conn->prepare("INSERT INTO users_info (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "<script>alert('Registration successful! You can now login.'); window.location.href = 'login.html';</script>";
} else {
    echo "Error occurred during registration.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

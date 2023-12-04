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
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM users_info WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if ($row['password'] === $password) {
        // Redirect to index.html with the username as a URL parameter
        echo "<script>alert('Welcome, " . $row['name'] . "');</script>";
        echo "<script>window.location.href = 'index.html?name=" . urlencode($row['name']) . "';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid password'); window.location.href = 'login.html';</script>";
    }
} else {
    echo "<script>alert('Invalid email or Password !'); window.location.href = 'login.html';</script>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

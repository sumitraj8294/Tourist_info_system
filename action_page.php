<?php
$servername = "localhost"; 
$username = "root";  
$password = ""; 
$database = "book"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST["cust_name"];
    $from = $_POST["from_location"];
    $to = $_POST["to_location"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    
    
    $sql = "INSERT INTO booking_info (cust_name, from_location, to_location, email, mobile)
            VALUES ('$name', '$from', '$to', '$email', '$mobile')";
            
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Hello, '. $name . ' Your trip is booked from ' . $from . ' to ' . $to . '.Thank you for choosing us");</script>';
        echo '<script>history.back();</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }



$conn->close();
?>



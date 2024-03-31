<?php

// Database connection parameters
$servername = "localhost"; // Change to your database server name
$username = "root"; // Change to your database username
$password = " "; // Change to your database password
$dbname = "kathmandu_care"; // Change to your database name

// Create connection
$conn = new mysqli('localhost', 'root', '', 'kathmandu_care');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['Message']; // Changed 'Query' to 'Message' to match the name attribute in the HTML form

    // Insert a new record into the database
    $sql = "INSERT INTO queries (fullname, email, phone, Message) VALUES ('$fullname', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully.";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
    
    // Close database connection
    $conn->close();
} else {
    // Redirect users if they try to access this script directly
    header("Location: index.html");
    exit();
}
?>
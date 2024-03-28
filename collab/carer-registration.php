<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $expected_salary = $_POST['expected_salary'];

    // Validate and process the data (you can add more validation as needed)

    // Example: Connect to database and insert data
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database (replace with your actual database table and fields)
    $sql = "INSERT INTO carers (first_name, last_name, address, email, contact_number, expected_salary) VALUES ('$first_name', '$last_name', '$address', '$email', '$contact_number', '$expected_salary')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

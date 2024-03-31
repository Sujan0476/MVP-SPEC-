<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $expected_salary = $_POST['expected_salary'];

 

    //  Connect to database and insert data
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kathmandu_care";

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'kathmandu_care');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database (replace with your actual database table and fields)
    $sql = "INSERT INTO Carer (First_Name, Last_Name, Address, Email, Contact_Num, Salary) 
            VALUES ('$first_name', '$last_name', '$address', '$email', '$contact_number', '$expected_salary')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
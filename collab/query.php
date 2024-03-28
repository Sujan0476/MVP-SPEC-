<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = $_POST['Query']; // Changed 'Query' to 'query' to match the name attribute in the HTML form

    // Validate and process the data

    // Example: Send an email with the query details
    $to = "sujanbudhathoki1631@gmail.com"; // Replace with your email address
    $subject = "New query from $fullname";
    $message = "Name: $fullname\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Query:\n$query";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Your query has been submitted successfully. We will get back to you soon.";
    } else {
        echo "Error: Unable to submit your query. Please try again later.";
    }
} else {
    // Redirect users if they try to access this script directly
    header("Location: index.html");
    exit();
}
?>

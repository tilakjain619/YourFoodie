<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the MySQL database
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "userregistration";

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Redirect back to the contact form with a success message
        header("Location: contact-us.php?message=success");
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
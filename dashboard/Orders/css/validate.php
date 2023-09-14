<?php
require 'DB/config.php';
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
}

$customer_id = $userId;

$sql = "SELECT * FROM orders WHERE cid = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customer_id); // Assuming $customer_id is an integer
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    if ($result->num_rows > 0) {
        echo "<center>Orders for Customer: " . $username . "</center>";
        echo "<br><br><br>";

        while ($row = $result->fetch_assoc()) {
            $order_id = $row['orderid'];
            $amount = $row['total'];
            $img_names = $row['images_names'];
            $img_detail = $row['images_details'];

            echo "Order ID: " . $order_id . "<br>";
            echo "Amount: " . $amount . "<br>";
            echo "ImgNames: " . $img_names . "<br>";
            echo "ImgDetails: " . $img_detail . "<br>";
            echo "<hr>"; // Add a horizontal line between orders
            // Display more fields as needed
        }
    } else {
        echo "<center>Orders for Customer: " . $username . "</center>";
        echo "No orders found!";
    }
} else {
    // Handle query error
    echo "Query error: " . $stmt->error;
}

$stmt->close(); // Close the prepared statement
$conn->close(); // Close the database connection
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
    <details>
    <summary class="button">Click to open me</summary>
      
    <div>
      <h2>Everything after summary appears within a modal</h2>
      <p>The HTML Details Element creates a disclosure widget in which information is visible only when the widget is toggled into an "open" state. A summary or label can be provided using the summary element.</p>
    </div>
  </details>
</body>
</html>



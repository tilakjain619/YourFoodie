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
    <div class="txtt">
        <h1>My Orders</h1>
        
    </div>
</body>
</html>

<?php

// error_reporting(E_ERROR | E_PARSE);

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
        while ($row = $result->fetch_assoc()) {
            $order_id = $row['orderid'];
            $amount = $row['total'];
            $img_detail = $row['images_details'];

            $foodDetailsArray = explode(",", $img_detail);


            $foodItems = [];
            for ($i = 0; $i < count($foodDetailsArray); $i += 3) {
                $name = $foodDetailsArray[$i];
                $price = $foodDetailsArray[$i + 1];
                $quantity = $foodDetailsArray[$i + 2];

                $foodItems[] = [
                    "name" => $name,
                    "price" => $price,
                    "quantity" => $quantity
                ];
            }







        

            echo "<details>";
            echo '<summary class="button">Order ID:'. $order_id .'<a href="status/index.php?order_id='.$order_id.'" id="track-order">Track Order</a></summary>';
            echo "<table style='margin-left: 5%;width: 90%;border-collapse: collapse;'>";
            echo "<thead><tr style='background: #b6b6b6;'><th style='border: 1px solid #ccc;font-size: larger;text-align: left;'>Name</th><th style='border: 1px solid #ccc;font-size: larger;'>Quantity</th><th style='border: 1px solid #ccc;font-size: larger;'>Price</th></tr></thead>";
            foreach ($foodItems as $index => $foodItem) {
                echo "<tr>";
                echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: left;'>" . $foodItem['name'] . "</td>";
                echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: center;'>" . $foodItem['quantity'] . "</td>";
                echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: center;'>" . $foodItem['price'] . "</td>";
                echo "</tr>";
            }
       
            echo "<tr>";
            echo "<td colspan='2' style='text-align: center; border: 1px solid #ccc;font-weight: bold;'>Total</td>";
            echo "<td style='border: 1px solid #ccc;font-weight: bold;;text-align: center;'>" . $amount . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</details>";

            
            // Add a horizontal line between orders
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






<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Panel</title>
    <link rel="stylesheet" href="../dashboard/Orders/css/status.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
        <!-- overlay -->
        <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

        <!-- sidebar -->
        <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
        <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
        <div class="list-group rounded-0">
            <a href="index.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
            <span class="bi bi-border-all"></span>
            <span class="ml-2">Dashboard</span>
            </a>
            <a href="products.php" class="list-group-item list-group-item-action border-0 align-items-center">
            <span class="bi bi-box"></span>
            <span class="ml-2">Products</span>
            </a>

            <a href="orders.php" class="list-group-item list-group-item-action active border-0 align-items-center">
            <div>
                <span class="bi bi-cart-dash"></span>
                <span class="ml-2">Orders</span>
            </div>
            </a>

            <a href="customer.php" class="list-group-item list-group-item-action border-0 align-items-center">
            <div>
                <span class="bi bi-cart-dash"></span>
                <span class="ml-2">Customers</span>
            </div>
            </a>

            <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
            
        </div>
        </div>

        <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
        <!-- top nav -->
        <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
            <!-- close sidebar -->
            <button class="btn py-0 d-lg-none" id="open-sidebar">
            <span class="bi bi-list text-primary h3"></span>
            </button>
          
            <div class="dropdown ml-auto">
            <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                <span class="bi bi-person text-primary h4"></span>
                <span class="text-primary h4"><?php echo $_SESSION['admin'] ?></span>
                <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                <a class="dropdown-item" href="#">Logout</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
            </div>
        </nav>
        <?php
if(@$_GET['changeStatus']){
    echo '<div class="container mt-4">
    <div class="alert alert-success" role="alert">
        <center><strong>Success!</strong> Order Updated successfully.</center>
    </div>
  </div>';
  
  }
  

?>
        <!-- main content -->
        <main class="p-4 min-vh-100">
            <section class="row">
            <div class="col-md-6 col-lg-4">
                <!-- card -->
                <article class="p-4 rounded shadow-sm border-left
            mb-4 mysel2">
                <a href="products.php" class="d-flex align-items-center">
                    <span class="bi bi-box h5"></span>
                    <h5 class="ml-2">Products</h5>
                </a>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="p-4 rounded shadow-sm border-left mb-4 mysel">
                <a href="customer.php" class="d-flex align-items-center">
                    <span class="bi bi-person h5"></span>
                    <h5 class="ml-2">Customers</h5>
                </a>
                </article>
            </div>
            <!-- <div class="col-md-6 col-lg-4">
                <article class="p-4 rounded shadow-sm border-left mb-4">
                <a href="#" class="d-flex align-items-center">
                    <span class="bi bi-person-check h5"></span>
                    <h5 class="ml-2">Sellers</h5>
                </a>
                </article>
            </div> -->
            </section>

            <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
            <div class="container">
           
                
                <div class="content">
                
                    <?php
                        require '../login-main/config.php';

                        if (isset($_GET['order_id'])) {
                            $order_id = $_GET['order_id'];
                            require 'track/track.php';

                        } 


                        elseif(isset($_GET['cname'])){
                            $customer_id = $_GET['id'];
                            $customer_name = $_GET['cname'];
                            echo "<h2>Orders of: <b>" . $customer_name . "</b></h2><br>";


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
                                        echo '<summary class="button">Order ID:'. $order_id .'<a href="orders.php?order_id='.$order_id.'" id="track-order">Track Order</a></summary>';
                                        echo "<table style='margin-left: 5%;width: 90%;border-collapse: collapse;'>";
                                        echo "<thead><tr><th style='border: 1px solid #ccc;font-size: larger;text-align: left;'>Name</th><th style='border: 1px solid #ccc;font-size: larger;'>Quantity</th><th style='border: 1px solid #ccc;font-size: larger;'>Price</th></tr></thead>";
                                        foreach ($foodItems as $index => $foodItem) {
                                            echo "<tr>";
                                            echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: left;'>" . $foodItem['name'] . "</td>";
                                            echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: center;'>" . $foodItem['quantity'] . "</td>";
                                            echo "<td style='border: 1px solid #ccc;font-size: larger;text-align: center;'>" . $foodItem['price'] . "</td>";
                                            echo "</tr>";
                                        }
                                
                                        echo "<tr>";
                                        echo "<td colspan='2' style='text-align: center; border: 1px solid #ccc;font-size:2rem;'>Total</td>";
                                        echo "<td style='border: 1px solid #ccc;font-size: 2rem;text-align: center;'>" . $amount . "</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                        echo "</details>";

                                        
                                        // Add a horizontal line between orders
                                        // Display more fields as needed
                                    }
                                } else {
                                    echo "No orders found!";
                                }
                            } else {
                                // Handle query error
                                echo "Query error: " . $stmt->error;
                            }

                            }





                        else{       
                                $sql = "SELECT id, name FROM signup";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo "<table>";
                                    echo "<tr><th style='width: 25%;'>Customer</th><th>Name</th></tr>";
                                    
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td><a href='orders.php?cname=" . urlencode($row['name']) . "&id=" . urlencode($row['id']) . "'>" . $row['name'] . "</a></td>";
                                        echo "</tr>";
                                    }
                                    
                                    echo "</table>";
                                } else {
                                    echo "No customers found.";
                                }

                                $conn->close();

                        }








                    ?>
                </div>
            </div>
            </div>
        </main>
        </div>
</body>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</html>
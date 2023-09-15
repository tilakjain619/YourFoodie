<?php
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
} 

require '../DB/config.php';
session_start();

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
}

$customer_id = $userId;

$sql = "SELECT * FROM orders WHERE orderid = '$order_id'"; // Use the appropriate SQL query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $trackStatus = $row['statuss']; // Store the track status in the $trackStatus variable
    $txnid = $row['txnid'];
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Track Your Order</title>
    <link rel="stylesheet" href="../css/status.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@1.1.0"></script>
</head>
<body>
        <div class="container px-1 px-md-4 py-5 mx-auto">
            <div class="card">
                <div class="row d-flex justify-content-between px-3 top">
                    <div class="d-flex">
                        <h5>ORDER <span class="text-primary font-weight-bold"><?php echo $order_id;?></span></h5>
                 </div>
                    <div class="d-flex flex-column text-sm-right">
                        <p>TXN-ID <span class="font-weight-bold"><?php echo $txnid;?></span></p>
                    </div>
                </div>
                <!-- Add class 'active' to progress -->
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="step0"></li>
                        <li class="step0"></li>
                        <li class="step0"></li>
                    </ul>
                    </div>
                </div>
                <div class="row justify-content-between top">
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Confirmed</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Baked</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>In transit</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Arrived</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>









var trackStatus = <?php echo json_encode($trackStatus); ?>;

// Get the list items
var progressItems = document.querySelectorAll('#progressbar li');

// Determine which item should be active based on the track status value
var activeIndex = 0;
if (trackStatus === 'order baked') {
    activeIndex = 1;
    progressItems[activeIndex].classList.add('active');
} else if (trackStatus === 'transit') {
    progressItems[1].classList.add('active');
    activeIndex = 2;
    progressItems[activeIndex].classList.add('active');
} else if (trackStatus === 'arrived') {
    activeIndex = 3;
    progressItems[activeIndex].classList.add('active');
    progressItems[2].classList.add('active');
    progressItems[1].classList.add('active');
}

// Reload the page every 3 seconds
    setInterval(function() {
        location.reload();
    }, 3000);

</script>


</body>
</html>
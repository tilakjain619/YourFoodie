<?php
$abprice = $_POST['payprice'];
?>

<?php 
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
}

$orderid = 'OID'.rand(10000,100000).'ID'.$userId;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="con" style="
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75vh;
">
    <div>
    <?php

        $apikey = "rzp_test_rGijuZptM4bTSD";

    ?>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <form action="../../summary.php" method="post">
    <script 
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apikey; ?>"
        data-amount="<?php echo ($abprice*100); ?>"
        data-currency="INR"
        data-id="<?php echo $orderid;?>"
        data-buttontext="Wait OR Refresh"
        data-name="DelightfulDishes"
        data-description="A Order Page of DelightfulDishes"
        data-image="https://i.ibb.co/rGHJCzL/logoBG.png"
        data-prefill.name=""
        data-prefill.email=""
        data-theme.color="#181616"
    ></script>

    

    <input type="hidden" name="oid" value="<?php echo $orderid;?>">
    <input type="hidden" name="price" value="<?php echo $abprice;?>">
    <input type="hidden" name="cartImagesNames" value="" id="cartimg">
    <input type="hidden" name="cartIdetails" value="" id="cartIdetails">
    <input type="hidden" custom="Hidden Element" name="hidden">
    </form>
    </div>
</div>


<script>

        window.onload = function() {
            var contentDiv = document.getElementById("con");
            if (contentDiv) {
                var inputElement = contentDiv.querySelector("input");
                if (inputElement) {
                    inputElement.click();
                }
            }

            // localstorage images to form 
            var cartimages = localStorage.getItem('imageSources');
            var userData = JSON.parse(cartimages);
            var inputimg = document.getElementById('cartimg');
            inputimg.value = userData;

            // localstorage images detail to form 
            var cartrawdata = localStorage.getItem('cartdetail');
            var cartdata = JSON.parse(cartrawdata);
            var inputimgdetails = document.getElementById('cartIdetails');
            inputimgdetails.value = cartdata;

        };
</script>


</body>
</html>




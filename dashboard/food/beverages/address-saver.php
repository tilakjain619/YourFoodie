<?php


session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        $username = $_SESSION['username'];
        $userId = $_SESSION['id'];
}
// echo $name, $lastname ,$address ,$countrySelect ,$state, $city, $zipcode;
$server = "localhost";
$username = "root";
$password = "";
$db = "userregistration";


//Database Connection
$conn = mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo "not connected";
    }

$sqlq = "SELECT * FROM addresses WHERE signup_id = $userId ORDER BY address_id DESC LIMIT 1";
    $result = $conn->query($sqlq);
    
    if ($result->num_rows > 0) {
        // Fetch the last row's data
        $row = $result->fetch_assoc();
    
        $name = $row['name'];
        $lastname = $row['lastname'];
        $address = $row['address'];
        $country = $row['country'];
        $state = $row['state'];
        $city = $row['city'];
        $zipcode = $row['zipcode'];
    
        // Output of address
    }


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$country = $_POST['countrySelect'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

/*<?php echo ($apikey*100); ?>*/

// Insert data into the database
$sql = "INSERT INTO addresses (name, lastname, address, country, state, city, zipcode, signup_id) VALUES ('$name', '$lastname', '$address', '$country' , '$state', '$city', '$zipcode', '$userId')";

if ($conn->query($sql) === TRUE) {
    // echo "Address inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pay.css">
    <link rel="stylesheet" href="address.css">
</head>
<body>

<div class="container">
    <div class="tick">
        <p class=txt>ADDRESS</p>
        <div class="address-card">
    <div class="name"><?php echo $name ." &nbsp;".$lastname; ?></div>

    <div class="address"><br><?php echo $address; ?></div>
    <div class="country"><?php echo $city; ?></div>
    <div class="state"><?php echo $state; ?></div>
    <div class="city"><?php echo $country; ?></div>
    <div class="zipcode"><?php echo $zipcode; ?></div>


            <!-- <img src="tick.png" alt="tick" style="margin-left: 8vw;margin-top: 10vh;" srcset=""> -->
            <a href="Uppaddress.php">Change Address</a></div>
        </div>
        <div class="vertical-line"></div>
            <div class="payment">
                <div class="txt2">
                    <p>PAYMENT</p>
                </div>
                
                <div class="txt3">
                    <table style="margin: 30px -79px;
margin-top: -156px;
">
                        <tr>
                            <th>Payment Method</th>
                            <th>Success</th>
                            <th>Failure</th>
                            <th>Details</th>
                            
                        </tr>
                        <tr>
                            <td>UPI</td>
                            <td>success@razorpay</td>
                            <td>failure@razorpay</td>
                            <td></td>
                            
                        </tr>
                        <tr>
                            <td>Card</td>
                            <td>5267 3181 8797 5449</td>
                            <td></td>
                            <td>Any Cvv & Expiry Date</td>
                            
                        </tr>
                    </table>
                </div>

                <div class="razor" style="
    margin-left: 45px;
">
                    <form action="razorpay/razor.php" method="post"  target="_top" id="myForm">
                        <input type="hidden" name="payprice" id="payprice">
                        <input type="submit" value="Proceed To Payment">
                    </form>
                </div>
        </div>
</div>    
    
<script>



        document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            var LSprice = localStorage.getItem("totalPrice");
            var dynamicValue = JSON.parse(LSprice);
            var inputField = document.getElementById("payprice");
            if (inputField) {
                inputField.value = dynamicValue;
            }
            document.getElementById("myForm").submit();
            
        });
        
        
</script>

</body>
</html>


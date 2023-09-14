<?php
$new_track_status = $_POST['changestatus'];
$order_id = $_POST['oid'];
echo $order_id;

$server = "localhost";
$username = "root";
$password = "";
$db = "userregistration";


//Database Connection
$conn = mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo "not connected";
    }


$sql = "UPDATE orders SET statuss = '$new_track_status' WHERE orderid = '$order_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../orders.php?order_id=$order_id");
} else {
    echo "Error updating track status: " . $conn->error;
}

$conn->close();


?>
<?php
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];


    $sql = "SELECT statuss FROM orders WHERE orderid = '$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $track_status = $row['statuss'];
        $trackstatus = ucwords($track_status);

    } else {
        $track_status = "Not Found";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking</title>
</head>
<body>
    <form action="track/tracksaver.php" method="POST">
        Status <input type="text" name="status" value="<?php echo $trackstatus; ?>" readonly><br><br>
        Change Status <select name="changestatus" id="">
            <option value="none">Select From Below</option>
            <option value="order confirmed">Order Confirmed</option>
            <option value="order baked">Order Baked</option>
            <option value="transit">Transit</option>
            <option value="arrived">Arrived</option>
        </select><br><br>

        <input type="hidden" name="oid" value="<?php echo $order_id; ?>">

        <input type="submit" value="Change">
    </form>
</body>
</html>
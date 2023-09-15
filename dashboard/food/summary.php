<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $name = $_SESSION['email'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
}



require 'config.php';


$oid = $_POST['oid'];
$total = $_POST['price'];
$status = "processed";


$cartImagesNames = $_POST['cartImagesNames'];
$serializedArray = json_encode($cartImagesNames);
$cleanedArray = str_replace('\\/', '/', $serializedArray);

$cartrawdetails = $_POST['cartIdetails'];
$cartdetail = json_encode($cartrawdetails);
$cartdetails = str_replace('\\/', '/', $cartdetail);


$txnid = rand(10000,100000);

$query = "INSERT INTO orders (cid,orderid,total,images_names,images_details,statuss,txnid) VALUES ('$userId','$oid','$total','$cleanedArray','$cartdetails','$status','$txnid')";


$result = mysqli_query($conn, $query);

if ($result) {
   // echo "cS";
} else {
    echo "Error: " . mysqli_error($conn);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="summary.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/u0zffbpigdnmowvhk6it.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711282/favicons-food/nty2ublqmethndjk9xfy.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/mdtafkz1jeoqebtgrxqx.png">
<link rel="manifest" href="http://res.cloudinary.com/da3wjnlzg/raw/upload/v1694711284/favicons-food/gd3r2ivcidqsaz1i3b6d.webmanifest">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
<nav id="navbar">
    <button class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </button>
        <div id="logo">
            <img src="../../img/logoBG.png" alt="logo.png" srcset="">
        </div>

        <button class="close-button">
            <span>&times;</span>
        </button>
        
        <ul class="navbar-menu">
            <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/" style="font-size: 2rem;">Home</a></li>
            <li class="nav-text"><a href="#"  style="font-size: 2rem;">Menu</a></li>
            <li class="nav-text"><a href="#O-form"  style="font-size: 2rem;">Order</a></li>
            <li class="nav-text"><a href="#"  style="font-size: 2rem;">Contact-Us</a></li>
        </ul>
        <ul> 
            <li class="right-side">
                <header>
            </header>
            </li>
            <li class="right-side">
                <div class="dropdown">
                    <button class="dropbtn" style="margin-left: 4rem;">Account</button>
                        <div class="dropdown-content" style="margin-left: 5rem;">
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="logout.php">Logout</a>
                        </div>
                </div>
            </li>
            
        </ul>
</nav>
</div>

<section class="placed-orders">
<h1 class="title">Summary</h1>
    <div class="box-container">
        <div class="box">

<?php

$date= date('m/d/Y - h:i:sa',time());

//add asasa
$paymethod = "ONLINE";
$paystatus = "Paid";


//Database address
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
?>

            <p> Order ID : <span><?php echo $oid; ?></span> </p>
            <p> Placed on : <span><?php echo $date; ?></span> </p>
            <p> Full Name : <span><?php echo $name." ".$lastname; ?></span> </p>
            <p> Address : <span><?php echo ($address.",".$city.",".$state.",".$country.",".$zipcode); ?></span> </p>
            <p> Payment method : <span><?php echo $paymethod; ?></span> </p>
            <p> Total: <span><?php echo $total."rs"; ?>/-</span> </p>
            <p> Payment Status : <span><?php echo $paystatus; ?></span> </p>
        </div>
    </div>
</section>

<div class="button-box">
                <button class="eleven" id="redirectButton" style="
    font-size: 2rem;
">Continue Shopping</button>
</div>

<footer class="footer-distributed">

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Home</a>

					<a href="#">Blog</a>

					<a href="#">Pricing</a>

					<a href="#">About</a>

					<a href="#">Faq</a>

					<a href="#">Contact</a>
				</p>

				<p>YourFoodie &copy; 2022</p>
			</div>

		</footer>
    <script>
        const triggers = document.querySelectorAll('.navbar a');
const highlight = document.createElement('span');
highlight.classList.add('highlight');
document.body.append(highlight);

function highlightLink() {
  const linkCoords = this.getBoundingClientRect();
  console.log(linkCoords);

  const coords = {
    width: linkCoords.width,
    height: linkCoords.height,
    top: linkCoords.top + window.scrollY,
    left: linkCoords.left + window.scrollX
  };

  highlight.style.width = `${coords.width}px`;
  highlight.style.height = `${coords.height}px`;
  highlight.style.transform = `translate(${coords.left}px, ${coords.top}px)`;
}

triggers.forEach(a => a.addEventListener('mouseenter', highlightLink));

triggers.forEach(a => a.addEventListener('focus', highlightLink));
    </script>

</body>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const navbarMenu = document.querySelector(".navbar-menu");
    const closeButton = document.querySelector(".close-button");

    hamburgerMenu.addEventListener("click", function() {
        this.classList.toggle("active");
        navbarMenu.classList.toggle("active");
    });

    closeButton.addEventListener("click", function() {
        hamburgerMenu.classList.remove("active");
        navbarMenu.classList.remove("active");
    });
});

        // Get a reference to the button element
        var button = document.getElementById("redirectButton");

        // Add a click event listener to the button
        button.addEventListener("click", function() {
            // Redirect to the specified URL
            window.location.href = "../dashboard.php";
        });
    </script>
</html>


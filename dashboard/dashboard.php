<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
} else {
    echo "Session data not found.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="0; url=food/cakes/">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/asider.css">
</head>
<body class="">

<div class="navbar">
    <nav id="navbar">
            <div id="logo">
                <img src="../img/logoBG.png" alt="logo.png" srcset="">
            </div>
            
            <ul>
                <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/">Home</a></li>
                <li class="nav-text"><a href="#">Menu</a></li>
                <li class="nav-text"><a href="#O-form">Order</a></li>
                <li class="nav-text"><a href="#">Contact-Us</a></li>
            </ul>
            <ul> 
                <li class="right-side">
                    <header>
                    <div class="shopping">
                        <img src="image/shopping.svg">
                        <span class="quantity">0</span>
                    </div>
                </header>
                </li>
                <li class="right-side">
                    <div class="dropdown">
                        <button class="dropbtn">Account</button>
                            <div class="dropdown-content">
                                <a href="#">Profile</a>
                                <a href="#">Settings</a>
                                <a href="logout.php">Logout</a>
                            </div>
                    </div>
                </li>
                
            </ul>
    </nav>
</div>



    <div class="container">
        <header></header>


        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h3>CHECKOUT</h3>
        <h4>Rs.</h4>
        <h1>Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">    
            <div onclick="redirecto()" class='total' id='tbox' >0</div>
            <div class="closeShopping" id="lbox" >Close</div>
        </div>
    </div>



<div class="aside-left">
        <div class="aside-left-content" id="asdf">
            <ul>
                <li class="nav-text-left"><a href="#">Home</a></li>
                <li class="nav-text-left"><a href="Orders/">Your Orders</a></li>
                <li class="nav-text-left"><a href="#">Help</a></li>
            </ul>
        </div>
</div>



<div class="aside-right">
    <div class="aside-right-content"  id="arc">
        <ul>

            <hr class="line">
            <div id="goforhunt">Go For Hunt</div>

            <div class="right-menu">
                
               
                <div class="menu-first">
                    <a href="food/sindia/sindia.php"><img id="img-dish-sindia" alt="Pizza" src="food/sindia/image/sindia.png"></a>
                </div>
                <a href="food/sindia/sindia.php"><h5 id="sindia">South-Indian</h5></a>
            
            </div>
           
        </ul>
    </div>
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
<script src="js/app.js"></script>
</html>
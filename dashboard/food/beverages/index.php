<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/asider.css">
</head>
<body class="">

<div class="navbar">
    <nav id="navbar">
            <div id="logo">
                <img src="../../image/logoBG.png" alt="logo.png" srcset="">
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
                                <a href="../../logout.php">Logout</a>
                            </div>
                    </div>
                </li>
                
            </ul>
    </nav>
</div>


<div class="container">
        <header id="headingg">Beverages</header>
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
                <li class="nav-text-left"><a href="../../Orders/">Your Orders</a></li>
                <li class="nav-text-left"><a href="../../contact-us.php">Help</a></li>
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
                    <a href="../cakes/"><img id="img-dish-biryani" alt="cakes" src="../cakes/image/cake.png"></a>
                </div>
                <a href="../cakes/" id="biryani"><h5>Cake's</h5></a>

                <!-- <div class="menu-first">
                    <a href="../biryani/biryani.php"><img id="img-dish-biryani" alt="biryani" src="../biryani/image/biryani1.png"></a>
                </div>
                <a href="../biryani/biryani.php" id="biryani"><h5>Biryani</h5></a> -->

                <div class="menu-first">
                    <a href="../burger"><img id="img-dish-chicken" alt="burger" src="../burger/image/burger.png"></a>
                </div>
                <a href="../burger/"><h5 id="chicken">Burger's</h5></a>
                
                <div class="menu-first">
                    <a href="../pizza"><img id="img-dish-paneer" alt="pizza" src="../pizza/image/pizza.png"></a>
                </div>
                <a href="../pizza"><h5 id="panner">Pizza's</h5></a>
                
                <div class="menu-first">
                <a href="../sides/"><img id="img-dish-vegi" alt="Sides" src="../sides/image/sides.png"></a>
                </div>
                <a href="../sides/"><h5 id="vegi">Sides</h5></a>
                
                <div class="menu-first">
                    <a href="../beverages/"><img id="img-dish-chinese" alt="Beverages" src="../beverages/image/beverages.png"></a>
                </div>
                <a href="../beverages/"><h5 id="chinese">Beverages</h5></a>
               
                <div class="menu-first">
                    <a href="../cafe/"><img id="img-dish-sindia" alt="cafe" src="../cafe/image/cafe.png"></a>
                </div>
                <a href="../cafe/"><h5 id="sindia">Cafe</h5></a>
            
            </div>
           
        </ul>
    </div>
</div>

<!-- <div>
    <button onclick="alldata()">click me</button>
</div> -->



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
<script src="sindia.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourFoodie | Food Delivery App</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/phone.css">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <script src="js/default_img.js"></script> -->
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/u0zffbpigdnmowvhk6it.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711282/favicons-food/nty2ublqmethndjk9xfy.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/mdtafkz1jeoqebtgrxqx.png">
<link rel="manifest" href="http://res.cloudinary.com/da3wjnlzg/raw/upload/v1694711284/favicons-food/gd3r2ivcidqsaz1i3b6d.webmanifest">

</head>
<body>

<div id="preloader"></div>
    <nav id="navbar">
        <div id="logo">
            <img src="img/logoBG.png" alt="logo.png" srcset="">
        </div>
        
        <ul>
            <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/">Home</a></li>
            <li class="nav-text"><a href="#Review">Review</a></li>
            <li class="nav-text"><a href="#O-form">Order</a></li>
            <li class="nav-text"><a href="./dashboard/contact-us.php">Contact-Us</a></li>
        </ul>
    </nav>
    
    <section id="home">
        <h1 id="main-heading">India's Best Food Delivery Website</h1>
        <p id="paragraph">Welcome to DelightfulDishes.com! Explore global flavors, from starters to desserts. Easy recipes for all. Join our foodie community for a tasty journey!</p> <div id="hide"></div>
        <button id="btn"><a href="#our-service">Order Now</a></button>
    </section>
    
    <section id="O-form" class="services-container">
        <h1 class="h-primary center" id="our-service">Our Trending items</h1>
        <div id="services" class="content__shows">
            <div>
                <!-- https://source.unsplash.com/random/?Pizza/1080x675" -->
                <!-- img/pizza.jpg -->
                <a href="login-main/login.php"><img id="imagep" alt="Pizza" src="./dashboard/food/pizza/image/pizza-bg.jpg"></a>
                <div class="title-box"></div>
                <p class="name"><a href="login-main/login.php"><span>PIZZA</span></a>Delicious pizza's, topped with gooey cheese, savory sauce, and your favorite toppings. Pure satisfaction in every bite!</p>
            </div>
            <div>
                <!-- https://source.unsplash.com/random/?Cake/1080x675 -->
                <!-- img/cake.jpg -->
                <a href="login-main/login.php"><img id="imagec" alt="Cake" src="./dashboard/food/cakes/image/cake-bg.jpg"></a>
                <div class="title-box"></div>
                    <p class="name"><a href="login-main/login.php"><span>CAKES</span></a>Cakes are delightful treats enjoyed worldwide. They come in various flavors, sizes, and designs, pleasing every palate. Indulge now!</p>
                </div>
                <div>
                    <!-- https://source.unsplash.com/random/?Burger/1080x675 -->
                    <!-- img/burger.jpg -->
                    <a href="login-main/login.php"><img id="imageb" alt="Burger" src="./dashboard/food/burger/image/burger-bg.jpg"></a>
                    <div class="title-box"></div>
                    <p class="name"><a href="login-main/login.php"><span>BURGER</span></a>Burgers are delicious fast food items loved globally for their juicy patties, tasty toppings, and satisfying buns.</p>
                </div>
                
            </div>
        </section>

        
        <!-- <section class="signin">
            
            <div class="popup" id="zoomimg">
                <iframe src="login-main/login.php" frameborder="0"></iframe> -->
                <!-- <img id="cimg" src="img/login.jpg" alt="img"> -->
                <!-- <span id="close" onclick="back()">&times;</span>
            </div>
            
            
            
            
        </section> -->
<!-- user reviews - testimonials -->
        <section class="user-section" id="Review">
            <h2 class="user-title">What our users say?</h2>
        <figure class="snip1533">
  <figcaption>
    <blockquote>
      <p>Thanks to this app, I can order any meal from my favorite restaurants with just a few taps on my phone.</p>
    </blockquote>
    <h3>Ravindra Joshi</h3>
    <h4>Teacher</h4>
  </figcaption>
</figure>
<figure class="snip1533">
  <figcaption>
    <blockquote>
      <p>It has become our go-to solution for lunch breaks and late-night coding sessions. Five stars!</p>
    </blockquote>
    <h3>Tilak Jain</h3>
    <h4>Software Developer</h4>
  </figcaption>
</figure>
<figure class="snip1533">
  <figcaption>
    <blockquote>
      <p>This food delivery app has been a lifesaver on those days when I just can't find the time to cook</p>
    </blockquote>
    <h3>Padma Gaikwad</h3>
    <h4>Housewife</h4>
  </figcaption>
</figure>
        </section>



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
        const triggers = document.querySelectorAll('#navbar a');
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

<script type="text/javascript">
    var loader = document.getElementById("preloader");
    window.addEventListener("load",function(){
    loader.style.display = "none";
})
</script>

<!-- <script type="text/javascript">
                    
    document.querySelectorAll('#services .box').forEach(image =>{
        image.onclick = () =>{
        }
    });    
    
    var abc = document.getElementById('close');
    var ab = document.getElementById('zoomimg');
        function back(){
            ab.style.display = "none";
        }

</script> -->
</html>
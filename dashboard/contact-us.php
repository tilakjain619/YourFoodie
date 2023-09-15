<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/u0zffbpigdnmowvhk6it.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711282/favicons-food/nty2ublqmethndjk9xfy.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/mdtafkz1jeoqebtgrxqx.png">
<link rel="manifest" href="http://res.cloudinary.com/da3wjnlzg/raw/upload/v1694711284/favicons-food/gd3r2ivcidqsaz1i3b6d.webmanifest">

    <title>Contact us</title>
</head>

<body>
<div class="navbar">
    <nav id="navbar">
            <div id="logo">
                <img src="./image/logoBG.png" alt="logo.png">
            </div>
            
            <ul>
                <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/">Home</a></li>
                <li class="nav-text"><a href="#">Menu</a></li>
                <li class="nav-text"><a href="./food/sindia/sindia.php">Order</a></li>
                <li class="nav-text"><a href="#">Contact-Us</a></li>
            </ul>
    </nav>
    <div class="navbar-hover-background"></div>
</div>
    <div class="contain">

        <div class="wrapper">

            <div class="form">
                <h4>GET IN TOUCH</h4>
                <h2 class="form-headline">Send us a message</h2>
                <form id="submit-form" action="./contact.php" method="POST">
                    <p>
                        <input id="name" name="name" class="form-input" type="text" placeholder="Your Name*" required>
                    </p>
                    <p>
                        <input id="email" name="email" class="form-input" type="email" placeholder="Your Email*" required>
                    </p>
                    <p class="full-width">
                        <textarea minlength="20" name="message" id="message" cols="30" rows="7"
                            placeholder="Your Message*" required></textarea>
                    </p>
                    <p class="full-width">
                        <input type="submit" class="submit-btn" value="Submit">
                        <button class="reset-btn" onclick="reset()">Reset</button>
                    </p>
                </form>
        <?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo '<p class="success-message">Contact information submitted successfully!</p>';
    }
    ?>
            </div>

            <div class="contacts contact-wrapper">

                <ul>
                    <li>Satisfying Cravings, One Click Away - Contact Us for Quick and Flavorful Deliveries!</li>
                    <span class="hightlight-contact-info">
                        <a href="mailto:contact@yourfoodie.com"><li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> contact@yourfoodie.com</li></a>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+91 9890212132</span></li>
                    </span>
                </ul>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Home</a>

					<a href="#">Blog</a>

					<a href="#">Pricing</a>

					<a href="#">About</a>

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

</html>
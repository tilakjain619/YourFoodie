<?php
if(isset($_GET['total'])){
    $results = $_GET['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>

<?php
require('../navbar.php');
?>

<button id="showPopupBtn">Summary</button>
<br>
    <br>

<div class="popup" id="popup" style="background-color: rgb(78, 78, 78);">
  <div class="popup-content">
  <div id="customAlert"></div>
  <div id="applied"></div>
<div>
    <div class="container" style="height: auto;width: 61vh;">
      <div class="sec">
        <div class="colorr">
          <div class="grid-item">
            <div class="order-summary">Summary</div>
            <div class="price">Price</div>
            <div class="qtty">Quantity</div>
            <div class="order-name">Name</div>
          </div>
        </div> 
      

        <div class="grid-container"></div>
          <div class="colorr">
            <div class="grid-item">
              <div class="order-summary-none">Total</div>
              <div class="price-none" id="totalPrice"><?php echo $results ?></div>
              <div class="ccode-box">Coupon Code<input type="text" name="code" id="code" style="width: 130px;"></div>
              <div class="ccode-apply"><button onclick="discount()" id="applyButton">Apply</button></div>
            </div>
          </div>
          <button class="closeBtn" id="closeBtn">Continue</button>
        </div>
      </div>
</div>


   
  </div>
</div>






<div class="formAlign">
  <iframe src="form.php" frameborder="0" width="100%" height="100%"></iframe>
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






<script>

// Wait for the page to finish loading
window.addEventListener('load', function() {
  // Get a reference to the button element
  var button = document.getElementById('showPopupBtn');
  
  // Simulate a click on the button
  button.click();
});




const showPopupBtn = document.getElementById('showPopupBtn');
const closeBtn = document.getElementById('closeBtn');
const popup = document.getElementById('popup');
const overlay = document.createElement('div');
overlay.className = 'overlay';

showPopupBtn.addEventListener('click', () => {
  popup.style.display = 'block';
  document.body.appendChild(overlay);
  overlay.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  popup.style.display = 'none';
  overlay.style.display = 'none';
});

overlay.addEventListener('click', () => {
  popup.style.display = 'none';
  overlay.style.display = 'none';
});

  
var discountApplied = false; // Flag to track if discount has been applied
        
        function discount() {
            if (discountApplied) {
                return;
            }
            
            var totalElement = document.getElementById('totalPrice');
            var totalPrice = parseFloat(totalElement.textContent);
            var discountCode = document.getElementById('code').value;
            var applyButton = document.getElementById('applyButton');
            
            
            var correctDiscountCode = "FIRST"; 
            var discountPercentage = 10; 
            
            if (discountCode === correctDiscountCode) {
                var discountAmount = totalPrice - discountPercentage;
                totalPrice = discountAmount;
                
                totalElement.textContent = totalPrice.toFixed(2);
                showCustomAlert1('Discount applied');
                discountApplied = true;
                
                applyButton.disabled = true;
                applyButton.textContent = "✓ Applied";


                localStorage.setItem('totalPrice', totalPrice.toFixed(2));
            } else {
              showCustomAlert('Invalid discount code.');
            }
        }

function showCustomAlert(message) {
  var customAlert = document.getElementById('customAlert');
  customAlert.textContent = message;
  customAlert.style.display = 'block';

  setTimeout(function() {
      customAlert.style.display = 'none';
  }, 2500);
}

function showCustomAlert1(message) {
  var Alert = document.getElementById('customAlert');
  var customAlert = document.getElementById('applied');
  Alert.style.display = 'none';
  customAlert.textContent = message;
  customAlert.style.display = 'block';

  setTimeout(function() {
      customAlert.style.display = 'none';
  }, 2500);
}

  // CART-IMAGES
            // Retrieve the array of image URLs from local storage
            const imageURLsJSON = localStorage.getItem("imageSources");
            
            const imageURLs = JSON.parse(imageURLsJSON);
              
            // console.log(imageURLs);




// CART-TEXTS
            // Retrieve the array of text from local storage
            const textArrayJSON = localStorage.getItem("cartdetail");
            const normalArray = JSON.parse(textArrayJSON);

            const keys = ["name", "price", "quantity"];
            const objects = [];

            for (let i = 0; i < normalArray.length; i += keys.length) {
              const obj = {};
              for (let j = 0; j < keys.length; j++) {
                obj[keys[j]] = normalArray[i + j];
              }
              objects.push(obj);
            }

            // console.log(objects);



// COMBINING CART-IMAGES AND CART-TEXTS
const combinedArray = [];

objects.forEach((cartDetail, index) => {
  const imageIndex = index < imageURLs.length ? index : imageURLs.length - 1;
  const image = imageURLs[imageIndex];
  combinedArray.push({ ...cartDetail, image });
});

console.log(combinedArray);

            
//  CREATING GRID LAYOUT WITH IMAGES FIRST
const gridContainer = document.querySelector('.grid-container');

combinedArray.forEach(item => {
        const gridItem = document.createElement('div');
        gridItem.className = 'grid-item';

        const img = document.createElement('img');
        img.src = item.image;
        img.alt = item.name;

        const nameElement = document.createElement('p');
        nameElement.textContent = item.name;

        const priceElement = document.createElement('p');
        priceElement.textContent = `${item.price}`;

        const quantityElement = document.createElement('p');
        quantityElement.textContent = `${item.quantity}`;

        // Append image first, then other details
        gridItem.appendChild(img);
        gridItem.appendChild(priceElement);
        gridItem.appendChild(quantityElement);
        gridItem.appendChild(nameElement);

        gridContainer.appendChild(gridItem);
      });

</script>
</body>
</html>
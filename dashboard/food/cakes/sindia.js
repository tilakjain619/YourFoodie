let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

let asideleft = document.getElementById('asdf');
let asideright = document.getElementById('arc');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
    setTimeout(function(){
        asideleft.style.display = "none";
        asideright.style.display = "none";
    },50);
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
    
    setTimeout(function(){
        asideleft.style.display = "block";
        asideright.style.display = "block";
    },300);

})






let products = [
    {
        id: 1,
        name: 'Chocolate Cake',
        image: 'cake.PNG',
        price: 200
    },
    {
        id: 2,
        name: 'Chocolate Cake Delight',
        image: 'ChocolateCakeDelight.png',
        price: 220
    },
    {
        id: 3,
        name: 'Chocolate Mountain',
        image: 'ChocolateCakeWithChocolateMountains.png',
        price: 250
    },
    {
        id: 4,
        name: 'Chocolate Sprinkles',
        image: 'ChocolateCakeWithChocolateSprinkles.png',
        price: 190
    },
    {
        id: 5,
        name: 'Cream White Forest',
        image: 'CreamWhiteForest.png',
        price: 150
    },
    {
        id: 6,
        name: 'Dessert Fruit cake',
        image: 'DessertFruitcake.png',
        price: 200
    },
    {
        id: 7,
        name: 'Vanilla Cake Dessert',
        image: 'VanillaCakeDessertWithStrawberry.png',
        price: 200
    },
    {
        id: 8,
        name: 'Ice Cream Mango Cake',
        image: 'IceCreamMangoCake.png',
        price: 150
    },
    {
        id: 9,
        name: 'Strawberry Cake',
        image: 'strawberryCake.png',
        price: 230
    },
    {
        id: 10,
        name: 'Cupcake(Pack of 5)',
        image: 'FiveCupcakes.png',
        price: 60
    },
    {
        id: 11,
        name: 'WhoopiePie Cake With Strawberries',
        image: 'WhoopiePieCakeWithChocolateStrawberries-.png',
        price: 400
    },
    
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">Rs.${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}


initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
            <div class="image-container"><img src="image/${value.image}"/></div>
                <div class="cart-items">${value.name}</div>
                <div class="cart-items">${value.price.toLocaleString()}</div>
                <div>
                <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count cart-items">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                    </div>`;
                listCard.appendChild(newDiv);
        }

    


    })
    quantity.innerText = count;
    total.innerText = totalPrice.toLocaleString();
    return total;
    
}





function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

function redirecto(){


    const imageContainers = document.querySelectorAll(".image-container")

    const imageSources = [];

    imageContainers.forEach(function(container){
        const image = container.querySelector("img");
        const imageSrc = image.getAttribute("src");
        imageSources.push(imageSrc);

    });

    localStorage.setItem("imageSources",JSON.stringify(imageSources));




    const cartitemdivs = document.querySelectorAll(".cart-items");
    const cartitemtext = Array.from(cartitemdivs).map(div => div.textContent.trim());

    // const encodedcartitem = encodeURIComponent(JSON.stringify(cartitemtext));

    localStorage.setItem("cartdetail",JSON.stringify(cartitemtext));




    var total = document.getElementById("tbox").textContent;
    let isOrderConfirm = confirm(`Proceed To Checkout For Rs.${total}`);
    
    if(total>0){
        if(isOrderConfirm){
            localStorage.setItem("totalPrice",JSON.stringify(total));
            window.location.href = "checkout.php?total=" + encodeURIComponent(total);
        }
    }else{
        alert("Please Select Atleast 1 Item.");
    }




}

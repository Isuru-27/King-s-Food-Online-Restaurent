<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
      <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
      <link rel="stylesheet" href="/index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/font-awesome.min.css" rel="stylesheet" />
  
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="cart.css">
	<!-- Demo CSS (No need to include it into your project) --> 
  </head>
  <body>
    <div class="all">
      <div class="menu-container">
          <input type="checkbox" id="openmenu" class="checkbox">
          <div class="icon">
            <label for="openmenu" id="label1">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </label>
            <img src="logo.jpg">
            <div class="brand">
              <h1>Sri Lanka's Unique Brand Online Restaurent</h1>
            </div>
          </div>
        
            <div class="menu-pane">
              
              <nav>
                  <ul class="menu-links">
                    <li><a href="">King's Foods</a></li>
                    <li><a href="Home_next.php">Home</a></li>
                    <li><a href="add_cart.php">Find Your Best Choice</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>  
              </nav>
            </div>
        </div>
      </div>
 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
<div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">$0</span>
            <form action="reserve.php">
              <button class="purchase-btn">Order</button>
            </form>
        </div>
      </div>
</div>

      
<!--   end of cart modal -->
  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
<!--  products  -->
<section>
  <ul>
    <li class="list active" data-filter="all">Show All</li>
    <li class="list" data-filter="offer">Special Offers</li>
    <li class="list" data-filter="foods">Fast Foods</li>
    <li class="list" data-filter="drinks">Soft Drinks and Desserts</li>
  </ul>
</section>

  <div class="items-container">
    <table>
      <tr>
        <td class="td1">
          <div class="card-1 card" id="d1">
            <div class="column offer"></div>
              <p id="para1">Special Chicken Rice</p>
              <img class="product-image" src="image/Special_Chicken_Rice.jpg">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.549.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-2 card" id="d1">
            <div class="column offer">
              <p id="para1">Special Thai Seafood</p>
              <img class="product-image" src="image/Special_Thai_Seafood.jpeg" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.790.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-3 card" id="d1">
            <div class="column offer">
            <p id="para1">Special Toast Chicken</p>
            <img class="product-image" src="image/Special_Toast_Chicken.webp" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
                <span class="product-price">Rs.1500.00</span><br>
                </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-4 card" id="d1">
            <div class="column foods">
            <p id="para1">Cheese Pizza</p>
            <img class="product-image" src="image/Cheese_Pizza.jpg" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.850.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-5 card" id="d1">
            <div class="column foods">
            <p id="para1">Zuki Pasta</p>
            <img class="product-image" src="image/Zuki_Pasta.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.750.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-6 card" id="d1">
            <div class="column foods">
            <p id="para1">Avacado Toast</p>
            <img class="product-image" src="image/Avacado_Toast.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.650.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-7 card" id="d1">
            <div class="column foods"></div>
              <p id="para1">Sushi Burritos</p>
              <img class="product-image" src="image/Sushi_Burritos.jpg">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.850.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-8 card" id="d1">
            <div class="column foods">
            <p id="para1">Quinoa Bowls</p>
            <img class="product-image" src="image/Quinoa_Bowls.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.800.00</span><br>
              </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-9 card" id="d1">
            <div class="column foods">
            <p id="para1">Thai Laksa</p>
            <img class="product-image" src="image/Thai_Laksa.jpg" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
                <span class="product-price">Rs.1250.00</span><br>
                </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-10 card" id="d1">
            <div class="column foods">
            <p id="para1">C jing ping Tacos</p>
            <img class="product-image" src="image/C_jing_ping_Tacos.webp" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.1150.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-11 card" id="d1">
            <div class="column foods">
            <p id="para1">Burgers</p>
            <img class="product-image" src="image/Burgers.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.765.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-12 card" id="d1">
            <div class="column foods">
            <p id="para1">Mix Thai Fries</p>
            <img class="product-image" src="image/Mix_Thai_Fries.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.550.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-13 card" id="d1">
            <div class="column drinks">
            <p id="para1">Matcha Lattes</p>
            <img class="product-image" src="image/Matcha_Lattes.jpg" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.1120.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-14 card" id="d1">
            <div class="column drinks">
            <p id="para1">Shine Kombucha</p>
            <img class="product-image" src="image/Shine_Kombucha.webp" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.950.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-15 card" id="d1">
            <div class="column drinks">
            <p id="para1">Falooda Smoothies</p>
            <img class="product-image" src="image/Falooda_Smoothies.png" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.785.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-16 card" id="d1">
            <div class="column drinks">
            <p id="para1">Fruit Infused Water</p>
            <img class="product-image" src="image/Fruit_Infused_Water.webp" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.987.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-17 card" id="d1">
            <div class="column drinks">
            <p id="para1">Coconut Water</p>
            <img class="product-image" src="image/Coconut_Water.webp" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.765.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-18 card" id="d1">
            <div class="column drinks">
            <p id="para1">Herbal Tea</p>
            <img class="product-image" src="image/Herbal_Tea.webp" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.350.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-19 card" id="d1">
            <div class="column drinks">
            <p id="para1">Vegetable Juices</p>
            <img class="product-image" src="image/Vegetable_Juices.webp" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.650.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-20 card" id="d1">
            <div class="column drinks">
            <p id="para1">Sparkling Water</p>
            <img class="product-image" src="image/Sparkling_Water.webp" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.850.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-21 card" id="d1">
            <div class="column drinks">
            <p id="para1">Fresh Milk</p>
            <img class="product-image" src="image/Fresh_Milk.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.550.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-22 card" id="d1">
            <div class="column drinks">
            <p id="para1">Lava cake</p>
            <img class="product-image" src="image/Lava_cake.jpg" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.1540.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-23 card" id="d1">
            <div class="column drinks">
            <p id="para1">French Pudding</p>
            <img class="product-image" src="image/French_Pudding.webp" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.680.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-24 card" id="d1">
            <div class="column drinks">
            <p id="para1">Cup Cake</p>
            <img class="product-image" src="image/Cup_Cake.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.420.00</span><br>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="td1">
          <div class="card-25 card" id="d1">
            <div class="column drinks">
            <p id="para1">Fancy Dessert</p>
            <img class="product-image" src="image/Fancy_Dessert.png" alt="">
              <button class="add-to-cart" name="cart">Add to cart</button>
              <span class="product-price">Rs.2280.00</span><br>
              </div>
            </div>
        </td>
        <td class="td1">
          <div class="card-26 card" id="d1">
            <div class="column drinks">
            <p id="para1">Cheese Deshi</p>
            <img class="product-image" src="image/Cheese_Deshi.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.765.00</span><br>
            </div>
          </div>
        </td>
        <td class="td1">
          <div class="card-27 card" id="d1">
            <div class="column drinks">
            <p id="para1">Tiny Cake</p>
            <img class="product-image" src="image/Tiny_Cake.jpg" alt="">
            <button class="add-to-cart" name="cart">Add to cart</button>
            <span class="product-price">Rs.2550.00</span><br>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>  
 </main>

 <footer class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-md-4footer-co">
        <div class="footer_detail">
          <a href="" class="footer-logo">
            King's Foods
          </a>
          <p></p>
          
          <div class="footer_social">
            <ul id="buttons3">
              <li class="fb">
                <a href="#facebook" title="Facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="tw">
                <a href="#twitter" title="Twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="in">
                <a href="http://instagram.com/ilyasbilgihan" title="Instagram" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="yu">
                <a href="#youtube" title="Youtube">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4footer-col">
        <h4>
          Opening Hours
        </h4>
        <p>
          Everyday
        </p>
        <p>
          8.00 Am -10.00 Pm
        </p>
      </div>
    </div>
    <div class="footer-info">
      <p>
        &copy; <span id="displayYear"></span> This site is protected by 
        <a href="https://html.design/">reCAPTCHA and the Google Privacy Policy and <br>Terms of Service apply.© 2023 <b>King's Foods</b> Technologies Inc.</a>
      </p>
    </div>
  </div>
</footer>
  <script>
     // open cart modal
const cart = document.querySelector('#cart');
const cartModalOverlay = document.querySelector('.cart-modal-overlay');

cart.addEventListener('click', () => {
  if (cartModalOverlay.style.transform === 'translateX(-200%)'){
    cartModalOverlay.style.transform = 'translateX(0)';
  } else {
    cartModalOverlay.style.transform = 'translateX(-200%)';
  }
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModalOverlay.style.transform = 'translateX(-200%)';
});

cartModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('cart-modal-overlay')){
    cartModalOverlay.style.transform = 'translateX(-200%)'
  }
})
// end of close cart modal

// add products to cart
const addToCart = document.getElementsByClassName('add-to-cart');
const productRow = document.getElementsByClassName('product-row');

for (var i = 0; i < addToCart.length; i++) {
  button = addToCart[i];
  button.addEventListener('click', addToCartClicked)
}

function addToCartClicked (event) {
  button = event.target;
  var cartItem = button.parentElement;
  var price = cartItem.getElementsByClassName('product-price')[0].innerText;
  
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToCart (price, imageSrc);
  updateCartPrice()
}

function addItemToCart (price, imageSrc) {
  var productRow = document.createElement('div');
  productRow.classList.add('product-row');
  var productRows = document.getElementsByClassName('product-rows')[0];
  var cartImage = document.getElementsByClassName('cart-image');
  

  
  var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>
        
      `
  productRow.innerHTML = cartRowItems;
  productRows.append(productRow);
  productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem)
  productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity)
  updateCartPrice()
}
// end of add products to cart

// Remove products from cart
const removeBtn = document.getElementsByClassName('remove-btn');
for (var i = 0; i < removeBtn.length; i++) {
  button = removeBtn[i]
  button.addEventListener('click', removeItem)
}

function removeItem (event) {
  btnClicked = event.target
  btnClicked.parentElement.parentElement.remove()
  updateCartPrice()
}

// update quantity input
var quantityInput = document.getElementsByClassName('product-quantity')[0];

for (var i = 0; i < quantityInput; i++){
  input = quantityInput[i]
  input.addEventListener('change', changeQuantity)
}

function changeQuantity(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0){
    input.value = 1
  }
  updateCartPrice()
}
// end of update quantity input

// update total price
function updateCartPrice() {
  var total = 0
  for (var i = 0; i < productRow.length; i += 2) {
    cartRow = productRow[i]
  var priceElement = cartRow.getElementsByClassName('cart-price')[0]
  var quantityElement = cartRow.getElementsByClassName('product-quantity')[0]
  var price = parseFloat(priceElement.innerText.replace('Rs.', ''))
  var quantity = quantityElement.value
  total = total + (price * quantity )
    
  }
  document.getElementsByClassName('total-price')[0].innerText =  'Rs.' + total

document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2
}
// end of update total price

// purchase items
const purchaseBtn = document.querySelector('.purchase-btn');

const closeCartModal = document.querySelector('.cart-modal');

purchaseBtn.addEventListener('click', purchaseBtnClicked)

function purchaseBtnClicked () {
  alert ('Nice! Let us go to the Reservation.');
  cartModalOverlay.style.transform= 'translateX(-100%)'
 var cartItems = document.getElementsByClassName('product-rows')[0]
 while (cartItems.hasChildNodes()) {
   cartItems.removeChild(cartItems.firstChild)
   
 }
  updateCartPrice()
}
</script>
// end of purchase items

//alert user if cart is empty
<script>
      document.addEventListener("DOMContentLoaded", function () {
        // Get all category buttons
        const categoryButtons = document.querySelectorAll(".list");

        // Get all food items
        const foodItems = document.querySelectorAll(".td1");

        // Add click event listener to each category button
        categoryButtons.forEach(function (button) {
          button.addEventListener("click", function () {
            const category = this.dataset.filter;

            // Show or hide food items based on category
            foodItems.forEach(function (item) {
              const itemCategory = item.querySelector(".column").classList;
              if (category === "all" || itemCategory.contains(category)) {
                item.style.display = "table-cell";
              } else {
                item.style.display = "none";
              }
            });
          });
        });
      });
    </script>
  </body>
</html>
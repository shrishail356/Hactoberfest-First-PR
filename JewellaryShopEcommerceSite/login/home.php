<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Main</title>
</head>
<body>
  <!-- Header -->

  <header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <i class="fa fa-diamond"></i>
        <span class="ml-3 text-xl">Jewellary Shop </span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="home.php"  class="mr-5 hover:text-gray-900">Home</a>
        <a href="about.html" class="mr-5 hover:text-gray-900">About</a>
        <a href="account.php" class="mr-5 hover:text-gray-900">Account</a>
        
      </nav>
      <!-- Register/login button -->
      <?php

      session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$name = NULL;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_SESSION['id'] ;
$sql = " SELECT * FROM `users` WHERE id= $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name= $row["name"];
   
  }
} else {
  echo "0 results";
}
$conn->close();

?>
      
      <form action="account.php" method="post">
      <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><?php echo "Hello  ". $name?>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </form>
    </div>
  </header>

  <!-- Main -->
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/v1555301691/shape/mentalfloss/jewelry.jpg?itok=Ye_ysMl0" >
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">dESIGN BY AMEY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Mental Floss</h2>
                <p class="mt-1">$25.99</p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images-na.ssl-images-amazon.com/images/I/91QSLghyIrL._UX679_.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">DESIGN BY RAM.</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Golden Necklace</h2>
                <p class="mt-1">$25.99</p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images-na.ssl-images-amazon.com/images/I/914mJyKTEoL._UY695_.jpg
                ">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">DESIGN BY DHIRAJ</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">  Gold Plated Jhumki</h2>
                <p class="mt-1">$25.99</p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="http://blog.rcbafnajewellers.com/wp-content/uploads/2018/11/9.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY - Gold</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Bridal Neckless</h2>
                <p class="mt-1">$25.99 </p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://findingbangalore.files.wordpress.com/2014/06/indian-bridal-jewelry.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Indian federation </h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Indian Bridal Jewelry</h2>
                <p class="mt-1">$25.99 </p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://th.bing.com/th/id/OIP.z0PSiiNCGMRnviL0MFyXigHaHa?pid=Api&rs=1">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY - Gold</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Latest Gold Necklace</h2>
                <p class="mt-1">$ 25.99 </p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="http://www.styleskier.com/wp-content/uploads/2017/08/diamond-necklace-for-women-diamond-necklaces-for-women-cesdblv-.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY- Diamond</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Pendant Necklace </h2>
                <p class="mt-1">$ 25.99</p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://30d01f9adcdd9ca8bb29-e7821b1789d66a252f67999ba68e5823.ssl.cf2.rackcdn.com/affordable-heart-diamond-pendant-necklace-for-women-in-14K-yellow-gold-FD-HPD200-NL-YG.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY - Gold</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Gold Necklace</h2>
                <p class="mt-1">$ 25.99</p>
                <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
              </div>
            </div>
          </div>

          <!-- code  for the add to cart button -->
          <div class="cd-cart cd-cart--empty js-cd-cart">
            <a href="#0" class="cd-cart__trigger text-replace">
              Cart
              <ul class="cd-cart__count"> <!-- cart items count -->
                <li>0</li>
                <li>0</li>
              </ul> <!-- .cd-cart__count -->
            </a>
    
            <div class="cd-cart__content">
              <div class="cd-cart__layout">
                <header class="cd-cart__header">
                  <h2>Cart</h2>
                  <span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
                </header>
    
            <div class="cd-cart__body">
              <ul>
                <!-- products added to the cart will be inserted here using JavaScript -->
              </ul>
            </div>
    
          <footer class="cd-cart__footer">
            <a href="checkout.html" class="cd-cart__checkout" target="_blank">
             <em>Checkout - $ <span id="cartvalue"></span>
                <button type="submit"><svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
                </svg></button>
              </em>
            </a>
            <?php


             ?>

          </footer>
        </div>
      </div> <!-- .cd-cart__content -->
    </div> <!-- cd-cart -->
  </div>
  
  
  <script src="js/util.js"></script> <!-- util functions included -->
  <script src="js/main.js"></script>
  
        </div>
      </section>
      <!-- Footer -->

      <footer class="text-gray-700 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

            <span class="ml-3 text-xl">Jewellary Shop</span>
          </a>
         
        </div>
      </footer>
      
</body>

</html>
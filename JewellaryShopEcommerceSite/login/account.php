<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
 
    
    <title>Document</title>
</head>
<body>
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
      $add = $row["address"];
      $contact = $row["number"];
      $mail = $row["email"];
      $abt = $row["description"];
     
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
  
    
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
      
      <form action="account.php" method="post">
      <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"> <?php echo($name);?>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </form>
    </div>
  </header>
<!-- main content -->

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg mx-auto">
      <div class="flex flex-col sm:flex-row mt">
        <div class="sm text-center sm ">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Hello <?php echo $name ?> </h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">Whoever said that money can't buy happiness simply didn't know where to go shopping.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
</section>
 <!--Presonal info blog  -->
 <center>
 <p class="text-base">Following is your data that you shared  with us.</p><br><br>

<center>
<div class="bg-gray rounded shadow border p-3 w-64"><p class=" mb-4 mt-0">Your Contact No : <?php echo($contact);?></p></div>
<div class="bg-gray rounded shadow border p-3 w-64"><p class=" mb-4 mt-0">Your Mail Id : <?php echo($mail);?></p></div>
<div class="bg-gray rounded shadow border p-3 w-64"><p class=" mb-4 mt-0">Your Address: <?php echo($add);?></p></div>
<div class="bg-gray rounded shadow border p-3 w-64">  <p class=" mb-4 mt-0">About: <?php echo($abt);?></</p></div>
</center>

<footer class="text-gray-700 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

            <span class="ml-3 text-xl">Jewellary Shop</span>
          </a>
         
        </div>
      </footer>
</body>
</html>
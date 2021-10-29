<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>
<body>
<header class="text body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <i class="fa fa-diamond"></i>
        <span class="ml text-xl">Jewellary Shop </span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="home.php"  class="mr-5 hover:text-gray-900">Home</a>
        <a href="about.html" class="mr-5 hover:text-gray-900">About</a>
        <a href="account.php" class="mr-5 hover:text-gray-900">Account</a>
        
      </nav>
</div>
</header>
<center>
<div class="bg-gray rounded shadow border p-3 w-128">
  <h5 class="text-3xl font-bold mb-4 mt-0">Hello, <?php echo $_SESSION['name']; ?></h5>
  <p class="text-gray-700 text-sm"><a href="logout.php"  target="_blank">Logout</a></p>
  <p class="text-gray-700 text-sm"><a href="home.html">Goto HOME</a><br></p>
  <p class="text-gray-700 text-sm">  <a href="info.php" target="_blank"> Enter more about yourself </a><br></p>
</div>
</center>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
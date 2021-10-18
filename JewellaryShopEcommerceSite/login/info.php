<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Info</title>
</head>
<body>
<?php
include "db_conn.php";
session_start();
$id = $_SESSION["id"];
$update = false;
if(isset($_POST['number']))
{

if(!$conn)
{
    die ("Connection was not set due to-".mysqli_connect_error());
}
else{
//    echo "Connection successfull!";
}

$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];

$desc = $_POST['desc'];

$sql = " UPDATE users SET number ='$number',address='$address',email='$email',description='$desc'  WHERE id = '$id' ";

//echo $sql;
$con = mysqli_query($conn, $sql);

if($conn->query($sql)==TRUE)
{
    //echo "Successfully Inserted ";
    $update = TRUE;
}
else{
    echo "ERROR:$sql $conn->error_log";
}
//closing the connection to db

}
// else {
//     echo "name field can't be empty";
// }

?>

   
<div class="container">
    <div class="jumbotron">

    <?php

    if($update == true)
    {   
            echo "<p id='submsg' >Information successfully registered !</p>";
    }
    ?>
    <p id="msg"></p>
    <p class="lead" >Enter your  information here </p>
    <form action="info.php" method="post">
              
        <input type="text" name="number" placeholder="Enter your Contact No. here ..">
             
        <input type="text" name="email" placeholder="Enter your Email-Id here ..">
        
        <input type="text" name="address" placeholder="Enter your Address here ..">
       
        <textarea name="desc" id="desc" cols="10" rows="10" placeholder="Tell us something about yourself "></textarea><br>
       <button id="submit"  type="submit" >Submit</button>
       <button id="reset" type="reset">Reset</button>
    </form>

    
</div>
</div>
</body>
</html>
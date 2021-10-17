<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>TransferPage</title>
</head>
<body>
    
    <style>
        body{
            position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    height: 100%;
  
        }
        body:before { 
            content: "";
    position: absolute;
    background: url('./world-map.png');
    background-size: cover;
    z-index: -1; 
    height: 20%; width: 20%;
    transform: scale(5);
    transform-origin: top left;
    filter: blur(1px);}
    </style>


<!-- logo + navbar  -->
<div class="container-fluid  bg-dark text-white shadow-lg sticky-top ">
    <div class="row">
        <div class="col-lg-1 pt-3 pb-2 display-2"><i class="fas fa-university" ></i></div>
        <div class="col-lg-9 pt-5 px-5 display-4 font-weight-bolder text-white ">  <a class="text-decoration-none" href="index.html"> TS Bank</div></a>
    </div>
</div>

<div  class="mt-3 pl-3"  ><a class="text-decoration-none" href="index.html"><i class="fas fa-arrow-left" ></i> Back To Home</a></div>

<!-- container for amount transfer data form  -->
<div class="container my-4 p-3 bg-dark text-white rounded shadow-lg centered border border-secondary" >
<h2>C-TO-C Transfer  :</h2>
<form action="transferpage.php" method="POST">
            <div class="form-group">
            <label for="">Select  Sender :</label>
                    <select class="form-control" name="sender"  >
                        <option value="">Sender Account</option>
                                        <?php
                                        require "conn.php";
                                        $sql = "SELECT firstname , lastname , cust_id FROM  `customers`  ";
                                        $res = $con->query($sql);
                                        if ($res->num_rows > 0) {
                                            // output data of each row
                                            while($row = $res->fetch_assoc()) {
                                            echo  ' <option value=" '. $row["cust_id"] . ' ">'.$row["cust_id"].'  '. $row["firstname"].' '.$row["lastname"] .'</option> ' ;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                            ?>
                       
                    </select>
            </div>

            <div class="form-group">
            <label for="">Select Receiver</label>
                    <select class="form-control" name="receiver" >
                        <option value="">Receiver Account</option>
                            <?php
                                require "conn.php";
                                $sql = "SELECT firstname , lastname , cust_id FROM  `customers`  ";

                                $res = $con->query($sql);

                                if ($res->num_rows > 0) {
                                    // output data of each row
                                    while($row = $res->fetch_assoc()) {
                                    echo  ' <option value="'.$row["cust_id"].'">'.$row["cust_id"].' '. $row["firstname"].' '.$row["lastname"] .'</option> ' ;
                                    }
                                } else {
                                    echo "0 results";
                                }
                                
                                ?>
                    </select>
                  
            </div>
            
            <div class="form-group">
                     <label for="">Enter Amount : </label>
                    <input class="form-control" type="text" placeholder="Amount " name="amt">
            </div>    
            <button class="btn btn-primary" type="submit">Transfer</button> 
</form>        
</div>






<!-- form for sender and receiver info and amount  -->
   <?php 
            if(isset($_POST['sender'])){
                    require "conn.php";
                    $sender = $_POST['sender'];
                    $rec =  $_POST['receiver'];
                    $amt = $_POST['amt'];

                     
                    // echo $amt ;
                    // echo $sender ;
                    // echo $rec ;
                    $sql = "SELECT *   FROM  `customers` WHERE cust_id=$sender  ";

                    $res = $con->query($sql);

                    if ($res->num_rows > 0) {
                        // output data of each row
                        while($row = $res->fetch_assoc()) {
                            $sbalance = $row["balance"];
                            $sname = $row["firstname"];
                            $sname .= $row["lastname"] ;
                         }
                        }
                        $samt = $sbalance - $amt ;
                    
                    $sql = "UPDATE customers SET balance = $samt WHERE cust_id=$sender ";
                    $sres = $con->query($sql);
                    
                    $sql = "SELECT * FROM customers WHERE cust_id = $rec ";
                    $res = $con->query($sql);

                    if ($res->num_rows > 0) {
                        // output data of each row
                        while($row = $res->fetch_assoc()) {
                            $rbalance = $row["balance"];
                            $rname = $row["firstname"] ;
                            $rname .= $row["lastname"] ;
                        }
                        }

                    $ramt = $rbalance + $amt ;
                    $sql = "UPDATE customers SET balance = $ramt WHERE cust_id=$rec ";
                    $rres= $con->query($sql);

                    if($sres and $rres == 1){
                        echo('<script>alert("Transfer Complete !!!");</script>');

                        $sql = "INSERT INTO `transactions`( `sender`, `receiver`, `amount`, `date`) VALUES ('$sname' , '$rname' ,'$amt' , current_timestamp()); ";    
                        $res = $con->query($sql);      
                         
                        
                    }
                    
                    // echo "Sender Balance ".$samt ;
                    // echo "Receiver Balance".$ramt ;
            }else{
                
            }
                    
                    ?>
                
      

</body>
</html>
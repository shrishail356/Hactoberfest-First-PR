
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserInfo</title>
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


<!-- Card for customer info -->
<div class="container text-white my-5 shadow-lg ">
            <div class="card">
                <div class="card-body bg-dark">
                            <div class="row">
                                    <div class="col-sm-6">
                                            <img src="./user.jpg" alt="User_profile_pic">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="my-4">
                                            <p class="lead font-weight-bolder" >Customer Info : </p>
                                        </div>
                                    <?php
                                        if($_GET)
                                        require "conn.php";
                                        $id = $_GET["id"];
                                        // echo $id;
                                        $sql= "SELECT * FROM `customers` WHERE cust_id = $id ";
                                        $res = $con->query($sql);

                                        if ($res->num_rows > 0)
                                        {
                                            // output data of each row
                                            while($row = $res->fetch_assoc()) {
                                            echo  '<div class="my-4"><span class="font-weight-bolder py-5">First Name   : </span><span>'. $row["firstname"] .'</span></div>' ;
                                            echo  '<div class="my-4"><span class="font-weight-bolder py-5">Last Name   : </span><span>'. $row["lastname"] .'</span></div>' ;
                                            echo  '<div class="my-4"><span class="font-weight-bolder py-5">Account No : </span><span>'. $row["cust_id"] .'</span></div>' ;
                                            echo  '<div class="my-4"><span class="font-weight-bolder py-5">Email Id        : </span><span>'. $row["mail_id"] .'</span></div>' ;
                                            echo  '<div class="my-4"><span class="font-weight-bolder py-5">Account Balance  : RS  </span><span>'. $row["balance"] .'</span></div>' ;
                                          
                                            }
                                        }
                                        ?>
                                        <a href="cinfo.php"><button class="btn btn-success" ><i class="fas fa-arrow-left p-1" ></i> Back </button></a>
                                        <a href="transferpage.php"><button class="btn btn-primary" > Transfer Money<i class="fas fa-arrow-right p-1" ></i> </button></a>
                                    </div>
                            </div>
                </div>
            </div>
</div>


</body>
</html>
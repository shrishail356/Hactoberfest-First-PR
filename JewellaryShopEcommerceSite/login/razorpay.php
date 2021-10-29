<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Payment-Razorpay</title>
</head>
<body>
<center>
    <div class="container bg-blue">
        <div  class="jumbotron">
      
                <script>
                var totalamt = localStorage. getItem("totalls");
                </script>
                <?php
                $key = "rzp_test_IqO3ZzO04ZztbU";
                $mail = $_POST['email'];
                $name = $_POST['name'];
                $total = $_POST['total'];
                ?>
                <form action="success.html" method="GET">
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key= <?php echo($key); ?>
                    data-amount=<?php echo($total*100); ?>
                    data-currency="USD"
                    data-buttontext="Pay with Razorpay"
                    data-name="Jewellary Shop"
                    data-description="A jewellary shop e-commerce site mini project"
                    data-image="https://www.tanishq.co.in/wps/wcm/connect/tanishq/cb53f671-01d0-449e-b18d-a4e61e6ffa0b/TanishqLogo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0RT10QIMVSTFU3006-cb53f671-01d0-449e-b18d-a4e61e6ffa0b-mC036IT"
                    data-prefill.name = <?php echo($name); ?>
                    data-prefill.email=<?php echo($mail); ?>
                    data-theme.color="#F37254"
                ></script>
                <input type="hidden" custom="Hidden Element" name="hidden">
                </form>     
    </div>
</div>
</center>
</body>
</html>
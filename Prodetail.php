
<?php
include_once("connection.php");



?>
<html>
<head>
    <link href="mystyle1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>


        .column1{
            float: left;
            width: 33.33%;
            padding: 50px;
        }


        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width:600px) {
            .column1 {
                width: 80%;
            }
    </style>
</head>

<body>
<div class="row" >
    <div class="col-md-6" >
        <a href="Home.html"> <img  style="margin : 20px 0px 0px 20px;" src="Img/Logo.png" width="150" height="140" ></a>
    </div>
    <div class="col-md-6 linee" >
        <div style="margin: 2% 35%">
            <img  src="Img/facebook.png" width="30" height="30">
            <img  src="Img/phone.png" width="30" height="30">
            <img  src="Img/twitter.png" width="30" height="30">
            <img  src="Img/instagram.png" width="30" height="30">
            <img  src="Img/youtube.png" width="30" height="30">
        </div>
    </div>
</div>
<div class="topnav">
    <a href="Home.html">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>


<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tblproducts where productid=$id");
while($res = mysqli_fetch_array($result))
{
    ?>
    <div class="row">
        <div class="column1">
        <img width="500px" height="500px" src="uploads/<?php echo $res['productimg']; ?>"/>
        </div>
        <div class="column1">
            <h4>Product Name:</h4><h5><?php echo $res['productname'];?></h5>
            <h4>Product Price:</h4><?php echo $res['productprice'];?>
            <h4>Product code:</h4><?php echo  $res['productcode'];?>
            <h4>Product in stock:</h4><?php echo $res['productinstock'];?>
            <h4>Product Discount:</h4><?php echo $res['productdiscount'];?>
            <h4>Product Sizes:</h4><?php echo  $res['productsizes'];?>
            <h4>Product Details:</h4><?php echo  $res['productdetails'];?>

         <?php
            }
            ?>
        </div>
    </div>



</body>
</html>
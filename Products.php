
<?php
include_once("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM tblproducts");
?>


<html>
<head>
    <link href="mystyle1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>


        .column1{
            float: left;
            width: 33.33%;
            padding: 15px;
        }


        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width:600px) {
            .column1 {
                width: 100%;
            }
    </style>
</head>

<body>
<div class="row" >
    <div class="col-md-6" >
        <a href="Home.php"> <img  style="margin : 20px 0px 0px 20px;" src="Img/Logo.png" width="150" height="140" ></a>
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
    <a href="Home.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>

<div class="row">
    <?php


    while($res = mysqli_fetch_array($result)) {



?>
        <div class="column1">

          <?php  echo "<a href=\"Prodetail.php?id=$res[productid]\" > "; ?><img width="400px" height="400px"  src="uploads/<?php echo $res['productimg']; ?>"/></a><br>
            <div  class="column1" style="padding-left: 30%"> <?php  echo "<a href=\"Prodetail.php?id=$res[productid]\" class='pillbutton'> "; ?><?php  echo $res['productname'] ;  ?></a></div>


        </div>
        <?php
    }
    ?>


</div>
<div class="row" style="background-color:black" >
    <div class="col-md-6" >

    </div>
    <div class="col-md-6 linee" style="background-color:black" >
        <img style="margin : 0px 0px 0px 300px;" src="Img/facebook.png" width="30" height="30">
        <img  src="Img/phone.png" width="30" height="30">
        <img  src="Img/twitter.png" width="30" height="30">
        <img  src="Img/instagram.png" width="30" height="30">
        <img  src="Img/youtube.png" width="30" height="30">
    </div>
</div>
</body>
</html>
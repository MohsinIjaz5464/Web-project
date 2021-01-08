<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .topnav1 {
            overflow: hidden;
            background-color: aqua;
        }

        /* Style the topnav links */
        .topnav1 a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 0.5% 15%;
            text-decoration: none;
        }


        .topnav1 a:hover {
            background-color: #ddd;
            color: black;
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

<div class="topnav1">
    <a href="Home.html">Home</a>
    <a href="view.php">View Products</a>
    <a href="logout.php">Logout</a>
</div>


<div class="row">

    <div class="column" style="border: 2px solid black">
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {
    $id = $_POST['productid'];
    $name = $_POST['productname'];
    $price = $_POST['price'];
    $pcode = $_POST['productcode'];
    $instock = $_POST['productinstock'];
	$discount = $_POST['productdiscount'];
	$sizes = $_POST['productsizes'];
    $detail = $_POST['productdetail'];
    $image = $_FILES['productimg']['name'];



    $target= "uploads/".basename($image);
    move_uploaded_file($_FILES['productimg']['tmp_name'],$target);
	// checking empty fields
	if(empty($id) || empty($name) || empty($price) || empty($pcode) || empty($instock) || empty($sizes) || empty($detail) || empty($image)) {

        if(empty($id)) {
            echo "<font color='red'>ID field is empty.</font><br/>";
        }
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($price)) {
			echo "<font color='red'>price field is empty.</font><br/>";
		}

		if(empty($pcode)) {
			echo "<font color='red'>Product code field is empty.</font><br/>";
		}
        if(empty($instock)) {
            echo "<font color='red'>Stock field is empty.</font><br/>";
        }
        if(empty($sizes)) {
            echo "<font color='red'>Sizes field is empty.</font><br/>";
        }
        if(empty($detail)) {
            echo "<font color='red'>Product detail field is empty.</font><br/>";
        }
        if(empty($image)) {
            echo "<font color='red'>Image field is empty.</font><br/>";
        }
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";




	} else {
		$result = mysqli_query($mysqli, "INSERT INTO tblproducts(productid, productname, productprice, productcode,productinstock,productdiscount,productsizes,productdetails,productimg) 
        VALUES('$id','$name','$price','$pcode','$instock','$discount','$sizes','$detail','$image')");


		echo "<font color='green' >Data added successfully.";
		echo "<br/><a href='view.php' class='button'  style=\"vertical-align:middle\"><span>View Result</span></a>";
	}
}
?>
    </div>
</div>
</body>
</html>

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include_once("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM tblproducts");
?>

<html>
<head>
	<title>Homepage</title>
    <link href="mystyle1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>

        .size{
            padding: 1%;

            width: 50px;
            height: 50px;

        }
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
            padding: 0.5% 10%;
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
<div class="topnav1">
    <a href="Home.php">Home</a>
    <a href="logout.php">Logout</a>
    <a href="add.html">Add New Data</a>
    <a href="Products.php">Products</a>
</div>


	
	<table style="margin-left: 0%;text-align: center" width='100%' border=1>
		<tr bgcolor='#CCCCCC'>
            <td>ID</td>
			<td>Name</td>
			<td>Price</td>
            <td>Instock</td>
            <td>Discount</td>
            <td>Image</td>
            <td>Update</td>

		</tr>



		<?php


		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['productid']."</td>";
			echo "<td>".$res['productname']."</td>";
			echo "<td>".$res['productprice']."</td>";
            echo "<td>".$res['productinstock']."</td>";
            echo "<td>".$res['productdiscount']."</td>";
            ?>

            <td><img class="size" src="uploads/<?php echo $res['productimg']; ?>"/></td>
        <?php
			echo "<td><a href=\"edit.php?id=$res[productid]\" class='pillbutton'>Edit</a> | <a href=\"delete.php?id=$res[productid]\" class='pillbutton' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>	
</body>
</html>

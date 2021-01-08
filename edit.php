<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");


if(isset($_POST['update']))
{
    $id = $_POST['id'];

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
    if( empty($name) || empty($price) || empty($pcode) || empty($instock) || empty($sizes) || empty($detail) || empty($image)) {

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
	}
    else {

		//updating the table
		$result = mysqli_query($mysqli, "UPDATE tblproducts SET  productname='$name', productprice='$price',productcode='$pcode'
        ,productinstock='$instock' ,productdiscount='$discount' ,productsizes='$sizes' ,productdetails='$detail' ,productimg='$image'WHERE productid='$id'");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tblproducts WHERE productid=$id");

while($res = mysqli_fetch_array($result))
{

    $name = $res['productname'];
    $price = $res['productprice'];
    $pcode = $res['productcode'];
    $instock = $res['productinstock'];
    $discount = $res['productdiscount'];
    $sizes = $res['productsizes'];
    $detail = $res['productdetails'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="mystyle1.css" rel="stylesheet" type="text/css">
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
	
	<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
		<table border="0">

            <tr>
                <td>Name</td>
                <td><input type="text" name="productname" value="<?php echo $name ;?>"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $price ;?>"></td>
            </tr>
            <tr>
                <td>Code</td>
                <td><input type="text" name="productcode" value="<?php echo $pcode ;?>"></td>
            </tr>
            <tr>
                <td>In stock</td>
                <td><input type="text" name="productinstock" value="<?php echo $instock ;?>"></td>
            </tr>
            <tr>
                <td>Discount</td>
                <td><input type="text" name="productdiscount" value="<?php echo $discount ;?>"></td>
            </tr>
            <tr>
                <td>Sizes</td>
                <td><input type="text" name="productsizes" value="<?php echo $sizes ;?>"></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><input type="text" name="productdetail" value="<?php echo $detail;?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="productimg"></td>
            </tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>

			</tr>
		</table>
	</form>
    </div>
</div>
</body>
</html>

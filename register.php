<html>
<head>
    <link href="mystyle1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
<div class="row">

    <div class="column" style="border: 2px solid black">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['userpassword'];

	if($user == "" || $pass == "" ) {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO tblusers(username, userpassword) VALUES('$user','$pass')")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php' class='button' style=\"vertical-align:middle\"><span>Login</span></a>";
	}
} else {
?>
	<p id="header"><font size="+2">Enter Your Data</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">

			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="userpassword"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?></div>
</div>
</body>
</html>

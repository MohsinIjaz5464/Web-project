<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <style>
        #menu ul{
            list-style:none;
            margin : 0px px 0px 250px;
        }
        #menu ul li{
            width:300px;
            height:23px;
            background-color:aqua;
            border:none;
            text-align:center;
            padding-top:50x;
            float: left;
        }
        #menu ul li a{
            color:white;
            text-decoration:none;
            padding-right:5px;
            text-align:center;
        }
        .linee{
            display: inline-block;
            margin : 20px 0px 0px 0px;
        }
        .mySlides {display:none;}
        .tab-content {
            border: 10px solid white;
            border-decoration:shadow;

        }
    </style>
</head>
<body  style="background-color:white;">
<div class="row" >
    <div class="col-md-6" >
        <a href="Home.html"> <img  style="margin : 20px 0px 0px 20px;" src="Img/Logo.png" width="150" height="140" ></a>
    </div>
    <div class="col-md-6 linee" >
        <img style="margin : 0px 0px 0px 300px;" src="Img/facebook.png" width="30" height="30">
        <img  src="Img/phone.png" width="30" height="30">
        <img  src="Img/twitter.png" width="30" height="30">
        <img  src="Img/instagram.png" width="30" height="30">
        <img  src="Img/youtube.png" width="30" height="30">

    </div>
</div>
<div class="row" style="background-color:aqua">
    <div class="col-md-12"  >
        <div id="menu" >
            <ul>

                <li> <a href="Home.php"> <b style="color: black"> Home</b> </li>
                <li> <a href="About Us.html" > <b style="color: black">About US</b> </li>
                <li> <a href="Products.php"> <b style="color: black">Products </b></li></a>
                <li> <a href="Contact Us.html"> <b style="color: black">Contact Us </b></li></a>
                <li> <a href="login.php"> <b style="color: black">Login </b></li></a>

            </ul>

        </div>
    </div>

</div>
<div class="w3-content w3-display-container" style="margin : 20px 0px 0px 150px;">
    <img class="mySlides" src="Img/banner3.jpg" style="width:100%;height:50%">
    <img class="mySlides" src="Img/banner2.jpg" style="width:100%;height:50%">
    <img class="mySlides" src="Img/banner1.jpg" style="width:100%;height:50%">


    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
<div class="row" >
    <div class="col-md-12"  >
        <h1 style="margin:50px 0px 0px 50px; color:black;"> <u>World Best Nature Pictures</u> </h1>
        <h4 style="margin:50px 0px 0px 50px; color:black;"> <b>Recent Pictures:</b> </h4>
    </div>
</div>
<div class="row" >
    <div class="col-md-4 tab-content">
        <img style="margin : 0px 0px 0px 200px; border: 3px solid black;" src="Img/pic1.PNG" width="150" height="140">
        <p style="margin : 0px 0px 0px 250px"> Mosque</p>

    </div>
    <div class="col-md-4 tab-content">
        <img style="margin : 0px 0px 0px 100px;border: 3px solid black; " src="Img/pic2.PNG" width="150" height="140" >
        <p style="margin : 0px 0px 0px 135px"> Construction</p>
    </div>
    <div class="col-md-4 tab-content" >
        <img style="border: 3px solid black; " src="Img/pic3.PNG" width="150" height="140" >
        <p style="margin : 0px 0px 0px 50px"> Mosque</p>
    </div>
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
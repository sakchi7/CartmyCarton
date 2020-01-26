<?php
include("connectivity.php");
?>
<!DOCTYPE html>


<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <style>
.mySlides {display: none;}
img {vertical-align: center;}

		/*body {
 			background-image: url('images/img.jpg');
  			background-repeat: no-repeat;
  			background-attachment: fixed; 
  			background-size: 100% 100%;
		}*/
	
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
/*.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
*/
.active{
    background-color:#CA226B;
    }

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: pink;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  active:grey;
 
}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.button {
  background-color: #CA226B; /* Green */
  border: none;
  color: black;
  padding: 15px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 3px 1px;
  cursor: pointer;
}


.button1 {border-radius: 90%;
 padding: 15px 40px}
.button2 {border-radius: 50%;
 padding: 15px 30px}


</style>
    
</head>

<body>
    <span><h1 align="right"><font style="CG Omega">CartMyCarton</font><img src="images/logomin2.png" align="right"></h1></span>
    <div class="header" id="myHeader">
    <div class="navbar">
        <a  class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="myproduct.php"><i class="fa fa-fw fa-cart-plus"></i> My Products</a>
        <a href="my_orders.php"><i class="fa fa-fw fa-cart-arrow-down"></i> My Orders</a>
       <a href="change_password.php"><i class="fa fa-fw fa-lock"></i> Change Password</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
    	 <a href="home.php" style="margin-right:100px;"><i class="fa fa-fw fa-user"></i> <u><?php echo $_SESSION['register_no']; ?></u></a>	
    		
</div>
    </div>
    <marquee direction="right"  behavior="alternate"  bgcolor="#FFE4E1" hspace="10" >
        <font color = "#CA226B" size = "3"><b>My Account!!</b><i class="fa fa-fw fa-facebook" ></i><i class="fa fa-fw fa-twitter"></i><i class="fa fa-fw fa-google"></i><i class="fa fa-fw fa-instagram"></i> </font> 
    </marquee>
<br><br>    
  <div>  
    <div class="slideshow-container" >

<div class="mySlides fade" >
  
  <img src="images/bicycle.jpg" style="width:30%; margin-left:320px;">
  <div class="text" style="font-size:20px; color:#CA226B; margin-left:520px;">Bicycle</div>
</div>

<div class="mySlides fade">
 
  <img src="images/cooler1.jpg" style="width:30%; margin-left:320px; length:20%;">
  <div class="text"    style="font-size:20px; color:#CA226B; margin-left:520px;">Cooler</div>
</div>
<div class="mySlides fade">
  <img src="images/bedroll1.jpg" style="width:30%; margin-left:320px;">
  <div class="text"   style="font-size:20px; color:#CA226B; margin-left:520px;">Bedroll</div>
</div>
<div class="mySlides fade">
 
  <img src="images/kettle1.jpg" style="width:26.1%; margin-left:350px;">
  <div class="text"    style="font-size:20px; color:#CA226B; margin-left:520px;">Kettle</div>
</div>

<div class="mySlides fade">
   <img src="images/table.jpg" style="width:30%; margin-left:320px;">
  <div class="text"  style="font-size:20px; color:#CA226B; margin-left:480px;">Study Table</div>
</div>


</div>
<br>

<div style="margin-left:680px;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<br>
 <center>
    <button class="button button1"  onclick="window.location.href='sell.php'"><i class="fa fa-fw fa-shopping-cart"></i>SELL</button>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <button class="button button2" onclick="window.location.href='products_ad.php'"><i class="fa fa-fw fa-shopping-bag"></i>PURCHASE</button>
    </center>
    </header>
      </div>
     <br>
      
      <footer class="container-fluid bg-4 " style="background:#FFE4E1;">
         <p ><center>For more queries, email us at: <a href="mailto: cartmycarton001@gmail.com" target="_blank">cartmycarton001@gmail.com</a></center></p>
               <p><center>Contact Us: +919958192532 , +918860588687</center></p>
     
      </footer>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 4 seconds
}
</script>

  

</body>
</html>
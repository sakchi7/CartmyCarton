<!DOCTYPE html>
<html>
<head>
	<title>Cart my Carton</title>
	<link rel="icon" href="images/logomin.png" type="image/x-icon">
	<style>
	.button 
	{
  		display: inline-block;
  		border-radius: 4px;
  		background-color: #ffe4e1;
  		border: none;
  		color: #000000;
  		text-align: center;
  		font-size: 25px;
  		padding: 20px;
  		width: 200px;
  		transition: all 0.5s;
  		cursor: pointer;
  		margin: 5px;
	}

	.button span
	{
  		cursor: pointer;
  		display: inline-block;
  		position: relative;
  		transition: 0.5s;
	}

	.button span:after
	 {
  		content: '\00bb';
  		position: absolute;
  		opacity: 0;
  		top: 0;
  		right: -20px;
  		transition: 0.5s;
	}

	.button:hover span {
  		padding-right: 25px;
	}

	.button:hover span:after {
  		opacity: 1;
  		right: 0;
	}
	#myDIV
	{
		width: 45%;
		padding: 50px 0;
		text-align: center;
		background-color: #ffe4e1;
		margin-top: 100px;
		margin-left: 250px;
		
	}
	</style>
</head>
	<style>
		body {
 			background-image: url('images/bk.jpg');
  			background-repeat: no-repeat;
  			background-attachment: fixed; 
  			background-size: 100% 100%;
		}
	</style>
<body>
	<img src="images/logo.png" alt="CartmyCarton" style="width:270px;height:110px;">

	<button class="button" style="vertical-align:middle; position: absolute; left: 0;top: 250px" onclick="myFunction()"><span>About Us </span></button>

	<div style="font-size:130%; width: 600px; padding: 30px; margin-left: 400px; margin-top: 60px;" id="myDIV" hidden>Cart my Carton is an online platform for buying and selling necessary usable products that are useful to the college students of MNNIT Allahabad. We look forward to fulfilling your needs and conviniency. Here, we are focusing on the basic products that students need to buy for their hostel room and also all the products that he/she doesn't need after their graduation. This includes, bedroll, cooler, study table and many more items. We hope you find your need and choice. Thank you!</div>

	<script>
		function myFunction() {
  			var x=document.getElementById("myDIV");
  			if(x.style.display === "none")
  			{
  				x.style.display="block";
  			}
  			else
  			{
  				x.style.display="none";
  			}
		}
	</script>

	<a href="login.php"><button class="button" style="vertical-align:middle; position: absolute; right: 0;top:200px"><span>Sign In </span></button></a>
	<a href="signup.php"><button class="button" style="vertical-align:middle;position: absolute; right: 0; bottom: 300px"><span>Sign Up </span></button></a>

	<div id="copyright" style="background-color: #ffe4e1; width:100%; color: black;padding:20px; text-align: center;position: absolute; bottom: 0;">
	<p>For more queries, email us at: <a href="mailto: cartmycarton001@gmail.com" target="_blank">cartmycarton001@gmail.com</a></p>
	<p>Contact Us: +919958192532 , +918860588687</p>
	</div>
</body>
</html>
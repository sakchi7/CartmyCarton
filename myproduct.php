<?php
  require("connectivity.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Products</title>
	<link rel="stylesheet" type="text/css" href="css/change_pass.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .active{
    background-color:#CA226B;
    }
    
    
     background-color:#CA226B;
    }
    table{  
      border: none;
      text-align: left;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

     td {
      padding: 30px;
      border : none;
    }
    
    .setbuyer{
        background-color : #CA226B;
        color: black;
        border: none;
        padding: 7px 10px;
	margin: 8px 0;
        font-weight: 500px;
        font-family: Times New Roman;
        font-size: 15px;
    } 
    .setbuyer:hover {
      background-color: #F778A1;
      text-decoration: none;
    }
    </style>
    
</head>

<body >

	<span><h1 align="right"><font style="CG Omega">CartMyCarton</font><img src="images/logomin2.png" align="right"></h1></span>
    <div class="header" id="myHeader">
    <div class="navbar">
        <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a class="active" href="myproduct.php"><i class="fa fa-fw fa-cart-plus"></i> My Products</a>
        <a  href="my_orders.php"><i class="fa fa-fw fa-cart-arrow-down"></i> My Orders</a>
       <a   href="change_password.php" ><i class="fa fa-fw fa-lock"></i> Change Password</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
    	 <a href="home.php" style="margin-right:100px;"><i class="fa fa-fw fa-user"></i> <u><?php echo $_SESSION['register_no']; ?></u></a>	
    		
    </div>
    </div>
  
      <footer class="container-fluid bg-4 " style="background:#FFE4E1;">
         <p ><center>For more queries, email us at: <a href="mailto: cartmycarton001@gmail.com" target="_blank">cartmycarton001@gmail.com</a></center></p>
               <p><center>Contact Us: +919958192532 , +918860588687</center></p>
     
      </footer>
</body>
</html>
    
    
    
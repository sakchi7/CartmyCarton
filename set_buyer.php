<?php
  require("connectivity.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buyer Information</title>
	
  <link rel="stylesheet" type="text/css" href="css/Home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <style>
    .active{
        background-color:#CA226B;
    }

    .btn{
        background-color : #CA226B;
        color: black;
        border: none;
        font-weight: 500px;
        font-family: Times New Roman;
        font-size: 15px;
    }
    .btn:hover {
      background-color: #F778A1;
      text-decoration: none;
    } 
    </style>  
	
</head>
<body>
 
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

  <h2 align = "center">Product Sold</h2>
  <form class="form-horizontal" action="set_buyer.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-3">Product ID : </label>
      <div class="col-sm-7">
        <input type="number" class="form-control" id="prod_id" placeholder="Product ID" name="prod_id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" >Buyer Registration Number : </label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="buyer_regno" placeholder="Registration Number" name="buyer_regno" required>
      </div>
    </div>
     <div class="form-group">        
    <div class="col-sm-offset-5 col-sm-15">
        <button type="submit" id="submit" name="submit" class = "btn">Submit</button>
    </div>
    </div>
</form>
</div>
<footer class="container-fluid bg-4 " style="background:#FFE4E1;">
         <p ><center>For more queries, email us at: <a href="mailto: cartmycarton001@gmail.com" target="_blank">cartmycarton001@gmail.com</a></center></p>
               <p><center>Contact Us: +919958192532 , +918860588687</center></p>
</footer>

<?php

if(isset($_POST['submit'])){
	$user_id = $_SESSION['register_no'];
	$p_id = mysqli_escape_string($db,$_POST['prod_id']);
	$buyer_id = mysqli_escape_string($db,$_POST['buyer_regno']);
	//check if buyer id is not same to the id which is logged in
	if($user_id == $buyer_id){
		echo "<script type='text/javascript'>alert('Buyer ID cannot be same as Logged in ID')</script>";
	}
    $query = "UPDATE products SET buyer_regno = '$buyer_id' WHERE product_id = '$p_id'";
    $result = mysqli_query($db,$query);
    if($result){
       echo "<script type='text/javascript'>alert('Updated Succesfully')</script>";	
    }
    else{
    	echo "<script type='text/javascript'>alert('Failed! Try again')</script>";
    }
}

?>
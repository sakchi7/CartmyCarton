<?php
  require("connectivity.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/change_pass.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .active{
    background-color:#CA226B;
    }</style>
    
</head>

<body >

	<span><h1 align="right"><font style="CG Omega">CartMyCarton</font><img src="images/logomin2.png" align="right"></h1></span>
    <div class="header" id="myHeader">
    <div class="navbar">
        <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="myproduct.php"><i class="fa fa-fw fa-cart-plus"></i> My Products</a>
        <a href="my_orders.php"><i class="fa fa-fw fa-cart-arrow-down"></i> My Orders</a>
       <a  class="active" href="change_password.php" ><i class="fa fa-fw fa-lock"></i> Change Password</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
    	 <a href="home.php" style="margin-right:100px;"><i class="fa fa-fw fa-user"></i> <u><?php echo $_SESSION['register_no']; ?></u></a>	
    		
</div>
    </div>
    
<div class="container">
  <h2>Change Password</h2>
  <form class="form-horizontal" action="" method="post">
    <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="curr_pass">Current Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="curr_pass" placeholder="Current Password" name="curr_pass" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="new_pass">New Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="new_pass" placeholder="New Password" name="new_pass" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="retype_new_pass">Re-enter New Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="retype_new_pass" placeholder="Retype New Password" name="retype_new_pass" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="background:#ca226b; font-size:16px; border: 2px solid #ca226b;"><b>Change</b></button>
       <!--button class="button"  class="btn btn-primary" name="submit" id="submit" style="background:#ca226b; " >Change</button-->
      </div>
    </div>
  </form>
</div>
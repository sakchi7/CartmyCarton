<?php 
include("connectivity.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sell_product.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Sell Products</title>
	<style>
		.btn-group button{
			margin-top: 25px;
			background-color: #FFE4E1;
			border: 1px solid pink;
			font-family: Times New Roman;
			font-size: 20px;
			padding: 10px 24px;
			cursor: pointer;
			width: 130%;
			display: block;
		}
		.btn-group button:not(:last-child){
			border-bottom: none;
		}
		.btn-group button:hover{
			background-color: #CA226B;
		}
	</style>
</head>
<body>
	<span><h1 align="center"><font style="CG Omega">Sell  Products</font><img src="images/logomin2.png" align="right"></h1></span>
    <div class="header" id="myHeader">
    <div class="navbar">
        <a  class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="myproduct.php"><i class="fa fa-fw fa-cart-plus"></i> My Products</a>
        <a href="my_orders.php"><i class="fa fa-fw fa-cart-arrow-down"></i> My Orders</a>
        <a href="front_page.php"><i class="fa fa-fw fa-user"></i> Logout</a></li>
    </div>
    <marquee direction="right"  behavior="alternate"  bgcolor="#FFE4E1" hspace="10" >
        <font color = "#CA226B" size = "3"><b>Welcome to CartMyCarton!</b><i class="fa fa-fw fa-cart-arrow-down"></i></font> 
    </marquee>
    <br>
    <br>
    </div>
    <table>
    <tr>
        <td>
    <div class="btn-group">
    	<button onclick="window.location.href='sell_bedroll.php'">Bedroll</button>
    	<button onclick="window.location.href='sell_cooler.php'">Cooler</button>
    	<button onclick="window.location.href='sell_bicycle.php'">Cycle</button>
    	<button onclick="window.location.href='sell_kettle.php'">Kettle</button>
    	<button onclick="window.location.href='sell_table.php'">Study Table</button>
    </div><td>
        <td>
    <div class="container" style="text-align: center;">
        <h2 class="color-black">Kettle Details</h2>
        <form class="form-horizontal" action="sell_kettle.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="kettle_model" >Kettle Model</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kettle_model" placeholder="Kettle Model" name="kettle_model" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="kettle_color" >Kettle Color</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kettle_color" placeholder="Kettle Color" name="kettle_color" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="kettle_capacity" >Kettle Capacity</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kettle_capacity" placeholder="Kettle Capacity" name="kettle_capacity" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="purchase_date" >Purchase Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="purchase_date" placeholder="Purchase Date" name="purchase_date" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="amount" >Expected Amount</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="image">Add Image
                </label>
            <div class="col-sm-10">
                <input type="file" name="image" id="image" placeholder="Insert an image" required></div>
            </div>
            <br>
            <br>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color: #CA226B">Submit</button>
                </div>
            </div>
        </form>
    </div></td></tr></table>

    
</body>
</html>
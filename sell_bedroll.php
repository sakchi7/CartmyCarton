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
        <h2 class="color-black">Bedroll Details</h2>
        <form class="form-horizontal" action="sell_bedroll.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="bed_name" >Bed Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bed_name" placeholder="Bed Name" name="bed_name" required></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2 color-white" for="bed_color" >Bed Color</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bed_color" placeholder="Bed Color" name="bed_color" required></div>
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

    <?php
        
        $owner_id=$_SESSION['register_no'];
        if(isset($_POST['submit']))
        {
            $b_name=mysqli_escape_string($db,$_POST['bed_name']);
            $b_color=mysqli_escape_string($db,$_POST['bed_color']);
            $p_date=mysqli_escape_string($db,$_POST['purchase_date']);
            $amt=mysqli_escape_string($db,$_POST['amount']);
            $b_type="Bedroll";
            $filename=$_FILES['image']['name'];
            $filetmpname=$_FILES['image']['tmp_name'];
            $folder="images/";
            move_uploaded_file($filetmpname, $folder.$filename);
            $sql1="INSERT INTO `Products` (`product_name`,`product_type`,`owner_regno`) VALUES ('$b_name','$b_type','$owner_id')";
            $result1=mysqli_query($db,$sql1);
            if($result1){
                $query2="SELECT product_id FROM Products WHERE product_name='$b_name' and owner_regno='$owner_id'";
                $result2=mysqli_query($db,$query2);
                $row=mysqli_fetch_assoc($result2);
                $tmp=$row["product_id"];
                $query3="INSERT INTO Bedroll (bed_id,bed_name,bed_color,purchase_date,amount,image_path) VALUES ('$tmp','$b_name','$b_color','$p_date','$amt','$filename')";
                $result3=mysqli_query($db,$query3);
                if($result3)
                {
                    echo "<script type='text/javascript'>alert('Successfully Submitted')</script>";
                }
                else{
                  echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
                } 
            }
            else{
                  echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
            } 
        }
    ?>
</body>
</html>
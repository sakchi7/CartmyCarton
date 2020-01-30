<?php
  require("connectivity.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>MyOrders</title>
	<link rel="stylesheet" type="text/css" href="css/change_pass.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .active{
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
    </style>
    
</head>

<body >

	<span><h1 align="right"><font style="CG Omega">CartMyCarton</font><img src="images/logomin2.png" align="right"></h1></span>
    <div class="header" id="myHeader">
    <div class="navbar">
        <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a  href="myproduct.php"><i class="fa fa-fw fa-cart-plus"></i> My Products</a>
        <a  class="active" href="my_orders.php"><i class="fa fa-fw fa-cart-arrow-down"></i> My Orders</a>
       <a   href="change_password.php" ><i class="fa fa-fw fa-lock"></i> Change Password</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
    	 <a href="home.php" style="margin-right:100px;"><i class="fa fa-fw fa-user"></i> <u><?php echo $_SESSION['register_no']; ?></u></a>	
    		
</div>
    </div>
   
 <table>
 <?php
    $user_num = $_SESSION['register_no'];
$query = "SELECT * FROM products where buyer_regno= '$user_num'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result) == 0){
  echo "<script type='text/javascript'>alert('You have not bought any Item')</script>";
}

while ($row = mysqli_fetch_assoc($result)) {
    
    $id = $row["product_id"];
    $owner = $row["owner_regno"];
    
        $query2 = "SELECT * FROM Users WHERE Registration_No = '$owner'";
    	$result2 = mysqli_query($db,$query2);
    	$row2 = mysqli_fetch_assoc($result2);
        $email = $row2["Email_id"];
        $mobile = $row2["Mobile_no"];
        $name = $row2["User_name"];
        $regno = $row2["Registration_No"];
    
    if ($row["product_type"]==="Cooler") {
      $query3 = "SELECT * FROM cooler WHERE cooler_id = '$id'";
      $result3 = mysqli_query($db,$query3);
      $row3 = mysqli_fetch_assoc($result3);
         $image_name = $row3["image_path"];
        
?>
       
                    <tr align="center">
                        <td align="left"><?php echo "<img src='images/$image_name' style='width:400px;height:300px;'>";?></td>
                        <td align="left">
                        <h2><u>Owner Details</u></h2>
                        <p>Prodct Name: <b><?php echo $row["product_type"]; ?> </b></p>
                            <p>Registration Number : <b><?php echo $owner; ?></b></p>
                             <p>Name : <b><?php echo $name; ?></b></p>
                                <p>Mobile Number : <b><?php echo $mobile; ?></b></p>
                                <p>Email Id : <b><?php echo $email; ?></b></p>
                                
                            <p><h4><b>Purchased Amount : &#8377;<?php echo $row3["amount"]; ?></b></h4></p>
                
        <?php
            }
            else if ($row["product_type"]==="Kettle") {
            $query2 = "SELECT * FROM kettle WHERE kettle_id = '$id'";
            $result2 = mysqli_query($db,$query2);
            $row3 = mysqli_fetch_assoc($result2);
         $image_name = $row3["image_path"];

       ?>
                   
                        <tr align="center">
                        <td align="left"><?php echo "<img src='images/$image_name' style='width:400px;height:300px;'>";?></td>
                        <td align="left">
                            <h2><u>Owner Details</u></h2>
                        <p>Prodct Name: <b><?php echo $row["product_type"]; ?> </b></p>
                            <p>Registration Number : <b><?php echo $owner; ?></b></p>
                             <p>Name : <b><?php echo $name; ?></b></p>
                                <p>Mobile Number : <b><?php echo $mobile; ?></b></p>
                                <p>Email Id : <b><?php echo $email; ?></b></p>
                                <p><h4><b>Purchased Amount : &#8377;<?php echo $row3["amount"]; ?></b></h4></p>
                            
        <?php
        
          }
            else if ($row["product_type"]==="Table") {
            $query2 = "SELECT * FROM studytable WHERE table_id = '$id'";
            $result2 = mysqli_query($db,$query2);
            $row3 = mysqli_fetch_assoc($result2);
             $image_name = $row3["image_path"];

            
       ?>
                          <tr align="center">
                                <td align="left"><?php echo "<img src='images/$image_name' style='width:400px;height:300px;'>";?></td>
                                <td align="left">
                                   <h2><u>Owner Details</u></h2>
                        <p>Prodct Name: <b><?php echo $row["product_type"]; ?> </b></p>
                            <p>Registration Number : <b><?php echo $owner; ?></b></p>
                             <p>Name : <b><?php echo $name; ?></b></p>
                                <p>Mobile Number : <b><?php echo $mobile; ?></b></p>
                                <p>Email Id : <b><?php echo $email; ?></b></p>
                                <p><h4><b>Purchased Amount : &#8377;<?php echo $row3["amount"]; ?></b></h4></p>
                          
    
        <?php
                
           }     
            else if ($row["product_type"]==="Cycle") {
            $query2 = "SELECT * FROM cycle WHERE cycle_id = '$id'";
            $result2 = mysqli_query($db,$query2);
            $row3 = mysqli_fetch_assoc($result2);
             $image_name = $row3["image_path"];

           
       ?>
       
       
                    <tr align="center">
                            <td align="left"><?php echo "<img src='images/$image_name' style='width:400px;height:300px;'>";?></td>
                            <td align="left">
                                <h2><u>Owner Details</u></h2>
                                <p>Prodct Name: <b><?php echo $row["product_type"]; ?> </b></p>
                                <p>Registration Number : <b><?php echo $owner; ?></b></p>
                             <p>Name : <b><?php echo $name; ?></b></p>
                                <p>Mobile Number : <b><?php echo $mobile; ?></b></p>
                                <p>Email Id : <b><?php echo $email; ?></b></p>
                                
                            <p><h4><b>Purchased Amount : &#8377;<?php echo $row3["amount"]; ?></b></h4></p>
                                            
<?php
}

            else if ($row["product_type"]==="Bedroll") {
            $query2 = "SELECT * FROM bedroll WHERE bed_id  = '$id'";
            $result2 = mysqli_query($db,$query2);
            $row3 = mysqli_fetch_assoc($result2);
         $image_name = $row3["image_path"];

       ?>
       
                                <tr align="center">
                <td align="left"><?php echo "<img src='images/$image_name' style='width:400px;height:300px;'>";?></td>
                <td align="left">
                   <h2><u>Owner Details</u></h2>
                        <p>Prodct Name: <b><?php echo $row["product_type"]; ?> </b></p>
                            <p>Registration Number : <b><?php echo $owner; ?></b></p>
                             <p>Name : <b><?php echo $name; ?></b></p>
                                <p>Mobile Number : <b><?php echo $mobile; ?></b></p>
                                <p>Email Id : <b><?php echo $email; ?></b></p>
                            <p><h4><b>Purchased Amount : &#8377;<?php echo $row3["amount"]; ?></b></h4></p>
       
<?php
}       
?> 
        
                                 
                                           </td></tr>
<?php
}
?> 

                   
 </table>
 
    <br><br><br>
  
      <footer class="container-fluid bg-4 " style="background:#FFE4E1;">
         <p ><center>For more queries, email us at: <a href="mailto: cartmycarton001@gmail.com" target="_blank">cartmycarton001@gmail.com</a></center></p>
               <p><center>Contact Us: +919958192532 , +918860588687</center></p>
     
      </footer>   
</body>
</html>
<!DOCTYPE html>
<!--?php
include("connect_login.php");
error_reporting(0);
?>--> 
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login_Page</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/login_style.css">

  
</head>

<body background="images/img.jpg">
  <div class="login-wrap" style="background:rgb(255, 255, 255) transparent; background-repeat:repeat; height:200%; width:200%;"  >
       

  <div class="login-html">
     
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="color:white;">Sign In</label>
    
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">


      <form class="sign-in-htm" action="login.php" method="POST" bgcolor="red">
        <div class="group">
          <label for="user" class="label">Registration Number</label>

          <input id="Registration_No" name="reg_no" placeholder="Registration Number" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="User_password" name="pwd" type="password" placeholder="Password" class="input">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
                 
        <button type="button" value="Cancel" name="cancel" id="cancel" class="button" style="background:black;" onclick="window.location.href='front_page.php'">Cancel</button>   
         <input type="submit" class="button" value="SIGN IN" name="submit" style="background:#ca226b;" id="submit">
                    
           </div>
         </br>
        <br><br>
        <p style="color:white; font-size:18px;">Click here to <a href="signup.php"><b style="color:blue;" >SIGNUP</b></a></p>
      
      </form>
         </div>
         
  </div>
  
</div>

<?php
include("connectivity.php");
//$db = mysqli_connect('localhost','root','password','cartmycarton');

    if(isset($_POST['submit'])){
        $userName = $_POST["reg_no"];
        $passWord = $_POST["pwd"];
     //$userName = mysqli_escape_string($db,$_POST['Registration_No']); 
     //$passWord = mysqli_escape_string($db,$_POST['User_password']);
     //$passWord=md5($password); 
//echo"<center><h2>Sucess!!</h2></center>";
$query = "SELECT * FROM users WHERE Registration_No='$userName' and User_password='$passWord'";
$res = mysqli_query($db,$query);
      //$login = mysqli_query("SELECT * FROM 'users' WHERE userName= $_post['username'] AND passWord= $_post['password'])");
       // Check username and password match
     // $res = mysqli_query($db,$query);
        $rows = mysqli_fetch_array($res,MYSQLI_ASSOC);
        $count = mysqli_num_rows($res); 
     // $rows = mysqli_num_rows($res);
      if ($count==1) {
      // Set username session variable

     // $_SESSION['Registration_No'] = $_POST['userName'];

     // Jump to secured page
//      header("Location: securedpage.php");
    
                 $_SESSION['register_no'] = $userName;
              //   echo"<script type='text/javascript'>alert('Logged in Sucessfully')</script>" ;
           $_SESSION['success'] = "You are now logged in";
           header('location: home.php');
     }
     else {
     // Jump to login page
     echo "<script type='text/javascript'>alert('You are not Registered!! Please Signup')</script>" ;
     }}
     
?> 

</body>

</html>
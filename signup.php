<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/signup.css">
<title> Registration_page </title>
</head>

<body background="images/img.jpg" id="background">
    <div class="reg_form">
        <h3>Registration Form</h3>
        <form action="signup.php" method="post">
        <!--<div class = "container">-->
        <p>Full Name</p>
        <input type="text" id="name" name="name" placeholder="Full Name" required>
        
        <p>Registration Number</p>
        <input type="text" id="reg_no" name="reg_no" placeholder="Registration Number" required>
        
        <p>Email</p>
        <input type="email" id="email" name="email" placeholder="Email" required>
        
        <p>Mobile Number</p>
        <input type="text" id="mob_no" name="mob_no" placeholder="Mobile Number" required>
        
        <p>Password</p>
        <input type="password" id="password" name="password" placeholder="password" required>
        
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        </br>
        <div class="end">
              <button type="button" value="Cancel" name="cancel" id="cancel" class="cancelbtn" onclick="window.location.href='front_page.php'">Cancel</button>
              <button type="submit" value="Submit" name="submit" id="submit" class="submitbtn">Submit</button>
            </div>
        </br>

        <p>Click here to <a href="login.php">Login</a></p>
        <!--</div>-->
        </form>
    </div>

<?php
$db = mysqli_connect('localhost','root','password','cartmycarton');

if(isset($_POST['submit'])=='Submit'){
  $name = mysqli_escape_string($db,$_POST['name']) ;
  $mobile_no = mysqli_escape_string($db,$_POST['mob_no']);
  $registration_number = mysqli_escape_string($db,$_POST['reg_no']);
  $email_address = mysqli_escape_string($db,$_POST['email']);
  $password = mysqli_escape_string($db,$_POST['password']);
  
  $query = "INSERT INTO Users (Email_id,User_name,Mobile_no,Registration_no,User_password) VALUES ('$email_address','$name','$mobile_no','$registration_number','$password')";

  $result = mysqli_query($db,$query);
  
  echo '$result';
  
  if($result){
    echo "<script type='text/javascript'>alert('Submitted Successfully!!!')</script>";
  }
  else{
   echo "<script type='text/javascript'>alert('Registration Failed. Please try again')</script>"; 
  }
}

?>

</body>
</html>
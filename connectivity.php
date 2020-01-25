<?php

    // Inialize session

    session_start();
    // Include database connection settings
    $hostname = "localhost";        // Your MySQL hostname. Usualy named as 'localhost',        so you're NOT necessary to change this even this script has already     online on the   internet.
     $username = "root";             // Your database username.
    $password = "password";                 // Your database password. If your database has no           password, leave it empty.
    $dbname   = "cartmycarton"; // Your database name.
   
     // Let's connect to host
     $db = mysqli_connect($hostname, $username, $password, $dbname);// or DIE('Connection to host is failed, perhaps the service is down!');
     // Select the database
    //  mysqli_select_db($dbname) or DIE('Database name is not available!');
if($db){
   // echo'ok';
    // header("Location: menu.html");

    }

else{
    echo'NOT OK'.mysqli_connect_error();
    }

     
     ?>

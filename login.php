<?php

    // Inialize session

    session_start();
   
    $hostname = 'localhost';    
    $dbname   = 'fashion'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no           password, leave it empty.

     // Let's connect to host
     @mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,        perhaps the service is down!');
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');


      // Retrieve username and password from database according to user's input
     $userName=mysql_real_escape_string($_POST['UserName']); 
     $passWord=mysql_real_escape_string($_POST['Password']); 


       //*********retrieving data from Database**********

      $query = "SELECT * FROM `customers`	WHERE UserName='$userName' AND Password='$passWord'";
      //$login = mysqli_query("SELECT userName,password FROM 'member' WHERE userName=$_post['username'] AND passWord= $_post['password'])");
       // Check username and password match
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
      if ($rows>0) {
      // Set username session variable

      $_SESSION['UserName'] = $_POST['UserName'];
      //echo ("Welcome");

     // Jump to secured page
      header("Location:sale.html");
	  //echo $rows;
	  
     }
     else {
     // Jump to login page
     echo "user name and password not found";
     }
     exit;
     ?>
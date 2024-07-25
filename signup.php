<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $gmail=$_POST['email'];
    $pass=$_POST['password'];

    if(!empty($gmail) && !empty($pass) && !is_numeric($gmail))
    {
      $query="insert into signup (fname, lname, email, password) values ('$firstname','$lastname','$gmail','$pass')";

      mysqli_query($con,$query);

      echo "<script type='text/javascript'> alert('successfully registered') </script>";
    }
    else{
      echo "<script type='text/javascript'> alert('enter valid one') </script>";
    }

  }
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
      <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="sign.css"/>
      </head>
      <body>
        <div class="signup-box">
          <h1>Sign Up</h1>
          <h4>It's free and only takes a minute</h4>
          <h5 ><a href="medical.php">Home</a></h5>
          <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname">
            <label>Last Name</label>
            <input type="text" name="lname">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Submit">
          </form>
        </div>
        <p class="para-2">
          Already have an account? <a href="login.php">Login here</a>
        </p>
        
      </body>
    </html></span>
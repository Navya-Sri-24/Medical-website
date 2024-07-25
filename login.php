<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $gmail= $_POST['email'];
    $pass= $_POST['password'];

    if(!empty($gmail) && !empty($pass) && !is_numeric($gmail))
    {
      $query = "select * from signup where email = '$gmail' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
          if($result && mysqli_num_rows($result) >0)
          {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] == $pass)
            {
              header("Location: medical.php");
              die;
            }
          }
      }
      echo "<script type='text/javascript'> alert('wrong login credentials')</script>";
    }
    else{
      echo "<script type='text/javascript'> alert('wrong login credentials')</script>";
    }
   
  }
?>
<!DOCTYPE html>
    <html lang="en">
      <head>
        <title>Login</title>
        <link rel="stylesheet" href="sign.css" />
      </head>
      <body>
        <div class="login-box">
          <h1>Login</h1>
          <form method="POST">
            <label>Email</label>
            <input type="email" name="email" >
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Submit">
          </form>
        </div>
        <p class="para-2">
           don't have an account? <a href="signup.php">Sign Up Here</a>
        </p>
      </body>
    </html>

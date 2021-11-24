<?php
 include "navbar1.php";
 include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>

	<title>Sign Up</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- scroll effect -->

                                    <!-- scroll effect -->
  <script>                                
    $(document).ready(function() 
    {
      $("html, body").animate({
        scrollTop: $('html, body').get(0).scrollHeight
      }, 0.8);
    });

  </script>

    <style type="text/css">
        .slider
        {
            margin-top: -20px;
            position: absolute;
            width: 100%;
            height: 722px;
            background-size: cover;
            background-image: url("slideshow/8.jpg");
            animation-name: slider;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }
        @keyframes slider
        {
            0%
            {
                background-image: url("slideshow/6.jpg");
            }
            25%
            {
                background-image: url("slideshow/7.jpg");
            }
           
            50%
            {
                background-image: url("slideshow/8.jpg");
            }
            
            60%
            {
                background-image: url("slideshow/9.jpg");
            }
            
            75%
            {
                background-image: url("slideshow/6.jpg");
            }
            
            100%
            {
                background-image: url("slideshow/7.jpg");
            }
        
        }
        .container
        {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .details
        {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: white;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .details h2
        {
            color: tomato;
            text-align: center;
        }

        .details
        {

            height: 560px;
            width: 450px;
            background-color: black;
            margin: -30px auto;      /*Aligning in centre*/
            opacity: .6;
            color: white;
        }
        .login .form-control
        {

            height: 35px;
            width: 350px;
            
        }
  </style>   
</head>
<body>

<div class="slider">
        <div class="container">
            <div class="details">
              <br>
              <h1 style="text-align:center;font-size: 45px;font-family: Lucida Console;">HOLD UR BOOK</h1>
              <h1 style="text-align:center;font-size: 25px;font-family: Lucida Console;">USER REGISTRATION FORM</h1>
              <form name="Registration" action="" method="post">
                  <br>
                  <div class="login" style="text-align: center;">
                      <center>
                      <input class="form-control" type="text" name="name" placeholder="Name" required=""><br>
                      <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>      <!-- type = text makes the text visible-->
                      <input class="form-control" type="email" name="email" placeholder="Email" required=""><br>
                      <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>  <!-- type = password make the password invisible i.e ** -->

                      <input class="btn btn-success" type="submit" name="submit" value="Register" style="color: black; width: 80px; height: 40px;">
                      <br><br>
                      Already a member?&nbsp; <a style="color:deepskyblue;" href="login.php">Sign in</a>
                      </center>
                  </div>
              </form>
          </div>
  </div>  
</div>  

    
    
    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `USERS`";

        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res)) /*checking if the username already exist */
        {
            if($row['username']==$_POST['username'])
            {
                $count=$count+1;
            }
            
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `USERS` VALUES('$_POST[name]', '$_POST[username]', '$_POST[email]', '$_POST[password]', 'user.png');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
           location.replace("login.php");
          </script>

        <?php

        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php
        }
      }
    ?>

</body>
</html>
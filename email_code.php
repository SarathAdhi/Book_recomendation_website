<?php
  include "navbar1.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
  
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
            height: 722px;
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

		    height: 280px;
		    width: 430px;
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
		
		<h1 style="text-align:center;font-size: 45px;font-family: Lucida Console;">BOOK GENRE</h1>
		<h1 style="text-align:center;font-size: 25px;font-family: Lucida Console;">FORGOT PASSWORD</h1>
        <br>
		<form name="login" action="" method="post">
			
			<div class="login" style="text-align: center;">
				<center>				
                    <input class="form-control" type="text" name="email" placeholder="Registered Email" required=""><br>
				
				
				    <input class="btn btn-success" type="submit" name="submit1" value="Send Code" style="color: black;width: 100px;height: 40px;">
                </center>

			</div>
		</form>
		
	</div>
	</div>
</div>	


    <?php

      if(isset($_POST['submit1']))
      {
        $count=0;
        $sql="SELECT email from `USERS`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res)) /*checking if the username already exist */
        {
          if($row['email']==$_POST['email'])
          {
            $count=$count+1;
          }
        }
        if($count != 0)
        {
            $otp = rand(10000,99999);
            mysqli_query($db,"INSERT INTO `verify` VALUES('$_POST[email]', '$otp');");
            $msg = "Hello your OTP is: ".$otp.".";
            $from = "From: sarathzenith2003@gmail.com";
            
            if(mail($_POST['email'], "OTP", $msg, $from))
            {
                ?>
                    <script type="text/javascript">
                        alert("Email sent");
                        location.replace("otp.php");
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script type="text/javascript">
                        alert("Email not sent");

                    </script>
                <?php
            }
            
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Wrong Email");
            </script>

        <?php
            
        }

    }

    ?>

</body>
</html>

<?php
	include "connection.php";
    include "navbar1.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

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

		    height: 480px;
		    width: 430px;
		    background-color: black;
		    margin: -30px auto;      /*Aligning in centre*/
		    opacity: .6;
		    color: white;
		}
        .login .form-control
        {

            height: 35px;
            width: 340px;
            
        }
  </style> 
</head>
<body>
  
<div class="slider">
	
	<div class="container">
		<div class="details">
		
		<h1 style="text-align:center;font-size: 45px;font-family: Lucida Console;">HOLD UR BOOK</h1>
		<h1 style="text-align:center;font-size: 25px;font-family: Lucida Console;">USER LOGIN</h1>

		<form name="login" action="" method="post">
			
			<div class="login" style="text-align: center;">
				<br>
			     <center>
				<input class="form-control" type="email" name="email" placeholder="Email" required=""><br>		<!-- type = text makes the text visible-->
				<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>		<!-- type = password make the password invisible i.e ** -->
				<!-- <button style="">Register</button> simple button format-->
                </center>

                <a style="color:deepskyblue; font-size: 15px; margin-left: -200px;" href="email_code.php">Forget Password ?</a>
                <br><br>
				<input class="btn btn-success" type="submit" name="submit" value="Sign in" style="color: black;width: 80px;height: 40px;">
                <br><br>

			</div>
		</form>
		<p style="color: white; text-align:center;">
			
			Not a member? <a style="color:deepskyblue;" href="reg.php"> Signup</a>
            <br>
            Admin?&nbsp;<a style="color:deepskyblue; font-size: 18px;" href="admin_login.php">Click here</a>
		</p>
	</div>
	</div>
</div>	


	<?php
		if(isset($_POST['submit']))
		{
			$count = 0;
			$result = mysqli_query($db,"SELECT * FROM `USERS` WHERE email = '$_POST[email]' AND password = '$_POST[password]';");
			$count = mysqli_num_rows($result);
            

			if($count == 0)
			{
				?>
					<script type="text/javascript">
						alert("The Email or password is incorrect.");
					</script>
				<?php
			}
			else
			{
                /*for getting and displaying username */

                $info = mysqli_query($db,"SELECT * FROM users WHERE email = '$_POST[email]';");
                $row=mysqli_fetch_assoc($info);
                
                $_SESSION['username'] = $row['username'];

				?>
					<script type="text/javascript">
                        alert("Login Successful.");
						window.location = "index1.php"
					</script>
				<?php
			}

		}

	?>

</body>
</html>


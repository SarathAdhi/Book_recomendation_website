<?php
	include "connection.php";
    include "navbar1.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
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
            min-height: 480px;
            height: auto;
            max-width: 430px;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            margin: -30px auto;      /*Aligning in centre*/
            border-radius: 10px;
            color: white;
        }
        .login .form-control
        {

            height: 35px;
            max-width: 340px;
            width: 100%;
        }
  </style> 
</head>
<body>
  

<div class="slider">
	
	<div class="container">
		<div class="details">
		
		<h1 style="text-align:center;font-size: 45px;font-family: Lucida Console;">HOLD UR BOOK</h1>
		<h1 style="text-align:center;font-size: 25px;font-family: Lucida Console;">ADMIN LOGIN</h1>

		<form name="login" action="" method="post">
			
			<div class="login" style="text-align: center;">
				<br>
				<center>
				<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>		<!-- type = text makes the text visible-->
				<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>		<!-- type = password make the password invisible i.e ** -->
				<!-- <button style="">Register</button> simple button format-->
                <a style="color:deepskyblue; font-size: 15px; margin-left: -210px;" href="email_code.php">Forget Password ?</a>
                <br><br>

				<input class="btn btn-success" type="submit" name="submit" value="Login" style="color: black;width: 80px;height: 40px;">
				</center>

			</div>
		</form>
		<p style="color: white; text-align:center;">
			<br>
            Not Admin? <a style="color:deepskyblue; font-size: 18px;" href="login.php">Click here</a>
		</p>
	</div>
	</div>
</div>	


	<?php
		if(isset($_POST['submit']))
		{
			$count = 0;
			$result = mysqli_query($db,"SELECT * FROM `admin` WHERE email = '$_POST[email]' AND password = '$_POST[password]';");
			$count = mysqli_num_rows($result);

			if($count == 0)
			{
				?>
					<script type="text/javascript">
						alert("The email or password is incorrect.");
					</script>
				<?php
			}
			else
			{
                $info = mysqli_query($db,"SELECT * FROM users WHERE email = '$_POST[email]';");
                $row=mysqli_fetch_assoc($info);
                $_SESSION['username'] = $row['username'];
				?>
					<script type="text/javascript">
                        alert("Login Successful.");
						window.location = "add.php"
					</script>
				<?php
			}

		}

	?>

</body>
</html>


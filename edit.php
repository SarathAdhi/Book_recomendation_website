<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">

	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}
		.form1 button
		{
			color: black;
			background-color: lightgreen;
			height: 30px;
			width: 60px;
			font-size: 15px;
			font-weight: bold;
		}

	</style>
</head>
<body style="background-color: #161b22;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$name=$row['name'];
			$username=$row['username'];
			$email=$row['email'];
			$password=$row['password'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['username']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">
			<center>
		<input class="form-control" type="file" name="file">

		<br>
		<label><h4><b>Name: </b></h4></label>
		<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">

		<br>
		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<br>
		<button class="btn btn-default" type="submit" name="submit" >SAVE</button>
			</center>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"profile/".$_FILES['file']['name']);
			$name=$_POST['name'];

			$email=$_POST['email'];
			
			
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE users SET pimg='profile/$pic', name='$name', email='$email' WHERE username='".$_SESSION['username']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

<?php 
	include "connection.php";
	include "navbar1.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
 		h2
 		{
 			font-size: 40px;
 		}
 		h4
 		{
 			font-size: 20px;
 		}
 		b
 		{
 			font-size: 15px;
 		}
 		.wrapper
 		{
 			margin-top: 100px;
 			height: 430px;
 			width: 400px;
 			background: #27ae60;
 			color: black;
 		}
 	</style>
 </head>
 <body style="background-color: #161b22; ">
 	<button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
 	<div class="container">
 		<form action="" method="post">
 			
 		</form>
 		<div class="wrapper">
 			<br>
 			<?php

 				if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM users where username='$_SESSION[username]' ;");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>
 			<br><br>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='".$row['pimg']."'>
 				</div>";
 			?>
 			<div style="text-align: center;"> 
	 			<h4>Welcome,
	 				<?php echo $_SESSION['username']; ?>
	 			</h4>
	 			<h4>--------------------------</h4>
 			</div><br>
 			<center>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Name: &emsp;</b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['name'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: &emsp;</b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: &emsp;</b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

 				echo "</table>";
 				echo "</b>";
 			?>
 			</center>
 		</div>
 	</div>
 </body>
 </html>

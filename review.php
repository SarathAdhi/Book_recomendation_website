<?php
	include "connection.php";
	include "navbar.php";
	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  height: 50px;
  width: 100px;
  border: none;
  cursor: pointer;
  position: fixed;
  margin-left: -45px;
  font-size: 15px;
}

/* The popup form - hidden by default */
.form-popup {

  display: none;
  position: fixed;
  border: 3px solid #f1f1f1;
  justify-content: center;
  right: 40%;
  left: 40%;
  margin-top: -10px;

}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  text-align: center;
}

/* Full-width input fields */
.form-container input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container .btn-success {
  background-color: #28a745;
  font-size: 15px;
}
.form-container .cancel {
  background-color: red;
  font-size: 15px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
	<br><br>
<center>
  	<?php 
  		$sql = "SELECT * FROM `books` WHERE `bid` = '{$_GET["id"]}'";
  		$res = mysqli_query($db,$sql);
  		$row1 = mysqli_fetch_assoc($res);
  		?>
  		<h2>Average Review: 
  		<?php
  			echo $row1['review'];
  		?>
  		</h2><br><br>

  		<img src="<?php echo $row1['image']; ?>" width="150px" height="200px"> <br><br>
  		<h1>Book: 
  		<?php
  		echo $row1['bname'];
  		?>
  		</h1>
  		<h2>Author: 
  		<?php
  		echo $row1['author'];
  	?></h2>
  	<br><br>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action=""  method="post">
  	<div class="form-container">
  		  	
  	<h3><?php echo $row1['bname']; ?></h3>
    <p style="font-size: 20px; color: black;">Select Your Review:&nbsp; 
          <select name="review" size="1" style="color: black; font-size: 15px">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
<br><br>
    <input class="btn btn-success" type="submit" name="submit" value="Submit">

    <?php

if(isset($_POST['submit']))
{
	$sql1 = "SELECT * FROM `books` WHERE `bid` = '{$_GET["id"]}';";
	$res1 = mysqli_query($db,$sql1);
	while($row=mysqli_fetch_assoc($res1))
	{
		$rev = $row['review'];

	if($rev != 0)
	{
		$sum = $rev + $_POST['review'];
		$avg = $sum/2;
	}
	else
	{
		$avg = $_POST['review'];
	}
	$sql2 = "UPDATE `books` SET `review`='$avg' WHERE `bid` = '{$_GET["id"]}';";
	$res2 = mysqli_query($db,$sql2);

}
?>
		<script>
		    window.history.go(-2);
		</script>
<?php
}
?>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

    </div>
  </form>
</div>
 </center>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "flex";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>


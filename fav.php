<?php
  include "connection.php";
  include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<section>
<body>
		<script>
			  function goBack() 
			  {
			    window.history.back();
			  }
		  </script>
		<?php
		echo "<button onclick='goBack()' class='btn btn-success'><span class='glyphicon glyphicon-chevron-left'></span>Go Back</button>";

		if(isset($_SESSION['username']))
    {
			if(isset($_GET['id']))
			{
					$sql = "SELECT * FROM `fav` WHERE bid = {$_GET['id']};";
					$res=mysqli_query($db,$sql);
					$count = mysqli_num_rows($res);
					if($count == 0)
					{

						$sql1 = "INSERT INTO `fav` (name, bid, bname, author, nop, diff, genre, image) SELECT '$_SESSION[username]', bid, bname, author, nop, diff, genre, image FROM `books` WHERE bid = {$_GET['id']};";

						$res1=mysqli_query($db,$sql1);

						$sql3 = "INSERT INTO `ai` (name, bid, genre) SELECT '$_SESSION[username]', bid, genre FROM `books` WHERE bid = {$_GET['id']};";
						$res3 = mysqli_query($db, $sql3);
					}
					elseif($count == 1)
					{
						?>
						<script type="text/javascript">
							alert("Already added to Favorite..");
						</script>
						<?php
					}
			}

			$sql2 = "SELECT DISTINCT bid, bname, author, nop, diff, genre, image FROM `fav` WHERE name = '$_SESSION[username]';";
			$res2=mysqli_query($db,$sql2);
			$count1 = mysqli_num_rows($res2);
			if($count1 == 0)										/*if favorite is empty*/
			{
				?>
				<script type="text/javascript">
					alert("Nothing to Show..");
					location.replace("genre.php");
				</script>
				<?php
			}
			?>
			
			<br><br>
			<?php
			echo "<table class='table table-bordered table-hover' style= 'font-size: 12px; text-align:center;'>";
				
				echo "<tr style='background-color: white;font-size: 15px; '>";
					//Table header

					echo "<th>"; echo "Image";	echo "</th>";
					echo "<th>"; echo "Book";  echo "</th>";
					echo "<th>"; echo "Author", "&emsp;";  echo "</th>";
					echo "<th>"; echo "No.of Page";  echo "</th>";
					echo "<th>"; echo "Difficulty";  echo "</th>";
					echo "<th>"; echo "Genre";  echo "</th>";
					echo "<th>"; echo "Remove from Favorite";  echo "</th>";
				echo "</tr>";	

				while($row=mysqli_fetch_assoc($res2))
				{
					echo "<tr>";
					echo "<td>";
					?>

					<img src="<?php echo $row['image']; ?> " height="90" width="70">

					<?php
					echo "</td>";
					echo "<td>"; echo $row['bname']; echo "</td>";
					echo "<td>"; echo $row['author']; echo "</td>";
					echo "<td>"; echo $row['nop']; echo "</td>";
					echo "<td>"; echo $row['diff']; echo "</td>";
					echo "<td>"; echo $row['genre']; echo "</td>";
					echo "<td>"; echo '<a href="fav_remove.php?id='.$row['bid'].'" >Remove</a>'; echo "</td>";
				}
				echo "</tr>";
				echo "</table>";
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Please Login or Register..");
					location.replace("login.php");
				</script>
				<?php
			}
		?>
</section>
</body>
</html>
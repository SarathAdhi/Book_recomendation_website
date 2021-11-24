<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biographies</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<section>
<body>
		<?php

			echo "<button onclick='goBack()' class='btn btn-success'><span class='glyphicon glyphicon-chevron-left'></span>Go Back</button>";
			?>
			<script>
		  function goBack() {
		    window.history.back();
		  }
		</script>
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
					echo "<th>"; echo "Language";  echo "</th>";
					echo "<th>"; echo "Review";  echo "</th>";
				echo "</tr>";	
				
				      $res=mysqli_query($db,"SELECT * FROM `books` WHERE `genre` = '{$_GET["id1"]}';");
				while($row=mysqli_fetch_assoc($res))
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
					echo "<td>"; echo $row['lang']; echo "</td>"; 
					echo "<td>"; 
					echo '<a href="review.php?id='.$row['bid'].'" class="fa fa-star" style="text-decoration: none; font-size: 20px; color: green;"></a><br>';
					echo $row['review'];
					echo "</td>";
					echo "<td>"; echo '<a href="fav.php?id='.$row['bid'].'" class="fa fa-heart" style="text-decoration: none; font-size: 20px; color: indianred;"></a>'; echo "</td>";

					if(isset($_POST['submit']))
			    {

			    	?>
			    	
			<?php
			    }
					echo "</tr>";
					/* <input class="btn btn-success" type="submit" name="submit" value="Register" style="color: black; width: 80px; height: 40px;">*/
				}
			echo "</table>";

		?>
</section>
</body>
</html>
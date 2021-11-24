<?php
	include "connection.php";
	if(isset($_GET['id']))
	{
		$sql = "DELETE FROM `fav` WHERE bid = {$_GET['id']};";
		$res = mysqli_query($db,$sql);
		?>
		<script type="text/javascript">
			alert("Removed from Favorite..")
			location.replace("fav.php");
		</script>
		<?php

	}
?>
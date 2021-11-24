<?php
	include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>sb</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>
<body>
	<div class="container" style="max-width: 50%;">
		<div class="text-center mt-5 md-4">
			<h2>Hello</h2>
		</div>
		<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search..">
	</div>

	<div class="searchresult"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#live_search").keyup(function(){
				var input = $(this).val();
				if(input != ""){
					$.ajax({
						url:"searchnow.php",
						method:"POST",
						data:{input:input},
						success:function(data){
							$("#searchresult").html(data);
						}
					});
				}else{
					$("#searchresult").css("display","none");
				}
			});
		});
	</script>

</body>
</html>
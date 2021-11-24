<?php
  include "connection.php";
  include "navbar1.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

    .feedback-input {
      color:white;
      font-family: Helvetica, Arial, sans-serif;
      font-weight:500;
      font-size: 18px;
      border-radius: 5px;
      line-height: 22px;
      background-color: transparent;
      border:2px solid #CC6666;
      transition: all 0.3s;
      padding: 13px;
      margin-bottom: 15px;
      box-sizing: border-box;
      width: 500px;
      outline:0;
    }

    .feedback-input:focus { border:2px solid #CC4949; }

    textarea {
      height: 150px;
      line-height: 150%;
      resize:vertical;
    }

    [type="submit"] {
      font-family: 'Montserrat', Arial, Helvetica, sans-serif;
      width: 100%;
      background:#CC6666;
      border-radius:5px;
      border:0;
      cursor:pointer;
      color:white;
      font-size:24px;
      padding-top:10px;
      padding-bottom:10px;
      transition: all 0.3s;
      margin-top:-4px;
      font-weight:700;
    }
    [type="submit"]:hover { background:#CC4949; }

</style>
</head>
<script>
      function goBack() {
        window.history.back();
        window.history.back();
      }
    </script>

<body>
  <button onclick='goBack()' class='btn btn-success'><span class='glyphicon glyphicon-chevron-left'></span>Go Back</button>
<div class="container" style="text-align: center; justify-content: center; padding-top: 100px;">
  <form action="" method="post">      
    <input name="name" type="text" class="feedback-input" placeholder="Name" style="color:black;" required>   <br>
    <input name="email" type="text" class="feedback-input" placeholder="Email" style="color:black;" required> <br>
    <textarea name="text" class="feedback-input" placeholder="Comment" required style="color:black;"></textarea>  <br>
    <input type="submit" value="SUBMIT" name="submit" style="width: 300px;">
  </form>
</div>

<?php
if(isset($_POST['submit']))
{   $msg = $_POST['text'];
   $from = "From: sarathzenith2003@gmail.com";
            
    if(mail($from, "FEEDBACK", $msg, $_POST['email']))
    {
      ?>
        <script type="text/javascript">
            alert("Feedback sent");

        </script>
      <?php
    }
  }
?>

</body>
</html>

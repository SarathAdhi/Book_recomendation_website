<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="genre";
  $conn=mysqli_connect($host,$user,$pass,$db);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      div{
        border: 2px solid black;
        width: 500px;
        margin-left: 370px;
        margin-top: 50px;
        padding: 30px;
      }
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
      }
    </style>
  </head>
  <body>
    <div class="">
      
      <form class="" action="" method="post" enctype="multipart/form-data">
        <input type="text" name="bidd" class="form-control" placeholder="Book id" required=""><br>
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php

          if (isset($_POST['submit'])) 
          {
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="pdf_file/".$pdf;

            move_uploaded_file($pdf_tem_loc,$pdf_store);

            $sql="UPDATE books SET pdf = '$pdf' WHERE bid = '$_POST[bidd]';";
            $query=mysqli_query($conn,$sql);

          }

        ?>
        <script type="text/javascript">
          alert("uploaded Successful.");
        </script>

      </form>

    </div>

  </body>
</html>
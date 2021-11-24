<?php
  include "connection.php";
  include "navbar1.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Finder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <style type="text/css">
       
        .main
        {
          margin-top: -20px;
            width: 100%;

            background-color: white;

        }

        .container
        {
          padding-top: 20px;
          height: 260px;
          width: 400px;
          background-color: black;
          opacity: 1;
          position: relative;
          top: 5vh;
          border:orange; 
          border-width:5px; 
          border-style:solid;
        }

        .books
        {
          min-height: 500px;
          width: 900px;
          color: black;
          justify-content: center;
          position: relative;
          text-align: center;
          left: 23%;
        }

  </style>


</head>
<body>

<div class="main" style="height: auto;">


    <div class="container" style="text-align: center;">

      <form class="book" action="" method="post" enctype="multipart/form-data">


          <p style="font-size: 20px; color: white;">Select genre:&nbsp; 
          <select name="genre" size="1" style="color: black; font-size: 15px">
            <option value="Arts">Arts</option>
            <option value="Biographies">Biographies</option>
            <option value="Business">Business</option>
            <option value="Comics">Comics</option>
            <option value="Computers & tech">Computers</option>
            <option value="Cooking">Cooking</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Fiction">Fiction</option>
            <option value="History">History</option>
            <option value="Horror">Horror</option>
            <option value="Kids">Kids</option>
            <option value="Music">Music</option>
            <option value="Mysteries">Mysteries</option>
            <option value="Non fiction">Non Fiction</option>
            <option value="Parenting">Parenting</option>
            <option value="Poetry">Poetry</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
            <option value="Science">Science</option>
            <option value="Sports">Sports</option>
            <option value="Thriller">Thriller</option>
            <option value="Travel">Travel</option>
            <option value="True crime">True Crime</option>
          </select></p>
          <br>


          <p style="font-size: 20px; color: white;">Difficulty:&nbsp; 
          <select name="diff" size="1" style="color: black; font-size: 15px">
            <option value="Easy">Easy</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Pro">Pro</option>
          </select></p><br>


            <input type="text" name="lang" class="form-control" placeholder="Language" required="" style="width:200px; margin-left: 90px;"><br>

          <button style="text-align: center; color: black; width: 80px; height: 40px;" class="btn btn-success" type="submit" name="submit">ADD</button>
          
      </form>
  </div>
  <br><br><br><br>
  <div class="books" style="text-align: center;">
    <center>
<?php
    if(isset($_POST['submit']))
    {
      $sql = "SELECT * FROM `books` WHERE `genre` = '$_POST[genre]' AND `diff` = '$_POST[diff]' AND `lang` = '$_POST[lang]';";
      $res = mysqli_query($db, $sql);
      echo "<table class='table table-bordered table-hover' style= 'font-size: 12px; text-align:center; color: black;'>";
        
        echo "<tr style='font-size: 15px; '>";
          //Table header

          echo "<th>"; echo "Image";  echo "</th>";
          echo "<th>"; echo "Book";  echo "</th>";
          echo "<th>"; echo "Author", "&emsp;";  echo "</th>";
          echo "<th>"; echo "No.of Page";  echo "</th>";
          echo "<th>"; echo "Difficulty";  echo "</th>";
          echo "<th>"; echo "Language";  echo "</th>";
          echo "<th>"; echo "Review";  echo "</th>";
          echo "<th>"; echo "Download";  echo "</th>";
        echo "</tr>";
      while($row = mysqli_fetch_assoc($res))
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
          echo '<i class="fa fa-star" style="text-decoration: none; font-size: 20px; color: green;"></><br>';
          echo $row['review'];
          echo "</td>";
          echo "<td>"; 
          echo '<a href="'.$row['pdf'].'" target="_blank" >Click here</a>';
          echo "</td>";

      }
      echo "</tr>";
      echo "</table>";
    }
?>
</center>
</div>
</body>

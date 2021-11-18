<?php
  include "connection.php";
  include "navbar1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
  
  <title>Arrivals</title>
  <style type="text/css">
            .container
            {
                width: 100%;
                height: 100%;
                background: whitesmoke;
            }

            /*===== CARD =====*/
            .card {
              margin-top: 10px;
              height: 210px;
              width: 170px;
              display: inline-block;
              background-color: greenyellow;
              border-radius: 20px;
              color: white;  
              

            }

            .card_img {
              border: 2px solid black;
              border-radius: 20px;
              position: all;
              height: 210px;
              width: 170px;
              text-align: center;
            }

            .card_data {

              margin-top: -250px;
              transform: translateY(50px);
              text-align: center;
              
            }

            .card_preci {
              font-weight: bold;
              color: black;
              font-size: 20px;
              font-weight: 500;
              margin-bottom: 20px;
              opacity: 0;
              padding-bottom: 20px;
            }

            .card_button {
              display: center;
              width: max-content;
              padding: 15px 15px;
              background-color: #F2A20C;
              color: white;
              border-radius: 7px;
              font-size: 15px;
              font-weight: 600;
              transition: .2s;
              opacity: 0;
            }

            .card_img, 
            .card_data, 
            .card_preci
            {
              transition: .5s;
            }

            /* Hover card effect */
            .card:hover .card_img
            {  
              opacity: 0;
            }

            .card:hover .card_button,
            .card:hover .card_preci,
            .card:hover .card_data

            {
              transition-delay: .2s;
              opacity: 1;
            }


      </style>
</head>
<body>
  <div class="container">
    <center>

      <?php
        $sql = "SELECT DISTINCT `genre` FROM `books` ORDER BY `books`.`genre` ASC";
        $res=mysqli_query($db,$sql);
        

        while($row=mysqli_fetch_assoc($res))
        {
          echo "<p style='font-size: 30px; font-weight: bold;'>",$row['genre'],"</p>";

          $sql2="SELECT `image`, `pdf` FROM `books` WHERE  `genre` = '$row[genre]'";
          $res2=mysqli_query($db,$sql2);

        while($row2=mysqli_fetch_assoc($res2))
            {
      ?>
        <div class="card">
              <img src="<?php echo $row2['image']; ?> " alt="" class="card_img">
            <div class="card_data">
              <br><br>
              <p class="card_preci">Free</p><br>
              <a href="<?php echo $row2['pdf']; ?>" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
            </div>
        </div>
        &emsp; &emsp; 
      <?php
        }
        }
      ?>
    </center>
  </div>
</body>
</html>

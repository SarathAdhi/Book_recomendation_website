<?php
  include "connection.php";
  include "navbar1.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TEX AI</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

  <script>                                
    $(document).ready(function() 
    {
      $("html, body").animate({
        scrollTop: $('html, body').get(0).scrollHeight
      }, 0.8);
    });

  </script>
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        font-family: "Roboto";
        list-style: none;
        box-sizing: border-box;
        background: #000;
      }

      .screen1{
        margin-top: -28px;
        height: 790px;
        overflow: hidden;
      }

      .bg img {
        width: 110vw;
        height: 110vh;
        filter: brightness(0.6);
      }

      .rock1 {
        position: absolute !important;
        left: 1vw !important;
        top: 20vh !important;
      }

      .rock1 img {
        width: 40%;
        filter: brightness(0.5);
      }

      .text h1 {
        font-family: "AlphaCentauri" !important;
        font-size: 80px;
        color: #fff;
        letter-spacing: 20px;
        position: relative;
        top: 0vh;
        left: 11vw;
      }
      .text2 h1 {
        font-family: "AlphaCentauri" !important;
        font-size: 50px;
        color: #fff;
        letter-spacing: 20px;
        position: relative;
        top: 60vh;
        left: 12vw;
      }

      .earth img {
        width: 400px;
        height: 400px;
        position: absolute;
        left: 50vw;
        top: 42vh;
        z-index: 1;
        filter: brightness(0.7);
      }

      .textline p {
        font-family: "Bahnschrift" !important;
        font-size: 30px;
        color: #fff;
        position: relative;
        top: 45vh;
        left: 11vw;
      }

      

      .mid {
        left: -150px !important;
        bottom: -100px !important;
        top: unset !important;
      }

      .mid img {
        width: 100%;
        z-index: 2;
        left: -20px;
        top: 20vh !important;
        filter: brightness(0.8);
      }

      .fore {
        right: -170px !important;
        bottom: -200px !important;
        top: 0px !important;
        left: unset !important;
      }

      .fore img {
        width: 400px;
        height: 110vh;
        z-index: 3;
        filter: brightness(0.5);
      }

      .book img
      {
        opacity: 0.2;
        height: 800px;
        width: 2000px;
        margin-top: -65px;
        margin-left: -180px;
      }

      .rockbg1 {
        position: absolute;
        transform: scale(0.2);
        filter: brightness(0.2);
        top: 20vh;
        left: 0;
        z-index: 1;
      }

      .wrapper {
          height: 700px;
          display: flex;
          align-items: center;
          justify-content: center;
          left: 0;
      }
      .container{
        margin-top: -650px;
        height: 40px;
        width: auto;
        
        
      }

        .typing-demo{
          width: 59ch;
          background-color: white;
          animation: typing 4s steps(59), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          font-family: monospace;
          font-size: 2em;
          color: black;

        }
        .typing-demo2{

          background-color: white;
          color: black;
          width: 36ch;
          animation: typing 4s steps(36), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          font-family: monospace;
          font-size: 2em;
        }

        @keyframes typing {
          from {
            width: 0
          }
        }
            
        @keyframes blink {
          50% {
            border-color: transparent
          }
        }
        .details1
        {
          position: absolute;
          padding-top: 10px;
        }

        .sidenav a {

          position: fixed;
          right: -80px;
          transition: 0.3s;
          padding: 15px;
          width: 100px;
          text-decoration: none;
          font-size: 20px;
          color: white;
          border-radius: 5px 5px 5px 5px;
        }

        #mySidenav a:hover {
          right: 0;
        }

        #home {
          top: 20px;
          background-color: #04AA6D;
        }

        #genre {
          top: 80px;
          background-color: #2196F3;
        }

        #fav {
          top: 140px;
          background-color: #f44336;
        }

        #up {
          top: 228px;
          background-color: #555
        }
        .books
        {
          justify-content: center;
          position: absolute;
        }

    </style>
  </head>

  <body>

    <section id="sectionone" class="screen1">
      <div id="scene">
        <div data-depth="0.1" class="bg">
          <img src="images/background.png" alt="" />
        </div>
        
        <div data-depth="0.3" class="text">
          <h1>HOLD YOUR BOOK</h1>
        </div>
        <div data-depth="0.2" class="textline">
          <p>EXPLORE ME--> AI</p>
        </div>
        <div data-depth="0.3" class="text2">
          <h1>SCROLL DOWN</h1>
        </div>
        <div data-depth="1.0" class="earth">
          <img src="images/earth.png" alt="" />
        </div>
        <div data-depth="0.8" class="rock1">
          <img src="images/rock.png" alt="" />
        </div>
        <div data-depth="0.4" class="mid">
          <img src="images/mid.png" alt="" />
        </div>
        <div data-depth="0.1" class="fore">
          <img src="images/foreground.png" alt="" />
        </div>
        <div data-depth="0.1" class="book">
          <img src="images/book.jpg" alt="" />
        </div>
      </div>
    </section>
    <section class="wrapper">

        <div class="container">
          <?php
            echo '<p class="typing-demo">Hii '.$_SESSION['username'].' ,This is TEX, I am your personal assistant..</p>';
          ?>

          <div class="typing-demo2">Here is what I could help you with..</div>
          
          <div class="details1">
            <a href="finder.php" class="btn btn-success" style="background-color:#f14ebd;">Book Finder</a><br><br>
            <a href="aboutus.php" class="btn btn-success" style="background-color:#f14ebd;">My Founder</a>
            
          </div>
        </div>

        <div class="books" style="padding-top: 280px;">

            
            <?php
                $sql = "SELECT * FROM `books` WHERE `genre` = ANY (SELECT genre from ai where name = '$_SESSION[username]');";
                $res = mysqli_query($db, $sql);
                $count = mysqli_num_rows($res);

                if($count != 0)
                {
                  echo '<h3 style="color: white;">Books You May Like</h3>';
                  echo "<table class='table table-bordered' style= 'font-size: 12px; text-align:center; color:white'>";
                    echo "<tr style='font-size: 15px; '>";
                      echo "<th>"; echo "Image";  echo "</th>";
                      echo "<th>"; echo "Book";  echo "</th>";
                      echo "<th>"; echo "Author", "&emsp;";  echo "</th>";
                      echo "<th>"; echo "No.of Page";  echo "</th>";
                      echo "<th>"; echo "Difficulty";  echo "</th>";
                      echo "<th>"; echo "Genre";  echo "</th>";
                      echo "<th>"; echo "Download";  echo "</th>";
                    echo "</tr>";
  
                    $i = 0;
                    while($row=mysqli_fetch_assoc($res) AND $i < 4)
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
                      echo "<td>"; echo '<a href="'.$row['pdf'].'"  target="_blank" rel="noopener noreferrer">Click Here</a>'; echo "</td>";
                      $i = $i+1;
                    }

                  echo "</tr>";
                  echo "</table>";
                }
            ?>
        </div>

      </section>
    
<div id="mySidenav" class="sidenav" style="margin-top: 40px;">
    <a href="index1.php" id="home">Home</a>
    <a href="genre.php" id="genre">Genre</a>
    <a href="fav.php" id="fav">My Favorite</a>
    <a href="#sectionone" id="up">Scroll up</a>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="ai.js" type="text/javascript"></script>
  </body>
</html>

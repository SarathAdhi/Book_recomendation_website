<?php
  include "connection.php";
  include "navbar1.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- scroll effect -->

                                    <!-- scroll effect -->
  <script>                                
    $(document).ready(function() 
    {
      $("html, body").animate({
        scrollTop: $('html, body').get(0).scrollHeight
      }, 0.8);
    });

  </script>

	<style type="text/css">
       
        .slider
        {
            margin-top: -20px;
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-image: url("slideshow/8.jpg");
            animation-name: slider;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }
        @keyframes slider
        {
            0%
            {
                background-image: url("slideshow/6.jpg");
            }
            25%
            {
                background-image: url("slideshow/7.jpg");
            }
           
            50%
            {
                background-image: url("slideshow/8.jpg");
            }
            
            60%
            {
                background-image: url("slideshow/9.jpg");
            }
            
            75%
            {
                background-image: url("slideshow/6.jpg");
            }
            
            100%
            {
                background-image: url("slideshow/7.jpg");
            }
        
        }

        .sidenav {
          height: 100%;
          width: 0;
          position: absolute;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #222;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: white;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        .main {
          transition: margin-left .5s;
          padding: 16px;
          height: 100%;
          width: 100%;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        .h:hover
        {
        	color:white;
        	width: 300px;
        	height: 50px;
        	
        }
        .open
        {
          position: relative;
          width: 30px;
          height: 40px;
          background-color: white;
        }
        .book
        {
            width: 400px;
            margin: 0px auto;
        }
        .book .form-control
        {
          color: black;
          height: 35px;
          width: 350px;
           border: 2px solid green;
        }
        .container
        {
          margin-top: 5px;
          height: 700px;
          width: 450px;
          background-color: rgba(0, 0, 0, 0.5);
          opacity: 1;
          
        }

	</style>


</head>
<body>

<div class="slider">
  <div id="main">

    <div id="mySidenav" class="sidenav">

      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="h"> <a href="add.php">Add Books</a> </div> 
      <div class="h"> <a href="edit_book.php">Edit Books</a></div>
      <div class="h"> <a href="delete.php">Delete Books</a></div>


    </div>

    <div class="open">
    <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776;</span>
    </div>

    <div class="container" style="text-align: center;">
      <h2 style="color: white; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>
      <br>
      <form class="book" action="" method="post" enctype="multipart/form-data">
          <center>
          <input type="text" name="bid" class="form-control" placeholder="Book id" required=""><br>
          <input type="text" name="author" class="form-control" placeholder="Authors Name" required=""><br>
          <input type="text" name="bname" class="form-control" placeholder="Book Name" required=""><br>
          <input type="text" name="nop" class="form-control" placeholder="Number of pages" required=""><br>
          </center>

          <p style="font-size: 20px; color: white; margin-left: -50px;">Select genre:&nbsp; 
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

          <center>
          <p style="font-size: 20px; color: white; margin-left: -130px;">Difficulty:&nbsp; 
          <select name="diff" size="1" style="color: black; font-size: 15px">
            <option value="Easy">Easy</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Pro">Pro</option>
          </select></p><br>

          <input type="text" name="lang" class="form-control" placeholder="Language" required=""><br>
          </center>

          <p style="font-size: 20px; color: white; margin-left: -220px;">Book image:</p>
          <input style="margin-left: 30px; color: white;" id="image" type="file" name="image" value="" required><br>

          <p style="font-size: 20px; color: white; margin-left: -220px;">Book PDF File:</p>
          <input style="margin-left: 30px; color: white;" id="pdf" type="file" name="pdf" value="" required><br>

     <!--     <p style="font-size: 20px; color: white; margin-left: -220px;">Mp3 File:</p>
          <input style="margin-left: 30px; color: white;" id="mp3" type="file" name="mp3" value="" required>  -->

          <button style="text-align: center; color: black; width: 80px; height: 40px;" class="btn btn-success" type="submit" name="submit">ADD</button>
          

      </form>
    </div>
  </div>



<?php

      if(isset($_POST['submit']))
      {
        
        $count=0;
        $sql="SELECT * from `books`";

        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res)) /*checking if the username already exist */
        {
            if($row['bid']==$_POST['bid'])
            {
                $count=$count+1;
            }
            
        }
        if($count==0)
        {
          $pdf=$_FILES['pdf']['name'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];

          $ext = pathinfo($pdf, PATHINFO_EXTENSION);
          $pdf_name = $_POST['bname'].'.'.$ext;

          $pdf_store="books/pdf_file/".$pdf_name;
          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $image = $_FILES['image']['name'];
          $ext = pathinfo($image, PATHINFO_EXTENSION);
          $image_name = $_POST['bname'].'.'.$ext;
          $target = "books/image/".basename($image_name);
          move_uploaded_file($_FILES['image']['tmp_name'], $target);

          /*$mp3 = $_FILES['mp3']['name'];
          $ext1 = pathinfo($mp3, PATHINFO_EXTENSION);
          $mp3_name = $_POST['bname'].'.'.$ext1;
          $tar = "books/mp3/".basename($mp3_name);
          move_uploaded_file($_FILES['mp3']['tmp_name'], $tar);*/

          mysqli_query($db,"INSERT INTO `books` (bid, author, bname, nop, genre, diff, lang, image, pdf) VALUES ('$_POST[bid]', '$_POST[author]', '$_POST[bname]', '$_POST[nop]', '$_POST[genre]', '$_POST[diff]', '$_POST[lang]', '$target', '$pdf_store') ;");

        ?>
          <script type="text/javascript">
           alert("Book Added Successfully.");
           location.replace("add.php");
          </script>

        <?php

        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The Book already exist.");
            </script>
          <?php
        }
      }
    ?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>

</body>

<?php
  include "connection.php";
   include "navbar1.php";

?>

<!DOCTYPE html>
<html>
<head>
 <title>Genre</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">


body{
 font-family: arial;
}
.container{
  width:  100%;
  height: 100%;
  position: relative;
  justify-content: center;
  text-align: center;
}

.card{

    display: inline-block;
     width: 235px;
     box-shadow: 2px 2px 20px black;
     border-radius: 7px; 
     margin: 2%;
    }

.image img{
  width: 117.5px;
  height: 200px;
  border-radius: 7px; 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
  padding-top: 10px;
  border-radius: 5px;
}
button{
  margin-top: 30px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: greenyellow;
  color: black;
  transition: .5s;
  cursor: pointer;
}


</style>
<body>
<div class="container">
<?php
   $sql = "SELECT * FROM `genre`;";
   $res = mysqli_query($db,$sql);
   $count = 1;
   while($row=mysqli_fetch_assoc($res))
   {
    ?>
       <!--cards -->

      <div class="card">

      <div class="image">
         <?php echo '<img src="genreimg/'.$row['genre'].$count.'.jpg"><img src="genreimg/'.$row['genre'].($count + 1).'.jpg">'; $count = $count + 1; ?>
      </div>
      <div class="title">
 <?php
      echo '<h1>'.$row['genre'].'</h1>';
      $count = $count + 1;
      echo '<a href="genreview.php?id1='.$row['genre'].'" class="btn btn-success"><button>Explore..</button></a>';
?>
   </div>
<!--cards -->
</div>

<?php

}
?>
</div>
</body>
</html>
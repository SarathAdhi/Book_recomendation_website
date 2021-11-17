<?php
  include "connection.php";
   include "navbar1.php";

?>

<!DOCTYPE html>
<html>
<head>
 <title>Genre</title>
</head>

<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

justify-content: center;
align-items: center;
 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 7px; 
     margin: 2%;
    }

.image img{
  width: 50%;
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
  margin-top: 40px;
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

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="genre/art.jpg"><img src="genre/art1.jpg">
</div>
<div class="title">
 <h1>Arts</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="genre/by.jpg"><img src="genre/by1.jpg">

</div>
<div class="title">
 <h1>Biographies</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="genre/bu.jpg"><img src="genre/bu1.jpg">
</div>
<div class="title">
 <h1>Business</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="genre/cs.jpg"><img src="genre/cs1.jpg">
</div>
<div class="title">
 <h1>Comics</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/ct.jpg"><img src="genre/ct1.jpg">
</div>
<div class="title">
 <h1>Computers & Tech</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="genre/ck.jpg"><img src="genre/ck1.jpg">
</div>
<div class="title">
 <h1>Cooking</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="genre/e.jpg"><img src="genre/e1.jpg">
</div>
<div class="title">
 <h1>Entertainment</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="genre/f.jpg"><img src="genre/f1.jpg">
</div>
<div class="title">
 <h1>Fantasy</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/ft.jpg"><img src="genre/ft1.jpg">
</div>
<div class="title">
 <h1>Fiction</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/h.jpg"><img src="genre/h1.jpg">
</div>
<div class="title">
 <h1>History</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/ho.jpg"><img src="genre/ho1.jpg">
</div>
<div class="title">
 <h1>Horror</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/k.jpg"><img src="genre/k1.jpg">
</div>
<div class="title">
 <h1>Kids</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/m.jpg"><img src="genre/m1.jpg">
</div>
<div class="title">
 <h1>Music</h1>
</div>

<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/my.jpg"><img src="genre/my1.jpg">
</div>
<div class="title">
 <h1>Mysteries</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/nf.jpg"><img src="genre/nf1.jpg">
</div>
<div class="title">
 <h1>Non Fiction</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/p.jpg"><img src="genre/p1.jpg">
</div>
<div class="title">
 <h1>Parenting</h1>
</div>
<div class="des">

<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/py.jpg"><img src="genre/py1.jpg">
</div>
<div class="title">
 <h1>Poetry</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/rn.jpg"><img src="genre/rn1.jpg">
</div>
<div class="title">
 <h1>Religion</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/r.jpg"><img src="genre/r1.jpg">
</div>
<div class="title">
 <h1>Romance</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/s.jpg"><img src="genre/s1.jpg">
</div>
<div class="title">
 <h1>Science</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/sp.jpg"><img src="genre/sp1.jpg">
</div>
<div class="title">
 <h1>Sports</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/tr.jpg"><img src="genre/tr1.jpg">
</div>
<div class="title">
 <h1>Thriller</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>


<div class="card">

<div class="image">
   <img src="genre/t.jpg"><img src="genre/t1.jpg">
</div>
<div class="title">
 <h1>Travel</h1>
</div>
<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="genre/tc.jpg"><img src="genre/tc1.jpg">
</div>
<div class="title">
 <h1>True Crime</h1>
</div>

<div class="des">
<a href="genreview.php" ><button>Explore..</button></a>
</div>
</div>

</div>
</body>
</html>
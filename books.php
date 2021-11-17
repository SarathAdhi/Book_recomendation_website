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
    <p style="font-size: 30px; font-weight: bold;">Arts</p>   <!---- ARTS ---->
    <div class="card">
       <img src="genre/ct.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ct1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/e.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/e1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/f.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/f1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ft.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ft1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                                <!---- END OF ARTS ---->

    <p style="font-size: 30px; font-weight: bold;">Biography</p>    <!---- Biography ---->
    <div class="card">
       <img src="books/image/A Promised Land.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/A Promised Land.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/Subtle is the Lord.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Subtle is the Lord.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/Gandhi-An Autobiography.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Gandhi-An Autobiography.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/Hegel-A Biography.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Hegel-A Biography.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="books/image/I Saw Her Standing There.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/I Saw Her Standing There.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/Mother Teresa-An Biography.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Mother Teresa-An Biography.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/My Memories.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/My Memories.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/Napoleon-An Biography.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Napoleon-An Biography.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                          <!---- end of Biography ---->

    <p style="font-size: 30px; font-weight: bold;">Business</p>     <!---- Business ---->
    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                                    <!---- end of Business ---->

    <p style="font-size: 30px; font-weight: bold;">Comics</p>     <!---- comics ---->
    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                              <!---- end of comics ---->


    <p style="font-size: 30px; font-weight: bold;">Computers & Tech</p>   <!---- Computers & Tech ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Computers & Tech ---->

    <p style="font-size: 30px; font-weight: bold;">Cooking</p>   <!---- Cooking ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Cooking ---->

    <p style="font-size: 30px; font-weight: bold;">Entertainment</p>   <!---- Entertainment ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Entertainment ---->
    
    <p style="font-size: 30px; font-weight: bold;">Fantasy</p>   <!---- Fantasy ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Fantasy ---->

    <p style="font-size: 30px; font-weight: bold;">Fiction</p>   <!---- Fiction ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Fiction ---->

    <p style="font-size: 30px; font-weight: bold;">History</p>   <!---- History ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of History ---->

    <p style="font-size: 30px; font-weight: bold;">Horror</p>   <!---- Horror ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Horror ---->

    <p style="font-size: 30px; font-weight: bold;">Kids</p>   <!---- Kids ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Kids ---->

    <p style="font-size: 30px; font-weight: bold;">Music</p>   <!---- Music ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Music ---->

    <p style="font-size: 30px; font-weight: bold;">Mysteries</p>   <!---- Mysteries ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Mysteries ---->

    <p style="font-size: 30px; font-weight: bold;">Non Fiction</p>   <!---- Non Fiction ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Non Fiction ---->

    <p style="font-size: 30px; font-weight: bold;">Parenting</p>   <!---- Parenting ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Parenting ---->

    <p style="font-size: 30px; font-weight: bold;">Poetry</p>   <!---- Poetry ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Poetry ---->

    <p style="font-size: 30px; font-weight: bold;">Religion</p>   <!---- Religion ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Religion ---->

    <p style="font-size: 30px; font-weight: bold;">Romance</p>   <!---- Romance ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Romance ---->

    <p style="font-size: 30px; font-weight: bold;">Science</p>   <!---- Science ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>


    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Science ---->

    <p style="font-size: 30px; font-weight: bold;">Sports</p>   <!---- Sports ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Sports ---->

    <p style="font-size: 30px; font-weight: bold;">Thriller</p>   <!---- Thriller ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/cs.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Thriller ---->

    <p style="font-size: 30px; font-weight: bold;">Travel</p>   <!---- Travel ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
       <img src="genre/bu.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of Travel ---->

    <p style="font-size: 30px; font-weight: bold;">True Crime</p>   <!---- True Crime ---->

    <div class="card">
      <img src="books/image/Batman and Spiderman.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/Batman and Spiderman.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="books/image/The Adventures of Tintin.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/The Adventures of Tintin.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
       <img src="genre/bu.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/bu1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/by1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

     &nbsp;
     <div class="card">
       <img src="genre/ck.jpg" alt="" class="card_img">

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>

    &nbsp;
    <div class="card">
      <img src="genre/ck1.jpg" alt="" class="card_img"> 

        <div class="card_data">
          <br><br>
          <p class="card_preci">Free</p><br>
          <a href="books/pdf_file/.pdf" class="card_button" target="_blank" rel="noopener noreferrer">Download</a>
        </div>
    </div>
    <br><br>                                <!---- end of True Crime ---->


  </div>
  </center>
</body>
</html>
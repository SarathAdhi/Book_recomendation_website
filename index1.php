<?php
    include "navbar1.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Book Recommendation System
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
    <style type="text/css">

        .slider
        {
            margin-top: -30px;
            position: absolute;
            width: 100%;
            height: 722px;
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
        .container
        {
            position: absolute;
            width: 100%;
            height: 722px;
            background: rgba(0, 0, 0, 0.5);
        }
        .details
        {
            position: absolute;
            font-family: Bahnschrift;
            font-size: 20px;
            color: white;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .details h2
        {
            color: tomato;
            text-align: center;
        }
        .sec
        {
            margin-top: 30px;
            height: 690px;
            width: 100%;
            background-color: grey;
        }

            
    </style>
  
</head>
<body>
<div class="sec">
    <div class="slider">
        <div class="container">
            <div class="details">

                            <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
            </div>
        </div>
    </div>
</div>



    <?php
        include "footer.php";
    ?>

</body>
</html>
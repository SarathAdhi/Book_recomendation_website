<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --green:#27ae60;
    --dark-color:#219150;
    --black:#444;
    --light-color:#666;
    --border:.1rem solid rgba(0,0,0,.1);
    --border-hover:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition:all .2s linear;
    transition:width none;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width:1rem;
}

html::-webkit-scrollbar-track{
    background:transparent;
}

html::-webkit-scrollbar-thumb{
    background:var(--black);
}


       
        .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap:1.5rem;
        }

        .footer .box-container .box h3{
            font-size: 2.2rem;
            color:black;
            padding:1rem 0;
        }

        .footer .box-container .box a{
            display: block;
            font-size: 1.4rem;
            color:var(--light-color);
            padding:1px;
        }

        .footer .box-container .box a i{
            color:var(--green);
            padding-right: .5rem;
        }

        .footer .box-container .box a:hover i{
            padding-right: 2rem;
        }

        .footer .box-container .box .map{
            width:100%;
        }

        .footer .share{
            padding:1rem 0;
            text-align: center;
        }

        .footer .share a{
            height: 5rem;
            width: 5rem;
            line-height: 5rem;
            font-size: 2rem;
            color:#fff;
            background:var(--green);
            margin:0 .3rem;
            border-radius: 50%; 
        }

        .footer .share a:hover{
            background:var(--black);
            text-decoration: none;
        }

        .footer .credit{
            border-top: var(--border);
            margin-top: 2rem;
            padding:0 1rem;
            padding-top: 2.5rem;
            font-size: 2rem;
            color:var(--light-color);
            text-align: center;
        }

        .footer .credit span{
            color:var(--green);
        }


    </style>
</head>
<body>

    <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Genres</h3>
            <a href="#"> <i class="fas fa-book"></i> Arts </a>
            <a href="#"> <i class="fas fa-book"></i> Biographies </a>
            <a href="#"> <i class="fas fa-book"></i> Business </a>
            <a href="#"> <i class="fas fa-book"></i> Comics </a>
            <a href="#"> <i class="fas fa-book"></i> Computers & Tech </a>
            <a href="#"> <i class="fas fa-book"></i> Cooking </a>
            <a href="#"> <i class="fas fa-book"></i> Entertainment </a>
            <a href="#"> <i class="fas fa-book"></i> Fantasy </a>
            <a href="#"> <i class="fas fa-book"></i> Fiction </a>
            <a href="#"> <i class="fas fa-book"></i> History </a>
            <a href="#"> <i class="fas fa-book"></i> Horror </a>
            <a href="#"> <i class="fas fa-book"></i> Kids </a>
        </div>

        <div class="box">
            <br><br><br>
            <a href="#"> <i class="fas fa-book"></i> Music </a>
            <a href="#"> <i class="fas fa-book"></i> Mysteries </a>
            <a href="#"> <i class="fas fa-book"></i> Non Fiction </a>
            <a href="#"> <i class="fas fa-book"></i> Parenting </a>
            <a href="#"> <i class="fas fa-book"></i> Poetry </a>
            <a href="#"> <i class="fas fa-book"></i> Religion </a>
            <a href="#"> <i class="fas fa-book"></i> Romance </a>
            <a href="#"> <i class="fas fa-book"></i> Science </a>
            <a href="#"> <i class="fas fa-book"></i> Sports </a>
            <a href="#"> <i class="fas fa-book"></i> Thriller </a>
            <a href="#"> <i class="fas fa-book"></i> Travel </a>
            <a href="#"> <i class="fas fa-book"></i> True Crime </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> favorite </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fa">&#xf095;</i> +123-456-7890 </a>
            <a href="#"> <i class="fa">&#xf095;</i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> holdyourbook@gmail.com </a>
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fa fa-envelope"></a>
    </div>

    <div class="credit"> created by <span>HoldUrBook</span> | all rights reserved! </div>

</section>

</body>
</html>
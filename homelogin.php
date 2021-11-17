<?php
 include "navbar1.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Book Recommendation System
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    

  
    <style type="text/css">
        .slider
        {
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
            font-family: Arial, Helvetica, sans-serif;
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
        section
        {
            margin-top: 27px;
            height: 722px;
            width: 100%;
            background-color: grey;
        }
        .login-form-container{
    display: flex;
    align-items: center;
    justify-content: center;
    background:rgba(255,255,255,.9);
    position:fixed;
    top:0; right:-105%;
    z-index: 10000;
    height:100%;
    width:100%;
}

.login-form-container.active{
    right:0;
}

.login-form-container form{
    background:#fff;
    border:var(--border);
    width:40rem;
    padding:2rem;
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    margin:2rem;
}

.login-form-container form h3{
    font-size: 2.5rem;
    text-transform: uppercase;
    color:var(--black);
    text-align: center;
}

.login-form-container form span{
    display: block;
    font-size: 1.5rem;
    padding-top: 1rem;
}

.login-form-container form .box{
    width: 100%;
    margin:.7rem 0;
    font-size: 1.6rem;
    border:var(--border);
    border-radius: .5rem;
    padding:1rem 1.2rem;
    color:var(--black);
    text-transform: none;
}

.login-form-container form .checkbox{
    display:flex;
    align-items: center;
    gap:.5rem;
    padding:1rem 0;
}

.login-form-container form .checkbox label{
    font-size: 1.5rem;
    color:var(--light-color);
    cursor: pointer;
}

.login-form-container form .btn{
    text-align: center;
    width:100%;
    margin:1.5rem 0;
}

.login-form-container form p{
    padding-top: .8rem;
    color:var(--light-color);
    font-size: 1.5rem;
}

.login-form-container form p a{
    color:var(--green);
    text-decoration: underline;
}

.login-form-container #close-login-btn{
    position: absolute;
    top:1.5rem; right:2.5rem;
    font-size: 5rem;
    color:var(--black);
    cursor: pointer;
}

    </style>
  
</head>
<body>
<section>
    <div class="slider">
        <div class="container">
            <div class="details">

                            <h1>WELCOME TO LIBRARY</h1>
                            <h2>Opens at 08:00</h1>
                            <h2>Closes at 20:00</h1>
            </div>
        </div>
    </div>

</section>
<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

    <?php
        include "footer.php";
    ?>

</body>
</html>
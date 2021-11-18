<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

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

        section{
            padding:5rem 9%;
        }


        .btn1:hover{
            background:var(--dark-color);
        }

        .header .header-1{
            background:#fff;
            padding:1.5rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .header .header-1 .logo{
            margin-left: -40px;
            font-size: 2.5rem;
            font-weight: bolder;
            color:var(--black);
            text-decoration: none;
        }

        .header .header-1 .logo i{
            color:var(--green);
        }

        .header .header-1 .search-form{
            width:50rem;
            height:5rem;
            border:var(--border);
            overflow: hidden;
            background:#fff;
            display:flex;
            align-items: center;
            border-radius: .5rem;
        }

        .header .header-1 .search-form input{
            font-size: 1.6rem;
            padding: 1.2rem;
            height:100%;
            width:100%;
            text-transform: none;
            color:var(--black);
        }

        .header .header-1 .search-form label{
            font-size: 2.5rem;
            padding-right: 1.5rem;
            color:var(--black);
            cursor: pointer;
        }

        .header .header-1 .search-form label:hover{
            color:var(--green);
        }
        .header .header-1 .icons div,
        .header .header-1 .icons a{
            font-size: 2.5rem;
            margin-left: 1.5rem;
            color:var(--black);
            cursor: pointer;
            text-decoration: none;
        }

        .header .header-1 .icons div:hover,
        .header .header-1 .icons a:hover{
            color:var(--green);
        }

        .header .header-1 .icons1 div,
        .header .header-1 .icons1 a{
            color:var(--black);
            cursor: pointer;
            text-decoration: none;
        }
        .icons{
            padding-left: 10px;
        }

        .header .header-1 .icons1 div:hover,
        .header .header-1 .icons1 a:hover{
            color:var(--green);
        }

        #search-btn{
            display: none;
        }

        .header .header-2{
            background:var(--green);

        }

        .header .header-2 .navbar{
            text-align: center;

        }

        .header .header-2 .navbar a{
            color:#fff;
            display: inline-block;
            padding:1.2rem;
            font-size: 1.7rem;
            text-decoration: none;
        }

        .header .header-2 .navbar a:hover{
            background:var(--dark-color);
        }

        .header .header-2.active{
            position:fixed;
            top:0; left:0; right:0;
            z-index: 1000;

        }

        .icons1 img{
            width: 30px;
            height: 30px;
        }

        .subnav-content {
            border-radius: 5px;
            border: solid ;
          display: none;
          position: absolute;
          background-color: ghostwhite;
          width: 120px;
          height: 240px;
          z-index: 1;
        }

        .subnav-content a {

            font-size: 20px;
          color: white;
          text-decoration: none;
        }

        .subnav-content a:hover {

          text-align: center;
          
        }

        .icons1:hover .subnav-content {
          display: block;
        }

    </style>
</head>
<body>

<?php
    if(isset($_SESSION['username']))
    {
?>

  <header class="header">

    <div class="header-1">

        <a href="index1.php" class="logo"> <i class="fas fa-book"></i> H.U.B </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons1">
            <center>
                <a class="subnavbtn"><img src="profile/user.png"><p style="font-size: 15px;  margin-top: -9px;"><?php echo $_SESSION['username']; ?></p></a>

                <div class="subnav-content" style="margin-left: -35px; ">
                    <i class="fas fa-arrow-down"></i>
                    <br>
                    
                    <a href="logout.php">Logout</a>
                    <p>-------------</p>
                    <a href="#team">My Profile</a>
                    <p>-------------</p>
                    <a href="#careers">Wishlist</a>
                    <p>-------------</p>
                    <a href="#careers">Feedback</a>
                    <p>-------------</p>
                    <a href="#careers">Contact us</a>
                
                </div>
            </center>
            
        </div>       
    </div>
    <div class="header-2">
        <nav class="navbar" >
            <a href="index.php">Home</a>
            <a href="genre.php">Genre</a>
            <a href="books.php">Arrivals</a>
            <a href="aboutus.php">About Us</a>
        </nav>
    </div>
    </header>
<?php
    }
    else
    {
?>
            <header class="header">

            <div class="header-1">

                <a href="index.php" class="logo"> <i class="fas fa-book"></i> H.U.B </a>

                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>

                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <a href="#" class="fas fa-heart"></a>
                    
                    <a href="login.php" class="fas fa-user"></a><br>
                </div>
            </div>
            <div class="header-2">
                <nav class="navbar" >
                    <a href="index.php">Home</a>
                    <a href="genre.php">Genre</a>
                    <a href="arrivals.php">Arrivals</a>
                    <a href="aboutus.php">About Us</a>
                </nav>
            </div>
        </header>
<?php
    }
?>

</body>
</html>

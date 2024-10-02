<?php

include 'ConfigReg.php';
session_start();

$username = $_SESSION['user_name'];
$emai = $_SESSION['email'];

if(!isset($username))
    header('location:Login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../ASSETS/CSS/main.css">
    <link rel="stylesheet" href="../ASSETS/CSS/load.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <!-- hotline and header -->
    <div class="hotline">
        <p><span>hotline:</span> 1900 9067</p>
    </div>

    <header class="header-page">
        <div class="h_container">
            <h3 class="main_title">kawn-food&drink</h3>
            <section class="nav">
                <div class="f-row home active">
                    <i class="fa-solid fa-house icon"></i>
                    <p class="upper1">home</p>
                </div>
                <div class="f-row menu">
                    <i class="fa-solid fa-bars icon"></i>
                    <p class="upper1">menu</p>
                </div>
                <div class="f-row cart">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                    <p class="upper1">cart</p>
                </div>
                <div class="f-row history">
                    <i class="fa-solid fa-book icon"></i>
                    <p class="upper1">history</p>
                </div>
                <div class="search">
                    <input type="search" placeholder="Search" required class="form-control">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

                <div class="user">
                    <i class="fa-solid fa-user"></i>

                </div>

            </section>
        </div>

        <!-- start inf -->
        <div class="inf-container">
            <div class="form-inf">
                <div class="body_inforUser">
                    <p class="inforU">username:</p>
                    <span class="name_user u-size"><?php echo $_SESSION['user_name']?></span>
                </div>
                <div class="body_inforUser">
                    <p class="inforU">email:</p>
                    <span class="email_user u-size"><?php echo $_SESSION['email'];?></span>
                </div>
                <div class="ctn-logout">    
                    <a href="Logout.php" class="btn-logout">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <!-- end inf -->


    <!-- end hotline and header -->


    <!-- slider  -->

    <!-- <section class="container-slider">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="../ASSETS/IMG/beefsteak.jpg" alt="beefsteak">
                <img id="slide-2" src="../ASSETS/IMG/fried chicken.jpg" alt="fried chicken">
                <img id="slide-3" src="../ASSETS/IMG/hotdog.jpg" alt="hotdog">
            </div>

            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>



    </section> -->
    <!-- end slider -->



</body>
<script src="../ASSETS/JS/load.js"></script>
</html>
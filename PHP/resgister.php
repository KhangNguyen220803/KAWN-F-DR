<?php

include 'ConfigReg.php';
session_start();

if(isset($_POST['res_submit'])){
        
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $emai = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

$select = " SELECT * FROM user_form WHERE email = '$emai' AND password = '$password' ";

$select_1 = " SELECT * FROM user_form WHERE username = '$username' ";


$result = mysqli_query($conn, $select);

$result_1 = mysqli_query($conn, $select_1);

if(mysqli_num_rows($result_1) > 0 ) {
    $errorRes[] = 'Username available';
}else {
    if (mysqli_num_rows($result) > 0) {
    $errorRes[] = 'Email available';
}else {
    if ($cpassword != $password) {
        $errorRes[] = 'Password does not match';
    }else {
        $insert = "INSERT INTO user_form(`username`, `email`, `password`) 
        VALUES('$username', '$emai', '$password')";
        mysqli_query($conn, $insert);
        header('location:Login.php');
        
        }
    }

}


};

    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgister</title>
    <link rel="stylesheet" href="../ASSETS/CSS/res.css">
    <link rel="stylesheet" href="../ASSETS/CSS/load.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>

<!-- main -->
    <div class="container-res container">
        <div class="box">
            <div class="img_food">
        
                <img src="../ASSETS/IMG/bread-cooked-meat.jpg">
                <img src="../ASSETS/IMG/top-view-delicious-chicken-with-sauce.jpg">
                <img src="../ASSETS/IMG/delicious-salad-plate-top-view.jpg">
                <img src="../ASSETS/IMG/italian-food-space-middle.jpg">
               
            </div>
       
            <div class="box-form">

                <form class="form" action="" method="post">
                    <h1>Resgister</h1>
                    <?php
                        if(isset($errorRes)){
                            foreach ($errorRes as $error) {
                                echo '<span class="error_msg">'.$error.'</span>';
                            }
                        };
                    ?>
                    <div class="form-container">
                        <div class="input-box">
                            <i class="fa-solid fa-user icon-form"></i>
                            <input type="text" name="username" placeholder="Username" required>
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="pass" type="password" name="password" placeholder="Password" required>
                            <i class="fa-solid fa-eye show-pass"></i>
                            <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="cpass" type="password" name="cpassword" placeholder="Re-enter Password" required>
                            <i class="fa-solid fa-eye show-cpass show-pass"></i>
                            <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        </div>


                        <input type="submit" value="Resgister" class="submit-btn" name="res_submit">
                    </div>


                </form>


                <div class="box-pass">
                    <p class="ques">Do you already have an account?</p>
                    <a href="Login.php" class="ques next decor" id="next-login">Login</a>
                </div>

            </div>
        </div>
    </div>
    <!-- --------------------------------------------------- -->
    <!-- <div class="container-login container display">
        <div class="box">
            <div class="img_food">
                <img src="../ASSETS/IMG/view-cooked-prepared-crawfish.jpg">
                <img src="../ASSETS/IMG/delicious-oysters-with-lemon.jpg">
                <img src="../ASSETS/IMG/view-seafood-being-cleaning-kitchen (1).jpg">
                <img src="../ASSETS/IMG/fish-heads-with-herbs-lemon-tomatoes.jpg">
            </div>

            <div class="box-form">

                <form class="form" action="" method="post">
                    <h1>Login</h1>
                   

                    <div class="form-container">
                        <div class="input-box">
                            <i class="fa-solid fa-user icon-form"></i>
                            <input type="text" name="username" placeholder="Username" required>
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="l-pass" type="password" name="password" placeholder="Password" required>
                            <i class="fa-solid fa-eye show-pass show-lpass"></i>
                            
                        </div>



                        <div class="remember-forgot">
                            <label for="" class="cnt-re">
                                <input type="checkbox" name="checkbox" class="checkbox">
                                <p>Remember</p>
                            </label>

                        </div>
                        <input type="submit" value="Login" class="submit-btn" name="log-submit" id="log-btn">
                    </div>


                </form>


                <div class="box-passFoot">
                    <p class="ques next" id="next-change">Change Password</p>
                    <label class="space"></label>
                    <p class="ques next" id="next-forgot">Forgot Password</p>
                </div>

            </div>
        </div>
    </div> -->


    <!------------------------------------------------------- -->
    <!-- <div class="container-change container display">

        <div class="box">
            <div class="img_food">
                <img src="../ASSETS/IMG/delicious-cocktail-table.jpg">
                <img src="../ASSETS/IMG/high-angle-tasty-granita-dessert-with-peach (1).jpg">
                <img src="../ASSETS/IMG/high-angle-tasty-drink-new-year.jpg">
                <img src="../ASSETS/IMG/high-angle-delicious-iced-tea-table.jpg">
            </div>
            <div class="box-form">

                <form class="form" action="">
                    <h1>Change Password</h1>
                    <div class="form-container">
                        <div class="input-box">
                            <i class="fa-solid fa-user icon-form"></i>
                            <input type="text" name="username" placeholder="Username" required>
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div>




                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="pass-old" type="password" name="old password" placeholder="Old Password" required>
                            <i class="fa-solid fa-eye show-pass show-passOld"></i>
                      
                        </div>



                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="pass-new" type="password" name="newpassword" placeholder="New Password" required>
                            <i class="fa-solid fa-eye show-pass show-passNew"></i>
              
                        </div>






                        <button type="submit" class="submit-btn">Submit</button>
                    </div>


                </form>



            </div>
        </div>
    </div> -->

    <!-- -------------------------------------------------------- -->
    <!-- <div class="container-forgot container display">
        <div class="box">
            <div class="img_food">
                <img src="../ASSETS/IMG/delicious-cake-glass-composition.jpg">
                <img src="../ASSETS/IMG/red-frozen-ice-scoop-with-with-whipped-cream-chocolate-cone.jpg">
                <img src="../ASSETS/IMG/closeup-freshly-baked-delicious-pumpkin-chocolate-brownie-with-ice-cream-plate (1).jpg">
                <img src="../ASSETS/IMG/delicious-sweet-cake-with-strawberries-baiser-plate.jpg">
        
               
            </div>
            <div class="box-form">

                <form class="form" action="">
                    <h1>forgot password</h1>
                    <div class="form-container send">

                        <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div>




                        <button type="submit" class="submit-btn ">Send Email</button>
                    </div>


                </form>


                <div class="box-passForget">
                    <p class="ques">Check your email to get new pass -> </p>
                    <p class="ques next" id="next-login-after-send">Login</p>
                </div>

            </div>
        </div>
    </div> -->

</body>
<!-- JS -->
<script src="../ASSETS/JS/res.js"></script>
<script src="../ASSETS/JS/load.js"></script>

</html>
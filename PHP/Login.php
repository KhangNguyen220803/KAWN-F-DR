<?php

include 'ConfigReg.php';
session_start();

// --------------------Login----------------------------

if(isset($_POST['log-submit'])){
        
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $emai = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

$select = " SELECT * FROM user_form WHERE username = '$username' AND email = '$emai' AND password = '$password' ";


$result = mysqli_query($conn, $select);


if(mysqli_num_rows($result) > 0 ) {
   
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    header('location:index.php');
}else {
    $errorLog[] = 'Wrong account';
}

}
    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    
    <!-- --------------------------------------------------- -->
    <div class="container-login container">
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
                    <?php
                        if(isset($errorLog)){
                            foreach ($errorLog as $error) {
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
                            <input class="l-pass" type="password" name="password" placeholder="Password" required>
                            <i class="fa-solid fa-eye show-pass show-lpass"></i>
                            <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        </div>



                        <div class="remember-forgot">
                            <label for="" class="cnt-re">
                                <input type="checkbox" name="checkbox" class="checkbox">
                                <p>Remember</p>
                            </label>
                            <a href="forgot_pass.php" class="ques next decor" id="next-forgot">Forgot Password</a>

                        </div>
                        <input type="submit" value="Login" class="submit-btn" name="log-submit">
                    </div>


                </form>


                <div class="box-passFoot">
                    
                    
                    <a href="change_pass.php" class="ques next decor" id="next-forgot">Change Password</a>
                    
                    <p class="no-acc">Do not have an account? <a href="resgister.php" class="ques next decor" id="next-change">Resgister</a></p>
                </div>

            </div>
        </div>
    </div>


    
  
    

</body>
<!-- JS -->
<script src="../ASSETS/JS/log.js"></script>
<script src="../ASSETS/JS/load.js"></script>

</html>
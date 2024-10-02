<?php

include 'ConfigReg.php';


if(isset($_POST['change-submit'])){
        
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $password_now = mysqli_real_escape_string($conn, md5($_POST['old-password']));
    $password_new = mysqli_real_escape_string($conn, md5($_POST['new-password']));

$select = " SELECT * FROM user_form WHERE username = '$username' AND password = '$password_now' LIMIT 1";


$result = mysqli_query($conn, $select);


if(mysqli_num_rows($result) > 0 ) {
    
    $select_update = mysqli_query($conn, "UPDATE user_form SET password = '$password_new' WHERE password = '$password_now'");
    header('location:Login.php');
}else {
    $errorChange[] = 'Wrong account';
}
};


    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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

    <!------------------------------------------------------- -->
    <div class="container-change container">

        <div class="box">
            <div class="img_food">
                <img src="../ASSETS/IMG/delicious-cocktail-table.jpg">
                <img src="../ASSETS/IMG/high-angle-tasty-granita-dessert-with-peach (1).jpg">
                <img src="../ASSETS/IMG/high-angle-tasty-drink-new-year.jpg">
                <img src="../ASSETS/IMG/high-angle-delicious-iced-tea-table.jpg">
            </div>
            <div class="box-form">

                <form class="form" action="" method="post">
                    <h1>Change Password</h1>

                    <?php
                        if(isset($errorChange)){
                            foreach ($errorChange as $error) {
                                echo '<span class="error_msg">'.$error.'</span>';
                            }
                        };
                    ?>

                    <div class="form-container">
                        <div class="input-box">
                            <i class="fa-solid fa-user icon-form"></i>
                            <input type="text" name="username" placeholder="Username" required>
                        </div>

                        <!-- <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div> -->

                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="pass-old" type="password" name="old-password" placeholder="Old Password" required>
                            <i class="fa-solid fa-eye show-pass show-passOld"></i>
                      
                        </div>



                        <div class="input-box">
                            <i class="fa-solid fa-key icon-form"></i>
                            <input class="pass-new" type="password" name="new-password" placeholder="New Password" required>
                            <i class="fa-solid fa-eye show-pass show-passNew"></i>
              
                        </div>





                        <input type="submit" value="Submit" class="submit-btn" name="change-submit">
                
                    </div>


                </form>



            </div>
        </div>
    </div>

 
</body>
<!-- JS -->
<script src="../ASSETS/JS/change.js"></script>
<script src="../ASSETS/JS/load.js"></script>

</html>
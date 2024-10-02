<?php

include 'ConfigReg.php';

if(isset($_POST['for-submit'])){
        
    $emai = mysqli_real_escape_string($conn, $_POST['email']);
    $select = "SELECT * FROM user_form WHERE email = '$emai' LIMIT 1";


    $result = mysqli_query($conn, $select);


if(mysqli_num_rows($result) > 0 ) {
    $errorF[] = 'Maintenance';
//    $passd_new = substr(rand(0,999999), 0, 8);
//    $select =  mysqli_query($conn, "UPDATE user_form SET password = '$passd_new' WHERE email = '$emai'");

//    $pass = GuiMail($emai, $passd_new);
//    if($pass==true){
//         header('location:Login_form.php');
//    }
}else {
    $errorF[] = 'Email does not exist';
}

};
?>
<?php
    function GuiMail($emai, $passd_new){

        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'khangvvo0711@gmail.com'; // SMTP username
            $mail->Password = '889677khang';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('khangvvo0711@gmail.com', 'Khang Võ' ); 
            $mail->addAddress($emai); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Gửi mật khẩu mới';
            $noidungthu = "<p>Bạn nhận được thư này, do bạn hoặc ai đó yêu cầu cấp mật khẩu mới</p>
                Mật khẩu của bạn là {$passd_new}
            "; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            return true;
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
            return false;
        }

    }
    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

    <!-- -------------------------------------------------------- -->
    <div class="container-forgot container">
        <div class="box">
            <div class="img_food">
                <img src="../ASSETS/IMG/delicious-cake-glass-composition.jpg">
                <img src="../ASSETS/IMG/red-frozen-ice-scoop-with-with-whipped-cream-chocolate-cone.jpg">
                <img src="../ASSETS/IMG/closeup-freshly-baked-delicious-pumpkin-chocolate-brownie-with-ice-cream-plate (1).jpg">
                <img src="../ASSETS/IMG/delicious-sweet-cake-with-strawberries-baiser-plate.jpg">
        
               
            </div>
            <div class="box-form">

                <form class="form" action="" method="post">
                    <h1>forgot password</h1>
                    <?php
                        if(isset($errorF)){
                            foreach ($errorF as $error) {
                                echo '<span class="error_msg">'.$error.'</span>';
                            }
                        };
                    ?>
                    <div class="form-container send">

                        <div class="input-box">
                            <i class="fa-solid fa-envelope icon-form"></i>
                            <input type="email" name="email" placeholder="Email" required>

                        </div>



                        <input type="submit" value="Send Email" class="submit-btn" name="for-submit">
                        
                    </div>


                </form>


                <div class="box-passForget">
                    <p class="ques">Check your email to get new pass -> </p>
                    <a href="Login.php" class="ques next decor" id="next-login-after-send">Login</a>
                </div>

            </div>
        </div>
    </div>

</body>
<!-- JS -->
<script src="../ASSETS/JS/load.js"></script>

</html>

<?php
require "../../BACKEND/Core/abstract/UserAbstract.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital@1&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container">
        <div class="header">
            <h2>create account</h2>
            <p>Start your career with us</p>
        </div>

        <div class="form">
            <form action="BACKEND\Core\User_auth\user_auth.php" method="POST">

                <input type="text" placeholder="Full name" name="Full_name">
                <input type="email" placeholder="Email" name="Email">
                <input type="password" placeholder="password" name="Password">
                <input type="password" placeholder="Confirm Password" name="Confirm_Password">
                <input type="submit" value="Sign-Up" name="Sign-Up" id="sign-Up">

            </form>
        </div>

        <div class="line">
            <span class="line2"></span>
            <p>or</p>
            <span class="line2"></span>
        </div>

        <div class="sign-with-media">
            <span class="media"><img src="../IMAGES/email.png" alt=""></span>
            <span class="media"><img src="../IMAGES/facebook.png" alt=""></span>
            <span class="media"><img src="../IMAGES/apple.png" alt=""></span>
        </div>

        <div class="privacy-policy">
            <p>By signing up you accept the <a href="">
                Terms of Service</a>
                and <a href="#">Privacy Policy</a></p>
        </div>

        <div class="log-in">
            <p>Already have an account? <a href="./Sign-In.html">login</a></p>
        </div>
    </div>



    
</body>
</html>
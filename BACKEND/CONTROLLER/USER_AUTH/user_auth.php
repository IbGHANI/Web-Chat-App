<?php
require_once "/BACKEND/Controller/Config/Connection.php";
require_once "/BACKEND/Core/User_auth/user_auth.php";


if(isset($_POST['Sign-Up'])){
    $Full_name = htmlspecialchars(trim($_POST['Full_name']));
    $Email = htmlspecialchars(trim($_POST['Email']));
    $Password = htmlspecialchars(trim($_POST['Password']));
    $Confirm_password = htmlspecialchars(trim($_POST['Confirm_Password']));





}



?>

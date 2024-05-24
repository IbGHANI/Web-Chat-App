<?php
require_once "/BACKEND/Controller/Config/Connection.php";
require_once "/BACKEND/Core/User_auth/user_auth.php";


if(isset($_POST['Sign-Up'])){
    $Full_name = htmlspecialchars(trim($_POST['Full_name']));
    $Email = htmlspecialchars(trim($_POST['Email']));
    $Password = htmlspecialchars(trim($_POST['Password']));
    $Confirm_password = htmlspecialchars(trim($_POST['Confirm_Password']));
    $hashed_password = sha1($this->Password);


    // the token for verification here



    // save user

    $connection = db_connector;
    $Data_base = $connection->getConnection();
    $save_user = new userAuth($Data_base);
    $save_user = setFull_name($Full_name);
    $save_user = setEmail($Email);
    $save_user = setPassword($Password);
    $save_user = setConfirm_Password($Confirm_password);
    $save_user = setPatterns();
    $save_user = validateData();
    $save_user->signUp();
    echo "<script>alert(".$save_user->getErrorMsg().")</script>";

}










?>

<?php

$_SERVER = "localhost";
$username = "root";
$password = "";
$db_name = "User_data";
$Data_base = mysqli_connect($_SERVER,$username,$password,$db_name);

if($data_base){
    echo "success";
}else{
    echo "error";
}

?>
<?php

require "../abstract/UserAbstract.php";

interface UserInterface{
// interface is to declare abstract method without it implementation 
    public function signUp();
    public function signIn();
    public function updateUser();
    



}


?>
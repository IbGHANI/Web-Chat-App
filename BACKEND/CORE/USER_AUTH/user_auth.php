<?php

session_start();


class userAuth{



    private $Full_name;
    private $Email;
    priveate $Password;
    private $Confirm_Password;
    private $error_msg;

    private $Pattern = " ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$^";
    prvate $Uppercase;
    private $Lowercase;
    private $Specialcharacter;
    private $number;
    private $Data_base;



    public function __construct($Data_base)
    {
        $this->Data_base = $Data_base;
    } 


    public function setFull_name($Full_name)
    {
        $this->Full_name = $Full_name;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function setConfirm_Password($Confirm_Password)
    {
        $this->setConfirm_Password = $Confirm_Password;
    }

    public function setPatterns()
    {
        $this->number  = preg_match('@[0-9]@', $this->password);
        $this->Uppercase  = preg_match('@[A-Z]@', $this->password);
        $this->Lowercase =  preg_match('@[a-z]@', $this->password);
        $this->Specialcharacter = preg_match('@[^\w]@', $this->password);
    }


    public function validateData()
    {

        if(isset($_POST['Sign-Up'])){

            $this->error_msg = "Full name field is required";

        }else{
            $this->error_msg = null;
        }











    }


























}









?>
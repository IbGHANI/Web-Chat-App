<?php 

require __DIR__ .'../../../Controller/User_auth/user_auth.php';


// abstract is declaring of method and implemntation of the method

abstract class UserAbstract implements UserInterface{

    private $Full_name;
    private $Email;
    private $Password;
    private $Confirm_Password;
    private $error_msg;
    private $Pattern = " ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$^";
    private $Uppercase;
    private $Lowercase;
    private $Specialcharacter;
    private $number;
    private $Data_base;


    

    public function signIn(){

    }

    public function updateUser(){


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
        $this->Confirm_Password = $Confirm_Password;
    }


    // the patterns here
    
    public function setPatterns()
    {
        $this->number  = preg_match('@[0-9]@', $this->password);
        $this->Uppercase  = preg_match('@[A-Z]@', $this->password);
        $this->Lowercase =  preg_match('@[a-z]@', $this->password);
        $this->Specialcharacter = preg_match('@[^\w]@', $this->password);
    }


    public function signUp(){
        $hashed_password = sha1 ($this->Password);

        $query = "INSERT INTO user_details (id,Full_name,Email,Password,) VALUES(Null, '$this->Full_name', '$this->Email', '$this->hashed_password',)";
        $result = mysqli_query($this->Data_base, $query);

        if($result){
            return $this-> error_msg = "you have successfully registered, now go to your email to verify your account";
        }
        else{
            return $this-> error_msg = "error occured trying again later";
        }

    }
    










}





?>
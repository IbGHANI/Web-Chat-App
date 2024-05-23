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


    // Data validation start here

    public function validateData()
    {

        if(isset($_POST['Sign-Up'])){

            if(empty($this->setFull_name)){
                $this->error_msg = "Name field is required";
            }
            elseif(!preg_match("/^[a-zA-z]*$/", $this->setFull_name)){
                $this->error_msg = "only alphabetic and white space are allowed";
            }
            elseif(!filter_var($this->Email, FILTER_VALIDATE_EMAIL)){
                $this->Email = "Email field is required";
            }
            elseif(!preg_match($this->patterns, $this->Email)){
                $this-> error_msg = "Email not valid";
            }
            elseif(empty($this->Password)){
                $this-> error_msg = " Password field is required";
            }
            elseif(strlen($this->Password) < 8 || !$this->number || !$this->Uppercase || !$this->Lowercase || !$this->Specialcharacter)
            {
                $this-> error_msg  = "Password should be at least 8 characters in length, Uppercase, Lowercase, specialcharacter and number.";
            }
            elseif(empty($this->setConfirm_Password)){
                $this-> = "Confirm password field is required";
            }
            elseif($this->setConfirm_Password !== $this->Password){
                $this->error_msg = "Password does not match";
            }
            else{
                $this->error_msg = null;
            }

            return $this-> error_msg;

        }

    }

    // data validatin ends here




    // check if the user or the email exist in the database.

    public function getErrorMsg(){
        return $this->error_msg;
    }

    public function isEmailAvailable(){
        $emailExists = false;
        $sql = "SELECT Email FROM user_details WHERE Email = "$this->Email" ";
        $result = mysqli_query($this->Data_base, $sql);

        if(mysqli_num_rows($result) > 0){
            $emailExists = true;
        }
        return $this->error_msg = "This email already exist";
    }


    // sending the validated data to the database.

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
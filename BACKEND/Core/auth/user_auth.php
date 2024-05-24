<?php



session_start();
require "../abstract/UserAbstract.php";
require "../interfaces/UserInterface.php";

class userAuth extends UserAbstract{



    public function __construct($Data_base)
    {
        $this->Data_base = $Data_base;
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

    
}






?>
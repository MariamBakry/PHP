<?php
function validate_context(){
    $flag = 2;
    if(!empty($_POST)){
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])){
            $error = "There is an empty label";
            $flag = 1;
        }
        elseif(strlen($_POST["name"]) > _NAME_MAX_LENGTH){
            $error = "Name should be less than or equal 100 characters";
            $flag = 1;
        }
        elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $error = "You entered an unvalid Email";
            $flag = 1;
        }
        elseif(strlen($_POST["message"]) > _MSG_MAX_LENGTH){
            $error = "Message should be less than or equal 255 characters";
            $flag = 1;
        }
        else{
            $error = "<strong>"._THANKS_MSG."</strong> <br><br>
            <strong>Name: </strong>".$_POST["name"]."<br>
            <strong>Email: </strong>".$_POST["email"]."<br>
            <strong>Message: </strong>".$_POST["message"]."<br>";
            $flag = 0;
            die($error);
        }
    }

    if($flag==1) return $error;
    else return "";
}

function validate_form($var){
    if(!empty($_POST[$var])){
        return $_POST[$var];
    }
}



?>
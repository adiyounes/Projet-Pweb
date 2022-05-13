<?php
if(isset($_POST["btn-send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $subject = "hell to you";

    if(empty($name) ||empty($email) ||empty($phone) ||empty($message))
    {
        header('location:contact.php?error');
    }
    else
    {
        $to = "younesadi18@gmail.com";
        if(mail($to,$subject,$message,$email))
        {
            header('location:contact.php?seccuss');
        }
    }
}
else
{
    header('location:contact.php');
}



?>
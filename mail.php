<?php
if(isset($_POST["btn-send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $subject = "email from website";
    
    if(empty($name) ||empty($email) ||empty($phone) ||empty($message))
    {
        header('location:contact.php?error#send');
    }
    else
    {   
        
        $to = "younesadi18@gmail.com";
        ini_set('SMTP','myserver');
        ini_set('smtp_port',25);
        
        if(mail($to,$subject,$message))
        {
            header('location:contact.php?seccuss#send');
        }
    }
}
else
{
    header('location:contact.php');
}
?>
<?php
include './dbconnect.php';


$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$matricul=$_POST['Matricul'];
$fac=$_POST['Faculté'];
$annee=$_POST['Annee'];
$sp=$_POST['sp'];
$email=$_POST['email'];
$phonenumber=$_POST['PhoneNumber'];
$motives=$_POST['motives'];
$objectives=$_POST['objectives'];

$stmt = $connect ->prepare("insert into utilisateur(firstname,lastname,matricule,faculté,year,sp,email,phonenumber,motivation,objectives) values(?,?,?,?,?,?,?,?,?,?)");
$stmt ->bind_param("ssissssiss",$firstname,$lastname,$matricul,$fac,$annee,$sp,$email,$phonenumber,$motives,$objectives);

if($stmt->execute()){
    header('location:signup.php?seccuss#send');
}else{
    header('location:signup.php?error#send');
}
                                    
?>
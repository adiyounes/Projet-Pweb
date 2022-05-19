<?php
$servername = "localhost";
$username = "root";
$password = "sql4815162342";
$database = "db";

$connect = new mysqli($servername, $username, $password,$database);
mysqli_set_charset($connect,'utf8');
if($connect){}
else
{
    die ("connect failed: %s \n".$connect -> error);
}
$query="SELECT eventdesc FROM events";
$result=mysqli_query($connect, $query);
?>
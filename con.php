<?php
$db="localhost";
$dbuser="root";
$password="";
$conn=new mysqli($db,$dbuser,$password,"mini_project");


$yourname = $_POST['yourname'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$message  = $_POST['message'];


$SQ="insert into contact (name,email,phone,message) values ('".$yourname."','".$email."','".$phone."','".$message."')";

$ret=mysqli_query($conn,$SQ);
if(!$ret)
{
die('could not enter data:');
}

echo "<script> alert('Feedback added Successfull !!!');window.location='studentlogin.php' </script>";


?>
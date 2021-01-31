<?php
$db="localhost";
$dbuser="root";
$password="";
$conn=new mysqli($db,$dbuser,$password,"mini_project");
//if(!$conn)
//{
//die("connection failed");
//}
//echo "connected successfully";
//$check=mysql_select_db('franch');
//if(!$check)
//{
//die('could not connect');
//}



$user=$_POST['txtuser'];
$pass=$_POST['txtPassword'];
//mysqli_select_db("franch",$conn);
//$sql="insert into login (Usr_nme,Ps_wrd,Usr_typ) values('".$user."','".$pass."','staff')";
$sql="insert into users (username,password,usertype) values('".$user."','".$pass."','staff')";

$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter login data:');
}


$FirstName =$_POST['txtname'];
$LastName=$_POST['txtlastname'];
$House=$_POST['txthouse'];
$Loc=$_POST['txtloc'];
$City=$_POST['txtcity'];
$State=$_POST['txtstate'];
$Mob=$_POST['txtmobnum'];
$Phone=$_POST['txtphnumber'];
$Email=$_POST['txtemail'];
$Quali=$_POST['txtquali'];
$Gen=$_POST['txtgen'];



$SQ="insert into stu(FirstName,LastName,House,Loc,City,State,Mob,Phone,Email,Quali,Gen) 
values('".$FirstName."','".$LastName."','".$House."','".$Loc."','".$City."','".$State."','".$Mob."','".$Phone."','".$Email."','".$Quali."' ,'".$Gen."')";

$ret=mysqli_query($conn,$SQ);
if(!$ret)
{
die('could not enter data:');
}
//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Staff details added Successfull,Click the SIGN IN button to Login!!!');window.location='franch.php' </script>";






?>
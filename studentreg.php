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
$pass=$_POST['txtp'];
//mysqli_select_db("franch",$conn);
$sql="insert into login (Usr_nme,Ps_wrd,Usr_typ) values('".$user."','".$pass."','franch')";
$sql="insert into users (email,password,usertype) values('".$user."','".$pass."','franch')";

$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter data:');
}

$Fregnum=$_POST['txtid'];
$CourId=$_POST['txtcour'];
$FirstName=$_POST['txtfname'];
$LastName=$_POST['txtlname'];
$StudDob=$_POST['txtbirth'];
$StudHouse=$_POST['txthou'];
$StudLoc=$_POST['txtloc'];
$StudCity=$_POST['txtcity'];
$StudState=$_POST['txtstate'];
$StudQuali=$_POST['txtquali'];
$StudMobile=$_POST['txtpone'];
$StudGen=$_POST['gender'];
$StudEmail=$_POST['txtemail'];



$SQ="insert into stu(Fregnum,CourId,FirstName,LastName,StudDob,StudHouse,StudLoc,StudCity,StudState,StudQuali,StudMobile,StudGen,StudEmail) values('".$Fregnum."','".$CourId."','".$FirstName."','".$LastName."','".$StudDob."','".$StudHouse."','".$StudLoc."','".$StudCity."','".$StudState."','".$StudQuali."','".$StudMobile."','".$StudGen."','".$StudEmail."')";

$ret=mysqli_query($conn,$SQ);
if(!$ret)
{
die('could not enter data:');
}
//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Franchise details added Successfull,Click the SIGN IN button to Login!!!');window.location='admin.php' </script>";






?>
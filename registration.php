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

$sql="insert into users (username,password,usertype) values('".$user."','".$pass."','franch')";

$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter data:');
}


$FranchPhone =$_POST['txtphone'];
$FranchLoc=$_POST['txtloc'];
$FranchCity=$_POST['txtcity'];
$FranchState=$_POST['txtstate'];
$FranchEmail=$_POST['txtem'];
$FirstName=$_POST['txtfname'];
$LastName=$_POST['txtlname'];
$OwnerPhone=$_POST['txtphn'];
$OwnerMobile=$_POST['txtmob'];
$OwnerHouse=$_POST['txthname'];
$OwnerLoc=$_POST['txtloca'];
$OwnerState=$_POST['txtstates'];
$OwnerEmail=$_POST['txtems'];



$SQ="insert into franchise(FranchPhone,FranchLoc,FranchCity,FranchState,FranchEmail,FirstName,LastName,OwnerPhone,OwnerMobile,OwnerHouse,OwnerLoc,OwnerState,OwnerEmail) values('".$FranchPhone."','".$FranchLoc."','".$FranchCity."','".$FranchState."','".$FranchEmail."','".$FirstName."','".$LastName."','".$OwnerPhone."','".$OwnerMobile."','".$OwnerHouse."','".$OwnerLoc."','".$OwnerState."','".$OwnerEmail."')";

$ret=mysqli_query($conn,$SQ);
if(!$ret)
{
die('could not enter data:');
}
//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Franchise details added Successfull,Click the SIGN IN button to Login!!!');window.location='admin.php' </script>";






?>
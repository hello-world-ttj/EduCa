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
$pass=$_POST['txtpass'];
//mysqli_select_db("franch",$conn);
//$sql="insert into login (Usr_nme,Ps_wrd,Usr_typ) values('".$user."','".$pass."','staff')";
$sql="insert into users (username,password,usertype) values('".$user."','".$pass."','student')";

$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter login data:');
}


$FirstName =$_POST['txtname'];
$LastName =$_POST['txtlast'];
$Dob =$_POST['txtbirth'];
$quali =$_POST['txtquali'];
$gender =$_POST['gender'];
$Mob =$_POST['txtmob'];
$House =$_POST['txthou'];
$Email =$_POST['txtemail'];
$Loc =$_POST['txtloc'];
$City =$_POST['txtcity'];
$State =$_POST['txtstate'];
$Course =$_POST['txtcour'];



$SQ="insert into student(FirstName,LastName,Dob,quali,gender,Mob,House,Email,Loc,City,State,Course) 
values('".$FirstName."','".$LastName."','".$Dob."','".$quali."','".$gender."','".$Mob."','".$House."','".$Email."','".$Loc."','".$City."','".$State."' ,'".$Course."')";

$ret=mysqli_query($conn,$SQ);
if(!$ret)
{
die('could not enter data:');
}
//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Student details added Successfully');window.location='franch.php' </script>";






?>
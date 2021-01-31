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



$Subname=$_POST['txtsub'];
$Semester=$_POST['txts'];
$Course=$_POST['txtc'];
//mysqli_select_db("franch",$conn);
$sql="insert into subjec (Subname,Semester,Course) values('".$Subname."','".$Semester."','".$Course."')";


$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter data:');
}


//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Subject details added Successfull');window.location='franch.php' </script>";






?>
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



$Course=$_POST['txtcn'];
$Duration=$_POST['txtcd'];
//mysqli_select_db("franch",$conn);
$sql="insert into coursedetails (coursename,courseduration) values('".$Course."','".$Duration."')";


$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter data:');
}


//echo "<script>alert('invalid username or password');window.location='admain.html';</script>";
echo "<script> alert('Course details added Successfull');window.location='franch.php' </script>";






?>
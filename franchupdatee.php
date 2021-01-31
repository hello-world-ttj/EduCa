<?php
//include("header.php");
//include("sidebar.php");
$con=new mysqli("localhost","root","","mini_project");
$ctins=0;
?>

<?php
if(isset($_POST['update']))
{
$sql ="update franchise set FranchPhone ='$_POST[studentid]',FranchLoc='$_POST[fname]',FranchCity='$_POST[lname]',FirstName='$_POST[dob]' where id='$_GET[id]'";
$s=mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  $ctins =  mysqli_affected_rows($con);
}
echo "<center><b> Updated successfully...</b></center><br>";

?>

							
		

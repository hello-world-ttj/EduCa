
<?php
session_start();
include 'config.php';

mysqli_select_db($conn, 'mini_project');

if(isset($_POST['usernamelog']) && isset($_POST['passwordlog'])){

	//mysqli real escape prevent from sql injection which filter the user input
	$username=mysqli_real_escape_string($conn,$_POST['usernamelog']);
	$password=mysqli_real_escape_string($conn,$_POST['passwordlog']);
	$qry=mysqli_query($conn,"select usertype from users where username='".$username."' and password='".$password."'");
	if(mysqli_num_rows($qry)>0){
		$data=mysqli_fetch_assoc($qry);
		if($data['usertype']=='staff'){
			header("Location:stafflogin.php");	
		}
		else if($data['usertype']=='student'){
			header("Location:studentlogin.php");
    } 
    else if($data['usertype']=='staff'){
			header("Location:staff.php");
    } 
    else if($data['usertype']=='franch'){
			header("Location:franch.php");
    }
    else if($data['usertype']=='admin'){
			header("Location:admin.php");

	}
	else{
    echo "<script> alert('Invalid Login Details!!!');window.location='reg_log.php' </script>";	
	}
}
else{
  echo "<script> alert('Please Enter Email and Password!!!');window.location='reg_log.php' </script>";
}
}
?>
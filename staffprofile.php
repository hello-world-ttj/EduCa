<?php
$con=new mysqli("localhost","root","","mini_project");
if(isset($_GET['StaffId']))
{
$results = mysqli_query($con,"SELECT from student where StaffId ='$_GET[StaffId]'");
}
?>

<html>
      <head>
            <title>Profile</title>
			<link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
			<link rel="stylesheet" href="css\fixed.css">
			<link rel="stylesheet" href="css\index_style.css">
			<link rel="stylesheet" href="css/style12.css">
      </head>
      <body>
	
</script>
<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="#" class="navbar-brand"><img src="img/educa.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="stafflogin.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="staffprofile.php" class="nav-link">Staffs </a>
                    </li>
                    <li class="nav-item">
			        	<a href="stafflogin.php#contact" class="nav-link">Contact Us </a>
			        </li>
                    
                    <li class="nav-item">
                        <button class="login_btn"><a href="logout.php" class="nav-link">Logout</a></button>
                    </li>
                </ul>
            </div>
        </nav>
        <!--End Navigation-->

<div class="design">
<form id="form1" name="form1" method="post" action="">
		  <table width="531" border="1" align="center">
		    <tr>
		      <th width="130" scope="col">Staff Id</th>
		      <th width="123" scope="col">First Name</th>
		      <th width="138" scope="col">Last Name</th>
			  <th width="138" scope="col">House</th>
			  <th width="138" scope="col">Location </th>
			  <th width="138" scope="col">City</th>
			  <th width="138" scope="col">State</th>
			  <th width="138" scope="col">Mobile</th>
			  <th width="138" scope="col">Phone</th>
			  <th width="138" scope="col"> Email</th>
		      <th width="138" scope="col"> Qualification</th>
              <th width="138" scope="col"> Gender</th>
<?php
$con=new mysqli("localhost","root","","mini_project");
$sql="select * from stu";
$res=mysqli_query($con,$sql) or die(mysql_error($con));
//$num=mysqli_num_rows($res);
while($arr=mysqli_fetch_array($res))
{
	echo "<tr>
	<td>$arr[StaffId]&nbsp;</td><td>$arr[FirstName]&nbsp;</td>
	<td>$arr[LastName]&nbsp;</td><td>$arr[House]&nbsp;</td>
	</td><td>$arr[Loc]&nbsp;</td><td>$arr[City]&nbsp;</td><td>$arr[State]&nbsp;</td>
	<td>$arr[Mob]&nbsp;</td><td>$arr[Phone]&nbsp;</td><td>$arr[Email]&nbsp;</td>
    <td>$arr[Quali]&nbsp;</td><td>$arr[Gen]&nbsp;</td>";
}	

?>
</table>
</form>

</div>

</body>
</html>
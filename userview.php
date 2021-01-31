<?php
$con=new mysqli("localhost","root","","mini_project");
if(isset($_GET['id']))
{
$results = mysqli_query($con,"DELETE from franchise where id ='$_GET[id]'");
}
?>

<html>
      <head>
            <title>User View</title>
			<link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
			<link rel="stylesheet" href="css\fixed.css">
			<link rel="stylesheet" href="css\index_style.css">
			<link rel="stylesheet" href="css/style12.css">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="#" class="navbar-brand"><img src="img/educa.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="admin.php#home" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="addregistration.html" class="nav-link">Add Franchisee </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="userview.php" class="nav-link">View Franchisee </a>
                    </li>

					<li class="nav-item">
                        <a href="feedback.php" class="nav-link">View Feedback </a>
                    </li>
                    
                    <li class="nav-item">
                        <button class="login_btn"><a href="logout.php" class="nav-link">Logout</a></button>
                    </li>
                </ul>
            </div>
        </nav>

		  <div class="design">
<form id="form1" name="form1" method="post" action="">
		  <table width="531" border="1" align="center">
		    <tr>
		      <th width="130" scope="col">Franchise ID</th>
		      <th width="123" scope="col">Franch Contact</th>
		      <th width="138" scope="col">Franch Location</th>
			  <th width="138" scope="col">Franch City</th>
			  <th width="138" scope="col">Franch State </th>
			  <th width="138" scope="col">Franch Email</th>
			  <th width="138" scope="col">Owner Name</th>
			  <th width="138" scope="col">Owner Contact</th>
			  <th width="138" scope="col">Owner Location</th>
			  <th width="138" scope="col">Owner Email</th>
			  
		      <th colspan="3" width="112" scope="col">Action</th>
	        </tr>
<?php
$con=new mysqli("localhost","root","","mini_project");
$sql="select * from franchise";
$res=mysqli_query($con,$sql) or die(mysql_error($con));
//$num=mysqli_num_rows($res);
while($arr=mysqli_fetch_array($res))
{
	echo "<tr>
	<td>$arr[id]&nbsp;</td><td>$arr[FranchPhone]&nbsp;</td>
	<td>$arr[FranchLoc]&nbsp;</td><td>$arr[FranchCity]&nbsp;</td>
	</td><td>$arr[FranchState]&nbsp;</td>
	<td>$arr[FranchEmail]&nbsp;</td><td>$arr[FirstName]&nbsp;</td>
	<td>$arr[OwnerMobile]&nbsp;</td><td>$arr[OwnerLoc]&nbsp;</td>
	<td>$arr[OwnerEmail]&nbsp;</td>
	
	<td align='center'><a href='userview.php?id=$arr[id]'>Delete</a></td>
	<td align='center'><a href='franchiseupdate.php?id=$arr[id]'>Update</a></td></tr>";
}	

?>
</table>
</form>
</div>

</body>
</html>
<?php
$con=new mysqli("localhost","root","","mini_project");
if(isset($_GET['studentId']))
{
$results = mysqli_query($con,"DELETE from student where studentId ='$_GET[studentId]'");
}
?>


<html>
      <head>
            <title>StudentView</title>
			<link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
			<link rel="stylesheet" href="css\fixed.css">
			<link rel="stylesheet" href="css\index_style.css">
			<link rel="stylesheet" href="css/style12.css">
      </head>
      <body>
<script type="text/javascript">
function openWin() {
    window.open("loginframe.html","_parent");
	}
	
    

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
                        <a href="franch.php#home" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="cstudent.php" class="nav-link">Student </a>
                    </li>
                    <li class="nav-item">
                        <a href="cstudentview.php" class="nav-link">View Student </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="cstaff.html" class="nav-link">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a href="CStaffview.php" class="nav-link">View Staff</a>
                    </li>
                    <li class="nav-item">
                        <a href="subject.php" class="nav-link">Subject</a>
                    </li>
                    <li class="nav-item">
                        <a href="Subjectview.php" class="nav-link">View Subject</a>
                    </li>
                    <li class="nav-item">
                        <a href="course.html" class="nav-link">Course</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewcourse.php" class="nav-link">View Course</a>
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
		      <th width="130" scope="col">Student Id</th>
		      <th width="123" scope="col">First Name</th>
		      <th width="138" scope="col">Last Name</th>
			  <th width="138" scope="col">House Name</th>
			  <th width="138" scope="col">Location </th>
			  <th width="138" scope="col">City</th>
			  <th width="138" scope="col">State</th>
			  <th width="138" scope="col">Qualification</th>
			  <th width="138" scope="col">Mobile No</th>
			  <th width="138" scope="col">Email</th>
			  <th width="138" scope="col">Course</th>
			  <th width="138" scope="col">DOB</th>
			  
		      <th colspan="3" width="112" scope="col">Action</th>
	        </tr>
<?php
$con=new mysqli("localhost","root","","mini_project");
$sql="select * from student";
$res=mysqli_query($con,$sql) or die(mysql_error($con));
//$num=mysqli_num_rows($res);
while($arr=mysqli_fetch_array($res))
{
	echo "<tr>
	<td>$arr[studentId]&nbsp;</td><td>$arr[FirstName]&nbsp;</td>
	<td>$arr[LastName]&nbsp;</td><td>$arr[House]&nbsp;</td>
	</td><td>$arr[Loc]&nbsp;</td>
	<td>$arr[City]&nbsp;</td><td>$arr[State]&nbsp;</td>
	<td>$arr[quali]&nbsp;</td><td>$arr[Mob]&nbsp;</td>
	<td>$arr[Email]&nbsp;</td><td>$arr[Course]&nbsp;</td></td><td>$arr[Dob]&nbsp;</td>
	
	<td align='center'><a href='cstudentview.php?studentId=$arr[studentId]'>Delete</a></td>
	<td align='center'><a href='updatestudent.php?studentId=$arr[studentId]'>Update</a></td></tr>";
}	

?>
</table>

</form>
</div>

</body>
</html>
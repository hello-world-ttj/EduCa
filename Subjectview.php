<?php
$con=new mysqli("localhost","root","","mini_project");
if(isset($_GET['SubId']))
{
$results = mysqli_query($con,"DELETE from subjec where SubId ='$_GET[SubId]'");
}
?>

<html>
      <head>
            <title>SubjectView</title>
			<link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
			<link rel="stylesheet" href="css\fixed.css">
			<link rel="stylesheet" href="css\index_style.css">
			<link rel="stylesheet" href="css/style12.css">
      </head>
      <body>
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
		      <th width="130" scope="col">Subject Id</th>
		      <th width="123" scope="col">Subject Name</th>
		      <th width="138" scope="col">Semester</th>
			  <th width="138" scope="col">Course</th>
			  
		      <th colspan="3" width="112" scope="col">Action</th>
	        </tr>
<?php
$con=new mysqli("localhost","root","","mini_project");
$sql="select * from subjec";
$res=mysqli_query($con,$sql) or die(mysql_error($con));
//$num=mysqli_num_rows($res);
while($arr=mysqli_fetch_array($res))
{
	echo "<tr>
	<td>$arr[SubId]&nbsp;</td><td>$arr[Subname]&nbsp;</td>
	<td>$arr[Semester]&nbsp;</td><td>$arr[Course]&nbsp;</td>
	
	<td align='center'><a href='Subjectview.php?SubId=$arr[SubId]'>Delete</a></td>
	<td align='center'><a href='updatesubject.php?SubId=$arr[SubId]'>Update</a></td></tr>";
}	

?>
</table>
</form>

</div>

</body>
</html>
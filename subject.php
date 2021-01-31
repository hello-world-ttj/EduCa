<html>
      <head>
            <title>subject</title>
			<link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
			<link rel="stylesheet" href="css\fixed.css">
			<link rel="stylesheet" href="css\index_style.css">
			<link rel="stylesheet" href="css/style12.css">
<script>
function openWin() {
    window.open("fadmin.html","_parent");
}

</script>

      </head>
      <body>
<br>

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
     
		<h2 align="center"> NEW SUBJECT REGISTRATION </h2>
		
	<form action="subjectreg.php" method="POST" >
		<table align="center"  cellpadding="10">
			<tr>
				<td>Subject Name</td>
				<td><input type="text"  name="txtsub"  required></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><select name="txts">
					<option value="">--Select--</option>
					<option value="Semester 1">Semester 1</option>
					<option value="Semester 2">Semester 2</option>
					<option value="Semester 3">Semester 3</option>
					<option value="Semester 4">Semester 4</option>
					<option value="Semester 5">Semester 5</option>
					<option value="Semester 6">Semester 6</option>
					
					
					</select></td>
				
			</tr>
			<tr>
				<td>Course</td>
				

				<td><select name="txtc">
						<option disabled selected>-- Select Course --</option>
						<?php
						$con=new mysqli("localhost","root","","mini_project");
							 // Using database connection file here
							 $sql="select coursename from coursedetails";
							 $res=mysqli_query($con,$sql) or die(mysql_error($con)); // Use select query here 
					
							while($data = mysqli_fetch_array($res))
							{
								echo "<option value='". $data['coursename'] ."'>" .$data['coursename'] ."</option>";  // displaying data in option menu
							}	
						?>  
					  </select></td>
			</tr>
			

		</table>
			<br>

		<center><input type="submit" name="Submit" value="SUBMIT" id="submit"> </center>
	     


	</form>
		</div>
    </body>
</html>
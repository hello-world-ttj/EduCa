<html>
      <head>
            <title>Student</title>
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
		<h4 align="center">        NEW REGISTRATION </h4>
		
		<br>
		<div class="errormsg">
			<h5 id="errormsg" align="center" style="color: #e61b1b;"></h5>
		</div>
	<form action="cstudentreg.php" method="POST" onsubmit="return valid()">
		<table align="center"  cellpadding="10">
			<tr>
				<td>First Name</td>
				<td><input type="text"  name="txtname" id="first"></td>
				<td></td><td></td><td></td>

				<td>Date of Birth</td>
				<td><input type="date"  name="txtbirth" id="dob"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text"  name="txtlast" id="last"></td>
				<td></td><td></td><td></td>

				<td>Qualification</td>
				<td>
	<select name="txtquali" id="quali">
	<option value="">--Select--</option>
	<option value="SSLC">SSLC</option>
	<option value="Plus TwO">Plus TwO</option>
	<option value="U.G">U.G</option>
	<option value="P.G">P.G</option>
	
	</select>
			</tr>
			<tr>
				<td>Gender</td>
	<td>
	<input type="radio" name="gender" value="male" id="gender">Male
	<input type="radio" name="gender" value="Female" id="gender">Female
	
	</td>
	
			
				<td></td><td></td><td></td>

				<td>Mobile Number</td>
				<td><input type="text"  name="txtmob"    id="mob"></td>
			</tr>
			<tr>
				<td>House Name</td>
				<td><input type="text"  name="txthou" id="house"></td>
				<td></td><td></td><td></td>

				<td>Email</td>
				<td><input type="text"  name="txtemail"    id="email"></td>
			</tr>
			
			<tr>
				<td>Location</td>
				<td><input type="text"  name="txtloc" id="loc"></td>
				<td></td><td></td><td></td>

				<td>User Name</td>
				<td><input type="text"  name="txtuser"     id="username"></td>
			</tr>
			
			<tr>
				<td>City</td>
				<td><input type="text"  name="txtcity" id="city"></td>
				<td></td><td></td><td></td>

				<td>Password</td>
				<td><input type="password"  name="txtpass"    id="password"></td>
			</tr>
			
			<tr>
				<td>Sate</td>
				<td>
				<select name="txtstate" id="txtstate" >
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></td>

				<td></td><td></td><td></td>

				<td>Confirm Password</td>
				<td><input type="password"  name="txtconfirm"    id="cpass"></td>
			</tr>
			
			
			<tr>
				<td>Course</td>
				<td>
					<select name="txtcour">
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
					  </select>
			
							
				
				<td></td><td></td><td></td>
		</table>
		</div>
			<br>

		<center><input type="submit" name="submit" value="SUBMIT" id="submit" > </center>
	</form>
	<script src="js/script.js"></script>
    </body>
</html>
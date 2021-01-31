<?php
//include("header.php");
//include("sidebar.php");
$con=new mysqli("localhost","root","","mini_project");
$ctins=0;
?>

<?php
if(isset($_POST['update']))
{
    $sql ="update subjec set Semester ='$_POST[studentid]',Course='$_POST[fname]' where SubId='$_GET[SubId]'";
    $s=mysqli_query($con,$sql);
      if (!mysqli_query($con,$sql))
       {
          die('Error: ' . mysqli_error($con));
        }
        $ctins =  mysqli_affected_rows($con);
		echo "<center><b> Updated successfully...</b></center><br>";
		header('Location: Subjectview.php');
}
?>
	
<?php
if($ctins == 0)

{
	?>
		<form id="form1" name="form1" method="post" action="">		
			<table width="371" border="0" align="center">
			  <tr>
			    <th width="169" height="33" scope="row">Semester</th>
			   
			     
			      
				  <td><select name="studentid" required>
					<option value="">--Select--</option>
					<option value="Semester 1">Semester 1</option>
					<option value="Semester 2">Semester 2</option>
					<option value="Semester 3">Semester 3</option>
					<option value="Semester 4">Semester 4</option>
					<option value="Semester 5">Semester 5</option>
					<option value="Semester 6">Semester 6</option>
					
					
					</select></td>

		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Course
			      <label for="fname"></label></th>
			    <td>
				<select name="fname" required>
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
			  
			  
			    <th scope="row">&nbsp;</th>
			
			    <td><br/> <input type="submit" name="update" id="submit"  value="Update" /></td>
		      </tr>
          </table>		  
    </form>
    
	<?php
	  
		
}	
	?>

	

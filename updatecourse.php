<?php
//include("header.php");
//include("sidebar.php");
$con=new mysqli("localhost","root","","mini_project");
$ctins=0;
?>

<?php
if(isset($_POST['update']))
{
    $sql ="update coursedetails set coursename ='$_POST[studentid]',courseduration='$_POST[fname]' where courseid='$_GET[courseid]'";
    $s=mysqli_query($con,$sql);
      if (!mysqli_query($con,$sql))
       {
          die('Error: ' . mysqli_error($con));
        }
        $ctins =  mysqli_affected_rows($con);
		echo "<center><b> Updated successfully...</b></center><br>";
		header('Location: viewcourse.php');
}
?>

							
		
<?php
if($ctins == 0)

{
	?>
		<form id="form1" name="form1" method="post" action="">		
			<table width="371" border="0" align="center">
			  <tr>
			    <th width="169" height="33" scope="row">Course Name</th>
			    <td width="140">
			     
			      <input type="text" name="studentid" required ></td>
		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Duration
			      <label for="fname"></label></th>
			    <td><select name="fname" required>
					<option value="">--Select--</option>
					<option value="1 month">1 month</option>
					<option value="2 months">2 months</option>
					<option value="3 months">3 months</option>
					<option value="6 months">6 months</option>
					<option value="1 year">1 year</option>
					<option value="2 years">2 years</option>
					<option value="3 years">3 years</option>
					
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

	

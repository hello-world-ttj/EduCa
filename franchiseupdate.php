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
		echo "<center><b> Updated successfully...</b></center><br>";
		header('Location: userview.php');
}
?>

							
		
<?php
if($ctins == 0)

{
	?>
		<form id="form1" name="form1" method="post" action="">		
			<table width="371" border="0" align="center">
			  <tr>
			    <th width="169" height="33" scope="row">Phone Number</th>
			    <td width="140">
			     
			      <input type="text" name="studentid" required ></td>
		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Location
			      <label for="fname"></label></th>
			    <td><input type="text" name="fname" required></td>
		      </tr>
			  <tr>
			    <th height="36" scope="row">City</th>
			    <td><label for="lname"></label>
		        <input type="text" name="lname" required></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Owner Name
			      <label for="dob"></label></th>
			    <td><input type="text" name="dob" required></td>
		      </tr>
			  <tr>
			    <th scope="row">&nbsp;</th>
			
			    <td><br/> <input type="submit" name="update" id="submit"  value="Update" /></td>
		      </tr>
          </table>		  
    </form>
    
	<?php
	  
		
}	
	?>

	

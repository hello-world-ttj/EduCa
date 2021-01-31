<?php
//include("header.php");
//include("sidebar.php");
$con=new mysqli("localhost","root","","mini_project");
$ctins=0;
?>

<?php
if(isset($_POST['update']))
{
    $sql ="update student set Mob ='$_POST[txtmobnum]',Email='$_POST[fname]',City='$_POST[city]' ,Loc='$_POST[location]' where studentId='$_GET[studentId]'";
    $s=mysqli_query($con,$sql);
      if (!mysqli_query($con,$sql))
       {
          die('Error: ' . mysqli_error($con));
        }
        $ctins =  mysqli_affected_rows($con);
		echo "<center><b> Updated successfully...</b></center><br>";
		header('Location: cstudentview.php');
}
?>
	
<?php
if($ctins == 0)

{
	?>
		<form id="form1" name="form1" method="post" action="" >		
		<table width="371" border="0" align="center">
			  <tr>
			    <th width="169" height="33" scope="row">Mobile Number</th>
			    <td width="140">
			     
			      <input type="text" name="txtmobnum" required ></td>
		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Email
			      <label for="fname"></label></th>
			    <td><input type="text" name="fname" required></td>
		      </tr>
			  <tr>
			    <th height="36" scope="row">City</th>
			    <td><label for="lname"></label>
		        <input type="text" name="city" required></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Location
			      <label for="dob"></label></th>
			    <td><input type="text" name="location" required></td>
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

	

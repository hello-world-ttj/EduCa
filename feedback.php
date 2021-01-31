<?php
$con=new mysqli("localhost","root","","mini_project");
if(isset($_GET['id']))
{
$results = mysqli_query($con,"SELECT from contact where id ='$_GET[id]'");
}
?>

<html>
      <head>
            <title>Feedback</title>
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
                        <a href="admin.php" class="nav-link">Home</a>
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
        <!--End Navigation-->

<div class="design">
<form id="form1" name="form1" method="post" action="">
		  <table width="531" border="1" align="center">
		    <tr>
		      <th width="130" scope="col">Contact Id</th>
		      <th width="123" scope="col">Name</th>
			  <th width="138" scope="col"> Email</th>
		      <th width="138" scope="col"> Phone</th>
              <th width="138" scope="col"> Message</th>
<?php
$con=new mysqli("localhost","root","","mini_project");
$sql="select * from contact";
$res=mysqli_query($con,$sql) or die(mysql_error($con));
//$num=mysqli_num_rows($res);
while($arr=mysqli_fetch_array($res))
{
	echo "<tr>
	<td>$arr[id]&nbsp;</td><td>$arr[name]&nbsp;</td>
	<td>$arr[email]&nbsp;</td><td>$arr[phone]&nbsp;</td>
	</td><td>$arr[message]&nbsp;</td>";
}	

?>
</table>
</form>

</div>

</body>
</html>
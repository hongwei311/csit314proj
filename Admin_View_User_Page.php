<?php
include_once("UserController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>View User</title>
<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style>
	.table{
	width: 80%;
	margin: 0 0 0 50px;
	text-align:left;"
	cellspacing="0"
}
h1 {
	margin: 0 0 0 50px;
}
</style>
</head>
<body>
	
<br>
<h1 class="text-center">View User</h1>
<br>

<table class="table table-bordered table-striped">
		<thead>
			
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$validation = $UserControl->viewUser();
                    if($validation==true)
					{
						?>
						<tr>
						<th width="5%">UserId</th>
						<th>UserName</th>
						<th width="10%">UserProfile</th>
						</tr><?php
						if(sizeof($_SESSION['validation'])>20)
						{
						  $cutoff = 20;
						}
						else 
						 {
						  $cutoff=sizeof($_SESSION['validation']);
						 }
						for($i = sizeof($_SESSION['validation'])-1; $i >= (sizeof($_SESSION['validation'])-$cutoff); $i--) 
						{
							echo "<tr>";
							echo "<td>" . $_SESSION['validation'][$i]['UserId'] . "</td>";
							echo "<td>" . $_SESSION['validation'][$i]['UserName'] . "</td>";
							echo "<td>" . $_SESSION['validation'][$i]['UserProfile'] . "</td>";
							echo "</tr>";
						}
					}
					else echo '<script>alert("User not found!")</script>';
						

         ?>
		</tbody>
</table>
<br>
<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
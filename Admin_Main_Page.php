<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Main Page</title>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<style>

</style>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>
<div class="span2">
<p><a href="Admin_Add_User_Page.php"><button class="button navigate btn btn-primary btn-block">Add New User Accounts</button></p></a></p>

<p><a href="Admin_Search_User_Page.php"><button class="button navigate btn btn-primary btn-block">Search For User Accounts</button></a></p>

<p><a href="Admin_Update_User_Page.php"><button class="button navigate btn btn-primary btn-block">Update User Accounts</button></a></p>

<p><a href="Admin_View_User_Page.php"><button class="button navigate btn btn-primary btn-block">View User Accounts</button></a></p>

<p><a href="Admin_Add_User_Info_Page.php"><button class="button navigate btn btn-primary btn-block">Add New User Info</button></p></a></p>

<p><a href="Admin_Search_User_Info_Page.php"><button class="button navigate btn btn-primary btn-block">Search For User Info</button></p></a></p>

<p><a href="Admin_Update_User_Info_Page.php"><button class="button navigate btn btn-primary btn-block">Update User Info</button></p></a></p>

<p><a href="Admin_View_User_Info_Page.php"><button class="button navigate btn btn-primary btn-block">View User Info</button></p></a></p>

<p><a href="Admin_Dashboard_Page.php"><button class="button navigate btn btn-primary btn-block">View Full Details</button></p></a>
</div>
<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
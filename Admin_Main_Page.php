<?php
session_start();

?>
<!DOCTYPE html>
<meta charset="UTF-8>"
<html>
<head>
	<title>Admin Main Page</title>
	<link rel="stylesheet" href="stylesheet.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

</head>
<body>

<h1 class="text-center">Welcome, <?php echo $_SESSION['username']?>  </h1>
<div class="span2 text-center">
<a href="Admin_Add_User_Page.php"><button class="btn btn-primary btn-lg">Add New User Accounts</button></a> &nbsp; 

<a href="Admin_Add_User_Info_Page.php"><button class="btn btn-primary btn-lg">Add New User Info</button></a></p>

<a href="Admin_Search_User_Page.php"><button class="btn btn-primary btn-lg">Search For User Accounts</button></a> &nbsp; 

<a href="Admin_Search_User_Info_Page.php"><button class="btn btn-primary btn-lg">Search For User Info</button></a></p>

<a href="Admin_Update_User_Page.php"><button class="btn btn-primary btn-lg">Update User Accounts</button></a> &nbsp; 

<a href="Admin_Update_User_Info_Page.php"><button class="btn btn-primary btn-lg">Update User Info</button></a></p>

<a href="Admin_View_User_Page.php"><button class="btn btn-primary btn-lg">View User Accounts</button></a> &nbsp; 

<a href="Admin_View_User_Info_Page.php"><button class="btn btn-primary btn-lg">View User Info</button></a></p>

<p><a href="Update_Personal_User_Info.php"><button class="btn btn-primary btn-lg">Update Your Personal User Info</button></p></a>

<p><a href="GenerateUsers.php"><button class="btn btn-primary btn-lg">Generate User Accounts</button></p></a>

<p><a href="Admin_Dashboard_Page.php"><button class="btn btn-primary btn-lg">View Full Details</button></p></a>
</div>

<p><a href="Logout.php"><button class="btn btn-danger btn-lg" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Main Page</title>
	<link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>

<p><a href="Admin_Add_User_Page.php"><button class="button">Add New User Accounts</button></p></a></p>

<p><a href="Admin_Search_User_Page.php"><button class="button">Search For User Accounts</button></a></p>

<p><a href="Admin_Update_User_Page.php"><button class="button">Update User Accounts</button></a></p>

<p><a href="Admin_View_User_Page.php"><button class="button">View User Accounts</button></a></p>

<p><a href="Admin_Add_User_Info_Page.php"><button class="button">Add New User Info</button></p></a></p>

<p><a href="Admin_Search_User_Info_Page.php"><button class="button">Search For User Info</button></p></a></p>

<p><a href="Admin_Update_User_Info_Page.php"><button class="button">Update User Info</button></p></a></p>

<p><a href="Admin_View_User_Info_Page.php"><button class="button">View User Info</button></p></a></p>

<p><a href="Admin_Dashboard_Page.php"><button class="button">View Full Details</button></p></a>

<p><a href="Logout.php"><button class="button" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
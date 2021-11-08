<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Main Page</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>

<p><a href="Admin_Add_User_Page.php"><button class="button navigate">Add New User Accounts</button></p></a></p>

<p><a href="Admin_Search_User_Page.php"><button class="button navigate">Search For User Accounts</button></a></p>

<p><a href="Admin_Update_User_Page.php"><button class="button navigate">Update User Accounts</button></a></p>

<p><a href="Admin_View_User_Page.php"><button class="button navigate">View User Accounts</button></a></p>

<p><a href="Admin_Add_User_Info_Page.php"><button class="button navigate">Add New User Info</button></p></a></p>

<p><a href="Admin_Search_User_Info_Page.php"><button class="button navigate">Search For User Info</button></p></a></p>

<p><a href="Admin_Update_User_Info_Page.php"><button class="button navigate">Update User Info</button></p></a></p>

<p><a href="Admin_View_User_Info_Page.php"><button class="button navigate">View User Info</button></p></a></p>

<p><a href="Admin_Dashboard_Page.php"><button class="button navigate">View Full Details</button></p></a>

<p><a href="Logout.php"><button class="button Logout" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
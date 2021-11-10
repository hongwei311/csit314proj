<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Main Page</title>
	<link rel="stylesheet" href="stylesheet.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']?>  </h1>

<p><a href="Doctor_Add_Prescription_Page.php"><button class="button">Add new prescription</button></a></p>

<p><a href="Doctor_Search_Prescription_Page.php"><button class="button">Search for prescription</button></a></p>

<p><a href="Doctor_Update_Prescription_Page.php"><button class="button">Update prescriptions</button></a></p>

<p><a href="Doctor_View_Prescription_Page.php"><button class="button">View prescriptions</button></a></p>

<p><a href="Doctor_Generate_Token_Page.php"><button class="button">Generate Token</button></a></p>

<p><a href="Update_Personal_User_Info.php"><button class="button">Update Your Personal User Info</button></p></a>

<p><a href="Logout.php"><button class="button" style="float: right; margin:0 20px 0 0;">Logout</button></a></p>

</body>
</html>
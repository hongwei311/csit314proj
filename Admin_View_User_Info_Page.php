<?php
include_once("UserInfoController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>View User Info</title>
<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<h1>View User Info</h1>

<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th width="5%">User Id</th>
                <th width="10%">First Name</th>
				<th width="10%">Last Name</th>
                <th width="10%">Birth Date</th>
                <th width="10%">Gender Code</th>
                <th width="10%">Phone Number</th>
                <th>Email Address</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserInfoController();
					//send validation to login controller class
					$userinformation = $UserControl->viewUserInfo();
                    for($i = 0; $i < count($userinformation); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userinformation[$i]['UserId'] . "</td>";
                        echo "<td>" . $userinformation[$i]['FirstName'] . "</td>";
                        echo "<td>" . $userinformation[$i]['LastName'] . "</td>";
                        echo "<td>" . $userinformation[$i]['BirthDate'] . "</td>";
                        echo "<td>" . $userinformation[$i]['GenderCode'] . "</td>";
                        echo "<td>" . $userinformation[$i]['PhoneNumber'] . "</td>";
                        echo "<td>" . $userinformation[$i]['EmailAddress'] . "</td>";
                        echo "</tr>";
                      }
                    
         ?>
		</tbody>
</table>

<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
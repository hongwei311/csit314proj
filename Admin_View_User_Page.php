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
</head>
<body>
<h1 class="header">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
<h1>View User</h1>

<table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th width="5%">UserId</th>
				<th>UserName</th>
				<th width="10%">UserProfile</th>
			</tr>
		</thead>
		<tbody>
		<?php
                    // Attempt select query execution
					$UserControl = new UserControl();
					//send validation to login controller class
					$userdetails = $UserControl->viewUser();
                    for($i = 0; $i < count($userdetails); $i++) {
                        echo "<tr>";
                        echo "<td>" . $userdetails[$i]['UserId'] . "</td>";
                        echo "<td>" . $userdetails[$i]['UserName'] . "</td>";
                        echo "<td>" . $userdetails[$i]['UserProfile'] . "</td>";
                        echo "</tr>";
                      }

         ?>
		</tbody>
</table>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
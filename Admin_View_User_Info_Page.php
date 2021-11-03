<?php
include_once("UserInfoController.php");
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

<h1>View user</h1>

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
					$conn = mysqli_connect("localhost","root","","csit314");
                    $sql = "SELECT * FROM useraccount";
                    if($result = $conn->query($sql)){
                        if($result->num_rows > 0){
								while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['UserId'] . "</td>";
                                        echo "<td>" . $row['UserName'] . "</td>";
                                        echo "<td>" . $row['UserProfile'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                            // Free result set
                            $result->free();
                        } else{
                            echo "<label class='question-text'>No records were found.</label>";
                        }
                    } 
                    
         ?>
		</tbody>
</table>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
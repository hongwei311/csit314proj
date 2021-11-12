<?php
include_once("UserInfoController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Search User Info</title>
<link rel="stylesheet" href="stylesheet.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
      h1{
        margin: 0 0 0 50px;
      }
    .container{
      width:50%;
    }
    p{
      font-size:30px;
      text-align:center;
    }
    </style>
</head>
<body>
<br>
<h1 class="text-center">Search User Info</h1>


<!-- 				<label class="question-text">Search Category</label>
				<input class="input-field" name="category" type="text" autocomplete="off" placeholder="Enter Category" />
				<label></label>
				<label class="question-text">Search Brand</label>
				<input class="input-field" name="brand" type="text" autocomplete="off" placeholder="Enter Brand" />
				<label></label>
				<label class="question-text">Search Characteristics</label>
				<input class="input-field" name="characteristics" type="text" autocomplete="off" placeholder="Enter Characteristics" />
				<label></label>
				<label class="question-text">Search Status</label>
				<input class="input-field" name="status" type="statustext" autocomplete="off" placeholder="Enter Status" />
				<label></label>
				
				<input href="SearchFunction.php" name= "submit" type="submit" class="submit" value="Search"> -->


<div class="container">

<form id="AdminSearchUserInfoPage" method="POST" action="Admin_Search_User_Info_Page.php">
<div class="form-group">
  <label>Enter User ID: </label>
  <input type="text" class="form-control" id="UserId" name="UserId" required><br><br>
  <input type='hidden' class="form-control" name = 'action' value = 'SearchUserInfo'>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
</div>
</form>
</div>
<br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
        $UserInfoControl = new UserInfoController();
        $validation = $UserInfoControl->searchUserInfo($_POST['UserId']);
        $_SESSION['UserId']=$_POST['UserId'];
        
        $printresult = "";

        if($validation==true)
        {
            $UserId = $_SESSION['validation']["0"];
            $FirstName = $_SESSION['validation']["1"];
            $LastName = $_SESSION['validation']["2"];
            $BirthDate = $_SESSION['validation']["3"];
            $GenderCode = $_SESSION['validation']["4"];
            $PhoneNumber = $_SESSION['validation']["5"];
            $EmailAddress = $_SESSION['validation']["6"];
            $printresult = "";
            unset($_SESSION['UserId']);
            echo "
            <div class='container'>
            <form>
            <div class='form-group'>

            <label>User ID : $UserId</label><br><br> 
            <label>First Name : $FirstName</label><br><br> 
            <label>Last Name : $LastName</label><br><br> 
            <label>Birth Date (YYYY-MM-DD) : $BirthDate</label><br><br> 
            <label>Gender Code (M/F): $GenderCode</label><br><br> 
            <label>Phone Number : $PhoneNumber</label><br><br> 
            <label>Email Address: $EmailAddress</label><br><br> 
            
            <label>$printresult</label>
            </div>
            <br><br>
            </form>
            </div>";
        }
        elseif($validation == false)
        {
          echo '<script>alert("User Info Not Found")</script>';
        }
}

?>
        


<p><a href="Admin_Main_Page.php"><button class="btn btn-primary btn-lg" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
<?php
include_once("UserController.php");
session_start();
// $userid = $username = $password = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Search User</title>
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

<h1 class="text-center">Search User</h1>
<br>

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

<form id="AdminSearchUserPage" method="POST" action="Admin_Search_User_Page.php">
<div class="form-group">
  <label>Enter User ID: </label>
  <input type="text" class="form-control" id="UserId" name="UserId" placeholder="User ID"><br><br>

  <input type='hidden' name = 'action' value = 'SearchUser'>
  <button class="btn btn-primary btn-lg" type="submit" value="Search">Search</button>
</div>
</form>
</div>

<br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
    
        $UserControl = new UserControl();
        $validation = $UserControl->searchUser($_POST['UserId']);
        $_SESSION['UserId']=$_POST['UserId'];

        if($validation==true)
        {
            $UserId = $_SESSION['validation']["0"];
            $username = $_SESSION['validation']["1"];
            $password = $_SESSION['validation']["2"];
            $userprofile = $_SESSION['validation']["3"];
            $printresult = "";
            unset($_SESSION['UserId']);
            echo "
            <div class='container'>
            <form>
            <div class='form-group'>
            <label>User ID : $UserId</label><br><br> 
            <label>Username : $username</label><br><br>
            <label>UserProfile :$userprofile</label><br><br>
            <label>$printresult</label><br><br>
            </div>
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
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
</head>
<body>

<h1>Search user</h1>


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


<form id="AdminSearchUserPage" method="POST" action="Admin_Search_User_Page.php">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="userid"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUser'>
  <button class="button" type="submit" value="Search">Search</button>
</form><br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
    
        $UserControl = new UserControl();
        $userdetails = $UserControl->searchUser($_POST['userid']);
        $_SESSION['userid']=$_POST['userid'];
        $userid = $userdetails["0"];
        $username = $userdetails["1"];
        $password = $userdetails["2"];
        $userprofile = $userdetails["3"];
        $printresult = "";

        if($userdetails==true)
        {
            $printresult = "User Searched successfully";
            unset($_SESSION['userid']);
        }
        elseif($userdetails == false)
        {
            $printresult = "User not found";
        }
}
?>
        <form id="AdminSearchUserPage">
            <label>User ID : <?php echo $userid;?></label><br><br> 
            <label>Username : <?php echo $username;?></label><br><br>
            <label>Password : <?php echo $password;?></label><br><br>
            <label>UserProfile : <?php echo $userprofile;?></label><br><br>
            <label><?php echo $printresult;?></label><br><br>
        </form>
        
<?php

?>

<p><a href="Admin_Main_Page.php"><button class="button" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
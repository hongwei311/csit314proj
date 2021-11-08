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
</head>
<body>

<h1>Search User Info</h1>


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


<form id="AdminSearchUserInfoPage" method="POST" action="Admin_Search_User_Info_Page.php">
  <label>Enter User ID: </label>
  <input type="text" id="UserId" name="UserId"><br><br>
  <input type='hidden' name = 'action' value = 'SearchUserInfo'>
  <button class="button" type="submit" value="Search">Search</button>
</form><br><br> 


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{        
    
        $UserInfoControl = new UserInfoController();
        $userinformation = $UserInfoControl->searchUserInfo($_POST['UserId']);
        $_SESSION['UserId']=$_POST['UserId'];
        $UserId = $userinformation["0"];
        $FirstName = $userinformation["1"];
        $LastName = $userinformation["2"];
        $BirthDate = $userinformation["3"];
        $GenderCode = $userinformation["4"];
        $PhoneNumber = $userinformation["5"];
        $EmailAddress = $userinformation["6"];
        $printresult = "";

        if($userinformation==true)
        {
            $printresult = "";
            unset($_SESSION['UserId']);
        }
        elseif($userinformation == false)
        {
            $printresult = "User not found";
        }
        echo "<form>
            <label>User ID : $UserId</label><br><br> 
            <label>First Name : $FirstName</label><br><br> 
            <label>Last Name : $LastName</label><br><br> 
            <label>Birth Date (YYYY-MM-DD) : $BirthDate</label><br><br> 
            <label>Gender Code (M/F): $GenderCode</label><br><br> 
            <label>Phone Number : $PhoneNumber</label><br><br> 
            <label>Email Address: $EmailAddress</label><br><br> 
            
            <label>$printresult</label><br><br>
            </form>";
}

?>
        


<p><a href="Admin_Main_Page.php"><button class="button navigate" style="float: right; margin:0 20px 0 0;">Back</button></a></p>
</body>
</html>
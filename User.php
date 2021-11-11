<?php


class User{
    private $UserId;
    private $Username;
    private $Password;
    private $UserProfile;

	 
	
	
	function setUserId($UserId){
        $this -> UserId = $UserId;
    }

    function getUserId(){
        return $this -> UserId;
    }
	
    function setUsername($Username){
        $this -> Username = $Username;
    }

    function getUsername(){
        return $this -> Username;
    }

    function setPassword($Password){
        $this -> Password = $Password;
    }

    function getPassword(){
        return $this -> Password;
    }

    function setUserProfile($UserProfile){
        $this -> UserProfile = $UserProfile;
    }

    function getUserProfile(){
        return $this -> UserProfile;
    }

    function validateLogin($Username, $Password)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where UserName = '" . $Username . "'  ";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            $_SESSION['errmsg'] = "Unable to login. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn) . "</p>";
			$validation = array("","","","");
            return $validation;
		}
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $validation = array($Row["UserId"],$Row["UserName"],$Row["Password"],$Row["UserProfile"]);
            $Password_Hash = $Row["Password"];
            if(password_verify($Password,$Password_Hash)){
                return $validation;
            }
            
        }
    }

    function add($Username, $Password, $UserProfile)
    {       
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $Password_Hash = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $TableName (UserName, Password, UserProfile)" .
        " VALUES ('$Username', '$Password_Hash', '$UserProfile')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            $_SESSION['errmsg'] = "Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            
            $conn = mysqli_connect("localhost","root","","csit314");
            
            //select all details of newly created account based on entered username
            $getuserID = "SELECT * FROM $TableName WHERE UserName='$Username'";
            
            //run query
            $run = @mysqli_query($conn,$getuserID);
            
            //get userid
            $getrow=$run->fetch_assoc();
            $UserId = $getrow['UserId'];
            
            //access userprofile table
            $insertUserProfile = "INSERT INTO $UserProfile (UserId)" .
            " VALUES ('$UserId')";
            $execute = @mysqli_query($conn,$insertUserProfile);

            //access userinfo table
            $Table = "userinfo";
            $insertUserInfo = "INSERT INTO $Table (UserId)" .
            " VALUES ('$UserId')";
            $executeUserInfo = @mysqli_query($conn,$insertUserInfo);
            return $validation = true;
        } 
     }
        
    
    function search($UserId)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "SELECT * FROM $TableName" . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $userdetails = array($Row["UserId"],$Row["UserName"],$Row["Password"],$Row["UserProfile"]);
            if($Row["UserId"]!=""){
                return $userdetails;
            }
            else{
                return $userdetails = false;
            }
        }
    }

    function update($UserId, $Username, $Password, $UserProfile)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $Password_Hash = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "UPDATE $TableName 
                SET UserName = '$Username', Password = '$Password_Hash', UserProfile = '$UserProfile' 
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
            
        }
        else
        {
            // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);
            return $validation = true;
        }
    }
	
	function view()
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            //create array
            $userdetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($userdetails))
                {
                    //add in the first array row
                    array_push($userdetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($userdetails,$Row);
            }
            
            return $userdetails;
        }
	}

    function retrieveUserProfileID($UserId, $UserProfile)
    {
        $TableName = $UserProfile;
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName" . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            //create array
            $userdetails=array();
            //loop the array
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                //check if array is empty
                if(empty($userdetails))
                {
                    //add in the first array row
                    array_push($userdetails,$Row);
                }
                //if array is not empty push new row into last position
                else array_push($userdetails,$Row);
            }
            
            return $userdetails;
        }
    }
	
	function viewFullAdminDetails()
	{
			
			$conn = mysqli_connect("localhost","root","","csit314");
			$sql = "SELECT * FROM fulladmin";
			$qRes = mysqli_query($conn, $sql);
			
			if($qRes === FALSE)
			{
				echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
				return $userdetails = false;
			}
			else
			{   
                $userdetails=array();
                while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
                {
                    if(empty($userdetails))
                    {
                        array_push($userdetails,$Row);
                    }
                    else array_push($userdetails,$Row);
                }
            
            return $userdetails;
				
			}
			
	}
    function viewFullDoctorDetails()
	{
			
			$conn = mysqli_connect("localhost","root","","csit314");

			$sql = "SELECT * FROM fulldoctor";
			$qRes = mysqli_query($conn, $sql);
			
			if($qRes === FALSE)
			{
				echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
				return $userdetails = false;
			}
			else
			{   
                $userdetails=array();
                while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
                {
                    if(empty($userdetails))
                    {
                        array_push($userdetails,$Row);
                    }
                    else array_push($userdetails,$Row);
                }
            
            return $userdetails;
				
			}
			
	}
    function viewFullPatientDetails()
	{
			
			$conn = mysqli_connect("localhost","root","","csit314");

			$sql = "SELECT * FROM fullpatient";
			$qRes = mysqli_query($conn, $sql);
			
			if($qRes === FALSE)
			{
				echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
				return $userdetails = false;
			}
			else
			{   
                $userdetails=array();
                while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
                {
                    if(empty($userdetails))
                    {
                        array_push($userdetails,$Row);
                    }
                    else array_push($userdetails,$Row);
                }
            
            return $userdetails;
				
			}
			
	}
    function viewFullPharmacistDetails()
	{
			
			$conn = mysqli_connect("localhost","root","","csit314");

			$sql = "SELECT * FROM fullpharmacist";
			$qRes = mysqli_query($conn, $sql);
			
			if($qRes === FALSE)
			{
				echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
				return $userdetails = false;
			}
			else
			{   
                $userdetails=array();
                while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
                {
                    if(empty($userdetails))
                    {
                        array_push($userdetails,$Row);
                    }
                    else array_push($userdetails,$Row);
                }
            
            return $userdetails;
				
			}
			
	}
}
	
	
	

/* class Doctor extends User

{
	public function approveAcc($userid)
	{
		$newdb = new db();

		$newdb2 = $newdb->connect();

		$role = 2;
		$query = $newdb2->prepare("update role set roleType=? WHERE userID=?") ;
		$query->bind_param("ii",$role,$userid);
		
		if($query->execute())
		{
			echo "<script>alert('Account has been approved!') </script>";

			echo '<meta http-equiv="Refresh" content="2; url=adminapprove.php">';
				//exit();
		}
		else
		{

			echo 'failed';
		}
	}
	
	
} */



?>
